# 🛒 Product Sheet from SQL Database - 1st test

## 📝 Project Goal

Develop a product sheet webpage that dynamically retrieves product information from an SQL database.

## ✨ Liberties

* **PHP Version:** You are free to choose any PHP version.
* **Frontend Libraries:** You are welcome to use external frontend libraries such as Bootstrap, or implement the frontend using plain JavaScript and jQuery.

## ⚠️ Development Constraints

* **Variable and Field Names:** All variable names and database field names must be in English.
* **Code Comments:** The code must be well-commented to explain its functionality.
* **Sale Banner:** If a product is on sale, a banner must be prominently displayed on the product sheet to inform the user.
* **Inactive Product Handling:** If a product is inactive, do not display any part of the product sheet. Instead, show a clear message indicating that the product is not currently active or available.
* **Image Requirement:** At least one image must be displayed for each product. You have the flexibility to include multiple images and implement a slider to manage them.

---



## 💾 Data Structure

The following table describes the data to be retrieved from the SQL database for each product:

| Field Name      | Description                         | Data Type                  | Constraints             |
| --------------- | ----------------------------------- | -------------------------- | ----------------------- |
| `name`        | Name of the product                 | VARCHAR(100)               | Maximum 100 characters  |
| `description` | Detailed description of the product | TEXT                       | Free text               |
| `reference`   | Product reference code              | VARCHAR(32)                | Maximum 32 characters   |
| `image(s)`    | Image(s) representing the product   | BLOB/VARCHAR (path)        | At least one image      |
| `quantity`    | Available quantity of the product   | INT                        |                         |
| `category`    | Category the product belongs to     | VARCHAR(100)               | Maximum 100 characters  |
| `price`       | Price of the product in Euros       | DECIMAL                    | Supports decimal places |
| `state`       | Product status                      | ENUM('sale', 'standard')   | Two possible states     |
| `visibility`  | Product visibility status           | ENUM('active', 'inactive') | Two possible states     |

## 🚀 Expected Features

* Dynamic product information retrieval from an SQL database.
* Clear display of product name, description, reference, quantity, category, and price.
* Implementation to display at least one product image (with optional multiple images and a slider).
* **Sale Banner:** A visible banner on the product sheet for products with `state = 'sale'`.
* **Inactive Product Message:** A specific message displayed instead of the product sheet content when `visibility = 'inactive'`.
* Well-structured and commented code adhering to the specified constraints.
* Use of English for all variable and field names.

---

## 🧱 Technologies (Suggestions)

* **Backend:** PHP (any version)
* **Database:** MySQL or any other compatible SQL database
* **Frontend (Optional):**

  * HTML, CSS
  * Bootstrap
  * JavaScript
  * jQuery

  ---

# 📂 Project Structure (Example)

