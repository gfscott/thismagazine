var gulp          = require('gulp'),
    gutil         = require('gulp-util'),
    uglify        = require('gulp-uglify'),
    sass          = require('gulp-sass'),
    minify        = require('gulp-minify-css'),
    postcss       = require('gulp-postcss'),
    autoprefixer  = require('autoprefixer'),
    mqpacker      = require('css-mqpacker'),
    sourcemaps    = require('gulp-sourcemaps'),
    rename        = require('gulp-rename'),
    concat        = require('gulp-concat');

gulp.task('default', ['compile-scripts', 'compile-styles']);

var paths = {
  scripts: 'js/src/*.js',
  styles: 'css/src/*.scss'
};


gulp.task('compile-scripts', function(){
  
  // Return a concatenated but not uncompressed JS file
  gulp.src(paths.scripts)
    .pipe(sourcemaps.init())
    .pipe(concat('script.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('js'));
  
  // Return a concatenated, uglified script
  gulp.src(paths.scripts)
    .pipe(concat('script.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('js'));
});


gulp.task('compile-styles', function(){
  
  // Return a concatenated, but uncompressed CSS file
   gulp.src(paths.styles)
    .pipe(sourcemaps.init())
    .pipe(concat('style.css'))
    .pipe(sass())
    .pipe(postcss([
      autoprefixer({ browsers: ['> 2% in CA'] }),
      mqpacker()
    ]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('css'));
  
  // Return a concatenated, minified CSS file
  gulp.src(paths.styles)
    .pipe(concat('style.min.css'))
    .pipe(sass())
    .pipe(postcss([
      autoprefixer({ browsers: ['> 2% in CA'] }),
      mqpacker()
    ]))
    .pipe(minify())
    .pipe(gulp.dest('css'));
  
});



gulp.task('watch', function() {
  gulp.watch(paths.scripts, ['compile-scripts']);
  gulp.watch(paths.styles, ['compile-styles']);
});