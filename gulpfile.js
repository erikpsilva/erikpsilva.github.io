var gulp = require('gulp'),
	less = require('gulp-less'),
	path = require('path'),
	cssmin = require('gulp-cssmin'),
	rename = require('gulp-rename'),
	watch = require('gulp-watch');
 
gulp.task('less', function () {
  return gulp.src('styles/style.less')
    .pipe(less())
    .pipe(cssmin())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./styles/'));
});



gulp.task('watch', function(ev) {
  gulp.watch('styles/**/*.less',['less']);
});