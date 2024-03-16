'use strict';

var gulp         = require('gulp');
var sass         = require('gulp-sass');
sass.compiler    = require('node-sass');
var concat       = require('gulp-concat');
var cssnano      = require('gulp-cssnano');
var minify       = require('gulp-minify');
var autoprefixer = require('gulp-autoprefixer');

/*
** Start task
*/
gulp.task('start', function() {
    gulp.watch('./css/scss/**/*.scss', gulp.series(
        'css'
    ));
    gulp.watch(['./js/assets/**/*.js', '!./js/assets/theme.js'], gulp.series(
        'js:concat',
        'js:minify'
    ));
});

/*
** convert scss to css, concatenate and minify
*/
gulp.task('css', function () {
  return gulp.src(['./css/scss/plugins/**/*.{css,scss}', './css/scss/*.scss'])
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(concat('theme.min.css'))
    .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))
    .pipe(cssnano())
    .pipe(gulp.dest('./css'));
});

/*
** concatenate js
*/
gulp.task('js:concat', function () {
  return gulp.src(['./js/assets/plugins/*.js', './js/assets/*.js', './js/assets/parts/*.js', '!./js/assets/theme.js'])
    .pipe(concat('theme.js'))
    .pipe(gulp.dest('./js/assets'));
});

/*
** minify js
*/
gulp.task('js:minify', function () {
  return gulp.src(['./js/assets/theme.js'])
    .pipe(minify({
        ext: {
            min: '.min.js'
        },
        noSource: true
    }))
    .pipe(gulp.dest('./js'));
});

/*
** Builds css and js files
*/
gulp.task('build', gulp.series('css', 'js:concat','js:minify'));