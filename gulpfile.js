var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');

gulp.task('styles', async function () {
    gulp.src('./scss/index.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .pipe(cleanCSS({
            compatibility: 'ie8',
            level: {
                1: {
                    specialComments: false
                }
            }
        }))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
        .pipe(rename('style.min.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task('serve', async function () {
    gulp.watch('./scss/*/*.scss', gulp.series('styles'));
});

gulp.task('default', gulp.series('styles', 'serve'));