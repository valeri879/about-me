var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('default', function () {
    // place code for your default task here
});


////////////////////////////
// auto prefixer
////////////////////////////

gulp.task('prefixer', function () {
    return gulp.src('src/app.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist'));
});
