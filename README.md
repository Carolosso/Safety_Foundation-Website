
# 🛡️ PIBiO WordPress Theme

> **A modular, maintainable, and customizable WordPress theme for advanced sites.**

---

## 🚀 Overview

This project is a **custom WordPress theme** designed for:

- **Modularity & Maintainability**: Organized with clear separation of templates, logic, and assets.
- **Flexible Page Types**: PHP templates for archives, singles, and custom pages.
- **Reusable Content Blocks**: Cards, accordions, and more in dedicated directories.
- **SASS Styling**: Managed in `sass/`, compiled via PHP workflow.
- **Direct JS Integration**: Includes third-party libraries (e.g., `particles.js`).
- **Customizer Support**: Advanced theme customization via WordPress Customizer.
- **WooCommerce Integration**: Custom e-commerce features.
- **Navigation & Options**: Custom nav walker and options management.

---

## 📁 Key Directories

- `page-templates/` — Custom page layouts
- `inc/` — Shared logic, widgets, options, WooCommerce
- `loops/` — Reusable content blocks
- `sass/` — SASS styles
- `js/` — JavaScript assets
- `img/` — Images and graphics

---

## 📝 Conventions

- **Descriptive file naming** for templates and assets
- **Direct asset inclusion** (see `functions.php`, `inc/enqueues.php`)
- **Modular structure** for easy extension

---

## 📚 References

- `functions.php`, `inc/enqueues.php`, `inc/setup.php`: Core theme setup
- `inc/customizer-assets/`: Customizer logic
- `js/particles/README.md`: Third-party JS usage
