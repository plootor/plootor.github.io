var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");
var uglify = require('gulp-uglify');
var uncss = require('gulp-uncss');
var pkg = require('./package.json');

// Minify compiled CSS
gulp.task('minify-css', function() {
  return gulp.src('css/style.css')
    .pipe(cleanCSS({ compatibility: 'ie11' }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('css'))
    .pipe(browserSync.reload({
        stream: true
      })
    )
});

gulp.task('uncss', function() {
  return gulp.src('css/style.css')
    .pipe(uncss({
      html: [
        'index.html'
      ]
    }))
    .pipe(gulp.dest('css'));
});
