// Requis
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var plugins = require('gulp-load-plugins')(); // tous les plugins de package.json
var connect = new plugins.connectPhp();
var htmlmin = require('gulp-htmlmin');
var runSequence = require('run-sequence').use(gulp);
var browserSync = require('browser-sync').create();
var uglify = require('gulp-uglify');


const AUTOPREFIXER_BROWSERS = [
    'ie >= 10',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4.4',
    'bb >= 10'
];
var source = './app/src'; // dossier de travail
var destination = './app/dist'; // dossier à livrer


gulp.task('sass', function () {
    return gulp.src(source + '/assets/sass/style.scss')
        .pipe(plugins.sass({
            outputStyle: 'nested',
            precision: 10,
            includePaths: ['.'],
            onError: console.error.bind(console, 'Sass error:')
        }))
        .pipe(autoprefixer({browsers: AUTOPREFIXER_BROWSERS}))
        .pipe(plugins.csscomb())
        .pipe(plugins.cssbeautify({indent: '  '}))
        .pipe(gulp.dest(destination + '/assets/css/'))
        .pipe(browserSync.stream());
});

// Tâche "minify" = minification CSS (destination -> destination)
gulp.task('minify', function () {
    return gulp.src(destination + '/assets/css/*.css')
      .pipe(plugins.csso())
      .pipe(plugins.rename({
        suffix: '.min'
      }))
      .pipe(gulp.dest(destination + '/assets/css/'));
  });
  
// Gulp task to minify HTML files
gulp.task('pages', function() {
    return gulp.src(['./src/*.html'])
      .pipe(htmlmin({
        collapseWhitespace: true,
        removeComments: true
      }))
      .pipe(gulp.dest('./dist'));
  });

// Gulp task to minify JavaScript files
/* gulp.task('scripts', function() {
    return gulp.src(source + '/assets/js/*.js')
      // Minify the file
      .pipe(uglify())
      // Output
      .pipe(gulp.dest('./dist/js'))
  }); */


// Tâche "build"
gulp.task('build', ['sass', 'scripts']);
// Tâche "prod" = Build + minify
gulp.task('prod', ['build',  'minify']);
// Tâche par défaut
gulp.task('default', ['build']);
// Tâche "watch" = je surveille *scss
gulp.task('watch', function () {
    gulp.watch(source + '/assets/sass/*.scss', ['build']);
});
// Tâche "serve"
gulp.task('serve', function() {
    runSequence(
        'sass',
        'minify',
        'pages'
      );
    connect.server({ base: 'app', port: 8010}, function(){
        browserSync.init({
            proxy: '127.0.0.1:8010',
            notify: false,
            port: 8010
        });
    });
    gulp.watch(source + "/assets/sass/*.scss", ['sass']);
    gulp.watch(source + "/assets/js/**/*.js", ['scripts']);
    gulp.watch("app/*.php").on('change', browserSync.reload);
});