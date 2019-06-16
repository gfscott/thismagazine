const { series, parallel, src, dest, watch } = require("gulp");

var uglify = require("gulp-uglify"),
  sass = require("gulp-sass"),
  postcss = require("gulp-postcss"),
  autoprefixer = require("autoprefixer"),
  cssnano = require("cssnano"),
  flexfixer = require("postcss-flexboxfixer"),
  mqpacker = require("css-mqpacker"),
  sourcemaps = require("gulp-sourcemaps"),
  rev = require("gulp-rev"),
  findreplace = require("gulp-replace"),
  del = require("del"),
  concat = require("gulp-concat");

var paths = {
  scripts: "./js/src/*.js",
  styles: "./css/src/*.scss"
};

// clean files
function clean(done) {
  del([
    "./css/*.css",
    "./css/*.map",
    "./css/rev-manifest.json",
    "./js/*.js",
    "./js/*.map",
    "./js/rev-manifest.json"
  ]);
  done();
}

exports.clean = series(clean);
exports.build = parallel(compileScripts, compileStyles);
// This must be run manually after `gulp build` because there's no good way to make it synchronous right now
exports.version = series(cachebust);
// for local development, roll back cachebusting; it doesn't play well with gulp.watch, so just revert to the un-revved filenames.
exports.deversion = series(cacherepair);

function cachebust(done) {
  // busting the CSS cached filename
  var cssManifest = require("./css/rev-manifest.json"); // gulp-rev writes a manifest file holding the file and its rev'ed filename
  var cssOld = /\/css\/(?:.+)\.css/; // regex search pattern for the css file path we want to replace in the header
  var cssNew = "/css/" + cssManifest["style.min.css"]; // from the manifest file, read the value of the rev'ed filename, from its key, which is the un-rev'ed filename

  // open the header file, do a find-replace, and rewrite in place
  src("./header.php")
    .pipe(findreplace(cssOld, cssNew))
    .pipe(dest("./"));

  // busting the JS cached filename (same method as for css)
  var jsManifest = require("./js/rev-manifest.json");
  var jsOld = /\/js\/(?:.+)\.js/;
  var jsNew = "/js/" + jsManifest["script.min.js"];

  // open the header file, do a find-replace, and rewrite in place
  src("./footer.php")
    .pipe(findreplace(jsOld, jsNew))
    .pipe(dest("./"));

  done();
}

function cacherepair(done) {
  var cssOld = /\/css\/(?:.+)\.css/;
  var cssNew = "/css/style.css";

  src("./header.php")
    .pipe(findreplace(cssOld, cssNew))
    .pipe(dest("./"));

  var jsOld = /\/js\/(?:.+)\.js/;
  var jsNew = "/js/script.js";

  src("./footer.php")
    .pipe(findreplace(jsOld, jsNew))
    .pipe(dest("./"));

  done();
}

function compileScripts(done) {
  // Return a concatenated but not uncompressed JS file
  src(paths.scripts)
    .pipe(sourcemaps.init())
    .pipe(concat("script.js"))
    .pipe(sourcemaps.write("."))
    .pipe(dest("js"));

  src(paths.scripts)
    .pipe(concat("script.min.js"))
    .pipe(uglify())
    .pipe(dest("js"))
    .pipe(rev())
    .pipe(dest("js"))
    .pipe(rev.manifest())
    .pipe(dest("js"));

  done();
}

function compileStyles(done) {
  // Return a concatenated, sassed and postcssed, but uncompressed CSS file, with sourcemaps
  src(paths.styles)
    // concatenate, sass, postcss, write sourcemaps and then output final css file
    .pipe(sourcemaps.init())
    .pipe(concat("style.css"))
    .pipe(sass())
    .pipe(postcss([autoprefixer(), flexfixer(), mqpacker()]))
    .pipe(sourcemaps.write("."))
    .pipe(dest("css"));

  src(paths.styles)
    // then produce a normal minified CSS file
    .pipe(concat("style.min.css"))
    .pipe(sass())
    .pipe(postcss([autoprefixer(), mqpacker(), flexfixer(), cssnano()]))
    .pipe(dest("css"))

    // then produce a revision-hashed file (it will be identical to style.min.css, but with hash filename to facilitate forever-caching
    .pipe(rev())
    .pipe(dest("css"))

    // then produce the revision-hash manifest file. This is necessary to allow us to get the hash filename for find-replace in the PHP file.
    .pipe(rev.manifest())
    .pipe(dest("css"));

  done();
}

exports.default = function() {
  watch(paths.scripts, compileScripts);
  watch(paths.styles, compileStyles);
};
