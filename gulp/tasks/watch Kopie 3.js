var gulp = require('gulp'),
watch = require('gulp-watch'),
connect = require('gulp-connect-php'),
browserSync = require('browser-sync').create();

gulp.task('watch', function() {

	console.log("Maru works on watch.");

	connect.server({}, function (){
    browserSync({
      proxy: '192.168.178.30:91'
    });
  });

	watch('**/*.php').on('change', function () {
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

gulp.task('cssInject', ['styles'], function() {
	return gulp.src('./app/temp/styles/styles.css')
		.pipe(browserSync.stream());
});

gulp.task('scriptsRefresh', ['scripts'], function() {
	browserSync.reload();
});