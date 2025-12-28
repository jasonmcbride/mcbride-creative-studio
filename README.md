# McBride Creative Studio

A modern, professional WordPress website for McBride Creative - specialized marketing design services for community theatre companies.

![WordPress](https://img.shields.io/badge/WordPress-6.x-blue)
![License](https://img.shields.io/badge/license-MIT-green)
![Docker](https://img.shields.io/badge/Docker-Ready-blue)

## 🎭 About

McBride Creative provides professional marketing design services for community theatre companies across Canada. This website showcases our work and services with a modern, award-winning 2025 design aesthetic.

## ✨ Features

### Modern 2025 Design
- **Clean, minimal aesthetic** with bold typography
- **Modern color palette**: Deep Black (#0A0A0A), Pure White (#FFFFFF), Vivid Red (#FF3B30)
- **Glassmorphism header** with backdrop-filter blur effects
- **Smooth animations** and micro-interactions throughout
- **Fully responsive** with fluid typography using `clamp()`

### Technical Highlights
- ✅ Custom WordPress Block Theme (FSE)
- ✅ Docker-based development environment
- ✅ Modern CSS with 2025 design trends
- ✅ Custom post types for Portfolio items
- ✅ Optimized spacing and layout system
- ✅ Active page indicators in navigation
- ✅ Smooth hover effects and transitions

## 🚀 Quick Start

### Prerequisites
- Docker & Docker Compose
- Git

### Local Development

1. **Clone the repository**
```bash
git clone git@github.com:jasonmcbride/mcbride-creative-studio.git
cd mcbride-creative-studio
```

2. **Start the Docker containers**
```bash
docker compose up -d
```

3. **Access the site**
- **Website**: http://localhost:8080
- **WordPress Admin**: http://localhost:8080/wp-admin
- **phpMyAdmin**: http://localhost:8081

4. **Complete WordPress installation**
Follow the on-screen WordPress setup wizard to create your admin account.

For detailed setup instructions, see [LOCAL-SETUP-INSTRUCTIONS.md](LOCAL-SETUP-INSTRUCTIONS.md)

## 📁 Project Structure

```
mcbride-creative-studio/
├── mcbride-creative-theme/     # Custom WordPress theme
│   ├── assets/
│   │   ├── css/               # Custom CSS files
│   │   │   ├── custom.css     # Main design system
│   │   │   └── modern-2025.css # Additional modern styles
│   │   └── js/                # JavaScript files
│   ├── parts/                 # Template parts (header, footer)
│   ├── templates/             # Page templates
│   ├── functions.php          # Theme functions
│   └── theme.json             # Theme configuration
├── docker-compose.yml         # Docker configuration
├── wordpress-data/            # WordPress files (gitignored)
└── docs/                      # Documentation files
```

## 🎨 Design System

### Color Palette
- **Primary Black**: `#0A0A0A` - Main text and headings
- **Pure White**: `#FFFFFF` - Backgrounds and contrast
- **Vivid Red**: `#FF3B30` - Accent color for CTAs and highlights
- **Grey Scale**: `#FAFAFA`, `#F5F5F5`, `#E5E5E5` for subtle backgrounds

### Typography
- **Font Family**: Inter (Google Fonts)
- **Headings**: 700-800 weight, tight letter-spacing
- **Body**: 400-500 weight, 1.7 line-height
- **Fluid sizing**: Uses `clamp()` for responsive typography

### Key Components
- Fixed glassmorphism navigation header
- Hero section with minimal design
- Service cards with 24px border-radius
- Smooth cubic-bezier animations
- Footer with Quick Links and social media

## 📝 Pages

- **Homepage** - Hero section, services overview, featured work
- **Portfolio** - Showcase of theatre marketing projects
- **Services** - Three service packages (Per-Show, Season, Premium)
- **About** - Company story and differentiators
- **Contact** - Contact form and information

## 🛠️ Development

### Managing the Theme

The custom theme is located in `mcbride-creative-theme/`. To make changes:

1. Edit template files in `templates/`
2. Modify styles in `assets/css/custom.css`
3. Update theme configuration in `theme.json`
4. Changes are reflected immediately in Docker

### CSS Architecture

- **custom.css**: Main design system with modern 2025 styles
- **modern-2025.css**: Additional design patterns
- Uses `!important` to override WordPress defaults
- Organized by component sections

### Docker Commands

```bash
# Start containers
docker compose up -d

# Stop containers
docker compose stop

# Restart WordPress
docker compose restart wordpress

# View logs
docker compose logs -f wordpress

# Stop and remove everything
docker compose down -v
```

## 📦 Deployment

For deployment to DreamHost or other hosting, see [EXPORT-TO-DREAMHOST.md](EXPORT-TO-DREAMHOST.md)

**Quick deployment steps:**
1. Install "All-in-One WP Migration" plugin
2. Export your local site
3. Set up WordPress on hosting
4. Import the site
5. Configure domain and SSL

## 📚 Documentation

- [LOCAL-SETUP-INSTRUCTIONS.md](LOCAL-SETUP-INSTRUCTIONS.md) - Detailed local setup guide
- [EXPORT-TO-DREAMHOST.md](EXPORT-TO-DREAMHOST.md) - Deployment instructions
- [QUICK-REFERENCE.md](QUICK-REFERENCE.md) - Quick reference for common tasks
- [PROJECT-SUMMARY.md](PROJECT-SUMMARY.md) - Complete project overview

## 🎯 Features

### Implemented
✅ Modern 2025 design aesthetic  
✅ Custom WordPress block theme  
✅ Glassmorphism header with fixed navigation  
✅ Responsive design with fluid typography  
✅ Custom portfolio post type  
✅ Service packages pages  
✅ Contact form structure  
✅ Social media integration  
✅ Docker development environment  
✅ Complete documentation  

### Future Enhancements
- [ ] Add portfolio filtering by category
- [ ] Implement contact form functionality (WPForms)
- [ ] Add testimonials carousel
- [ ] SEO optimization (Yoast)
- [ ] Performance optimization (caching)
- [ ] Analytics integration

## 🤝 Contributing

This is a private project for McBride Creative. For questions or support, contact hello@mcbridecreative.com

## 📄 License

Copyright © 2025 McBride Creative. All rights reserved.

## 🔗 Links

- **Live Site**: (Coming soon)
- **GitHub**: https://github.com/jasonmcbride/mcbride-creative-studio

---

**Built with ❤️ for community theatre**  
🎭 *Designs that deserve an encore*

🤖 Generated with [Claude Code](https://claude.com/claude-code)  
Co-Authored-By: Claude <noreply@anthropic.com>
