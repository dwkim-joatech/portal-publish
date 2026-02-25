# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

조아테크 포털 — a Figma-to-code publishing project for a gas industry portal app (mobile-first, 360px wide). The stack is **Laravel Blade + Tailwind CSS + Vite**, with no Vue and no jQuery.

## Development Commands

```bash
# Install dependencies
npm install

# Run both servers simultaneously (two terminals required)
npm run dev                       # Vite dev server (port 3000) — compiles CSS/JS
php -S localhost:8000 server.php  # PHP local server — renders Blade templates

# Production build
npm run build
```

Access the app at `http://localhost:8000`. The Vite dev server at port 3000 is only for hot-reloading assets — it does not render pages itself.

## Architecture

### Request Flow
`server.php` is a custom PHP router that:
1. Receives a request URL (e.g., `/main`)
2. Loads `src/pages/{pageName}.blade.php` as page content
3. Wraps it in `src/layouts/app.blade.php` (injects into `{!! $slot !!}`)
4. Recursively resolves `<x-component-name />` tags by loading `src/components/{PascalCase}.blade.php`
5. Resolves `{{ asset('path') }}` helpers to root-relative paths

### Directory Structure
- `src/layouts/app.blade.php` — Master layout: HTML shell, Vite script tags, bottom navigation wrapper
- `src/pages/` — Full page content (injected into layout's `$slot`)
- `src/components/` — Reusable Blade partials, referenced as `<x-component-name />`
- `src/main.js` — Vite entry point (currently only imports `style.css`)
- `src/style.css` — Global styles: Tailwind directives + custom utilities (`.hide-scrollbar`, mask helpers)
- `public/images/` — All static image assets

### Blade Component Convention
Components are referenced in kebab-case XML tags and mapped to PascalCase filenames:
- `<x-status-bar />` → `src/components/StatusBar.blade.php`
- `<x-gnb-main />` → `src/components/GnbMain.blade.php`
- `<x-navigation-item icon="..." label="..." />` → props become `{{ $icon }}`, `{{ $label }}`

Nested components are resolved recursively by `server.php`.

### Tailwind Configuration
Tailwind scans `*.php`, `*.blade.php`, and JS files. Custom tokens:
- `primary`: `#2074e2`, `success`: `#39bd28`
- Fonts: `font-sans` (Inter + Noto Sans KR), `font-roboto` (Roboto)

## Key Rules

1. **No Vue** — All markup is Laravel Blade (`.blade.php`). Do not use `.vue` files.
2. **No jQuery** — Use Vanilla JS only.
3. **Images** use `{{ asset('images/filename.ext') }}` helper, served from `public/images/`.
4. **Layout Vite tags** are hardcoded to `http://localhost:3000` in `src/layouts/app.blade.php` for dev. This is intentional for the local PHP server setup.
5. **Mobile-first** — Max width 360px, designed as a mobile app frame.
