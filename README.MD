

### Regular method

* Clone repo `git clone https://github.com/denischweya/mabudo/ && cd mabudo`
* Run `rm -rf .git` to remove git (or `rmdir .git` for Windows)
* Run `npm install`
* Run `npm run watch` to start developing

### General

You will find the editable CSS and Javascript files within the `/resources` folder.

Before you use your theme in production, make sure you run `npm run production`.

## NPM Scripts

There are several NPM scripts available. You'll find the full list in the `package.json` file under "scripts". A script is executed through the terminal by running `npm run script-name`.

| Script     | Description                                                                    |
|------------|--------------------------------------------------------------------------------|
| production | Creates a production (minified) build of app.js, app.css and editor-style.css. |
| dev        | Creates a development build of app.js, app.css and editor-style.css.           |
| watch      | Runs several watch scripts concurrently.                                       |

## Tips

### Styling within the block editor

To make the editing experience within the block editor more in line with the front end styling, a `editor-style.css` is generated.

### CSS classes generated by TailPress

CSS classes for alignment (full, wide etc.) are generated automatically. You can opt-out on this by removing the plugin from the `tailwind.config.js` file.

### Customize colors

Several colors and font sizes are defined from the beginning. You can modify them in `theme.json`.

### Command `tailpress` not found

Make sure to place Composer's global vendor bin directory in your `$PATH` so the `tailpress` executable can be found by your system. This directory exists in different locations based on your operating system; however, some common locations include:

- macOS: `$HOME/.composer/vendor/bin`
- Windows: `%USERPROFILE%\AppData\Roaming\Composer\vendor\bin`
- GNU / Linux Distributions: `$HOME/.config/composer/vendor/bin or $HOME/.composer/vendor/bin`

You could also find the composer's global installation path by running `composer global about` and looking up from the first line.

This theme has a mix of Tailwind and custom CSS
