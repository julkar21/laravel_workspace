
'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();
var npmDist = require('gulp-npm-dist');

gulp.task('sass-css', function(){
  return gulp.src('scss/bracket.scss')
    .pipe(sass())
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('minify-css', function(){
  return gulp.src('scss/bracket.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('sass-skin', function(){
  return gulp.src('scss/skins/*.scss')
    .pipe(sass())
    .pipe(rename({prefix: 'bracket.'}))
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('minify-skin', function(){
  return gulp.src('scss/skins/*.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(rename({suffix: '.min', prefix: 'bracket.'}))
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('main-css', ['sass-css', 'minify-css']);
gulp.task('skin-css', ['sass-skin', 'minify-skin']);

gulp.task('browserSync', function() {
  browserSync.init({
    server: true
  })
});

gulp.task('serve', ['browserSync'], function() {
  gulp.watch('scss/**/*.scss', ['sass-css']);
  gulp.watch('app/**/*.html', browserSync.reload);
  gulp.watch('app/js/*.js', browserSync.reload);
})

// Copy dependencies to lib/
gulp.task('npm-lib', function() {
  gulp.src(npmDist(), {base:'./node_modules/'})
    .pipe(rename(function(path) {
      path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
    }))
    .pipe(gulp.dest('app/lib'));
});
