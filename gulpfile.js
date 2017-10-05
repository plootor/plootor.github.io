var postcss = require('gulp-postcss');
var gulp = require('gulp');
var autoprefixer = require('autoprefixer-core');
var uncss = require('gulp-uncss');

gulp.task('css', function () {
    var processors = [
        autoprefixer({browsers: ['last 4 version']})
    ];
    return gulp.src('./etc/css/style.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('./dest'));
});


gulp.task('clean', function () {
    return gulp.src('./etc/css/style.css')
        .pipe(uncss({
            html: ['./etc/index.html']
        }))
        .pipe(gulp.dest('./dest'));
});