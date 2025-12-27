# McBride Creative - Quick Reference Card

Essential URLs, credentials, and commands at a glance.

---

## 🌐 Local Site Access

| Service | URL | Credentials |
|---------|-----|-------------|
| **WordPress Site** | http://localhost:8080 | (set during WP install) |
| **WordPress Admin** | http://localhost:8080/wp-admin | Username/Password you created |
| **phpMyAdmin** | http://localhost:8081 | root / rootpassword |

---

## 🐳 Docker Commands

```bash
# Navigate to project directory
cd /home/jmcbride/projects/wordpress

# Start WordPress
docker compose up -d

# Stop WordPress
docker compose stop

# Restart WordPress
docker compose restart

# View logs
docker compose logs -f wordpress

# Check status
docker compose ps

# Stop and remove everything (CAUTION: deletes all data)
docker compose down -v
```

---

## 📁 Important File Locations

```
/home/jmcbride/projects/wordpress/
├── mcbride-creative-theme/          # Your custom theme
├── wordpress-data/                  # WordPress files
│   └── wp-content/
│       ├── themes/
│       ├── plugins/
│       └── uploads/                 # Your images
├── docker-compose.yml               # Docker configuration
├── LOCAL-SETUP-INSTRUCTIONS.md      # Setup guide
├── EXPORT-TO-DREAMHOST.md          # Deployment guide
└── QUICK-REFERENCE.md (this file)
```

---

## 🎨 Brand Assets

### Colors
```css
Primary Black:    #000000
Primary Burgundy: #8B0000
Charcoal Grey:    #333333
Gold Accent:      #D4AF37
White:            #FFFFFF
Off White:        #F5F5F5
```

### Typography
- **Headings:** Playfair Display (Google Fonts)
- **Body:** Inter (Google Fonts)

### Logo Specs
- **Header:** 400x100px (PNG with transparency)
- **Favicon:** 512x512px (PNG)

---

## ⚙️ WordPress Settings Quick Setup

### After Initial Install

1. **Settings > General**
   - Site Title: McBride Creative
   - Tagline: Designs that deserve an encore
   - Email: hello@mcbridecreative.com

2. **Settings > Reading**
   - Your homepage displays: A static page
   - Homepage: Home
   - Search engine visibility: ☐ unchecked

3. **Settings > Permalinks**
   - Post name

4. **Appearance > Customize > McBride Creative Options**
   - Contact Email: hello@mcbridecreative.com
   - Location: Sault Ste. Marie, Ontario, Canada
   - Instagram: @mcbridecreative

---

## 📝 Essential Pages to Create

| Page | Template | Status |
|------|----------|--------|
| Home | Homepage | Set as static homepage |
| Portfolio | Default | - |
| Services | Default | - |
| About | Default | - |
| Contact | Default | - |

---

## 🔌 Recommended Plugins

| Plugin | Purpose | Priority |
|--------|---------|----------|
| WPForms Lite | Contact forms | Required |
| Yoast SEO | Search optimization | Recommended |
| Wordfence | Security | Recommended |
| UpdraftPlus | Backups | Recommended |
| WP Rocket | Caching/Performance | Optional |
| Smush | Image optimization | Optional |

---

## 📊 Content Checklist

### Portfolio Items
- [ ] Little Shop of Horrors
- [ ] The Little Mermaid
- [ ] Other MCG productions
- [ ] 3-6 total items minimum

### Testimonials
- [ ] MCG testimonial
- [ ] 2-3 total minimum

### Images Needed
- [ ] Logo (400x100px)
- [ ] Favicon (512x512px)
- [ ] Headshot for About page
- [ ] Portfolio images (1200x800px each)
- [ ] Show posters (high-res)

---

## 🚀 Deployment Workflow

### 1. Local Setup
```
✓ Install WordPress locally (Docker)
✓ Configure WordPress
✓ Activate theme
✓ Create pages
✓ Add content
✓ Install plugins
✓ Test everything
```

### 2. Review & Approve
```
⏳ Review design
⏳ Test functionality
⏳ Check mobile responsive
⏳ Approve for deployment
```

### 3. Export to DreamHost
```
⏳ Install All-in-One WP Migration
⏳ Export local site
⏳ Set up WordPress on DreamHost
⏳ Import site to DreamHost
⏳ Configure SSL
⏳ Test live site
```

### 4. Go Live
```
⏳ Final QA
⏳ Submit to search engines
⏳ Announce launch
⏳ Monitor & maintain
```

---

## 🆘 Quick Troubleshooting

| Problem | Solution |
|---------|----------|
| Site not loading | `docker compose restart` |
| Can't log in | Clear browser cache, try incognito |
| Changes not showing | Hard refresh: Ctrl+Shift+R |
| Port 8080 in use | Edit docker-compose.yml, change port |
| Database error | `docker compose down && docker compose up -d` |
| Images not showing | Check uploads folder permissions |

---

## 📞 Support Resources

### Documentation
- **Setup:** LOCAL-SETUP-INSTRUCTIONS.md
- **Export:** EXPORT-TO-DREAMHOST.md
- **Theme:** mcbride-creative-theme/README.md
- **Full Install:** INSTALLATION.md

### WordPress Resources
- **WordPress.org:** https://wordpress.org/support/
- **Block Editor:** https://wordpress.org/support/article/wordpress-editor/
- **Theme Handbook:** https://developer.wordpress.org/themes/

### Contact
- **Email:** hello@mcbridecreative.com
- **Location:** Sault Ste. Marie, Ontario, Canada

---

## 🎯 Next Steps

**Right Now:**
1. Visit http://localhost:8080
2. Complete WordPress setup
3. Follow LOCAL-SETUP-INSTRUCTIONS.md

**This Week:**
1. Add all content
2. Upload images
3. Test thoroughly
4. Get approval

**Next Week:**
1. Follow EXPORT-TO-DREAMHOST.md
2. Deploy to live site
3. Announce launch!

---

**Build something worthy of an encore!** 🎭
