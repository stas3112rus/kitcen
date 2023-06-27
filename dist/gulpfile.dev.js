"use strict";

var gulp = require('gulp');

var browserSync = require('browser-sync');

var sass = require('gulp-sass');

var cleanCSS = require('gulp-clean-css');

var autoprefixer = require('gulp-autoprefixer');

var rename = require("gulp-rename");

var imagemin = require('gulp-imagemin');

var htmlmin = require('gulp-htmlmin');

gulp.task('server', function () {
  browserSync({
    proxy: "kitchen"
  });
  gulp.watch("src/*.html").on('change', browserSync.reload);
  gulp.watch("src/**/*.php").on('change', browserSync.reload);
  gulp.watch("public_html/**/*.php").on('change', browserSync.reload);
});
gulp.task('styles', function () {
  return gulp.src("src/sass/**/*.+(scss|sass)").pipe(sass({
    outputStyle: 'compressed'
  }).on('error', sass.logError)).pipe(rename({
    suffix: '.min',
    prefix: ''
  })).pipe(autoprefixer()).pipe(cleanCSS({
    compatibility: 'ie8'
  })).pipe(gulp.dest("public_html/css")).pipe(browserSync.stream());
});
gulp.task('watch', function () {
  gulp.watch("src/**/*.+(scss|sass|css)", gulp.parallel('styles'));
  gulp.watch("src/*.html").on('change', gulp.parallel('html'));
  gulp.watch("src/js/**/*.js").on('change', gulp.parallel('scripts'));
  gulp.watch("src/fonts/**/*").on('all', gulp.parallel('fonts'));
  gulp.watch("src/icons/**/*").on('all', gulp.parallel('icons'));
  gulp.watch("src/img/**/*").on('all', gulp.parallel('images'));
});
gulp.task('html', function () {
  return gulp.src("src/*.html").pipe(htmlmin({
    collapseWhitespace: true
  })).pipe(gulp.dest("public_html/"));
});
gulp.task('scripts', function () {
  return gulp.src("src/js/**/*.js").pipe(gulp.dest("public_html/js")).pipe(browserSync.stream());
});
gulp.task('fonts', function () {
  return gulp.src("src/fonts/**/*").pipe(gulp.dest("public_html/fonts")).pipe(browserSync.stream());
});
gulp.task('icons', function () {
  return gulp.src("src/icons/**/*").pipe(gulp.dest("public_html/icons")).pipe(browserSync.stream());
});
gulp.task('images', function () {
  return gulp.src("src/img/**/*").pipe(imagemin()).pipe(gulp.dest("public_html/img")).pipe(browserSync.stream());
});
gulp.task('default', gulp.parallel('watch', 'server', 'styles', 'scripts', 'fonts', 'icons', 'html', 'images'));