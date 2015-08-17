var postcss = require('gulp-postcss');
var gulp = require('gulp');
var autoprefixer = require('autoprefixer-core');
var uncss = require('gulp-uncss');

gulp.task('css', function () {
    var processors = [
        autoprefixer({browsers: ['last 3 version']})
    ];
    return gulp.src('./main/piccolo/css/style-processed.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('./dest'));
});


gulp.task('clean', function () {
    return gulp.src('./main/piccolo/css/style-processed.css')
        .pipe(uncss({
            html: ['./main/piccolo/index.html']
        }))
        .pipe(gulp.dest('./dest'));
});