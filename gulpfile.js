var postcss = require('gulp-postcss');
var gulp = require('gulp');
var autoprefixer = require('autoprefixer-core');

gulp.task('css', function () {
    var processors = [
        autoprefixer({browsers: ['last 3 version']})
    ];
    return gulp.src('./main/piccolo-green/css/style.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('./dest'));
});