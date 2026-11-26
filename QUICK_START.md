#!/bin/bash
# AEVUM TECH - Quick Start Guide
# This file helps you understand how to run the project

## PREREQUISITES
# - PHP 8.2+
# - Node.js 18+
# - Composer

## GETTING STARTED

# 1. Navigate to project directory
cd "e:\Aevum Labs\Website\AevumLabs-Web"

# 2. FIRST TIME SETUP (if not done already)
# ==========================================

# Install Composer dependencies
composer install

# Install Node dependencies  
npm install

# Copy environment file
copy .env.example .env

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate --force

# ==========================================
# 3. START DEVELOPMENT SERVERS
# ==========================================

# Open TWO terminal windows/tabs:

# TERMINAL 1 - Laravel Server (port 8000)
# =========================================
cd "e:\Aevum Labs\Website\AevumLabs-Web"
php artisan serve --host=127.0.0.1 --port=8000

# TERMINAL 2 - Vite Dev Server (port 5173)
# ==========================================
cd "e:\Aevum Labs\Website\AevumLabs-Web"
npm run dev

# ==========================================
# 4. OPEN IN BROWSER
# ==========================================

# Main Website
http://127.0.0.1:8000

# Modules Page
http://127.0.0.1:8000/modules

# ==========================================
# AVAILABLE COMMANDS
# ==========================================

# Development build (live reload)
npm run dev

# Production build
npm run build

# Run tests
php artisan test

# Clear caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Generate production assets (if npm run build doesn't work)
npm run prod

# ==========================================
# TROUBLESHOOTING
# ==========================================

# If you get "vite not found" error:
#   → Run: npm install

# If you get database errors:
#   → Run: php artisan migrate --force

# If npm packages won't install:
#   → Delete node_modules and package-lock.json
#   → Run: npm install again

# If Laravel won't start:
#   → Run: php artisan key:generate
#   → Run: php artisan migrate --force

# ==========================================
# PROJECT STRUCTURE
# ==========================================

# Key Files to Edit:
# - resources/views/index.blade.php          (Home page content)
# - resources/views/modules.blade.php        (Modules page)
# - resources/views/layouts/app.blade.php    (Master layout)
# - resources/css/app.css                    (Styles & animations)
# - resources/js/app.js                      (JavaScript logic)
# - routes/web.php                           (URL routes)

# ==========================================
# FEATURES
# ==========================================

# ✨ Implemented:
# - Custom mouse cursor with glow effects
# - Floating navbar that shrinks on scroll
# - Mesh gradient background with parallax
# - Split-text hero animations
# - 3D Spline embed placeholder
# - Tilt.js 3D card effects
# - Scroll-progress timeline
# - Terminal UI simulation
# - Horizontal scroll carousel
# - Feature reveal side panel
# - AOS scroll animations
# - GSAP timeline effects
# - Responsive glassmorphism design

# ==========================================
# CUSTOMIZATION
# ==========================================

# To change colors:
#   Edit: resources/css/app.css
#   Look for: @theme section

# To adjust animations:
#   Edit: resources/css/app.css
#   Look for: @keyframes section

# To add new pages:
#   1. Create: resources/views/your-page.blade.php
#   2. Add route: routes/web.php
#   3. Use layout: <x-app-layout>

# ==========================================
# PRODUCTION DEPLOYMENT
# ==========================================

# Build for production:
npm run build

# Generate Laravel cache:
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Serve from public directory (configure your web server)

# ==========================================
# DOCUMENTATION
# ==========================================

# Full documentation available in:
AEVUM_TECH_DOCUMENTATION.md

# This file contains:
# - Complete feature list
# - Animation guide
# - Customization examples
# - Technical specifications
# - Performance metrics

# ==================================================
# 🚀 YOU'RE ALL SET!
# ==================================================
# Visit http://127.0.0.1:8000 to see your site
# Happy coding! ✨
