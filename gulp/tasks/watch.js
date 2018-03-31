var gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create();

gulp.task('watch', function() {

	console.log("Maru works on watch.");

	browserSync.init({
		notify: false,
		proxy: "from-travel-site-to-design-training:91"
	});

	watch('./app/*.php', './app/assets/_includes/*.php', function() {
		browserSync.reload();
		console.log("Maru works on browserSync.");
	});

	watch('./app/assets/_includes/*.php', function() {
		browserSync.reload();
		console.log("Maru works on _includes browserSync.");
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