var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    livereload  = require('gulp-livereload');

gulp.task('sass', function () {
    gulp.src('styles/sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('styles/css'));
});

gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('styles/sass/*.scss', ['sass']).on('change', livereload.changed);
});

gulp.task('default', ['sass', 'watch']);