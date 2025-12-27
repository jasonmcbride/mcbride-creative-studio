# McBride Creative WordPress Website - Project Context

## Project Overview

**Project Name:** McBride Creative Business Website
**Client/Owner:** Jason McBride
**Project Type:** WordPress Block Editor (Gutenberg) Website
**Project Stage:** Pre-development / Planning
**Repository:** /home/jmcbride/projects/wordpress
**Last Updated:** December 27, 2025

## Project Goal

Create an award-winning, professional WordPress website for McBride Creative that:
- Establishes credibility as premier marketing design service for community theatre in Canada
- Showcases portfolio work (MCG and future clients)
- Clearly communicates service packages and pricing
- Generates leads through contact form conversions
- Reflects sophisticated, theatrical elegance without gimmicks
- Achieves 90+ Lighthouse scores across all metrics
- Provides exceptional user experience on all devices

## Business Context

**Full Business Details:** See `/home/jmcbride/projects/wordpress/mcbride-creative-business-context.md`

### Quick Reference

**Business Name:** McBride Creative
**Tagline:** "Designs that deserve an encore"
**Services:** Marketing design for community theatre (show posters, social graphics, season branding, programs, email templates)
**Target Market:** Community theatre companies across Canada (4-8 productions/year, volunteer-run)
**Unique Value:** Theatre insider knowledge + proven MCG portfolio + designer who understands theatre culture

