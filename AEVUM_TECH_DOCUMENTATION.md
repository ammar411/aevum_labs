# Aevum Labs Platform

## Overview

Aevum Labs is a Laravel 12 company website for web and SaaS development, AI workflows, enterprise systems, and managed technical operations. The Crimson Onyx visual system combines near-black surfaces, restrained crimson accents, responsive layouts, and lightweight vanilla JavaScript.

## Pages and routes

| Route | Purpose |
| --- | --- |
| `GET /` | Company home, four service pillars, architecture overview, engagement models, and audit request form |
| `GET /modules` | AI workflow terminal simulation and human-plus-automation operations overview |
| `GET /solutions/{service}` | Service detail page for `web-saas`, `ai-workflows`, `enterprise-erp`, or `managed-operations` |
| `POST /audit-request` | Validates and stores a technical audit request; limited to five submissions per minute |

Unknown service keys return 404. The terminal is a representative UI simulation, not a connection to a live customer system. The header status badge is a display element, not a monitored status endpoint.

## Audit request handling

The home page form is protected by Laravel's CSRF middleware and validates name, business email, company, tech stack, primary need, and estimated budget. Valid requests are stored in the `audit_requests` table by the `AuditRequest` model. Validation errors are returned to the form; successful submissions redirect back to the form with a confirmation message.

Run database migrations before using the form:

```sh
php artisan migrate
```

Audit requests contain contact details and should be handled according to the organization's retention and privacy policies. Configure backups and database access controls for the deployment environment.

## Frontend structure

- `resources/views/layouts/app.blade.php` — shared header, responsive navigation, audit dialog, and four-column footer.
- `resources/views/components/app-layout.blade.php` — Blade component wrapper for the shared layout.
- `resources/views/index.blade.php` — home page and audit form.
- `resources/views/modules.blade.php` — AI & terminal and managed-operations page.
- `resources/views/solutions/show.blade.php` — dynamic service detail template.
- `resources/css/app.css` — Crimson Onyx tokens, responsive styles, and motion preferences.
- `resources/js/app.js` — mobile navigation, scroll progress, and audit dialog behavior.

Tailwind CSS v4 is compiled through Vite. External fonts are loaded from Google Fonts; the application does not depend on third-party animation libraries.

## Local development

Requirements: PHP 8.2+, Composer, and Node.js.

```sh
composer install
npm install
php artisan migrate
npm run dev
```

In another terminal, run the Laravel app:

```sh
php artisan serve
```

Build production assets with `npm run build`. Run the test suite with `php artisan test`.

## Design and accessibility

- Crimson is used as an accent against dark, high-contrast surfaces.
- Navigation and forms support keyboard focus, labels, and validation feedback.
- The mobile menu communicates its expanded state through `aria-expanded`.
- Motion is reduced when the user's operating-system preference requests reduced motion.
- Client portal access is a signpost for existing clients; no authentication portal is implemented in this public site.

## Future enhancements

- Integration with Spline 3D API for live 3D objects
- Lottie animations for additional visual polish
- Dark mode toggle
- Multi-language support (i18n)
- Advanced analytics dashboard
- Blog integration for case studies
- Search functionality
- Privacy and terms pages
- Client portal authentication and workspace
