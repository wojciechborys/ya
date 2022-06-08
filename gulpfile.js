var gulp         = require('gulp'),
	sass         = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	concat       = require('gulp-concat'), 
	terser       = require('gulp-terser'),
	csso         = require('gulp-csso'),
	del          = require('del'), 
	browserSync  = require('browser-sync').create();

	const { series } = require('gulp');
	const { parallel } = require('gulp');

// Custom Styles
const styles = () => {
	return (
		gulp.src('./app/scss/style.scss')
		.pipe(sass())
		.on("error", sass.logError)
		.pipe(autoprefixer())
		//.pipe(csso())
		.pipe(gulp.dest('./app/css/'))
		.pipe(browserSync.stream())
	);
}

// Libraries Styles
const libStyles = () => {
	return (
		gulp.src('./app/scss/libs.scss')
		.pipe(sass())
		.on("error", sass.logError)
		.pipe(autoprefixer())
		.pipe(csso())
		.pipe(gulp.dest('./app/css/'))
		.pipe(browserSync.stream())
	);
}

// Libraries Scripts 
const libScripts = () => {
	return (
		gulp.src([
			'./app/js/libs/jquery.js',
			'./app/js/libs/slick.js',
			'./app/js/libs/jquery.fancybox.js',
			'./app/js/libs/intlTelInput-jquery.js',
			'./app/js/libs/sticky.min.js',
		])
		.pipe(concat('libs.min.js'))
		.pipe(terser())
		.pipe(gulp.dest('./app/js/'))
		.pipe(browserSync.stream())
	);
}

// Watch
const watch = () => {
	browserSync.init({
		server: {
			baseDir: "./app/"
		}, 
		notify: false
	});
	gulp.watch('./app/scss/**/*', series(styles, libStyles));
	gulp.watch('./app/libs/**/*.js', libScripts);
	gulp.watch(['./app/*.html', './app/js/common.js', './app/img/**/*']).on('change', browserSync.reload);
}

exports.default = series(parallel(styles, libStyles, libScripts), watch);






// Build
const clean = () => {return del('./dist/');}
const copyImg = () => { return(gulp.src('./app/img/**/*').pipe(gulp.dest('./dist/img/')));}
const copyStyles = () => {return(gulp.src('./app/css/**/*').pipe(gulp.dest('./dist/css/')));}
const copyScripts = () => {return(gulp.src(['./app/js/common.js', './app/js/libs.min.js']).pipe(gulp.dest('./dist/js/')));}
const copyFonts = () => {return(gulp.src('./app/fonts/**/*').pipe(gulp.dest('./dist/fonts/')));}

exports.build = series(clean, styles, libStyles, libScripts, parallel(copyImg, copyStyles, copyScripts, copyFonts));