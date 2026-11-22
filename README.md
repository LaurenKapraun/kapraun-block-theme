# Lauren Kapraun Portfolio

The custom WordPress block theme behind [laurenkapraun.com](https://laurenkapraun.com). I designed and built it to show the same skills the site talks about: clean front-end code, a design system in `theme.json`, and a site that stays fast and easy to change.

## At a glance

| | |
|---|---|
| Type | Block theme (Full Site Editing), no page builder |
| WordPress | 7.0 or newer, tested on 7.1 |
| PHP | 8.0 or newer, runs on 8.3 |
| Mobile Lighthouse at launch (Nov 2026) | Performance 99 · Accessibility 100 · Best Practices 100 · SEO 100 |

## What's in the theme

```
lauren-kapraun-portfolio/
├── theme.json            Design tokens and global styles
├── style.css             Theme header
├── functions.php         Loads theme.css on the site and in the editor
├── assets/
│   ├── css/theme.css     The few styles theme.json can't express
│   └── fonts/            Libre Caslon Text and Nunito Sans, self-hosted
├── templates/
│   ├── index.html        Fallback listing template
│   └── page.html         Blank canvas: header, content, footer
└── parts/
    ├── header.html       Sticky header with logo and menu
    ├── footer.html       Footer menu, links and credits
    └── navigation-overlay.html   Block-built mobile menu (WordPress 7)
```

### Design tokens (`theme.json`)

- **Colors:** Lace `#f4e5df`, Powder Blue `#c3d6e8`, Icicle `#dbdfe0`, Harbor Blue `#3b6589`, Slate Ink `#26313c`, Slate Gray `#4f5a64`, Border `#c9b7af`, White
- **Type:** Libre Caslon Text for headings, Nunito Sans for body, with fluid sizes that scale between phone and desktop
- **Layout:** 1250px content width

The site editor, the page content and `theme.css` all read from these tokens, so a change in one place updates the whole site.

### Custom CSS (`assets/css/theme.css`)

CSS is only for what `theme.json` can't do:

- the sticky header clearing the admin bar when logged in
- the menu underline and submenu cards
- the mobile menu switching on at 644px instead of WordPress's default 600px
- the double fine-line border on the stat boxes, like a bookplate
- shadows and corners on the case study cards

Transitions are limited to color and shadow, and they turn off for visitors who prefer reduced motion. The file uses native CSS nesting.

## Decisions

**My own theme instead of restyling someone else's.** A child theme of an existing block theme would have launched sooner. Writing my own shows I can build what those themes are.

**WordPress instead of a static site generator.** The roles I want run on WordPress, so the portfolio runs on it too.

**Pages built from blocks, on a blank template.** The page template has no title or padding, so each page is a stack of full-width sections built in the editor. The closing "Want to talk about a website?" section is a synced pattern with overrides: one design, with the heading and message editable per page.

**Performance as part of the build.** Two self-hosted font families, no JavaScript framework, no page builder, and no plugin for anything WordPress already does.

## Working on it

1. Clone into `wp-content/themes/lauren-kapraun-portfolio`. Keep that folder name, because WordPress stores site editor changes under it.
2. Activate it under **Appearance → Themes**.
3. Make design changes in the site editor. Then save them into the theme files with [Create Block Theme](https://wordpress.org/plugins/create-block-theme/) (**Save Changes to Theme**, with **Save Patterns** off so synced patterns stay synced), and commit right away.
4. Edit `theme.css` and `functions.php` in a code editor.

I build in [Local](https://localwp.com) and deploy to the live site from there.

## Known limits

- This is a personal theme, not a general-purpose one. There's no options panel and it isn't on WordPress.org.
- The header and footer logos load from the site's Media Library, so a fresh install shows missing images until you add your own.
- Page content, menus and the synced closing pattern live in the database, not in the theme.
- The theme bundles every Nunito Sans weight. Trimming it to the weights the site uses is on the list.

## Credits

Built by [Lauren Kapraun](https://laurenkapraun.com). Claude was my design and coding partner: it mocked up options for me to choose from and reviewed my CSS. I made the calls and built the theme.

Fonts: [Libre Caslon Text](https://fonts.google.com/specimen/Libre+Caslon+Text) and [Nunito Sans](https://fonts.google.com/specimen/Nunito+Sans), both under the SIL Open Font License.

## License

GNU General Public License v3 or later. See [LICENSE](LICENSE).
