var path = require("path");
var fs = require("fs");

var gulp = require("gulp");
var browserSync = require("browser-sync");
var nunjucks = require("nunjucks");
var prettifyHTML = require("prettify-html");
var gulpSourceMaps = require("gulp-sourcemaps");
var gulpSASS = require("gulp-sass");

var browser = browserSync.create();

gulp.task("scss", function () {
  return gulp
    .src([path.join(__dirname, "sass", "main.scss")])
    .pipe(gulpSourceMaps.init())
    .pipe(
      gulpSASS().on("error", function (err) {
        console.error(`SCSS Error: ${err.message}`);
      })
    )
    .pipe(gulpSourceMaps.write())
    .pipe(gulp.dest(path.join(__dirname, "css")))
    .pipe(browser.stream());
});

gulp.task(
  "start",
  gulp.series("scss", function (done) {
    // Watch files and run the appropriate tasks
    gulp.watch("./sass/**/*.scss", gulp.series("scss"));
    done();
  })
);
