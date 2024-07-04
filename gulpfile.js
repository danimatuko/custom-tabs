const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const concat = require('gulp-concat')
const uglify = require('gulp-uglify')
const rename = require('gulp-rename')

// Paths
const paths = {
  scss: './src/scss/**/*.scss',
  js: './src/js/**/*.js',
  dist: './dist',
}

// Compile SCSS into minified CSS
function compileStyles() {
  return gulp
    .src(paths.scss)
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.dist + '/css'))
}

// Concatenate and minify JavaScript
function minifyScripts() {
  return gulp
    .src(paths.js)
    .pipe(concat('custom-tabs.js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest(paths.dist + '/js'))
}

// Define tasks
exports.styles = compileStyles
exports.scripts = minifyScripts

// Build task (for production)
exports.build = gulp.series(compileStyles, minifyScripts)

// Watch task (for development)
exports.watch = function () {
  gulp.watch(paths.scss, compileStyles)
  gulp.watch(paths.js, minifyScripts)
  gulp.watch('./**/*.php').on('change', gulp.series(compileStyles, minifyScripts))
}

// Default task (runs both build and watch)
exports.default = gulp.series(exports.build, exports.watch)
