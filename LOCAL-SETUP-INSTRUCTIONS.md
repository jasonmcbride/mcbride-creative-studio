# Local WordPress Site - Setup Instructions

## 🎉 Your Local Site is Running!

WordPress is now running locally on your machine using Docker.

---

## 📍 Access Your Site

### WordPress Site
**URL:** http://localhost:8080

### WordPress Admin
**URL:** http://localhost:8080/wp-admin

**Default Credentials (You'll set these during setup):**
- Username: (you'll choose)
- Password: (you'll choose)
- Email: hello@mcbridecreative.com

### Database Management (phpMyAdmin)
**URL:** http://localhost:8081

**Credentials:**
- Username: `root`
- Password: `rootpassword`

---

## 🚀 Complete WordPress Setup

### Step 1: Initial WordPress Installation (2 minutes)

1. **Open your browser and go to:** http://localhost:8080

2. **Select language:** English

3. **Click "Let's go!"**

4. **WordPress will already be configured with the database**
   - If prompted for database details (unlikely with Docker), use:
     - Database Name: `mcbride_creative`
     - Username: `wordpress`
     - Password: `wordpress`
     - Database Host: `db`
     - Table Prefix: `wp_`

5. **Click "Run the installation"**

6. **Fill in site information:**
   - Site Title: **McBride Creative**
   - Username: **admin** (or your preferred username)
   - Password: (use strong password - save it!)
   - Your Email: **hello@mcbridecreative.com**
   - Search Engine Visibility: ☐ Discourage (leave unchecked)

7. **Click "Install WordPress"**

8. **Log in** with your credentials

---

### Step 2: Install McBride Creative Theme (2 minutes)

The theme is already mounted in the Docker container!

1. **Go to:** Appearance > Themes

2. **You should see "McBride Creative" theme**

3. **Click "Activate"**

4. **If you don't see it**, the theme is located at:
   `/wp-content/themes/mcbride-creative-theme/`

---

### Step 3: Create Essential Pages (10 minutes)

#### Homepage

1. Pages > Add New
2. Title: **Home**
3. Template: Select **"Homepage"** from template dropdown (right sidebar)
4. The template already has the hero, services, portfolio, stats, testimonials, and CTA sections
5. Click **Publish**

**Set as Homepage:**
1. Settings > Reading
2. Select "A static page"
3. Homepage: Select "Home"
4. Click **Save Changes**

#### Portfolio Page

1. Pages > Add New
2. Title: **Portfolio**
3. Add a heading: "Our Work"
4. Add paragraph: "Designs that helped fill seats for community theatres"
5. Publish

#### Services Page

1. Pages > Add New
2. Title: **Services**
3. Add content describing your three packages:
   - Per-Show Package
   - Season Package
   - Premium Package
4. Publish

#### About Page

1. Pages > Add New
2. Title: **About**
3. Add your story:
   - Who you are (Jason McBride)
   - Theatre background (MCG involvement)
   - Why you love theatre
   - Your expertise (developer + designer)
4. Add headshot image
5. Publish

#### Contact Page

1. Pages > Add New
2. Title: **Contact**
3. Add contact information:
   - Email: hello@mcbridecreative.com
   - Location: Sault Ste. Marie, ON, Canada
4. *Note: Contact form requires WPForms plugin (see Step 5)*
5. Publish

---

### Step 4: Add Portfolio Items (5 minutes)

1. **Portfolio > Add New**

2. **Title:** "Little Shop of Horrors - Musical Comedy Guild"

3. **Content:**
   ```
   Complete marketing campaign for MCG's production of Little Shop of Horrors.

   Deliverables:
   - Show poster design
   - 10 social media graphics
   - Audition announcements
   - Cast reveal posts
   - Opening night graphics

   Results:
   - Sold-out performances
   - 500+ social media engagements
   - Increased season ticket sales
   ```

4. **Featured Image:** Add show poster (if you have it)

5. **Category:** Select or create "Show Posters"

6. **Publish**

Repeat for 2-3 more MCG projects or placeholder items.

---

### Step 5: Install Essential Plugins (5 minutes)

#### Required Plugins

1. **Go to:** Plugins > Add New

2. **Install these plugins:**

   **a) Contact Form (WPForms Lite)**
   - Search: "WPForms"
   - Install "WPForms Lite"
   - Activate
   - WPForms > Add New
   - Use "Simple Contact Form" template
   - Add fields: Name, Email, Theatre Company, Message
   - Save and copy shortcode
   - Add to Contact page

   **b) SEO (Yoast SEO)**
   - Search: "Yoast SEO"
   - Install and Activate
   - Run configuration wizard

   **c) Security (Wordfence)**
   - Search: "Wordfence Security"
   - Install and Activate
   - Run initial scan

