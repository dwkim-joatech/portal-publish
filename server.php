<?php
/**
 * Simple PHP script to render pseudo-blade templates for testing
 */

$requestUri = $_SERVER['REQUEST_URI'];
$filePath = __DIR__ . $requestUri;
$publicFilePath = __DIR__ . '/public' . $requestUri;

// If it's an existing file in root
if (is_file($filePath) && file_exists($filePath)) {
    return false;
}

// If it's an existing file in public folder (Vite behavior)
if (is_file($publicFilePath) && file_exists($publicFilePath)) {
    // Serve file with correct mime type if possible, or just readfile
    $mime = mime_content_type($publicFilePath);
    header("Content-Type: $mime");
    readfile($publicFilePath);
    return;
}

// API or specific route ignoring logic if needed

// Function to simulate Laravel's asset() helper
function asset($path) {
    return '/' . ltrim($path, '/');
}

// Function to recursively render a blade component
function renderBlade($content) {
    // 0. Strip Blade comments {{-- ... --}}
    $content = preg_replace('/\{\{--.*?--\}\}/s', '', $content);

    // 1. Parse asset() helper
    $content = preg_replace_callback('/\{\{\s*asset\([\'"](.*?)[\'"]\)\s*\}\}/', function($matches) {
        return asset($matches[1]);
    }, $content);

    // 2. Parse <x-component-name attributes /> tags
    $content = preg_replace_callback('/<x-([a-zA-Z0-9\-]+)(.*?)\/>/s', function($matches) {
        $componentName = $matches[1];
        $attributesString = trim($matches[2] ?? '');
        
        // Parse attributes
        $attributes = [];
        if (preg_match_all('/([a-zA-Z0-9\-:]+)=["\'](.*?)["\']/', $attributesString, $attrMatches, PREG_SET_ORDER)) {
            foreach ($attrMatches as $m) {
                // remove dynamic vue colons if present, and resolve blade echoes if already evaluated
                $key = ltrim($m[1], ':');
                $attributes[$key] = $m[2];
            }
        }
        
        // Convert kebab-case to PascalCase
        $parts = explode('-', $componentName);
        $className = '';
        foreach($parts as $part) {
            $className .= ucfirst(strtolower($part));
        }
        
        $filePath = __DIR__ . '/src/components/' . $className . '.blade.php';
        if (!file_exists($filePath)) {
            return "<div class=\"border-2 border-dashed border-red-500 p-2 my-2 text-center text-red-500 bg-red-50\">[Missing Blade Component: {$className}.blade.php]</div>";
        }
        
        $componentContent = file_get_contents($filePath);
        
        // Basic Prop Replacement
        foreach ($attributes as $key => $val) {
            $componentContent = preg_replace('/\{\{\s*\$' . preg_quote($key, '/') . '\s*\}\}/', $val, $componentContent);
            $componentContent = preg_replace('/\{!!\s*\$' . preg_quote($key, '/') . '\s*!!\}/', $val, $componentContent);
        }

        // Remove unpassed props (optional but good for cleanup)
        // $componentContent = preg_replace('/\{\{\s*\$[a-zA-Z0-9_]+\s*\}\}/', '', $componentContent);
        
        return $componentContent;
    }, $content);

    // Run regex again to ensure nested components are caught
    if (preg_match('/<x-[a-zA-Z0-9\-]+/', $content)) {
        return renderBlade($content);
    }
    
    return $content;
}

// 3. Simple Router: URL matching
$pageName = ltrim($requestUri, '/');
if (empty($pageName) || $pageName === 'index.html') {
    $pageName = 'main'; // default
}

$pagePath = __DIR__ . '/src/pages/' . $pageName . '.blade.php';

if (!file_exists($pagePath)) {
    http_response_code(404);
    echo "<h1>404 Not Found: {$pageName}</h1>";
    exit;
}

// 4. Load page content and wrap it in layout
$pageContent = file_get_contents($pagePath);
$layoutContent = file_get_contents(__DIR__ . '/src/layouts/app.blade.php');

// Simple title extraction if set in page (e.g., {{ $title = '서브페이지' }})
$title = '포털';

// Inject page content into layout's slot
$fullBladeContent = str_replace('{!! $slot !!}', $pageContent, $layoutContent);
$fullBladeContent = str_replace('{{ $title ?? \'포털\' }}', $title, $fullBladeContent);

// 5. Render components and echo
echo renderBlade($fullBladeContent);
