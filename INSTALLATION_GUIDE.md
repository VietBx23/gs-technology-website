# 📖 Installation Guide - Global Success WordPress Website

Step-by-step guide to set up and import Global Success website content into WordPress.

## ⚡ Quick Method: Using WP All In One Importer

This is the easiest and fastest way to import all website content, settings, and data.

### 📋 Requirements

- WordPress 5.0 or higher
- PHP 7.2 or higher
- WordPress Admin access
- Stable internet connection

### 🚀 Step 1: Install WP All In One Importer Plugin

1. **Log in to WordPress Admin**
   - Access: `https://your-domain.com/wp-admin`
   - Log in with your Admin account

2. **Install the plugin**
   - Go to menu: **Plugins > Add New**
   - Search for: `All-in-One WP Migration` (most popular option)
   - Click **Install Now**
   - Click **Activate**

   **Note:** You can also use other import plugins:
   - `ImportWP`
   - `Elementor Website Template Import`
   - `WordPress Importer`

### 📥 Step 2: Upload the Export File

1. **Access the Import feature**
   - Go to menu: **All-in-One WP Migration > Import**

2. **Upload the .wpress file**
   - Click **Import from file**
   - Select the file: `wordpress-test-20260307-102739-xjiekjxakewv.wpress`
   - Or drag and drop the file into the upload area

   **File location:** 
   ```
   /wordpress-test-20260307-102739-xjiekjxakewv.wpress
   ```

### ⚙️ Step 3: Start Import and Wait

1. **Begin the import process**
   - Click **Import**
   - The system will display a progress bar
   - **Do not close the browser tab** during import

2. **Wait time**
   - Usually takes 2-10 minutes depending on file size
   - Can take up to 30 minutes for larger files

3. **Completion**
   - Message displayed: "Import successfully completed"
   - Website will automatically reload

### ✅ Step 4: Verify and Fine-tune

1. **Check content**
   - Go to **Dashboard > Home** to view the homepage
   - Check all main pages:
     - Home
     - About Us
     - Services
     - News
     - Contact

2. **Verify menus**
   - Go to **Appearance > Menus**
   - Ensure all menus are activated

3. **Update contact information**
   - Go to **Customizer > Site Identity**
   - Update:
     - Website name
     - Logo
     - Tagline

4. **Check settings**
   - Go to **Settings > Permalink**
   - Select: **Post name** or **Custom Structure: `/%postname%/`**

---

## 🛠️ Manual Method: Import in Parts

If the export file doesn't work, you can import content manually.

### 📝 Import Content

1. **Upload XML file**
   - Go to **Tools > Import**
   - Choose **WordPress** importer
   - Upload the `.xml` file (if available)
   - Choose author for posts
   - Click **Import**

### 🎨 Import Widgets

1. **Add Widgets**
   - Go to **Appearance > Widgets**
   - Add widgets back to areas such as:
     - Footer Widget Area
     - Sidebar Widgets
     - Header Widgets

### 🖼️ Manual Image Import

1. **Upload Images**
   - Go to **Media > Add New**
   - Upload all images

2. **Update Featured Image for Pages/Posts**
   - Edit each page/post
   - Set featured image from media library

---

## 🔧 Troubleshooting

### ❌ Error: "Import Failed"

**Solutions:**
1. Check file size
   - All-in-One WP Migration free version has a 512MB limit
   - Allow larger uploads by adding code:
   ```php
   define( 'AI1WM_MAX_FILE_SIZE', 2147483648 ); // 2GB
   ```

2. Increase PHP limits
   - Add to `wp-config.php`:
   ```php
   define( 'WP_MEMORY_LIMIT', '256M' );
   define( 'WP_MAX_MEMORY_LIMIT', '512M' );
   ```

3. Increase timeout
   - Ask your host to increase `max_execution_time` to 300 seconds

### ❌ Error: "File too large"

**Solutions:**
1. Compress the `.wpress` file if possible
2. Split file into smaller parts
3. Use FTP to upload file directly to folder

### ❌ Error: Images not displaying after import

**Solutions:**
1. Go to **Tools > Site Health**
2. Verify REST API is working
3. Update URL in **Settings > General**

### ❌ Plugins not working after import

**Solutions:**
1. Go to **Plugins** and reactivate all plugins
2. If needed, reinstall plugins
3. Check for plugin conflicts

---

## 📊 Import Content List

When importing the `.wpress` file, you will receive:

### ✅ Included in Import
- ✓ All Pages
- ✓ All Posts
- ✓ All Categories & Tags
- ✓ Menu Structures
- ✓ Widgets & Sidebar
- ✓ Theme Settings
- ✓ Images and Media
- ✓ User Roles & Permissions
- ✓ Custom Post Types

### ⚠️ May Need Reconfiguration
- ⚠ Plugin Settings - may need to reconfigure passwords, API keys
- ⚠ Email Settings - may need to reconfigure SMTP
- ⚠ Domain URLs - if changing domain
- ⚠ Third-party Integrations

---

## 🔐 Security After Import

1. **Change Admin Password**
   - Go to **Users > Edit Profile** or **Account Settings**
   - Change to a strong new password

2. **Delete Default Users**
   - Remove unnecessary user accounts

3. **Update Permalink Structure**
   - Set SEO-friendly structure

4. **Enable SSL**
   - Ensure website uses HTTPS

5. **Install Backup Plugin**
   - Install plugins like BackWPup or UpdraftPlus

---

## 📞 Support Requests

If you encounter issues:

1. **Check for errors**
   - Go to **Tools > Site Health**

2. **Contact Your Host/Provider**
   - Request to increase PHP memory limit
   - Request to increase upload size
   - Request to increase max execution time

3. **Contact Global Success Support**
   - Email: globalsuccess@gmail.com
   - Phone: (+84) 943 321 441

---

## 📱 Useful Resources

- [All-in-One WP Migration - Documentation](https://help.servmask.com/)
- [WordPress Import Guide](https://wordpress.org/support/article/importing-content/)
- [WordPress Backup & Restore](https://wordpress.org/support/article/backing-up-your-wordpress-files/)

---

**Good luck with your installation!** 🎉

*Last Updated: March 9, 2026*
