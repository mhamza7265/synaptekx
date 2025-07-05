# Synaptekx Business Website

A responsive and feature-rich business website for **Synaptekx**, designed and developed using Laravel. It includes a public-facing frontend and a full-featured CMS (Content Management System) for dynamic content management.

## 🌐 Live Site

Visit the website here: [https://www.synaptekx.com](https://www.synaptekx.com)

## 🚀 Features

### Frontend
- Fully responsive design
- Scroll-based animations for interactive user experience
- Clean, modern layout with a focus on performance and usability
- SEO-optimized structure

### Pages
- Home
- About Us
- Services (dynamic – can be added or removed via admin panel)
- Partners
- Contact Us
- Blog (with individual post view)

### Backend (CMS)
- Built-in Admin Panel with secure authentication
- Add, edit, and delete service pages
- Blog management: create, edit, publish/unpublish blog posts
- Partner management (Elite & others)
- Section-based CMS control for dynamic homepage and inner content

## 🛠️ Tech Stack

- **Framework:** Laravel (PHP)
- **Frontend:** Blade Templates, TailwindCSS/Bootstrap (whichever was used)
- **Database:** MySQL
- **Animation:** AOS
- **Admin Panel:** Custom Laravel-based CMS

## 📦 Installation (for local development)

```bash
git clone https://github.com/mhamza7265/synaptekx.git
cd synaptekx
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

Developed by Muhammad Hamza Hanif
For technical support, please contact your IT team or reach out through the official Synaptekx contact channel.