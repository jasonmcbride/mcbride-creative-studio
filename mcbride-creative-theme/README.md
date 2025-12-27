# McBride Creative WordPress Theme

A custom WordPress block theme for McBride Creative - Professional marketing design for community theatre companies across Canada.

**Tagline:** Designs that deserve an encore.

## Features

### Modern Block Theme
- Built with WordPress Block Editor (Gutenberg)
- Full Site Editing (FSE) support
- theme.json for centralized design tokens
- Custom block patterns and template parts
- No page builders required

### Design Excellence
- **Sophisticated Typography:** Playfair Display headings + Inter body text
- **Brand Colors:** Black, Burgundy (#8B0000), Gold (#D4AF37) accent
- **Responsive Design:** Mobile-first with fluid layouts
- **Accessibility:** WCAG 2.1 AA compliant
- **Performance Optimized:** 90+ Lighthouse scores target

### Custom Post Types
- **Portfolio:** Showcase theatre design work with categories
- **Testimonials:** Client quotes and success stories
- **Custom Taxonomies:** Portfolio categories for filtering

### Key Pages
1. **Homepage** - Hero, services, portfolio highlights, stats, testimonials, CTA
2. **Portfolio** - Filterable gallery with case studies
3. **Services** - Package comparison and pricing
4. **About** - Founder story and credibility
5. **Contact** - Contact form and business details

## Installation

### Requirements
- WordPress 6.4 or higher
- PHP 8.0 or higher
- Node.js 16.0 or higher (for development)

### Steps

1. **Upload Theme**
   ```bash
   # Copy theme to WordPress themes directory
   cp -r mcbride-creative-theme /path/to/wordpress/wp-content/themes/
   ```

2. **Activate Theme**
   - Log in to WordPress Admin
   - Go to Appearance > Themes
   - Activate "McBride Creative"

3. **Import Demo Content** (optional)
   - Install WordPress Importer plugin
   - Import sample portfolio items and pages

4. **Configure Settings**
   - Appearance > Customize > McBride Creative Options
   - Set contact email, location, social media handles
   - Upload logo

## Development

### Setup Development Environment

1. **Install Dependencies**
   ```bash
   cd mcbride-creative-theme
   npm install
   ```

2. **Start Development**
   ```bash
   npm start
   ```

3. **Build for Production**
   ```bash
   npm run build
   ```

### File Structure

```
mcbride-creative-theme/
├── assets/
│   ├── css/
│   │   ├── custom.css       # Main stylesheet
│   │   └── editor.css       # Editor styles
│   ├── js/
│   │   └── main.js          # Main JavaScript
│   └── images/              # Theme images
├── blocks/                  # Custom blocks (to be developed)
│   ├── portfolio-grid/
│   ├── service-packages/
│   ├── testimonial-carousel/
│   ├── cta-section/
│   ├── before-after/
│   ├── stats-counter/
│   └── process-timeline/
├── patterns/                # Block patterns
├── parts/
│   ├── header.html          # Site header
│   └── footer.html          # Site footer
├── templates/
│   ├── index.html           # Default template
│   ├── homepage.html        # Homepage template
│   ├── portfolio.html       # Portfolio template
│   └── ...
├── inc/
│   ├── custom-post-types.php
│   ├── customizer.php
│   └── helpers.php
├── theme.json               # Design tokens & settings
├── style.css                # Theme info
├── functions.php            # Theme setup
├── package.json             # Node dependencies
└── README.md                # This file
```

## Customization

### Colors

Edit `theme.json` to modify the color palette:

```json
{
  "settings": {
    "color": {
      "palette": [
        {
          "slug": "primary-burgundy",
          "color": "#8B0000",
          "name": "Primary Burgundy"
        }
        // ... more colors
      ]
    }
  }
}
```

### Typography

Google Fonts (Playfair Display & Inter) are loaded via `functions.php`. To change fonts:

1. Update `theme.json` font families
2. Update Google Fonts URL in `functions.php`
3. Update CSS font-family references

### Spacing & Layout

Modify spacing scale in `theme.json`:

```json
{
  "settings": {
    "spacing": {
      "spacingSizes": [
        {
          "slug": "sm",
          "size": "1rem",
          "name": "Small"
        }
        // ... more sizes
      ]
    }
  }
}
```

## Custom Blocks (To Be Developed)

The theme is designed for these custom blocks:

1. **Portfolio Grid Block** - Filterable project gallery
2. **Service Packages Block** - Comparison table with pricing
3. **Testimonial Carousel Block** - Client quotes carousel
4. **CTA Section Block** - Conversion-focused sections
5. **Before/After Block** - Design comparison slider
6. **Stats Counter Block** - Animated statistics
7. **Process Timeline Block** - Visual workflow

Block development uses `@wordpress/scripts` and React.

## Recommended Plugins

### Essential
- **Contact Form:** WPForms or Contact Form 7
- **SEO:** Yoast SEO or Rank Math
- **Performance:** WP Rocket or LiteSpeed Cache
- **Security:** Wordfence or Sucuri
- **Backup:** UpdraftPlus

### Optional
- **Analytics:** MonsterInsights (Google Analytics)
- **Image Optimization:** Smush or Imagify
- **Spam Protection:** Akismet

## Performance Optimization

### Image Optimization
- Use WebP format with fallbacks
- Implement lazy loading (native `loading="lazy"`)
- Optimize images before upload (max 1920px width)
- Use responsive images with srcset

### Caching
- Install WP Rocket or similar caching plugin
- Enable browser caching
- Use CDN for static assets (Cloudflare)

### Code Optimization
- Minify CSS/JS (handled by @wordpress/scripts build)
- Defer non-critical JavaScript
- Remove unused CSS
- Combine files where appropriate

## SEO Best Practices

1. **Meta Tags** - Use Yoast or Rank Math for meta descriptions
2. **Structured Data** - Implement schema.org markup
3. **XML Sitemap** - Generate and submit to search engines
4. **Image Alt Text** - Always add descriptive alt text
5. **Heading Hierarchy** - Proper H1-H6 structure
6. **Mobile Optimization** - Ensure perfect mobile experience

## Accessibility Features

- Semantic HTML5 markup
- ARIA labels where needed
- Keyboard navigation support
- Focus visible styles
- Skip to content link
- Screen reader text utilities
- Color contrast compliance (4.5:1 minimum)
- Reduced motion support

## Browser Support

- Chrome (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Edge (latest 2 versions)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Security

- Security headers implemented
- Input sanitization and validation
- Output escaping
- WordPress nonces for forms
- Capability checks
- No eval() or dangerous functions
- Regular WordPress updates

## Support & Documentation

### WordPress Resources
- [Block Editor Handbook](https://developer.wordpress.org/block-editor/)
- [Theme Developer Handbook](https://developer.wordpress.org/themes/)
- [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/)

### McBride Creative
- **Website:** mcbridecreative.com (pending)
- **Email:** hello@mcbridecreative.com
- **Instagram:** @mcbridecreative

## Changelog

### Version 1.0.0 (2025-12-27)
- Initial theme release
- Custom block theme with FSE support
- Homepage template with hero, services, portfolio sections
- Custom post types (Portfolio, Testimonials)
- Responsive design with mobile-first approach
- Accessibility compliant (WCAG 2.1 AA)
- Performance optimized
- Brand colors and typography implementation

## Credits

- **Theme Development:** Jason McBride
- **Fonts:** Google Fonts (Playfair Display, Inter)
- **Icons:** Social icons from various sources
- **WordPress:** Built on WordPress Block Editor

## License

This theme is licensed under the GNU General Public License v2 or later.

---

**McBride Creative** - Professional marketing design for community theatre companies.
*Designs that deserve an encore.*
