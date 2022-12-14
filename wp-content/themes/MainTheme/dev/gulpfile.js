const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssSorter = require("css-declaration-sorter");
const mmq = require("gulp-merge-media-queries");
const browserSync = require("browser-sync");
const cleanCss = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const webp = require('gulp-webp');
const rename = require("gulp-rename");
const htmlBeautify = require("gulp-html-beautify");
const imagemin = require('gulp-imagemin');

function minImg() {
	return gulp.src('./src/assets/img/normal/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('../public/img/normal'))
}

function compileSass() {
	return gulp.src("./src/assets/sass/**/*.scss")
		.pipe(sass())
		.pipe(postcss([autoprefixer(), cssSorter()]))
		.pipe(mmq())
		.pipe(gulp.dest("../public/css"))
		.pipe(cleanCss())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(gulp.dest("../public/css/"))
}

function watch() {
	gulp.watch("./src/assets/sass/**/*.scss", gulp.series(compileSass, browserReload));
	gulp.watch("./src/assets/js/**/*.js", gulp.series(minJS, browserReload));
	gulp.watch("./src/assets/img/**/*", gulp.series(copyImage, browserReload));
	gulp.watch("../*.php", gulp.series(browserReload));
}

function browserInit(done) {
	browserSync.init({
		proxy: "http://tmson-kakou.com.local/"
	});
	done();
}

function browserReload(done) {
	browserSync.reload();
	done();
}

function minJS() {
	return gulp.src("./src/assets/js/*.js")
		.pipe(uglify())
		.pipe(rename({
			suffix: ".min"
		}))
		.pipe(gulp.dest("../public/js/"))
}

function copyImage() {
	return gulp.src('./src/assets/img/**/*')
		.pipe(gulp.dest('../public/img/'))
}

function webpImg() {
	return gulp.src('./src/assets/img/normal/**/*')
		.pipe(webp())
		.pipe(gulp.dest('../public/img/webp/'))
}

exports.compileSass = compileSass;
exports.watch = watch;
exports.browserInit = browserInit;
exports.minImg = minImg
exports.dev = gulp.parallel(browserInit, watch);
exports.minJS = minJS;
exports.build = gulp.parallel(minJS, compileSass, minImg, webpImg);
