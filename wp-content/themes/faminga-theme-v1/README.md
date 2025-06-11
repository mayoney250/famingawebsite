# Faminga Theme v1 Documentation

Welcome to the Faminga Theme v1! This document is your comprehensive guide to understanding, customizing, and extending your WordPress theme. It covers the theme's architecture, technologies, and specific features.

## 1. Core Technologies

This theme is built using a modern web development stack:

-   **WordPress & PHP**: The theme is built on the WordPress platform, using PHP as the primary server-side language. All code follows WordPress coding standards.
-   **Tailwind CSS**: A utility-first CSS framework used for rapidly building the user interface. Most styling is done directly in the template files using Tailwind classes.
-   **SCSS**: Used for organizing custom styles that are not covered by Tailwind. The source files are in `/assets/scss/`, which compile to the main `style.css`.
-   **JavaScript (ES6)**: Custom client-side functionality, such as navigation highlighting and the pricing toggle, is written in modern JavaScript. The main script is `/assets/js/main.js`.
-   **Animate On Scroll (AOS)**: A lightweight JavaScript library used to create the "fade-up" animations as you scroll down the page.

## 2. Directory Architecture

The theme follows a standard WordPress structure, organized for clarity and maintainability.

```
faminga-theme-v1/
│
├── assets/
│   ├── css/          # Compiled CSS (not to be edited directly)
│   ├── js/           # Custom JavaScript (main.js is key)
│   ├── scss/         # SCSS source files (edit these for custom styles)
│   └── images/       # Theme images and assets
│
├── inc/
│   └── enqueue.php   # Handles loading all CSS and JS assets
│
├── languages/        # Contains translation files (.pot, .po, .mo)
│
├── page-templates/   # Custom page templates for specific layouts
│
├── templates/
│   ├── parts/        # Reusable template parts (e.g., pricing, faq)
│   └── sections/     # Larger sections, like the homepage layout
│
├── node_modules/     # Project dependencies (managed by npm)
│
├── front-page.php    # The main template for the homepage
├── functions.php     # Core theme logic, hooks, and setup
├── header.php        # The website header and navigation
├── footer.php        # The website footer
├── style.css         # Main stylesheet (compiled from SCSS)
└── README.md         # This documentation file
```

## 3. Colors and Styling

The theme uses a specific color palette defined as SCSS variables in `/assets/scss/base/_variables.scss`.

-   **Background Dark**: `#0A1A0F`
-   **Accent Orange (Primary)**: `#F26B3A`
-   **Text White**: `#FFFFFF`
-   **Text Muted**: `#CCCCCC`

To make custom style changes, you should edit the files in `/assets/scss/` and then recompile the stylesheet.

### Development Workflow

To work on styles, you must run the following commands from the theme's root directory (`wp-content/themes/faminga-theme-v1/`):

1.  **Install dependencies**: `npm install`
2.  **Watch for changes**: `npm run dev`

This will automatically recompile your `style.css` file whenever you save a change in the `/scss/` directory.

## 4. Key Features Explained

### Animations on Scroll

-   **How it works**: The theme uses the **AOS.js** library to animate elements as they enter the viewport.
-   **Configuration**: The library is loaded via CDN in `inc/enqueue.php` and initialized in `assets/js/main.js`.
-   **Implementation**: To animate an element, add the `data-aos="fade-up"` attribute to its HTML tag in the template files (located in `templates/parts/`). You can also add delays (e.g., `data-aos-delay="200"`) for staggered effects.

### Header and Navigation

-   **File**: `header.php`
-   **Translations**: The navigation links are **hard-coded** directly in `header.php` inside two PHP arrays: `$menu_translations` (for links) and `$button_translations` (for buttons). To change the text, you must edit these arrays for each language.
-   **Active Page Highlighting**: Since the menu is not a standard WordPress menu, custom JavaScript in `assets/js/main.js` handles highlighting the current page. It adds an `active-nav-item` class to the link matching the current URL. The styling for this class is in `/assets/scss/style.scss`.

### Footer

-   **File**: `footer.php`
-   This file contains the footer widgets, copyright information, and closing HTML tags. It's a standard WordPress template part.

### Page Templates

The theme includes several custom page templates found in the root directory (e.g., `template-about.php`, `template-career.php`) and in `/page-templates/`. You can assign these templates to your pages via the "Page Attributes" panel in the WordPress page editor to give them a unique layout and design.

### Pricing Section Toggle

-   **File**: `templates/parts/pricing.php` and `assets/js/main.js`
-   **Functionality**: The monthly/yearly pricing toggle is controlled by JavaScript.
-   **Data Source**: The prices for both billing cycles are stored in a JavaScript object called `pricingData` within `main.js`.
-   **To Update Prices**: You must update the prices in **two places**:
    1.  The `pricingData` object in `assets/js/main.js`.
    2.  The static HTML fallback prices in `templates/parts/pricing.php`.

### Language Translation

-   **Primary Method**: As mentioned, the header uses hard-coded PHP arrays for translations. Other parts of the theme use a custom translation function, `faminga_get_translated_texts()`, defined in `functions.php`. This function also contains hard-coded text arrays.
-   **Standard Method**: The theme is also set up for standard WordPress translation via `.po` and `.mo` files, located in the `/languages` directory. You can use a program like Poedit to edit these files for more extensive translations. The text domain is `faminga-theme-v1`.

## 5. Required Plugins

This theme is designed to be self-sufficient and **does not require any external plugins** to function as is.

However, for enhanced functionality, you might consider:
-   **Advanced Custom Fields (ACF)**: If you want to manage content more dynamically instead of editing template files directly.
-   **A Caching Plugin**: To improve site performance.
-   **An SEO Plugin**: To manage search engine optimization. 