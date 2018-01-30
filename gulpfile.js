// Grab our gulp packages
const gulp  = require('gulp');

// load all plugins in "devDependencies" into the variable $
const $ = require("gulp-load-plugins")({
    pattern: ["*"],
    scope: ["devDependencies"]
});

// Simple error logger
const onError = (err) => {
    console.log(err);
};

// Compile Sass, Autoprefix and minify
gulp.task('styles', function() {
    return gulp.src('./assets/scss/**/*.scss')
        .pipe($.plumber({errorHandler: onError}))
        .pipe($.sourcemaps.init({loadMaps: true})) // Start Sourcemaps
        .pipe($.sass({
                outputStyle: 'compressed'
            })
            .on('error', $.sass.logError))
        .pipe($.autoprefixer({
            browsers: ['last 5 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./assets/css/'))
        .pipe($.rename({suffix: '.min'}))
        .pipe($.sourcemaps.write('.')) // Creates sourcemaps for minified styles
        .pipe(gulp.dest('./assets/css/'))
});


gulp.task('gunner-js', function() {
  return gulp.src([

  ])
	.pipe($.babel({
		presets: ['es2015'],
	    compact: true
	}))
    .pipe($.sourcemaps.init())
    .pipe($.concat('gunner.js'))
    .pipe(gulp.dest('./assets/js'))
    .pipe($.rename({suffix: '.min'}))
    .pipe($.uglify())
    .pipe($.sourcemaps.write('.')) // Creates sourcemap for minified JS
    .pipe(gulp.dest('./assets/js'))
});


// Browser-Sync watch files and inject changes
gulp.task('browsersync', function() {
    // Watch files
    var files = [
    	'./assets/css/*.css',
    	'./assets/js/*.js',
    	'**/*.php',
    	'assets/images/**/*.{png,jpg,gif,svg,webp}',
    ];

    browserSync.init(files, {
	    // Replace with URL of your local site
	    proxy: "http://localhost/",
    });

    gulp.watch('./assets/scss/**/*.scss', ['styles']);
   // gulp.watch('./assets/js/scripts/*.js', ['site-js']).on('change', browserSync.reload);

});

// Watch files for changes (without Browser-Sync)
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('./assets/scss/**/*.scss', ['styles']);

  // Watch site-js files
  //gulp.watch('./assets/js/scripts/*.js', ['site-js']);


});

// Run styles and gunner-js
gulp.task('default', ['styles', 'gunner-js']);