**Brand Colors:**
- Primary: Black (#000000) or Burgundy (#8B0000)
- Secondary: Charcoal Grey (#333333)
- Accent: Gold (#D4AF37)
- Background: White (#FFFFFF) or Off-white (#F5F5F5)

**Key Differentiators:**
- 2 years proven work with Musical Comedy Guild (MCG) Sault Ste. Marie
- Theatre insider (not outsider trying to serve theatre)
- Technical background (developer) + creative design skills
- Focus on filling seats and results, not just pretty designs
- Understanding of irreplaceable live theatre experience

## Technical Requirements

### WordPress Specifications
- **WordPress Version:** Latest 6.x (6.4+)
- **Theme Type:** Custom Block Theme (Full Site Editing)
- **PHP Version:** 8.0+
- **Development Approach:** Modern block editor, no page builders
- **Build Tools:** @wordpress/scripts, webpack, npm

### Design Standards
- **Mobile-first:** Responsive design with breakpoints at 768px, 1024px, 1440px
- **Performance:** 90+ Lighthouse scores (Performance, Accessibility, Best Practices, SEO)
- **Core Web Vitals:** Pass all metrics (LCP < 2.5s, FID < 100ms, CLS < 0.1)
- **Accessibility:** WCAG 2.1 AA compliance minimum
- **Browser Support:** Chrome, Firefox, Safari, Edge (latest 2 versions)
- **Typography:** Professional font pairings with clear hierarchy
- **Color Contrast:** Minimum 4.5:1 for body text, 3:1 for large text

### Performance Targets
- **Page Load Time:** < 2 seconds on 3G connection
- **Total Page Size:** < 1MB (excluding portfolio images)
- **Image Optimization:** WebP format with fallbacks, responsive images
- **JavaScript:** Minimal, deferred non-critical scripts
- **CSS:** Modern CSS (Grid, Flexbox, Custom Properties), minimal dependencies

## Site Architecture

### Primary Pages

1. **Homepage**
   - Hero section with strong headline and portfolio visual
   - Service packages overview
   - Portfolio highlights (3-6 projects)
   - Client testimonial section
   - About teaser
   - Primary CTA (contact/consultation)

2. **Portfolio/Work**
   - Filterable gallery (posters, social graphics, programs)
   - MCG case study with before/after
   - Project detail views
   - Results/impact metrics
   - "Designed by McBride Creative" showcase

3. **Services**
   - Package comparison (Per-Show, Season, Premium)
   - Detailed service descriptions
   - Process timeline
   - Pricing (transparent or "starting at")
   - Add-on services
   - Contact CTA

4. **About**
   - Jason's story and theatre journey
   - MCG involvement and credibility
   - Developer + creative background
   - Philosophy (selling live theatre experience)
   - Professional photo
   - Trust signals

5. **Contact**
   - Contact form (name, email, theatre company, show/season info, message)
   - Business details (email, location, social links)
   - Response expectations
   - Optional: Calendar for consultation booking

### Secondary Pages/Sections
- Blog/Resources (future expansion for theatre marketing tips)
- FAQ (common questions about services)
- Privacy Policy
- Terms of Service

## Custom Blocks Needed

### Priority Custom Blocks

1. **Portfolio Grid Block**
   - Filterable by project type
   - Lightbox/modal for project details
   - Lazy loading images
   - Responsive grid layout

2. **Service Package Block**
   - Comparison table layout
   - Highlighting popular/recommended package
   - Custom styling for pricing
   - CTA buttons per package

3. **Testimonial Carousel Block**
   - Client quotes with attribution
   - Optional client photos/logos
   - Auto-rotating with manual controls
   - Accessible carousel implementation

4. **CTA Section Block**
   - Conversion-focused design
   - Customizable headline, text, button
   - Background color/image options
   - Multiple layout variations

5. **Before/After Block**
   - Image comparison slider
   - Side-by-side or slider interaction
   - Mobile-optimized view
   - Captions for context

6. **Stats Counter Block**
   - Animated counting on scroll
   - Shows designed, years experience, client stats
   - Icon support
   - Customizable colors

7. **Process Timeline Block**
   - Visual workflow representation
   - Step-by-step process
   - Icons or numbers
   - Horizontal or vertical layout

### Block Patterns Needed
- Hero section variations
- Portfolio grid layouts
- Testimonial section patterns
- Service comparison layouts
- About section patterns
- Footer patterns

## Content Strategy

### Messaging Priorities

**Primary Message:** "I'm a designer who understands theatre. Your productions deserve marketing materials as polished as your performances."

**Key Value Props:**
1. Theatre insider knowledge (timelines, budgets, culture)
2. Proven results (MCG portfolio, 2 years experience)
3. Professional credibility (developer precision + creative skill)
4. Results focus (filling seats, not just pretty designs)
5. Understanding of live theatre's irreplaceable experience

### Content Tone
- Professional but approachable
- Confident without being arrogant
- Passionate about theatre
- Results-oriented
- Trustworthy for volunteer boards
- Sophisticated (no theatrical clichés)

### SEO Keywords (Target)
- Community theatre marketing design
- Theatre marketing design Canada
- Show poster design
- Theatre social media graphics
- Community theatre branding
- Theatre season marketing
- Professional theatre design

## Technical Stack

### Core Technologies
- **CMS:** WordPress 6.x
- **Theme:** Custom Block Theme
- **Languages:** PHP 8.x, JavaScript (ES6+), CSS3
- **Framework:** React (for custom blocks)
- **Build:** @wordpress/scripts, webpack
- **CSS Methodology:** BEM naming, SCSS/SASS
- **Version Control:** Git

### Recommended Plugins (Minimal)
- **Forms:** WPForms or Contact Form 7
- **SEO:** Yoast SEO or Rank Math
- **Performance:** WP Rocket or LiteSpeed Cache
- **Security:** Wordfence or Sucuri
- **Backup:** UpdraftPlus
- **Analytics:** MonsterInsights (Google Analytics)

### Development Tools
- **Local Development:** Local by Flywheel, MAMP, or Docker
- **Code Editor:** VS Code with WordPress extensions
- **Design:** Figma (for mockups/wireframes)
- **Image Optimization:** Photoshop/Canva + ImageOptim/TinyPNG
- **Testing:** Chrome DevTools, Lighthouse, WAVE (accessibility)

## Hosting & Domain

### Domain Strategy
**Brand Name:** McBride Creative (regardless of domain extension)

**Domain Options:**
- mcbridecreative.co
- mcbridecreative.design
- hellomcbridecreative.com

**Status:** To be determined

### Hosting Recommendations
- **Managed WordPress:** WP Engine, Kinsta, Flywheel
- **Canadian Hosting:** Consider Canadian servers for faster access to Canadian theatre clients
- **Requirements:** PHP 8.x, SSL certificate, CDN, daily backups
- **Performance:** LiteSpeed/Nginx, Redis/Memcached caching

### Email
**Primary:** hello@mcbridecreative.com
**Hosting:** Google Workspace or hosting provider email

## Design Preferences

### Visual Style
- Clean, minimalist layouts
- Generous white space and breathing room
- Bold, sophisticated typography
- Theatrical elegance without gimmicks
- Professional photography emphasis
- Intentional use of gold accent color
- High contrast for readability

### Typography Direction
- **Headings:** Serif font (elegant, theatrical) OR bold sans-serif (modern, clean)
- **Body:** Clean sans-serif for readability
- **Pairing Examples:**
  - Playfair Display (headings) + Inter (body)
  - Cormorant Garamond (headings) + Open Sans (body)
  - Montserrat Bold (headings) + Lato (body)

### Layout Style
- Asymmetrical grids where appropriate
- Full-width sections for impact
- Generous padding/margins (60-120px sections)
- Card-based layouts for services/portfolio
- Sticky navigation
- Smooth scroll interactions

### Imagery Strategy
- Portfolio work as hero images
- High-quality theatre photography (avoid stock clichés)
- Before/after design comparisons
- Professional headshot of Jason
- Client logos (theatre companies)
- Avoid: Curtains, masks, marquee lights (too literal)

## Conversion Goals

### Primary Conversion
**Contact Form Submission:** Theatre companies requesting consultation or quote

### Secondary Conversions
- Email newsletter signup (theatre marketing tips)
- Social media follows (@mcbridecreative)
- Portfolio project views (engagement)
- Service package page visits

### Call-to-Action Strategy
- Multiple CTAs throughout site
- Primary CTA: "Get Started" / "Book Consultation"
- Secondary CTA: "View Portfolio" / "See Our Work"
- Tertiary CTA: "Follow on Instagram"

## Success Metrics

### Launch Criteria
- [ ] Lighthouse scores: 90+ across all categories
- [ ] Mobile responsiveness: Perfect on all devices
- [ ] Cross-browser testing: Passed on Chrome, Firefox, Safari, Edge
- [ ] Accessibility audit: WCAG 2.1 AA compliant
- [ ] Content complete: All pages finalized
- [ ] SEO basics: Meta descriptions, title tags, structured data
- [ ] Analytics installed: Google Analytics tracking
- [ ] Forms tested: Contact forms working correctly
- [ ] Security: SSL, security plugins configured
- [ ] Backups: Automated backup system in place

### Post-Launch KPIs (3-6 months)
- **Traffic:** 100+ monthly visitors
- **Conversion Rate:** 5%+ contact form submissions
- **Engagement:** 2+ minute average session duration
- **Bounce Rate:** < 60%
- **SEO:** First page ranking for "community theatre marketing design Canada"
- **Portfolio Views:** 50+ monthly portfolio page views
- **Social Traffic:** 20%+ traffic from Instagram

## Current Project Status

### Completed
- ✅ Business context document created
- ✅ Brand identity defined (name, colors, tagline)
- ✅ Service packages outlined
- ✅ Target market identified
- ✅ Digital presence strategy (Instagram, LinkedIn)
- ✅ WordPress specialist agent created
- ✅ Project context file created (this document)

### In Progress
- ⏳ Domain selection and registration
- ⏳ Social media handle acquisition
- ⏳ Logo design in Canva
- ⏳ Portfolio documentation (MCG work)

### Not Started
- 📋 Hosting provider selection
- 📋 WordPress installation and setup
- 📋 Site architecture wireframing
- 📋 Visual design mockups
- 📋 Content writing and finalization
- 📋 Custom block development
- 📋 Theme development
- 📋 Performance optimization
- 📋 Testing and QA
- 📋 Launch preparation

## Development Workflow

### Phase 1: Planning & Design (Current)
1. Finalize domain and hosting
2. Create wireframes for all pages
3. Design homepage mockup for approval
4. Design interior page templates
5. Create design system/style guide
6. Finalize all copy and content
7. Gather/prepare portfolio images

### Phase 2: Development Setup
1. Set up local WordPress environment
2. Initialize custom block theme structure
3. Configure build tools (@wordpress/scripts)
4. Set up version control (Git)
5. Create theme.json with design tokens
6. Build base template structure

### Phase 3: Block & Template Development
1. Develop custom blocks (priority order)
2. Create block patterns
3. Build page templates
4. Implement responsive layouts
5. Add micro-interactions and animations
6. Integrate contact forms

### Phase 4: Content & Optimization
1. Add final content to all pages
2. Optimize and upload images
3. Implement SEO (meta tags, structured data)
4. Performance optimization (caching, minification)
5. Accessibility audit and fixes
6. Cross-browser testing

### Phase 5: Launch
1. Set up production hosting
2. Configure DNS and SSL
3. Install security and backup plugins
4. Set up Google Analytics
5. Final QA testing
6. Go live!
7. Submit to search engines

## Important Considerations

### Security
- Keep WordPress core, themes, plugins updated
- Use strong passwords and 2FA
- Implement security headers
- Regular backups (daily)
- Malware scanning
- Limit login attempts
- Disable XML-RPC if not needed

### Maintenance
- Monthly WordPress updates
- Quarterly content updates
- Regular backup verification
- Performance monitoring
- Uptime monitoring
- Security scanning

### Legal
- Privacy Policy (GDPR/PIPEDA compliant)
- Terms of Service
- Cookie consent (if using cookies)
- Contact form data handling
- Client work usage rights (MCG permission)

## Questions to Resolve

### Business Decisions
- [ ] Final domain selection?
- [ ] Hosting provider preference?
- [ ] Service package pricing (specific amounts)?
- [ ] Email hosting solution?
- [ ] Analytics preferences (Google Analytics, alternatives)?

### Content Needs
- [ ] Professional headshot available?
- [ ] MCG portfolio images ready (high-res)?
- [ ] MCG permission to use work in portfolio?
- [ ] Client testimonials from MCG?
- [ ] Metrics/results to showcase?
- [ ] Final copy for all pages?

### Design Preferences
- [ ] Logo finalized?
- [ ] Typography preferences (serif vs sans-serif)?
- [ ] Homepage hero image/concept?
- [ ] Animation preferences (subtle vs bold)?
- [ ] Video content plans?

### Technical Preferences
- [ ] Blog/resources section priority?
- [ ] Newsletter integration needed at launch?
- [ ] Social media feed embedding?
- [ ] Live chat/chatbot interest?
- [ ] Booking/scheduling integration?

## Resources & References

### Business Context
- Primary: `/home/jmcbride/projects/wordpress/mcbride-creative-business-context.md`
- WordPress Agent: `/home/jmcbride/projects/wordpress/.claude/agents/wordpress-block-expert.md`

### WordPress Documentation
- Block Editor Handbook: https://developer.wordpress.org/block-editor/
- Theme Developer Handbook: https://developer.wordpress.org/themes/
- @wordpress/scripts: https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/

### Design Inspiration
- Award-winning portfolio sites
- Broadway/theatrical campaign aesthetics
- Modern typography trends
- Minimalist web design

### Tools
- WordPress Coding Standards: https://developer.wordpress.org/coding-standards/
- Accessibility Testing: https://wave.webaim.org/
- Performance Testing: https://pagespeed.web.dev/
- SEO Testing: https://search.google.com/test/rich-results

## Contact & Social Media

**Business Email:** hello@mcbridecreative.com
**Location:** Sault Ste. Marie, Ontario, Canada
**Instagram:** @mcbridecreative (pending acquisition)
**LinkedIn:** Jason McBride (dual identity: Developer + McBride Creative)

---

## Notes for AI Agents

### Context Awareness
This website is for a **pre-launch business** building its initial digital presence. Jason is:
- Transitioning from volunteer designer (MCG) to professional service provider
- Leveraging 2 years proven experience into credible business
- Developer by trade, designer by passion
- Building personal brand through business name

### Development Philosophy
- **Quality over speed:** This is the business's primary digital presence
- **Performance matters:** Fast sites build trust and improve SEO
- **Accessibility is essential:** Theatre is inclusive; website must be too
- **Mobile-first:** Many theatre decision-makers browse on mobile
- **Results-focused:** Every element should support conversion goals

### Design Approach
- **Avoid theatre clichés:** No curtains, masks, marquee lights
- **Sophisticated elegance:** High-end aesthetic that builds trust
- **Portfolio prominence:** Work speaks louder than words
- **Clear messaging:** Immediate understanding of value proposition
- **Professional credibility:** Technical background + creative skill = trustworthy

### Remember
We're not just building a website—we're establishing **McBride Creative as the premier marketing design service for community theatre in Canada**. Every pixel, every interaction, every word should reflect the professionalism, creativity, and theatrical passion that defines this business.

Build something worthy of an encore. 🎭

---

**Document Version:** 1.0
**Created:** December 27, 2025
**Purpose:** Comprehensive project context for WordPress website development
