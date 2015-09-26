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
    rev           = require('gulp-rev'),
    findreplace   = require('gulp-replace'),      
    del           = require('del'),
    concat        = require('gulp-concat');

gulp.task('default', ['clean', 'compile-scripts', 'compile-styles', 'cachebust']);

var paths = {
  scripts: 'js/src/*.js',
  styles: 'css/src/*.scss'
};


gulp.task('clean', function(){
  
  del([
    'css/*.css',
    'css/*.map',
    'js/*.js',
    'js/*.map'
  ]);
  
});

gulp.task('cachebust', function(){
  
  // busting the CSS cached filename  
  var cssManifest = require('./css/rev-manifest.json'); // gulp-rev writes a manifest file holding the file and its rev'ed filename
  var cssOld      = /\/css\/(?:.+)\.css/; // regex search pattern for the css file path we want to replace in the header
  var cssNew      = "/css/" + cssManifest["style.min.css"]; // from the manifest file, read the value of the rev'ed filename, from its key, which is the un-rev'ed filename
  
  // open the header file, do a find-replace, and rewrite in place
  gulp.src('header.php')
    .pipe(findreplace( cssOld, cssNew ))
    .pipe(gulp.dest('./'));


  
  // busting the JS cached filename (same method as for css)
  var jsManifest  = require('./js/rev-manifest.json');
  var jsOld       = /\/js\/(?:.+)\.js/;
  var jsNew       = "/js/" + jsManifest["script.min.js"];
  
  // open the header file, do a find-replace, and rewrite in place
  gulp.src('footer.php')
    .pipe(findreplace( jsOld, jsNew ))
    .pipe(gulp.dest('./'));
  
  
});


gulp.task('compile-scripts', function(){
  
  // Return a concatenated but not uncompressed JS file
  gulp.src(paths.scripts)
    .pipe(sourcemaps.init())
    .pipe(concat('script.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('js'));
  
  // Return a concatenated, uglified script, with a unique rev'ed filename
  gulp.src(paths.scripts)
    .pipe(sourcemaps.init())
    .pipe(concat('script.min.js'))
    .pipe(uglify())
    .pipe(rev())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('js'))
    .pipe(rev.manifest());

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
  
  // Return a concatenated, minified CSS file, with a unique rev'ed filename
  gulp.src(paths.styles)
    .pipe(sourcemaps.init())
    .pipe(concat('style.min.css'))
    .pipe(sass())
    .pipe(postcss([
      autoprefixer({ browsers: ['> 2% in CA'] }),
      mqpacker()
    ]))
    .pipe(minify())
    .pipe(rev())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('css'))
    .pipe(rev.manifest({
      base: 'css'
    }));
  
});



gulp.task('watch', function() {
  gulp.watch(paths.scripts, ['compile-scripts']);
  gulp.watch(paths.styles, ['compile-styles']);
});