```bash
```bash
.
├── config/
│   └── database.php        # Database connection configuration
├── src/
│   ├── Product.php         # Class to handle product data retrieval
│   └── functions.php       # Utility functions
├── templates/
│   └── product_sheet.php   # HTML template for the product sheet
├── css/
│   └── style.css           # Custom CSS styles
├── js/
│   └── script.js           # Custom JavaScript (e.g., for slider)
├── images/
│   └── ...                 # Product images
└── index.php               # Main entry point to display the product sheet
```

## ==============================================================================

# 🔄 PrestaShop 1.6 to 1.7 Upgrade Project - 2nd test

## 🎯 Objectives

Upgrade an existing PrestaShop e-commerce website from version 1.6 to 1.7. This upgrade aims to implement bug fixes, security vulnerability patches, and technical and functional enhancements.

## 📜 Context

* The e-commerce website has been online for 15 years.
* Originally developed using the OsCommerce CMS, it underwent a CMS migration to PrestaShop and subsequently several version upgrades from 1.1 to 1.6.
* Numerous specific developments have been added through module installations, overrides, and direct modifications to the Core.
* The current theme is fully customized and based on the default PrestaShop theme.

## ⚠️ Constraints

* Some specifically developed functionalities are no longer in use, but others are critical and must be maintained.
* The e-commerce website must not be interrupted for more than 48 hours.
* Website visitors should be informed about the site maintenance in advance.

---

## 🗺️ Methodology

There is no single "right" or "wrong" method to upgrade a major PrestaShop version. Each website is unique, and the approach must be tailored accordingly.

## 💼 Mission

As an initial approach, outline the different stages of the migration, taking into account the following elements: technology evolutions, database changes, modules and specific developments, themes, and SEO.

The goal is not to write a full specification but to provide a framework and highlight key junction points and potential technical difficulties.

---

## 🪜 Migration Steps and Key Considerations:

Here's a preliminary outline of the migration process, highlighting crucial aspects:

**Phase 1: Assessment and Planning**

1. **🔍 Detailed Site Audit:**

   * **Core Modifications:** Identify and document all direct modifications made to the PrestaShop Core files.
   * **Module Inventory:** List all installed modules (native and non-native), noting their versions and sources.
   * **Theme Analysis:** Thoroughly analyze the custom theme structure and its reliance on the default PrestaShop 1.6 theme.
   * **Override Inventory:** List all class, controller, and module overrides.
   * **Specific Functionalities:** Identify and document all custom-developed functionalities, determining which are still essential and which can be deprecated.
   * **Database Structure:** Analyze the current database structure and any custom table modifications or data.
   * **Performance Analysis:** Assess the current site's performance to identify potential bottlenecks that the upgrade might impact.
2. **🛠️ Technology and Database Evolution Analysis:**

   * **PHP Compatibility:** Verify the compatibility of existing custom code and modules with PHP versions supported by PrestaShop 1.7.
   * **Database Requirements:** Understand the database version requirements for PrestaShop 1.7 and plan for potential upgrades.
   * **Symfony Framework:** Recognize the introduction of the Symfony framework in PrestaShop 1.7 and its implications for custom developments and module compatibility.
3. **📦 Module and Specific Development Strategy:**

   * **Compatibility Check:** Research the compatibility of all essential modules with PrestaShop 1.7. Contact module developers for upgrade information or alternative solutions.
   * **Custom Development Review:** Analyze the code of critical custom functionalities. Determine the effort required to make them compatible with PrestaShop 1.7's architecture (potentially requiring significant rewriting due to Symfony).
   * **Deprecation Plan:** Identify and plan the removal of non-essential custom functionalities.
4. **🎨 Theme Strategy:**

   * **Compatibility Assessment:** Evaluate the custom theme's compatibility with PrestaShop 1.7's templating system (Twig). Significant modifications or a complete rebuild might be necessary.
   * **New Theme Exploration:** Consider the possibility of adapting a modern PrestaShop 1.7 compatible theme, potentially re-implementing the key design elements of the current custom theme.
5. **SEO Impact Assessment:**

   * **URL Structure:** Analyze the current URL structure and plan for potential changes during the upgrade. Implement 301 redirects for any modified URLs to maintain SEO ranking.
   * **Data Migration:** Plan the migration of SEO-relevant data (meta titles, descriptions, keywords) to the new PrestaShop 1.7 database structure.
   * **Module Compatibility:** Ensure SEO-related modules are compatible with PrestaShop 1.7 or find suitable alternatives.
6. **⏳ Downtime Planning:**

   * **Staging Environment:** Set up a complete staging environment that mirrors the live site.
   * **Migration Testing:** Perform multiple test migrations on the staging environment to identify potential issues and estimate the actual downtime required.
   * **Rollback Plan:** Develop a robust rollback plan to quickly revert to the PrestaShop 1.6 version in case of critical failures during the live migration.
   * **Maintenance Page:** Prepare an informative maintenance page to display to users during the planned downtime.

**Phase 2: Development and Testing (on Staging)**

* Perform the actual PrestaShop 1.7 upgrade on the staging environment.
* Address compatibility issues with modules and custom developments.
* Adapt or rebuild the theme for PrestaShop 1.7.
* Thoroughly test all critical functionalities, including the maintained custom developments.
* Test the website's performance and identify any new bottlenecks.
* Migrate and verify SEO data.

**Phase 3: Deployment and Post-Migration**

* Execute the migration on the live environment during the planned downtime window.
* Implement all necessary redirects.
* Perform immediate post-migration testing to ensure critical functionalities are working correctly.
* Closely monitor the website for any errors or unexpected behavior in the days following the migration.

**Key Junction Points and Potential Technical Difficulties:**

* **Core Modifications:** Merging or re-implementing Core modifications into the new PrestaShop 1.7 structure can be complex and error-prone.
* **Module Compatibility:** Finding compatible versions or alternatives for essential PrestaShop 1.6 modules.
* **Custom Development Adaptation:** Rewriting significant portions of custom code to align with the Symfony framework in PrestaShop 1.7.
* **Theme Migration:** The custom theme might require a complete overhaul to be compatible with PrestaShop 1.7's Twig templating engine.
* **Database Schema Changes:** Understanding and adapting to the database schema differences between PrestaShop 1.6 and 1.7.
* **Data Migration Integrity:** Ensuring all critical data, including customer information, order history, and product details, is migrated correctly.
* **Performance Optimization:** Optimizing the upgraded PrestaShop 1.7 site for performance, as the new architecture might introduce different performance characteristics.
* **SEO Maintenance:** Ensuring minimal impact on SEO rankings during and after the migration.

---

This initial outline provides a framework for approaching the PrestaShop 1.6 to 1.7 upgrade. A more detailed plan will require a deeper analysis of the specific website and its customizations.
