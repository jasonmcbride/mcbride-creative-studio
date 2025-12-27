# McBride Creative Website - Installation Guide

Complete step-by-step guide to install and configure your McBride Creative WordPress website.

## Prerequisites

Before you begin, ensure you have:

- [ ] Web hosting account with PHP 8.0+ and MySQL
- [ ] Domain name registered
- [ ] FTP/SFTP access credentials
- [ ] MySQL database credentials
- [ ] WordPress download (latest version)

## Step 1: Set Up Hosting

### Recommended Hosting Providers

**Canadian Hosting** (for faster Canadian access):
- **Canadian Web Hosting**
- **HostPapa** (Canadian-owned)
- **Web Hosting Canada**

**Premium Managed WordPress**:
- **WP Engine** - Excellent performance and support
- **Kinsta** - Fast, reliable, great for WordPress
- **Flywheel** - Creative-focused hosting

### Hosting Requirements
- PHP 8.0 or higher
- MySQL 5.7+ or MariaDB 10.3+
- 256MB+ PHP memory
- SSL certificate (free with Let's Encrypt)
- Backup capabilities

## Step 2: Install WordPress

### Option A: One-Click Install (Recommended)

Most hosting providers offer one-click WordPress installation:

1. Log in to your hosting control panel (cPanel, Plesk, etc.)
2. Find "WordPress" or "Softaculous Apps Installer"
3. Click "Install Now"
4. Fill in details:
   - **Choose Domain:** yourdomain.com
   - **Site Name:** McBride Creative
   - **Site Description:** Professional marketing design for community theatre
   - **Admin Username:** (choose secure username)
   - **Admin Password:** (use strong password)
   - **Admin Email:** hello@mcbridecreative.com
5. Click "Install"

### Option B: Manual Install

1. **Download WordPress**
   ```bash
   wget https://wordpress.org/latest.zip
   unzip latest.zip
   ```

2. **Create MySQL Database**
   - Log in to phpMyAdmin or MySQL
   - Create new database: `mcbride_creative_db`
   - Create user with all privileges
   - Note: database name, username, password

3. **Upload Files**
   ```bash
   # Via FTP/SFTP, upload wordpress/ contents to public_html/
   ```

4. **Run WordPress Installer**
   - Visit: https://yourdomain.com/wp-admin/install.php
   - Enter database details
   - Complete installation

## Step 3: Install McBride Creative Theme

### Upload Theme

1. **Via WordPress Admin** (Recommended)
   - Log in to WordPress Admin (yourdomain.com/wp-admin)
   - Go to Appearance > Themes
   - Click "Add New" > "Upload Theme"
   - Choose `mcbride-creative-theme.zip`
   - Click "Install Now"
   - Click "Activate"

2. **Via FTP**
   ```bash
   # Upload mcbride-creative-theme folder to:
   /wp-content/themes/

   # Then activate in WordPress Admin
   ```

## Step 4: Install Required Plugins

Install these essential plugins:

### Contact Form
**WPForms Lite** (Free) or **WPForms** (Premium)
- Plugins > Add New > Search "WPForms"
- Install and Activate
- Configure contact form (see below)

### SEO
**Yoast SEO** (Free) or **Rank Math** (Free)
- Plugins > Add New > Search "Yoast SEO"
- Install and Activate
- Run configuration wizard

### Performance
**WP Rocket** (Premium, recommended) or **LiteSpeed Cache** (Free)
- Upload plugin or install from repository
- Activate and configure caching

### Security
**Wordfence Security** (Free)
- Plugins > Add New > Search "Wordfence"
- Install and Activate
- Run security scan

### Backup
**UpdraftPlus** (Free)
- Plugins > Add New > Search "UpdraftPlus"
- Install and Activate
- Configure automatic backups

## Step 5: Configure Theme Settings

### Upload Logo

1. Go to Appearance > Customize
2. Site Identity > Logo
3. Upload logo (recommended: 400x100px, transparent PNG)
4. Set site icon/favicon (512x512px)

### Set Theme Options

1. Appearance > Customize > McBride Creative Options
2. Set:
   - **Contact Email:** hello@mcbridecreative.com
   - **Location:** Sault Ste. Marie, Ontario, Canada
   - **Instagram:** @mcbridecreative
   - **LinkedIn URL:** (your LinkedIn profile)
   - **Facebook URL:** (if applicable)
3. Click "Publish"

### Create Menus

1. **Main Navigation**
   - Appearance > Menus
   - Create new menu: "Main Navigation"
   - Add pages: Home, Portfolio, Services, About, Contact
   - Assign to "Primary Navigation" location
   - Save menu

2. **Footer Menu**
   - Create new menu: "Footer Links"
   - Add pages: Privacy Policy, Terms of Service
   - Assign to "Footer Navigation" location
   - Save menu

## Step 6: Create Essential Pages

### Homepage

1. Pages > Add New
2. Title: "Home"
3. Template: Choose "Homepage"
4. Add content using block editor
5. Set as homepage:
   - Settings > Reading
   - "A static page" > Select "Home"
   - Save changes

### Portfolio Page

1. Pages > Add New
2. Title: "Portfolio"
3. Template: Choose "Portfolio"
4. Add portfolio grid block
5. Publish

### Services Page

1. Pages > Add New
2. Title: "Services"
3. Add service packages content:
   - Per-Show Package
   - Season Package (mark as featured)
   - Premium Package
4. Publish

### About Page

1. Pages > Add New
2. Title: "About"
3. Add content:
   - Jason's story and theatre journey
   - MCG involvement
   - Professional background
   - Headshot image
   - Philosophy section
4. Publish

### Contact Page

1. Pages > Add New
2. Title: "Contact"
3. Add WPForms contact form
4. Add business details:
   - Email: hello@mcbridecreative.com
   - Location: Sault Ste. Marie, ON
   - Social media links
5. Publish

### Legal Pages

1. **Privacy Policy**
   - Settings > Privacy
   - Create privacy policy page
   - Add GDPR/PIPEDA compliant content

2. **Terms of Service**
   - Pages > Add New
   - Add terms of service content

## Step 7: Add Portfolio Items

### Create Portfolio Content

1. Portfolio > Add New
2. Title: "Little Shop of Horrors - MCG"
3. Add content:
   - Featured image (show poster)
   - Description of project
   - Results/impact (sold-out shows, engagement)
   - Before/after if available
4. Category: "Show Posters" or "Social Graphics"
5. Publish

Repeat for all portfolio items (3-6 for launch).

## Step 8: Add Testimonials

1. Testimonials > Add New
2. Title: Client name or theatre company
3. Content: Testimonial quote
4. Featured image: Client photo or logo (optional)
5. Publish

Add 2-3 testimonials for homepage.

## Step 9: Configure Contact Form

### WPForms Setup

1. WPForms > Add New
2. Template: "Simple Contact Form"
3. Add fields:
   - Name (required)
   - Email (required)
   - Theatre Company Name
   - Show/Season Info
   - Message (required)
4. Settings > Notifications:
   - Send to: hello@mcbridecreative.com
   - Subject: "New Contact Form Submission"
5. Settings > Confirmations:
   - Message: "Thanks for reaching out! We'll get back to you within 24 hours."
6. Save Form
7. Copy shortcode
8. Add to Contact page

## Step 10: SEO Configuration

### Yoast SEO Settings

1. SEO > General > Configuration Wizard
2. Run through wizard:
   - Site type: "Portfolio or Blog"
   - Organization: McBride Creative
   - Social profiles: Add Instagram, LinkedIn
3. SEO > Search Appearance:
   - Set meta descriptions for key pages
   - Configure social media previews

### Google Search Console

1. Verify site ownership
2. Submit XML sitemap (yourdomain.com/sitemap.xml)
3. Monitor indexing status

### Google Analytics (Optional)

1. Create Google Analytics account
2. Install MonsterInsights plugin
3. Connect Google Analytics
4. Configure tracking

## Step 11: Performance Optimization

### WP Rocket Configuration

1. WP Rocket > Settings
2. Enable:
   - File Optimization (minify CSS/JS)
   - Media (lazy load images)
   - Caching
   - CDN (if using Cloudflare)
3. Save changes

### Image Optimization

1. Install **Smush** or **Imagify** plugin
2. Optimize existing images
3. Enable automatic optimization for new uploads

### Test Performance

1. Visit https://pagespeed.web.dev/
2. Test your site
3. Aim for 90+ scores
4. Address any issues

## Step 12: Security Hardening

### Wordfence Setup

1. Wordfence > Dashboard
2. Run initial scan
3. Enable:
   - Firewall (learning mode first)
   - Login security
   - Two-factor authentication
4. Fix any security issues found

### Additional Security

1. **Strong Passwords**
   - Admin account: Use strong password
   - Database: Use strong password
   - Consider password manager

2. **Limit Login Attempts**
   - Already included in Wordfence

3. **Disable File Editing**
   - Add to wp-config.php:
   ```php
   define('DISALLOW_FILE_EDIT', true);
   ```

4. **Keep Everything Updated**
   - Enable automatic WordPress updates
   - Manually update plugins/themes weekly

## Step 13: Email Setup

### Option A: Google Workspace (Recommended)

1. Sign up for Google Workspace
2. Verify domain ownership
3. Configure MX records
4. Create email: hello@mcbridecreative.com
5. Use for all business communications

### Option B: Hosting Provider Email

1. Create email account in cPanel
2. Configure email client (Gmail, Outlook)
3. Test sending/receiving

## Step 14: Backup Configuration

### UpdraftPlus Setup

1. UpdraftPlus > Settings
2. Schedule:
   - Files: Weekly
   - Database: Daily
3. Remote storage:
   - Google Drive (recommended)
   - Dropbox
   - Amazon S3
4. Test backup and restore process

## Step 15: Pre-Launch Checklist

Before going live, verify:

- [ ] All pages created and published
- [ ] Portfolio items added (minimum 3-6)
- [ ] Testimonials added
- [ ] Contact form tested and working
- [ ] Email sending/receiving works
- [ ] Logo and branding in place
- [ ] Navigation menus configured
- [ ] Footer links working
- [ ] Social media links correct
- [ ] Mobile responsive (test on phone)
- [ ] Cross-browser testing (Chrome, Firefox, Safari)
- [ ] Performance test (90+ Lighthouse score)
- [ ] SEO basics (meta descriptions, title tags)
- [ ] Google Analytics tracking (if used)
- [ ] Backup system tested
- [ ] Security scan completed
- [ ] SSL certificate active (HTTPS)
- [ ] Privacy policy and terms published
- [ ] Proofreading all content
- [ ] All images optimized

## Step 16: Launch!

### DNS Configuration

1. Point domain to hosting:
   - Update nameservers at domain registrar
   - Or update A record to hosting IP
2. Wait for DNS propagation (24-48 hours)

### Post-Launch

1. **Test Everything Again**
   - All forms
   - All links
   - All pages
   - Mobile experience

2. **Submit to Search Engines**
   - Google Search Console
   - Bing Webmaster Tools

3. **Announce Launch**
   - Instagram post (@mcbridecreative)
   - LinkedIn announcement
   - Email to MCG and contacts

4. **Monitor**
   - Google Analytics (if installed)
   - Search Console for indexing
   - Contact form submissions
   - Performance metrics

## Maintenance Schedule

### Daily
- Check contact form submissions
- Monitor email

### Weekly
- Check for WordPress/plugin/theme updates
- Review analytics (if installed)
- Check backup status

### Monthly
- Run security scan
- Review performance metrics
- Update portfolio with new work
- Add new testimonials
- Review and update content

### Quarterly
- Full site audit
- Review SEO performance
- Update strategy based on analytics
- Refresh testimonials/portfolio

## Troubleshooting

### White Screen of Death
- Increase PHP memory limit in wp-config.php
- Disable plugins via FTP
- Switch to default theme

### Contact Form Not Sending
- Check email settings
- Install WP Mail SMTP plugin
- Configure SMTP with hosting provider

### Slow Site
- Enable caching (WP Rocket)
- Optimize images
- Check for plugin conflicts
- Upgrade hosting if needed

### Security Issues
- Run Wordfence scan
- Update all software
- Change passwords
- Review user accounts

## Support Resources

### WordPress
- https://wordpress.org/support/
- https://developer.wordpress.org/

### Theme Support
- Email: hello@mcbridecreative.com
- Documentation: /mcbride-creative-theme/README.md

### Hosting Support
- Contact your hosting provider's support team

---

## Congratulations!

Your McBride Creative website is now live. You have a professional, award-winning platform to showcase your theatre design work and attract new clients.

**Next steps:**
1. Start adding portfolio work
2. Gather client testimonials
3. Create valuable content
4. Engage on social media
5. Network with community theatres

Build something worthy of an encore! 🎭

---

**Questions?** Email hello@mcbridecreative.com
