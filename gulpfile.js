'use strict';

var gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer');

sass.compiler = require('node-sass');

gulp.task('scss', function () {
	return gulp.src('assets/scss/style.scss')
		.pipe(sass({
            outputStyle: 'compressed',
            precision: 15,
            sourceMap: true
        }).on('error', function (e) {
			this.emit('end');
			console.log(e);
        }))
        .pipe(autoprefixer({
            browsers: ['last 100 versions'],
            cascade: false,
            flexbox: true
        }))
        .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', function () {
	gulp.watch('assets/scss/**/*.scss', ['scss']);
});

gulp.task('default', ['scss', 'watch']);