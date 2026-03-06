<?php
/**
 * Static HTML generator for GitHub Pages deployment
 * Renders Blade templates to static HTML using Vite-built CSS/JS assets
 */

$base = '/portal-publish';

function asset($path) {
    global $base;
    return $base . '/' . ltrim($path, '/');
}

function renderBlade($content) {
    // 0. Strip Blade comments {{-- ... --}}
    $content = preg_replace('/\{\{--.*?--\}\}/s', '', $content);

    // 1. Parse {{ asset('...') }} helper
    $content = preg_replace_callback('/\{\{\s*asset\([\'"](.*?)[\'"]\)\s*\}\}/', function($matches) {
        return asset($matches[1]);
    }, $content);

    // 2. Parse <x-component-name attributes /> tags
    $content = preg_replace_callback('/<x-([a-zA-Z0-9\-]+)(.*?)\/>/s', function($matches) {
        $componentName = $matches[1];
        $attributesString = trim($matches[2] ?? '');

        $attributes = [];
        if (preg_match_all('/([a-zA-Z0-9\-:]+)=["\'](.*?)["\']/', $attributesString, $attrMatches, PREG_SET_ORDER)) {
            foreach ($attrMatches as $m) {
                $key = ltrim($m[1], ':');
                $attributes[$key] = $m[2];
            }
        }

        $parts = explode('-', $componentName);
        $className = implode('', array_map('ucfirst', $parts));

        $filePath = __DIR__ . '/src/components/' . $className . '.blade.php';
        if (!file_exists($filePath)) {
            return "<div class=\"border-2 border-dashed border-red-500 p-2 my-2 text-center text-red-500 bg-red-50\">[Missing Blade Component: {$className}.blade.php]</div>";
        }

        $componentContent = file_get_contents($filePath);

        foreach ($attributes as $key => $val) {
            $componentContent = preg_replace('/\{\{\s*\$' . preg_quote($key, '/') . '\s*\}\}/', $val, $componentContent);
            $componentContent = preg_replace('/\{!!\s*\$' . preg_quote($key, '/') . '\s*!!\}/', $val, $componentContent);
        }

        return $componentContent;
    }, $content);

    // Recursively resolve nested components
    if (preg_match('/<x-[a-zA-Z0-9\-]+/', $content)) {
        return renderBlade($content);
    }

    return $content;
}

// Find built CSS and JS asset filenames from dist/assets/
$assetsDir = __DIR__ . '/dist/assets';
if (!is_dir($assetsDir)) {
    echo "Error: dist/assets/ not found. Run 'npm run build' first.\n";
    exit(1);
}

$cssFile = '';
$jsFile = '';
foreach (scandir($assetsDir) as $file) {
    if (str_ends_with($file, '.css')) $cssFile = $file;
    if (str_ends_with($file, '.js') && !str_ends_with($file, '.js.map')) $jsFile = $file;
}

if (!$cssFile || !$jsFile) {
    echo "Error: Built CSS/JS assets not found in dist/assets/\n";
    exit(1);
}

echo "Assets found — CSS: $cssFile | JS: $jsFile\n";

// Replace dev Vite script tags with production asset links
$layoutTemplate = file_get_contents(__DIR__ . '/src/layouts/app.blade.php');

$productionHead =
    '    <link rel="stylesheet" crossorigin href="' . $base . '/assets/' . $cssFile . '">' . "\n" .
    '    <script type="module" crossorigin src="' . $base . '/assets/' . $jsFile . '"></script>';

$layout = preg_replace(
    '/<script[^>]*src="http:\/\/localhost:3000[^"]*"[^>]*><\/script>\n?/',
    '',
    $layoutTemplate
);
$layout = str_replace('</head>', $productionHead . "\n</head>", $layout);

// Page name → output path mapping
$pages = [
    'main'              => 'index.html',
    'sub-test'          => 'sub-test.html',
    'junggo-list'       => 'junggo-list.html',
    'junggo-detail'     => 'junggo-detail.html',
    'junggo-write'      => 'junggo-write.html',
    'invest-list'       => 'invest-list.html',
    'invest-expect'     => 'invest-expect.html',
    'invest-result'     => 'invest-result.html',
    'simple-pay'        => 'simple-pay.html',
    'company-select'    => 'company-select.html',
    'card-payment'      => 'card-payment.html',
    'invite-code'       => 'invite-code.html',
    'shoppingmall-list' => 'shoppingmall-list.html',
    'shoppingmall-detail' => 'shoppingmall-detail.html',
    'basket'            => 'basket.html',
    'buy'               => 'buy.html',
    'delivery-select'   => 'delivery-select.html',
    'delivery-reg'      => 'delivery-reg.html',
    'order-info'        => 'order-info.html',
    'product-inquiry'   => 'product-inquiry.html',
    'mypage'            => 'mypage.html',
    'order-list'        => 'order-list.html',
    'inspection-list'   => 'inspection-list.html',
    'bulk-check-list'   => 'bulk-check-list.html',
    'bulk-check-detail' => 'bulk-check-detail.html',
    'my-junggo-list'       => 'my-junggo-list.html',
    'simple-card-payment'  => 'simple-card-payment.html',
    'facility-list'     => 'facility-list.html',
    'debt-list'         => 'debt-list.html',
    'inquiry-list'      => 'inquiry-list.html',
    'member-info'       => 'member-info.html',
    'delivery-address'  => 'delivery-address.html',
    'favorite-list'     => 'favorite-list.html',
    'favorite-write'    => 'favorite-write.html',
];

foreach ($pages as $pageName => $outputPath) {
    $pagePath = __DIR__ . '/src/pages/' . $pageName . '.blade.php';
    if (!file_exists($pagePath)) {
        $pagePath = __DIR__ . '/src/pages/' . $pageName . '.php';
    }
    if (!file_exists($pagePath)) {
        echo "Warning: Page not found — $pageName.blade.php or $pageName.php\n";
        continue;
    }

    $pageContent = file_get_contents($pagePath);
    $fullContent = str_replace('{!! $slot !!}', $pageContent, $layout);
    $fullContent = str_replace("{{ \$title ?? '포털' }}", '포털', $fullContent);

    $rendered = renderBlade($fullContent);

    // Fix hardcoded /images/ paths not processed by asset() helper
    $rendered = preg_replace('#(src|href)="/images/#', '$1="' . $base . '/images/', $rendered);

    // Fix any remaining absolute paths not using asset() helper (e.g. href="/page", href="/")
    $rendered = preg_replace('#(href|src)="(/(?!' . ltrim($base, '/') . '))#', '$1="' . $base . '$2', $rendered);

    $outputFile = __DIR__ . '/dist/' . $outputPath;
    $outputDir = dirname($outputFile);
    if (!is_dir($outputDir)) {
        mkdir($outputDir, 0777, true);
    }

    file_put_contents($outputFile, $rendered);
    echo "Generated: dist/$outputPath\n";
}

echo "Static build complete.\n";
