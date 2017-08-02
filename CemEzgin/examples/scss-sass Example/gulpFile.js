var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var sass = require('gulp-scss');
var minifyCSS = require('gulp-csso');

var sassDir = 'scss';
var CSSDir = 'css';
var JSDir = 'js';

var JSFiles = [
    JSDir + "/index.js"
];

var sassFiles = [
    sassDir + "/index.scss"
];
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

gulp.task('css', function () {
    return gulp.src(sassFiles)
        .pipe(sass())
        .pipe(minifyCSS())
        .pipe(concat('all.css'))
        .pipe(gulp.dest(CSSDir))
});


gulp.task('watch',function () {
    gulp.watch(sassDir + '/**/*.scss',['css']);
});

gulp.task('js',function () {
    gulp.src(JSFiles)
        .pipe(uglify())
        .pipe(concat('all.js'))
        .pipe(gulp.dest(JSDir))
});

gulp.task('serve', function () {
   browserSync.init({
       server: {
           baseDir:"./"
       }
   });
   //f5 siz html,js,css i degistginde yenileme
   gulp.watch('*.html').on('change', reload);
   gulp.watch('js/*.js').on('change', reload);
   gulp.watch('css/*.css').on('change', reload);
});
gulp.watch(JSFiles, ['js']);
gulp.task('default',['css','js','watch','serve']);