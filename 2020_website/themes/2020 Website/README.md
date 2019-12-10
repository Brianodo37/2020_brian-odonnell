## them.es Starter Theme

**them.es Starter** is a WordPress Starter Theme built with Bootstrap. Please note that the Source files are only recommended for WordPress Developers who are searching for a simple, solid, proved and tested **Bootstrap Starter Theme** to build upon. **_Don't_ expect a ready-to-use WordPress Theme!**

If you want to see it in action or want to download a customized Theme for free, check out [http://them.es/starter](http://them.es/starter)


## What's included?
* WordPress Theme
* Bootstrap Framework
* SASS Source files
* Grunt configuration
* ~~Bower configuration to keep required libraries updated~~ NPM configuration to keep the required build libraries updated and to add new libraries
* 3 Menus
* Demo Content


## Compatible with CSS Preprocessors
You can use [SASS](http://sass-lang.com) to create your main stylesheet which includes all the required styles.

**`/assets/css/main.scss`** needs to be compiled as **`/assets/css/dist/main.min.css`**


## Grunt Task Automation
This Theme comes with a built in Task Automation. SASS files will be complied if changed, vendor prefixes will be added automatically if required and files will be minified.

* Prerequisites: [Node.js](https://nodejs.org) (NPM) needs to be installed on your system
* Open the **Project directory** `/` in Terminal and install the required Node.js dependencies: Grunt, SASS-Compiler, Autoprefixer, etc.
* `$ npm install`
* Open the **Build directory** in Terminal and install the required Node.js dependencies: Bootstrap, etc.
* `$ npm install`
* Run the **`watch`** script
* `$ npm run watch`
* Modify `/csss/main.scss` and `/js/main.js`


## Technology

* [Bootstrap](https://github.com/twbs/bootstrap), [MIT licence](https://github.com/twbs/bootstrap/blob/master/LICENSE)
* [SASS](https://github.com/sass/sass), [MIT licence](https://github.com/sass/sass/blob/stable/MIT-LICENSE)
* [Grunt](https://github.com/gruntjs/grunt), [MIT licence](https://github.com/gruntjs/grunt/blob/master/LICENSE)
* [wp-bootstrap-navwalker](https://github.com/twittem/wp-bootstrap-navwalker), [GPLv2+](https://github.com/twittem/wp-bootstrap-navwalker/blob/master/LICENSE.txt)


## Copyright & License

Code and Documentation &copy; [them.es](http://them.es)

Code released under [GPLv2+](http://www.gnu.org/licenses/gpl-2.0.html)

## Development Notes:

## Top and Main Menu Usage

Add pages/posts/custom links to the menus area in WP. Assign the appropriate menu location checkboxes.

## Footer Menu Usage

The footer is utilzing both the WP custom menu functionality and the WP Widget functionality.  You can create multiple footer menus in the WP menu area, then load them into the footer widget, or you can assign an menu to the registered footer menu.
