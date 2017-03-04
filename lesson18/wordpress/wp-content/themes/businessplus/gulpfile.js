 var gulp = require('gulp'),
    sass = require('gulp-sass'), 
    sourcemaps = require('gulp-sourcemaps'), 
    watch = require('gulp-watch'), 
    bower = require ('gulp-bower'),
    autoprefixer = require('gulp-autoprefixer'), 
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'), 
    concat = require('gulp-concat'),
    rigger = require('gulp-rigger'),
    livereload = require('gulp-livereload'),
    cssmin = require('gulp-minify-css'),
    browserSync = require("browser-sync").create(),
    reload = browserSync.reload, 
    filter = require('gulp-filter'),
    flatten = require('gulp-flatten'),
    mainBowerFiles = require ('main-bower-Files'),
    del = require('del'),
    newer = require('gulp-newer');

/*var sassBower = {
    sassPath: 'src/sass',
    bowerDir: 'src/bower_components'
};*/

var path = {
    vendor:{
        js:'vendor/js/'
    },
    dist: {
        php: './',
        js: 'js/',
        style: './',
        img: 'img/',
        fonts: 'fonts/'
    },
    src: {
        php:'*.php',
        js: 'js/*.js',
        style:'style/**/*.scss',
        img: 'img/**/*.*',
        fonts: 'fonts/**/*.*'
    },
    watch: {
        php: '*.php',
        js: 'js/**/*.js',
        style: 'style/**/*.scss',
        img: 'img/**/*.*',
        fonts: 'fonts/**/*.*'
    }
};
var config = {
    server: {
        baseDir: "./"
    },
    tunnel: true,
    host: 'localhost',
    port: 9000,
    logPrefix: "Frontend_Devil"
};

gulp.task('jsVendor', function() {
    var files = (mainBowerFiles({ filter: new RegExp('.*js$', 'i') }));
    gulp.src(['bower_components/jquery/dist/jquery.js',
        'bower_components/jquery-ui/jquery-ui.min.js',
        'bower_components/slick-carousel/slick/slick.js', 
        'bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'bower_components/isotope/dist/isotope.pkgd.js',
        'bower_components/masonry/dist/masonry.pkgd.min.js'],files)
        .pipe(gulp.dest(path.vendor.js));
});


/*
gulp.task('fontsVendor',['fontsBootstrap'],function () {
    return gulp.src('./bower_components/!**!/!*.{eot,svg,ttf,woff,woff2}')
        .pipe(flatten())
        .pipe(gulp.dest(path.dist.fonts));
});

gulp.task('fontsBootstrap', function () {
    return gulp
        .src('bower_components/bootstrap-sass/assets/fonts/!**!/!*')
        .pipe(gulp.dest(path.dist.fonts));
    });

gulp.task('html:build', function () {

    gulp.src(path.src.html)
        .pipe(rigger())
        .pipe(gulp.dest(path.dist.html))
        .pipe(livereload());
});

gulp.task('js:build', function () {
    gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.dist.js))
        .pipe(livereload());
});
*/

gulp.task('style:build', function () {
    gulp.src(path.src.style)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer({browsers: ['last 2 versions']}))
        .pipe(cssmin())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.dist.style))
        .pipe(livereload());
});
gulp.task('image:build', function () {
    gulp.src(path.src.img)
        .pipe(newer('img/'))
       // .pipe(imagemin({
       //progressive: true,
       //     interlaced: true
       // }))
        .pipe(gulp.dest(path.dist.img))
        .pipe(reload({stream: true}));
});
 
/*gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.dist.fonts))
});*/
/*
 gulp.task('video:build', function () {
     gulp.src(path.src.video)
         .pipe(gulp.dest(path.dist.video))
 });*/
 
gulp.task('build', [
//  'html:build',
//  'js:build',
    'style:build',
//  'fonts:build',
    'image:build',
    'jsVendor',
//  'cssVendor',
//  'fontsVendor'
]);
 
gulp.task('watch', function(){
   /* watch([path.watch.html], function(event, cb) {
        gulp.start('html:build');
    });*/
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:build');
    });
   /* watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });*/
    watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });
   /* watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:build');
    });*/
});
gulp.task('webserver', function () {
    browserSync.init(config);
});

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('default', ['build', 'watch']);

