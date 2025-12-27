# Export to DreamHost - Deployment Guide

Complete guide to export your local WordPress site and deploy it to DreamHost.

---

## 📋 Prerequisites

Before starting, ensure you have:

- [x] Reviewed and approved your local site
- [x] All content added (pages, portfolio, testimonials)
- [x] Logo and images uploaded
- [x] DreamHost account set up
- [x] Domain name ready (or DreamHost subdomain)
- [x] DreamHost hosting plan active

---

## 🎯 Deployment Methods

Choose one of these methods:

### Method 1: All-in-One Migration Plugin (RECOMMENDED - Easiest)
- **Time:** 15-30 minutes
- **Difficulty:** Easy
- **Best for:** Quick, hassle-free deployment

### Method 2: Manual Export/Import (Complete Control)
- **Time:** 45-60 minutes
- **Difficulty:** Moderate
- **Best for:** Advanced users, learning process

### Method 3: WP CLI (Advanced)
- **Time:** 20-30 minutes
- **Difficulty:** Advanced
- **Best for:** Developers comfortable with command line

---

## Method 1: All-in-One Migration Plugin (RECOMMENDED)

This is the easiest and most reliable method.

### Step 1: Install Plugin on Local Site

1. **Access local site:** http://localhost:8080/wp-admin

2. **Go to:** Plugins > Add New

3. **Search for:** "All-in-One WP Migration"

4. **Install and Activate:**
   - All-in-One WP Migration
   - All-in-One WP Migration File Extension (optional, for larger sites)

### Step 2: Export Your Site

1. **Go to:** All-in-One WP Migration > Export

2. **Click:** "Export To" > "File"

3. **Choose what to export:**
   - ✅ Database
   - ✅ Media Library
   - ✅ Themes
   - ✅ Plugins
   - ✅ Must-use Plugins (if any)
   - ❌ Spam Comments (exclude)
   - ❌ Post Revisions (exclude if large)

4. **Advanced Options (click "Advanced options"):**
   - Find: `localhost:8080`
   - Replace with: `yourdomain.com` (your DreamHost domain)
   - This updates all URLs automatically

5. **Click "Export"**

6. **Download the .wpress file** when complete
   - Save to your computer
   - File will be named something like: `mcbride-creative-20251227.wpress`

### Step 3: Set Up WordPress on DreamHost

1. **Log in to DreamHost Panel**

2. **Go to:** One-Click Installs > WordPress

3. **Click "Install" and fill in:**
   - Domain: Your domain name
   - Directory: Leave blank (install in root)
   - Database Name: (auto-generated)
   - Install WordPress

4. **Save the credentials** DreamHost provides

5. **Wait 10-15 minutes** for installation to complete

6. **Check:** Visit yourdomain.com to see default WordPress

### Step 4: Import to DreamHost

1. **Log in to DreamHost WordPress admin:**
   - URL: `yourdomain.com/wp-admin`
   - Use credentials from Step 3

2. **Install All-in-One WP Migration plugin:**
   - Plugins > Add New
   - Search "All-in-One WP Migration"
   - Install and Activate

3. **Go to:** All-in-One WP Migration > Import

4. **Click "Import From" > "File"**

5. **Upload your .wpress file** from Step 2

6. **Warning will appear** - Click "Proceed"
   - This will overwrite the DreamHost installation with your local site

7. **Wait for import to complete**

8. **Click "Permalinks Settings"** when prompted
   - This resets URL structure
   - Click "Save Changes"

9. **Done!** Your site is now live

### Step 5: Verify and Test

1. **Visit your site:** yourdomain.com

2. **Check all pages:**
   - Homepage
   - Portfolio
   - Services
   - About
   - Contact

3. **Test functionality:**
   - Navigation menu
   - Contact form
   - Portfolio items
   - Mobile responsiveness

4. **Log in to admin:** yourdomain.com/wp-admin
   - You may need to reset your password

