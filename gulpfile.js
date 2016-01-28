var postcss = require('gulp-postcss');
var gulp = require('gulp');
var autoprefixer = require('autoprefixer-core');
var uncss = require('gulp-uncss');

gulp.task('css', function () {
    var processors = [
        autoprefixer({browsers: ['last 4 version']})
    ];
    return gulp.src('./giu/css/style.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('./dest'));
});


gulp.task('clean', function () {
    return gulp.src('./giu/css/style.css')
        .pipe(uncss({
            html: ['./giu/index.html']
        }))
        .pipe(gulp.dest('./dest'));
});