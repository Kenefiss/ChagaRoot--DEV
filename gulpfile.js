import * as nodePath from 'path';
const rootFolder = nodePath.basename(nodePath.resolve());

import gulp from "gulp";
import {
  deleteAsync
} from "del";
import browsersync from "browser-sync";
import notify from "gulp-notify";
import plumber from "gulp-plumber";
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const scss = gulpSass(dartSass)
import cleanCss from 'gulp-clean-css';
import autoprefixer from 'gulp-autoprefixer';
import newer from "gulp-newer";
import imagemin from "gulp-imagemin";
import imageminJPG from "imagemin-jpeg-recompress";
import imageminPNG from "imagemin-pngquant";
import webp from "gulp-webp";
import zipPlugin from "gulp-zip";
import vinylFTP from "vinyl-ftp";
import util from "gulp-util";
import {
  configFTP
} from './ftp-settings.js';


const copyApp = () => {
  return gulp.src([
      'app/css/**/*.css',
      'app/fonts/**/*',
      'app/js/**/*.js',
      'app/img/**/*.*',
      'app/video/**/*.*',
      'app/model/**/*.*',
      'app/**/*.html',
      'app/**/*.php',
      'app/.htaccess',
      'app/**/*.json',
      'app/**/*.txt'
    ], {
      base: 'app'
    })
    .pipe(gulp.dest(`build/${rootFolder}`));
}

function startWatch() {
  gulp.watch('app/scss/**/*.scss', styles)
  gulp.watch(['app/js/**/*.js', '!app/js/**/*.min.js']).on('change', refresh)
  gulp.watch('app/**/*.html').on('change', refresh)
  gulp.watch('app/**/*.php').on('change', refresh)
  gulp.watch('images/**/*', img)
}

export const cleanImg = () => {
  return deleteAsync('images/**/*', {
    force: true
  })
}

export const cleanBuild = () => {
  return deleteAsync([
    'build/**/*',
    'build/.htaccess'
  ], {
    force: true
  })
}

export const server = () => {
  // for PHP files
  browsersync.init({
    ui: false,
    notify: false,
    /* folder in open-server (website) */
    proxy: `http://${rootFolder}/app/links.php`,
    /* name folder */
    host: `${rootFolder}`,
    /* command for working */
    open: 'external'
  })
}

export const refresh = (done) => {
  browsersync.reload();
  // done();
};

export const styles = () => {
  return gulp.src([
      'app/scss/**/*.scss',
      // 'node_modules/swiper/swiper-bundle.min.css',
      // 'node_modules/sumoselect/sumoselect.min.css',
      // 'node_modules/bootstrap/dist/css/bootstrap-grid.min.css',
    ])
    .pipe(plumber(
      notify.onError({
        title: "SCSS",
        message: "Error: <%= error.message %>"
      })
    ))
    .pipe(scss({
      // outputStyle: "compressed"
      outputStyle: "expanded"
    }))
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 2 versions'],
      cascade: true,
      grid: true
    }))
    .pipe(cleanCss({
      format: {
        breaks: {
          afterAtRule: 0,
          afterBlockBegins: 1, // 1 is synonymous with `true`
          afterBlockEnds: 2,
          afterComment: 1,
          afterProperty: 0,
          afterRuleBegins: 0,
          afterRuleEnds: 1,
          beforeBlockEnds: 1,
          betweenSelectors: 1 // 0 is synonymous with `false`
        },
        spaces: { // controls where to insert spaces
          aroundSelectorRelation: false, // controls if spaces come around selector relations; e.g. `div > a`; defaults to `false`
          beforeBlockBegins: true, // controls if a space comes before a block begins; e.g. `.block {`; defaults to `false`
          beforeValue: true // controls if a space comes before a value; e.g. `width: 1rem`; defaults to `false`
        },
        semicolonAfterLastProperty: true
      },
      level: 0
    }))
    .pipe(gulp.dest('app/css/'))
    .pipe(browsersync.stream())
}

export const scripts = () => {
  return gulp.src([
      'node_modules/jquery/dist/jquery.min.js',
      // 'node_modules/swiper/swiper-bundle.min.js',
      // 'node_modules/inputmask/dist/jquery.inputmask.min.js',
      // 'node_modules/sumoselect/jquery.sumoselect.min.js'
      // 'node_modules/moment/min/moment.min.js',
      // 'node_modules/isotope-layout/dist/isotope.pkgd.min.js',
    ])
    .pipe(gulp.dest('app/js/vendors/'))
    .pipe(browsersync.stream())
}

export const img = () => {
  return gulp.src('images/**/*.{png,jpg,svg}')
    .pipe(newer('app/img/'))
    .pipe(webp({
      quality: 100
    }))
    .pipe(gulp.dest('app/img/'))
    .pipe(gulp.src('images/**/*.{png,jpg,svg}'))
    .pipe(newer('app/img/'))
    .pipe(
      imagemin({
          progressive: true,
          svgoPlugins: [{
            removeViewBox: false
          }]
        },
        [
          imageminJPG({
            loops: 3,
            min: 60,
            max: 80,
            quality: "medium",
          }),
          imageminPNG({
            speed: 1,
            floyd: 1,
          }),
        ])
    )
    .pipe(gulp.dest('app/img/'))
}

export const zip = () => {
  // deleteAsync(`build/${rootFolder}/${rootFolder}.zip`);
  return gulp.src('build/**/*.*', {
      dot: true
    })
    .pipe(plumber(
      notify.onError({
        title: "ZIP",
        message: "Error: <%= error.message %>"
      })))
    .pipe(zipPlugin(`${rootFolder}.zip`))
    .pipe(gulp.dest(`build/${rootFolder}/`))
}

export const ftp = () => {
  configFTP.log = util.log;
  const ftpConnect = vinylFTP.create(configFTP);

  return gulp.src('build/**/*.*', {
      dot: true
    })
    .pipe(plumber(
      notify.onError({
        title: "FTP",
        message: "Error: <%= error.message %>"
      })))
    .pipe(ftpConnect.dest(`./`))
}

gulp.task('build', gulp.series(cleanBuild, styles, scripts, img, copyApp, zip));
gulp.task('default', gulp.parallel(styles, scripts, img, server, startWatch));