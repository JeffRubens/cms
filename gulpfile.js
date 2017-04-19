var gulp = require('gulp');
var sass = require('gulp-ruby-sass');

gulp.task('sass', function() {
	return sass('sass/*.sass');
});

gulp.task('default', function() {
	console.log('Hello!');
});