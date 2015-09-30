var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
	browserSync = require("browser-sync").create();

var paths 	= {
	'sass' : './styles/sass/**/*.scss',
	'css'  : './styles/css',
    'js'   : './js/src/**/*.js'
};

gulp.task('sass', function () {
  gulp.src(paths.sass)
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(paths.css));
});

gulp.task('serve', ['sass'], function(){
	browserSync.init({
        //server: "/Users/peb7268/Desktop/dev/vagrant/projects/vvv/www/wordpress-default/wp-content/themes/storage53.com",
        proxy: 'skilltouch.com'
    });

    gulp.watch(paths.sass, ['sass']);
    gulp.watch(['./*.php', paths.sass, paths.js]).on('change', browserSync.reload);
});

gulp.task('default', ['serve']);