5. **Update permalinks:**
   - Settings > Permalinks
   - Click "Save Changes" (doesn't matter if you change nothing)

---

## Method 2: Manual Export/Import

For users who want complete control or troubleshooting.

### Step 1: Export Database

1. **Access local phpMyAdmin:** http://localhost:8081

2. **Select database:** `mcbride_creative`

3. **Click "Export" tab**

4. **Export method:** Quick

5. **Format:** SQL

6. **Click "Go"**

7. **Save file:** `mcbride-creative-database.sql`

### Step 2: Download WordPress Files

1. **Copy WordPress files:**
   ```bash
   cd /home/jmcbride/projects/wordpress

   # Create export folder
   mkdir export-package

   # Copy necessary files
   cp -r wordpress-data/wp-content export-package/

   # Don't copy entire wordpress-data, just wp-content
   ```

2. **Or use the mounted theme:**
   ```bash
   # Your theme is already at:
   /home/jmcbride/projects/wordpress/mcbride-creative-theme
   ```

### Step 3: Prepare Files for Upload

1. **Create a zip of wp-content:**
   ```bash
   cd /home/jmcbride/projects/wordpress
   zip -r wp-content-backup.zip wordpress-data/wp-content/
   ```

2. **Edit database SQL file:**
   - Open `mcbride-creative-database.sql` in text editor
   - Find and replace ALL instances:
     - Find: `localhost:8080`
     - Replace: `yourdomain.com`
   - Save file

### Step 4: Set Up DreamHost

1. **Install WordPress on DreamHost:**
   - Use DreamHost panel > One-Click Installs
   - Install WordPress on your domain
   - Note: Database name, username, password

2. **Access DreamHost via FTP/SFTP:**
   - Host: yourdomain.com
   - Username: (from DreamHost)
   - Password: (from DreamHost)
   - Port: 22 (SFTP) or 21 (FTP)

### Step 5: Upload Files

1. **Connect via FTP/SFTP**

2. **Navigate to WordPress directory:**
   - Usually: `/home/username/yourdomain.com/`

3. **Backup DreamHost's wp-content:**
   - Rename: `wp-content` to `wp-content-backup`

4. **Upload your wp-content folder**

5. **Or, upload just your theme:**
   - Navigate to: `/wp-content/themes/`
   - Upload: `mcbride-creative-theme` folder

6. **Upload uploads folder (images):**
   - From local: `wordpress-data/wp-content/uploads/`
   - To DreamHost: `/wp-content/uploads/`

### Step 6: Import Database

1. **Access DreamHost phpMyAdmin:**
   - Find in DreamHost panel > MySQL Databases
   - Click phpMyAdmin link

2. **Select your WordPress database**

3. **Click "Import" tab**

4. **Choose file:** Your edited `mcbride-creative-database.sql`

5. **Click "Go"**

6. **Wait for import to complete**

### Step 7: Update wp-config.php

1. **Access DreamHost file manager or FTP**

2. **Edit wp-config.php:**
   - Update database credentials if needed
   - Usually these are correct from DreamHost install

3. **Add this line before "/* That's all, stop editing! */":**
   ```php
   define('WP_HOME', 'https://yourdomain.com');
   define('WP_SITEURL', 'https://yourdomain.com');
   ```

### Step 8: Final Steps

1. **Visit:** yourdomain.com

2. **If you see your site, success!**

3. **If you see errors:**
   - Check database credentials in wp-config.php
   - Verify database imported correctly
   - Check file permissions (755 for folders, 644 for files)

4. **Reset permalinks:**
   - wp-admin > Settings > Permalinks
   - Click "Save Changes"

5. **Test all functionality**

---

## Method 3: WP CLI (Advanced)

For developers comfortable with command line.

### Step 1: Export from Local

```bash
cd /home/jmcbride/projects/wordpress

# Export database
docker compose exec wordpress wp db export local-export.sql --path=/var/www/html

# Create archive of uploads
docker compose exec wordpress tar -czf uploads.tar.gz -C /var/www/html/wp-content uploads/

# Copy files out of container
docker cp mcbride-creative-wp:/var/www/html/local-export.sql ./
docker cp mcbride-creative-wp:/var/www/html/uploads.tar.gz ./
```

### Step 2: Search and Replace

```bash
# Install WP-CLI on your local machine if not already
# Then run search-replace on the SQL file

wp search-replace 'localhost:8080' 'yourdomain.com' --export=dreamhost-export.sql local-export.sql
```

### Step 3: Upload to DreamHost

1. **SSH into DreamHost:**
   ```bash
   ssh username@yourdomain.com
   ```

2. **Navigate to WordPress:**
   ```bash
   cd ~/yourdomain.com
   ```

3. **Upload files** (use SCP from your local machine):
   ```bash
   scp dreamhost-export.sql username@yourdomain.com:~/yourdomain.com/
   scp uploads.tar.gz username@yourdomain.com:~/yourdomain.com/
   scp -r mcbride-creative-theme username@yourdomain.com:~/yourdomain.com/wp-content/themes/
   ```

4. **Import database on DreamHost:**
   ```bash
   wp db import dreamhost-export.sql
   ```

5. **Extract uploads:**
   ```bash
   tar -xzf uploads.tar.gz -C wp-content/
   ```

6. **Activate theme:**
   ```bash
   wp theme activate mcbride-creative-theme
   ```

7. **Flush permalinks:**
   ```bash
   wp rewrite flush
   ```

---

## 🔒 Post-Deployment Security

After deploying to DreamHost:

### 1. Install SSL Certificate

1. **DreamHost Panel** > Security > SSL/TLS

2. **Enable "Let's Encrypt SSL certificate"** (FREE)

3. **Wait 10-15 minutes** for certificate to activate

4. **Update WordPress URLs:**
   - Go to: Settings > General
   - Change URLs from `http://` to `https://`
   - Save Changes

### 2. Update Security Plugins

1. **Wordfence** (if installed):
   - Run new security scan
   - Update firewall rules

2. **Change all passwords:**
   - WordPress admin password
   - Database password (via DreamHost panel)

3. **Remove default admin account:**
   - If username is "admin", create new admin user
   - Delete old "admin" account

### 3. Set Up Backups

1. **DreamHost Panel** > Backup

2. **Enable automatic backups** (if available in your plan)

3. **Or install backup plugin:**
   - UpdraftPlus
   - Configure to backup to Google Drive or Dropbox

---

## ✅ Post-Deployment Checklist

- [ ] Site loads at yourdomain.com
- [ ] All pages accessible (Home, Portfolio, Services, About, Contact)
- [ ] Images display correctly
- [ ] Contact form works (send test submission)
- [ ] Navigation menu functions
- [ ] Mobile responsive (check on phone)
- [ ] SSL certificate active (HTTPS, green padlock)
- [ ] Admin login works
- [ ] Search engines can index site (Settings > Reading)
- [ ] Permalinks working (test portfolio links)
- [ ] All plugins activated
- [ ] Theme activated
- [ ] Google Analytics installed (if using)
- [ ] Submitted to Google Search Console
- [ ] Backups configured

---

## 🐛 Troubleshooting

### Database Connection Error
- Check wp-config.php database credentials
- Verify database exists in DreamHost panel
- Ensure database user has permissions

### Images Not Displaying
- Check uploads folder uploaded correctly
- Verify file permissions (755 for folders, 644 for files)
- Update image URLs in database (search-replace)

### 404 Errors on Pages
- Settings > Permalinks > Save Changes
- Check .htaccess file exists
- Verify mod_rewrite is enabled (usually is on DreamHost)

### White Screen / 500 Error
- Check PHP error logs in DreamHost panel
- Increase PHP memory limit
- Deactivate plugins via FTP (rename plugins folder)
- Switch to default theme temporarily

### Site Looks Broken / No Styles
- Hard refresh browser (Ctrl+Shift+R)
- Check theme is activated
- Verify theme files uploaded correctly
- Check for JavaScript errors (browser console)

### Contact Form Not Sending
- Install WP Mail SMTP plugin
- Configure with DreamHost SMTP settings
- Test email delivery

---

## 📞 DreamHost Support

If you encounter issues specific to DreamHost:

- **Support:** support.dreamhost.com
- **Live Chat:** Available in DreamHost panel
- **Knowledge Base:** help.dreamhost.com
- **WordPress Docs:** help.dreamhost.com/hc/en-us/sections/203272258-WordPress

---

## 🎉 You're Live!

Once deployed successfully:

1. **Announce your launch:**
   - Instagram post
   - LinkedIn announcement
   - Email to contacts and MCG

2. **Submit to search engines:**
   - Google Search Console: https://search.google.com/search-console
   - Bing Webmaster Tools: https://www.bing.com/webmasters

3. **Monitor:**
   - Check analytics (if installed)
   - Monitor contact form submissions
   - Review for any issues

4. **Maintain:**
   - Weekly: Check for updates
   - Monthly: Review content, add new portfolio items
   - Quarterly: Full site audit

---

**Congratulations! Your McBride Creative website is now live on DreamHost!**

Build something worthy of an encore! 🎭

---

**Need help?** Email: hello@mcbridecreative.com
