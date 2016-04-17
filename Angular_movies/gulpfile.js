/**
 * Created by Emmanuelle on 15/04/2016.
 */
'use strict';
var gulp = require('gulp'),
    livereload = require('gulp-livereload');

gulp.task('html', function () {
    gulp.src('app/index.html')
        .pipe(livereload());
});

gulp.task('css', function () {
    gulp.src('app/css/*.css')
        .pipe(livereload());
});
gulp.task('bootstrap', function () {
    gulp.src('bower_components/bootstrap/dist/css/bootstrap.css')
        .pipe(livereload());
});
gulp.task('js', function () {
    gulp.src('app/js/*.js')
        .pipe(livereload());
});

gulp.task('default', function () {
    livereload.listen();
    gulp.watch('app/css/*.css', ['css']);
    gulp.watch('bower_components/bootstrap/dist/css/bootstrap.css', ['bootstrap']);
    gulp.watch('app/js/*.js', ['js']);
    gulp.watch('app/partials/*.html', ['html']);
    gulp.watch('app/index.html', ['html']);
});

