(() => {
	"use strict";

	const { src, dest, watch, series, parallel } = require("gulp");
	const sass = require("gulp-sass")(require("sass"));
	const sourcemaps = require("gulp-sourcemaps");
	const autoprefixer = require("gulp-autoprefixer");
	const browserSync = require("browser-sync").create();
	const plumber = require("gulp-plumber");
	const concat = require("gulp-concat");
	const cssmin = require("gulp-cssmin");
	const notify = require("gulp-notify");
	const scssLint = require("gulp-sass-lint");
	const uglify = require("gulp-uglify");

	// Paths For All Asset Types
	const path = {
		theme: "http://afterservice.local/",
		scss: "_src/scss",
		js: "_src/js",
		img: "_src/img",
		fonts: "_src/fonts",
		php: "**/*.php",
		dist_img: "_dist/img",
		dist_css: "_dist/css",
		dist_js: "_dist/js",
		dist_fonts: "_dist/fonts",
	};

	// Scss-lint Tasks
	function scss_lint() {
		return src([
			path.scss + "/global/*.scss",
			"!" + path.scss + "/global/_c-slick-carousel.scss",
			"!" + path.scss + "/global/_b-forms.scss",
		])
			.pipe(
				scssLint({
					configFile: "./scss-lint.yml",
				})
			)
			.pipe(scssLint.format())
			.pipe(scssLint.failOnError());
	}

	// Scss Prefixer and Sourcemaps Tasks
	function scss() {
		return src(path.scss + "/*.scss")
			.pipe(sourcemaps.init())
			.pipe(sass().on("error", sass.logError))
			.pipe(autoprefixer("last 2 versions"))
			.pipe(sourcemaps.write("/"))
			.pipe(browserSync.reload({ stream: true }))
			.pipe(plumber())
			.pipe(dest(path.dist_css));
	}

	// Minify Styles Tasks
	function styles() {
		return src([path.dist_css + "/global.css"])
			.pipe(concat("global.min.css"))
			.pipe(cssmin())
			.pipe(dest(path.dist_css))
			.pipe(notify("Css Done."));
	}

	// Scripts Tasks
	function js() {
		return src([
			path.js + "/slick.carousel.js",
			path.js + "/jquery.matchHeight.js",
			path.js + "/jquery-scrolltofixed.js",
			path.js + "/blazy.js",
			path.js + "/accordion.js",
			path.js + "/tabs.js",
			path.js + "/doubletaptogo.js",
			path.js + "/scripts.js",
		])
			.pipe(concat("scripts.js"))
			.pipe(browserSync.reload({ stream: true }))
			.pipe(plumber())
			.pipe(dest(path.dist_js));
	}

	// Scripts Concat and Minify Tasks
	function scripts() {
		return src(path.dist_js + "/scripts.js")
			.pipe(concat("scripts.min.js"))
			.pipe(uglify())
			.pipe(dest(path.dist_js))
			.pipe(notify("Js Done."));
	}

	// Image Tasks
	function images() {
		return src(path.img + "/*")
			.pipe(
				plumber(function () {
					console.log("There was an issue compressing images");
					this.emit("end");
				})
			)
			.pipe(dest(path.dist_img));
	}

	// Image Tasks
	function fonts() {
		return src(path.fonts + "/*")
			.pipe(
				plumber(function () {
					console.log("There was an issue compressing images");
					this.emit("end");
				})
			)
			.pipe(dest(path.dist_fonts));
	}

	// Static Server
	function server(done) {
		browserSync.init({
			proxy: path.theme,
			open: "external",
			port: 8000,
		});
		done();
	}

	function watchFiles() {
		watch(
			[path.scss + "/**/*.scss", path.js + "/**/*.js"],
			series(scss_lint, scss, styles, js, scripts)
		);

		watch(path.img + "/*", images);

		watch(path.php).on("change", browserSync.reload);
	}

	exports.styles = series(scss_lint, scss, styles);
	exports.scripts = series(js, scripts);
	exports.images = images;

	exports.default = series(
		scss_lint,
		scss,
		styles,
		fonts,
		js,
		scripts,
		images,
		server,
		watchFiles
	);
})();
