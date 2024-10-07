# Professional Portfolio Template

This is a modern, responsive portfolio template designed for professionals in the tech industry. It's fully customizable and easy to set up.

## Features

- Responsive design
- Customizable content via config file
- Animated hero section with typed text effect
- Skills and projects showcase
- Contact section
- Social media links

## Getting Started

1. Download the template files.
2. Open `config.js` in a text editor.
3. Customize the content in `config.js` to match your personal information, skills, and projects.
4. Replace placeholder images in the `images` folder with your own images.
5. Test the website locally by opening `index.html` in a web browser.

## Customization

### Changing Content

Most of the content can be changed in the `config.js` file. Here's what you can modify:

- Site title and navigation logo
- Navigation links
- Hero section content and typed strings
- About section content and tech stack
- Skills list
- Projects list
- Contact information
- Footer content and social links

### Changing Colors

To change the color scheme, modify the CSS variables in the `:root` selector at the top of the CSS section in `index.html`:

```css
:root {
    --primary-color: #00ffff;
    --secondary-color: #ff00ff;
    --background-color: #000033;
    --text-color: #ffffff;
    --nav-bg: rgba(0, 0, 51, 0.8);
}
```

### Adding Custom CSS

You can add your own custom CSS at the end of the style section in `index.html`.

## Deployment

To deploy your website:

1. Upload all files (including `index.html`, `config.js`, and your images) to your web hosting service.
2. Ensure that `index.html` is set as the default page.

## Support

If you need help customizing this template, please refer to the comments in the `config.js` file or contact the template creator.

https://discord.gg/mKNfGNQeuH