---

### Step 6: Configure Theme Settings (5 minutes)

1. **Go to:** Appearance > Customize

2. **Site Identity:**
   - Upload logo (if you have it)
   - Site Icon: Upload 512x512px favicon

3. **McBride Creative Options:**
   - Contact Email: `hello@mcbridecreative.com`
   - Location: `Sault Ste. Marie, Ontario, Canada`
   - Instagram: `@mcbridecreative`
   - LinkedIn: (your profile URL)
   - CTA Button Text: `Get Started`
   - CTA Button URL: `/contact`

4. **Click "Publish"**

---

### Step 7: Create Navigation Menu (3 minutes)

1. **Go to:** Appearance > Menus

2. **Create new menu:** "Main Navigation"

3. **Add pages:**
   - Home
   - Portfolio
   - Services
   - About
   - Contact

4. **Menu Settings:**
   - Check "Primary Navigation"

5. **Save Menu**

---

### Step 8: Add Testimonials (5 minutes)

1. **Testimonials > Add New**

2. **Title:** "Musical Comedy Guild"

3. **Content (the quote):**
   ```
   Jason's designs helped us sell out our production of Little Shop of Horrors. The posters and social graphics were professional and eye-catching. Highly recommend!
   ```

4. **Featured Image:** Theatre logo or client photo (optional)

5. **Publish**

Add 1-2 more testimonials.

---

## ✅ Review Your Site

Visit **http://localhost:8080** and review:

- [x] Homepage displays with all sections
- [x] Navigation menu works
- [x] Portfolio page shows items
- [x] Services page displays packages
- [x] About page has your story
- [x] Contact page has form and info
- [x] Site looks good on mobile (resize browser)
- [x] Colors match brand (Burgundy, Gold, Black)

---

## 🛠️ Managing Your Local Site

### Stop the Site
```bash
cd /home/jmcbride/projects/wordpress
docker compose stop
```

### Start the Site Again
```bash
cd /home/jmcbride/projects/wordpress
docker compose start
```

### View Logs
```bash
docker compose logs -f wordpress
```

### Access WordPress Files
All WordPress files are in:
```
/home/jmcbride/projects/wordpress/wordpress-data/
```

Your theme is at:
```
/home/jmcbride/projects/wordpress/mcbride-creative-theme/
```

### Remove Everything (Clean Slate)
```bash
docker compose down -v
# This removes containers and database (you'll lose all content)
```

---

## 📦 Export for DreamHost

Once you've approved the site, see **EXPORT-TO-DREAMHOST.md** for deployment instructions.

---

## 🆘 Troubleshooting

### Site Not Loading
```bash
docker compose ps  # Check if containers are running
docker compose restart  # Restart containers
```

### Database Connection Error
```bash
docker compose down
docker compose up -d
# Wait 30 seconds for MySQL to initialize
```

### Port Already in Use (8080)
Edit `docker-compose.yml` and change:
```yaml
ports:
  - "8080:80"  # Change 8080 to 8090 or another port
```

Then restart:
```bash
docker compose down
docker compose up -d
```

### Can't Access Admin
Clear browser cache or try incognito mode.

### Reset WordPress Admin Password
Use phpMyAdmin at http://localhost:8081 to update the password in the database.

---

## 💡 Tips

1. **Save Your Work:** All content is saved in Docker volumes and `wordpress-data/`

2. **Backup Before Major Changes:**
   ```bash
   docker compose exec wordpress wp db export /var/www/html/backup-$(date +%Y%m%d).sql --path=/var/www/html
   ```

3. **Test Thoroughly:** Review on mobile, check all links, test contact form

4. **Take Screenshots:** Document any issues or desired changes

---

## 📞 Next Steps

1. ✅ Complete setup (Steps 1-8 above)
2. ✅ Add real content (portfolio images, your photos)
3. ✅ Review and approve the design
4. ✅ Test all functionality
5. ✅ When ready, proceed to export (see EXPORT-TO-DREAMHOST.md)

---

**Your WordPress site is ready to configure!**

Visit: **http://localhost:8080**

Questions? Check the troubleshooting section or documentation files.
