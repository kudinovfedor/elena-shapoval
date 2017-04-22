'use strict';
var themePath = '../wp-content/themes/brainworks/';

var gulp = require('gulp');
var cleancss = require('gulp-clean-css');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var notify = require('gulp-notify');
var sourcemaps = require('gulp-sourcemaps');

// Config
var config = {
  cleancss: {compatibility: 'ie7', debug: true},
  sass: {outputStyle: 'expanded', precision: 5, sourceComments: true} // nested, expanded, compact, compressed
};

var path = {
  src: {
    css: themePath + 'style.css',
    sass: [themePath + 'style.scss', themePath + 'sass/**/*.scss']
  },
  dest: {
    css: themePath
  }
};

function errorAlert(error) {
  notify.onError({title: 'Error', subtitle: 'Failure!', message: 'Check your terminal', sound: 'Sosumi'})(error); // Error Notification
  console.log(error.toString()); // Prints Error to Console
  this.emit('end'); // End function
}

gulp.task('sass', function () {
  return gulp.src(path.src.sass)
    .pipe(plumber({errorHandler: errorAlert}))
    //.pipe(sourcemaps.init())
    .pipe(sass(config.sass).on('error', sass.logError))
    //.pipe(sourcemaps.write('/'))
    .pipe(gulp.dest(path.dest.css));
});

gulp.task('css', function () {
  return gulp.src(path.src.css)
    .pipe(plumber({errorHandler: errorAlert}))
    .pipe(sourcemaps.init())
    .pipe(cleancss(config.cleancss))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('/'))
    .pipe(gulp.dest(path.dest.css));
});

gulp.task('default', function () {
  gulp.watch(path.src.sass, gulp.series('sass'));
  //gulp.watch(path.src.css, gulp.series('css'));
});
