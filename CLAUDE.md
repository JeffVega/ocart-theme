# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What This Is

This is **ocart-theme**, the custom WordPress theme for ocarrested.com. It is built on [Sage](https://roots.io/sage/) — a WordPress starter theme that combines:
- **Laravel Blade** templating (via Roots Acorn)
- **Tailwind CSS v4** (via `@tailwindcss/vite`)
- **Vite** for asset bundling

The site connects people arrested in Orange County, CA with lawyers (lead generation).

## Commands

```bash
# Front-end development (hot module reload)
npm run dev

# Production build
npm run build

# PHP code style (Laravel Pint)
./vendor/bin/pint

# Install PHP dependencies
composer install

# Install JS dependencies
npm install
```

> `APP_URL` defaults to `http://example.test` in `vite.config.js`. Override it in your environment if needed.

## Architecture

### Blade + Acorn (the Laravel layer)

`functions.php` boots Roots Acorn, which provides Laravel's IoC container and service providers inside WordPress. It auto-loads `app/setup.php` and `app/filters.php`.

**View Composers** (`app/View/Composers/`) inject PHP data into Blade views automatically — no manual `compact()` needed:
- `App.php` — applies to all views (`'*'`); provides `$siteName`
- `Post.php` — applies to `partials.content*` and `partials.page-header`; provides `$title` and `$pagination`
- `Comments.php` — handles comment partials

To pass data to a specific view, create (or update) a Composer whose `$views` array matches the view name (dot-notation, e.g. `'sections.header'`).

### Template Hierarchy

Blade templates live in `resources/views/` and map to WordPress's template hierarchy:

| WordPress template | Blade file |
|---|---|
| `page.php` | `views/page.blade.php` |
| `single.php` | `views/single.blade.php` |
| `index.php` | `views/index.blade.php` |
| Custom page templates | `views/template-*.blade.php` |

All templates extend `layouts/app.blade.php`, which wraps content in `sections/header` and `sections/footer` and enqueues assets via `@vite`.

Reusable partials live in `resources/views/partials/`. Structural sections (header, footer, sidebar) live in `resources/views/sections/`.

### CSS (Tailwind v4)

`resources/css/app.css` uses Tailwind v4's `@import "tailwindcss"` syntax (no `tailwind.config.js` file). Content sources are declared with `@source` directives pointing at `app/**/*.php` and `resources/**/*.blade.php`.

**Theme tokens** (`theme.json`) are processed by the `wordpressThemeJson` Vite plugin, which merges Tailwind's color/font/spacing scales into the WordPress block editor's theme.json at build time. The built artifact ends up at `public/build/assets/theme.json`.

The `editor.css` / `editor.js` pair targets the Gutenberg block editor only and is injected via `admin_head`.

### Vite Build

`vite.config.js` uses three plugins:
1. `@tailwindcss/vite` — processes Tailwind v4
2. `laravel-vite-plugin` — handles manifest + HMR integration with WordPress
3. `@roots/vite-plugin` (`wordpressPlugin` + `wordpressThemeJson`) — generates the WP-compatible theme.json and handles asset fingerprinting

Build output goes to `public/build/`.

### PHP Namespace

All PHP classes use the `App\` namespace (PSR-4, mapped to `app/`). The `ThemeServiceProvider` (in `app/Providers/`) extends Sage's `SageServiceProvider` and is the extension point for binding custom services.
