// Модули для работы --------------------------------------------------------------------

var gulp            = require('gulp'),
    stylus          = require('gulp-stylus'),
    autoprefixer    = require('gulp-autoprefixer'),
    // browserSync     = require('browser-sync').create(),
    concat          = require('gulp-concat'),
    uglify          = require('gulp-uglifyjs'),
    // del             = require('del'),
    // cache           = require('gulp-cache'),
    // imagemin        = require('gulp-imagemin'),
    // pngquant        = require('imagemin-pngquant'),
    csso            = require('gulp-csso');
    // pug             = require('gulp-pug');

// Работа со Stylus --------------------------------------------------------------------

gulp.task('stylus', function() {
    return gulp.src([
            'stylus/main.styl'
        ])
        .pipe(stylus({
            'include css': true
        }))
        .pipe(autoprefixer(['last 2 version']))
        .pipe(csso())
        .pipe(gulp.dest('css/main.min.css'));
});

// Работа с JavaScript --------------------------------------------------------------------

gulp.task('scripts', function() {
    return gulp.src([
            // 'libs/slick/slick.min.js'
            // 'libs/lazyload/lazyload.min.js'
            // 'libs/parallax/parallax.min.js'
            // 'libs/rellax/rellax.min.js'
            // 'libs/parallax-scroll/parallax.min.js' 
            // 'libs/vide/jquery.vide.min.js' 
            // 'libs/bootstrap/bootstrap.js' 
            // 'libs/wow/wow.js'
        ])
        .pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js'));
});

// Слежение за файлами --------------------------------------------------------------------

gulp.task('watch', ['scripts', 'stylus'], function() {
    gulp.watch('stylus/**/*.styl', ['stylus']);
    gulp.watch(['js/main.js', '!js/libs.min.js', '!js/jquery.js'], ['scripts']);
});

// Дефолтный таск --------------------------------------------------------------------

gulp.task('default', ['watch']);