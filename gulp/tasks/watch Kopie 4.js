var gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create(),
php = require('gulp-connect-php');

gulp.task('watch', function() {

	console.log("Maru works on watch.");

		browserSync.init({
			notify: false,
			proxy: "from-travel-site-to-design-training"
		});

	gulp.start('php');

	watch('./app/*.php', function() {
		browserSync.reload();
		console.log("Maru works on browserSync.");
	});

	watch('./app/assets/styles/**/*.css', function() {
		gulp.start('cssInject');
		console.log("Maru works on cssInject.");
	});

	watch('./app/assets/scripts/**/*.js', function() {
		gulp.start('scriptsRefresh');
		console.log("Maru works on scriptsRefresh.");
	});
	
});

gulp.task('php', function() {
    php.server({ base: 'app', port: 3000, keepalive: true});
});

gulp.task('cssInject', ['styles'], function() {
	return gulp.src('./app/temp/styles/styles.css')
		.pipe(browserSync.stream());
});

gulp.task('scriptsRefresh', ['scripts'], function() {
	browserSync.reload();
});