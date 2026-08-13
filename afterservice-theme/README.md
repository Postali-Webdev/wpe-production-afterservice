# Pss WP Starter Theme Framework V2

## Dependencies

### How to install gulp

Read more about [gulp](https://travismaynard.com/writing/getting-started-with-gulp).

### How to install gulp globally in Terminal

Install gulp with `npm install -g gulp`

### Installing Theme

1. Navigate to your theme directory and clone the repo. Make sure to rename the folder to `pss-theme`. - `git clone git@bitbucket.org:pssdev/pss-starter-framework-v2.git` it will pull the latest version of the theme.

### Setup

2. `cd` to the theme directory in Terminal and run `sudo npm install` or `./setup` which will install all gulp packages for the project. Enter your system password if prompted.

3. `cd` to the theme directory in Terminal and run `gulp` to build the project.

### Project

See browser-sync task on `gulpfile.js` file to run project from desktop using gulp browserSync:

	browserSync.init({
        server: {
            baseDir: "./"
        }
    });

See browser-sync task on `gulpfile.js` file to run project from server [mamp.info](https://mamp.info/) using gulp browserSync:

	browserSync.init({
        proxy: "yourlocal.dev",
        notify: false
    });

### Theme Structure

```
+-- _add-ons/ - premium page files. all included in functions.php
+-- _dist/ - development/production files, gulp takes care of this folder
+-- _gallery/ - gallery using ACF Plugin. all included in functions.php
+-- _inc/ - various helpful components code.
+-- _src/ - development working files
|   +-- fonts/ - font files
|   +-- img/ - pre-optimized images (images optimized by gulp)
|   +-- js/ - js files
|   +-- scss/ - scss files
+-- _templates/ - custom templates
+-- wordpress core files
```

### Gulp Tasks

Gulp must be running to complete certain operations like sass compilation and building production files.

See `gulpfile.js` for a list of all the tasks available.

* `gulp styles`  - compiles scss, concatenates css, generates a minify file global.min.css
* `gulp scripts` - compiles js, concatenates js, generates a minify file scripts.min.js
* `gulp images`  - copy img folder to _dist/ all images.
* `gulp` - compiles, concatenate and watch css and js files for development.

### Mobile Detect

```php


	// These lines are mandatory.

	require_once '_inc/mobile-detect.php';
	$detect = new Mobile_Detect;

	// Check for tablet environment only.
	if ( !$detect->isMobile() || $detect->isTablet() ) {

		include('file-name.php');

	}

```

### Editor Config

Editor config attempts to standardize the way our code editors format code. In order to read the .editorconfig file, you
will need to install a plugin or extension for you editor of choice.

*   [Sublime Text](https://github.com/sindresorhus/editorconfig-sublime#readme)
*   [Vim](https://github.com/editorconfig/editorconfig-vim#readme)
*   [Brackets](https://github.com/kidwm/brackets-editorconfig/#readme)
*   [Atom](https://github.com/sindresorhus/atom-editorconfig#readme)
*   [IntelliJ IDEA](https://github.com/JetBrains/intellij-community/tree/master/plugins/editorconfig)
*   [Textmate](https://github.com/Mr0grog/editorconfig-textmate)

