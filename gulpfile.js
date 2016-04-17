/**
 * Moobstrap - Bootstrap base theme for Moodle.
 *
 * @author Luke Carrier <luke@carrier.im>
 * @copyright 2016 Luke Carrier
 */

var gulp = require('gulp');
var rename = require('gulp-rename');
var replace = require('gulp-replace');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var wrap = require('gulp-wrap-amd');

gulp.task('js', [
    'js:bootstrap',
    'js:tether'
], function() {
    return gulp.src('./amd/src/*.js')
        .pipe(rename(function(path) {
            path.extname = '.min.js';
        }))
        .pipe(uglify())
        .pipe(gulp.dest('./amd/build'));
});

gulp.task('js:bootstrap', function() {
    gulp.src('./node_modules/bootstrap/dist/js/bootstrap.js')
        .pipe(replace('window.Tether', 'Tether')) // Yes, they really do this.
        .pipe(wrap({
            deps: ['jquery', 'theme_moobstrap/tether'],
            params: ['jQuery', 'Tether'],
            exports: 'jQuery'
        }))
        .pipe(gulp.dest('./amd/src'));
});

gulp.task('js:tether', function() {
    return gulp.src('./node_modules/tether/dist/js/tether.js')
        .pipe(gulp.dest('./amd/src'));
});

gulp.task('sass', function() {
    return gulp.src('./sass/moodle.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./style'));
});

gulp.task('sass:watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('default', ['js', 'sass']);
