# 🐳 Laravel 12 Docker Starter Kit (WSL2)

![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red?style=flat-square&logo=laravel)
![PHP Version](https://img.shields.io/badge/PHP-8.5--fpm-blue?style=flat-square&logo=php)
![MySQL Version](https://img.shields.io/badge/MySQL-8.4-orange?style=flat-square&logo=mysql)

This repository serves as a **Modular Base Development Environment** powered by Docker Compose. It is specifically designed for high-performance Laravel development on **Windows Subsystem for Linux (WSL2)** with a clean and efficient structure.

---

## 🚀 Key Feature

- **Modern Stack:** PHP 8.5-fpm (Debian Based) & Nginx 1.29.
- **LTS Database:** MySQL 8.4 with persistent volumes (ensuring data safety even if containers are stopped).
- **GUI Management:** Includes phpMyAdmin for instant database management.
- **Monorepo Architecture:** A clean apps/ folder structure to house one or more Laravel projects.
- **Optimized for WSL2:** Path and permission configurations tailored for Linux users on Windows.

---

## 📂 Project Structure

```text
.
├── apps/               # 📂 Place your Laravel source code here (e.g., apps/laravel)
├── docker/             # 🏗️ Internal Docker configurations
│   ├── nginx/          # default.conf (Server block)
│   └── php/            # PHP Dockerfile & PHP Extensions
├── docker-compose.yml  # ⚙️ Main Orchestrator
└── .gitignore          # 🛡️ Protection for sensitive files & vendor directories
```
