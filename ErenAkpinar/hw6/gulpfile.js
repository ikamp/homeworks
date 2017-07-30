var gulp = require('gulp');


var concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    minifyCSS = require('gulp-csso'),
    htmlmin = require('gulp-htmlmin'),
    browserSync = require('browser-sync').create(),
    reload = browserSync.reload;

var sassDir = 'scss',
    CSSDir = 'css',
    sassFiles = [
        sassDir + "/custom.scss"
    ];


gulp.task('css', function () {
    return gulp.src(sassFiles)
        .pipe(sass())
        .pipe(minifyCSS())
        .pipe(concat('all.css'))
        .pipe(gulp.dest(CSSDir))
});

gulp.task('html', function () {
    return gulp.src('*.html')
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('dist'));
});

gulp.task('serve', function () {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });

    gulp.watch("*.html").on("change", reload);
    gulp.watch("css/*.css").on("change", reload);
});

gulp.task('watch', function () {
    gulp.watch(sassDir + '/*.scss', ['css']);
    gulp.watch('*.html', ['html']);
});


gulp.task('default', ['css', 'watch', 'html', 'serve']);
