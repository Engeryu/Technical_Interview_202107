# Migration_methodology

# 🔄 Upgrading from PrestaShop 1.6 to 1.7

## ⚠️ Precautions:

1. **📝 List Themes and Modules:** Make a list of all used themes and modules, and verify their creation version and nature (native/non-native).
    - A native module, provided by PrestaShop, is more likely to be functional in a new version, but errors can still occur. At a minimum, wait for an upcoming module update if errors repeatedly arise.
    - A non-native module, provided by the community, is likely to have a lower chance of being functional. In any case, there is no guarantee; it will depend on the developer's willingness to update their module.
2. **⚙️ Verify System Information:** Check the database and hosting information. If the migration poses repeated problems during data retrieval, it is likely that an older PHP version, for example, is the cause.

During the upgrade procedure, pay close attention to your URL structure. Implementing a permanent redirect, for example to `index.php` (as you might do to enable the SSL certificate (HTTPS) or to avoid 404 pages), can be beneficial.

## 🛠️ Migration Methods:

There are several possible migration methods:

- **Manual:** Without using any external tools.
- **Module:** Automates the migration (high risk of problems during the operation).
- **External Service:** Entrust the data migration to a specialized company.

## ⚙️ Manual Migration:

1. **💾 Create a Local Backup:**
    - **Files:** Download a local copy using an FTP client or through the file manager in your hosting control panel.
    - **Database:** Export the database from phpMyAdmin locally, or by going to the back-office and creating a backup in "Advanced Parameters → DB Backup → Create a new backup".
2. **⬇️ Download PrestaShop 1.7:**
Download the stable version 1.7 of PrestaShop from the following address: [https://www.prestashop.com/en/download](https://www.prestashop.com/en/download).
3. **📂 Transfer Files:**
    - Move the old files to an "OLD" folder at the root of your PrestaShop installation.
    - Upload the new files to the PrestaShop root directory using an FTP client after decompressing the archive.
    - Using the terminal or an FTP client, transfer the content of the "OLD" folder into the `/img`, `/upload`, and `/download` directories to maintain the structure of version 1.7 with the files from version 1.6. The `config` folder, which contains `settings.inc.php`, should be transferred last.
4. **⏫ Prepare the Upgrade:**
Execute the upgrade script to PrestaShop 1.7 by entering the following in your browser's address bar: `http://your-domain.com/install/upgrade/upgrade.php`. (Make sure to replace `your-domain.com` with your store's actual domain name).
5. **✅ Finalize the Upgrade:**
After completing the upgrade, the migration is finished. If the project encounters an error, it means a previous step was not executed correctly, hence the importance of the project backup to retry without issues.
    
    Once the project is successfully upgraded, create a new backup.
    

## 📌 Finalizing the Complete Migration:

1. **🔍 Review Themes and Modules:**
Re-read the list of different modules and themes used to identify those that are updated (compatible with version 1.7) and those that are not. Any module and theme with prior version compatibility will not work.
    
    Any modules purchased with access to Addons.PrestaShop can be redownloaded even after a version upgrade. Otherwise, it will be necessary to repurchase them.
    
    In any case, they will need to be reconfigured.
    
2. **💻 Redevelopment Considerations:**
Finally, due to the new development of PrestaShop 1.7 including the PHP-Symfony framework, it is expected that some redevelopment of the project, even a minimal part, will be necessary.