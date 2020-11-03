var gulp          = require('gulp');
var concat        = require('gulp-concat');
var rename        = require('gulp-rename');
var uglify        = require('gulp-uglify');
var browserSync   = require('browser-sync').create();
var $             = require('gulp-load-plugins')();
var autoprefixer  = require('autoprefixer');

var jsFiles = [
  'js/jquery.min.js',
  'js/slick.min.js',
  'js/app.js'
]
var jsDest = 'js/dist';

function scripts() {
  return gulp.src(jsFiles)
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest(jsDest))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(jsDest))
    .pipe(browserSync.stream());
};

function sass() {
  return gulp.src('scss/main.scss')
    .pipe($.sass({
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.postcss([
      autoprefixer({   overrideBrowserslist: [
        "defaults",
        "not IE 11",
        "not IE_Mob 11",
        "maintained node versions"
      ]})
    ]))
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream());
};

function serve() {
  gulp.watch("scss/**/*.scss", sass);
  gulp.watch("js/*.js", scripts);
}

gulp.task('sass', sass);
gulp.task('scripts', scripts);
gulp.task('default', gulp.series('sass', 'scripts', serve));
