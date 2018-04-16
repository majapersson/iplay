var gulp        = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('default', function() {
    browserSync.init({
        proxy: "http://localhost:8888/"
    });

    gulp.watch("./public/themes/iplay/assets/styles/app.css").on("change", browserSync.reload);
    gulp.watch("./public/themes/iplay/*.php").on("change", browserSync.reload);
});
