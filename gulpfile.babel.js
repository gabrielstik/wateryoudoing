'use strict'

import gulp from 'gulp'
import rename from 'gulp-rename'
import plumber from 'gulp-plumber'
import sourcemaps from 'gulp-sourcemaps'
import notify from 'gulp-notify'
import uglify from 'gulp-uglify'
import autoprefixer from 'gulp-autoprefixer'
import sass from 'gulp-sass'
import responsive from 'gulp-responsive'
import concat from 'gulp-concat'
import imagemin from 'gulp-imagemin'
import gutil from 'gulp-util'
import del from 'del'
import browserify from 'browserify'
import babelify from 'babelify'
import source from 'vinyl-source-stream'
import buffer from 'vinyl-buffer'
import env from 'babel-preset-env'
import core from 'babel-core'
import sync from 'browser-sync'

const src = './wp-content/themes/watertheme/src'
const dist = './wp-content/themes/watertheme'

gulp.task('dev', ['styles', 'scripts', 'browsersync', 'watch'])
gulp.task('build', ['styles', 'scripts'])

gulp.task('clean', () => {
  return del(dist).then(paths => {
    console.log('Deleted files and folders:\n', paths.join('\n'))
  })
})

gulp.task('styles', () => {
  return gulp.src(`${src}/styles/main.scss`)
    .pipe(plumber({errorHandler: notify.onError('Styles error:  <%= error.message %>')}))
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 4 versions'],
      cascade: false,
      grid: true
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(`${dist}/css`))
})

gulp.task('scripts', () => {
  browserify({
    entries: `${src}/scripts/app.js`,
    debug: false
  })
  .transform(babelify, { presets: [env] })
  .bundle()
  .on('error', gutil.log)
  .pipe(source('app.js'))
  // .on('error', gutil.log)
  .pipe(buffer())
  .pipe(rename('app.js'))
  .pipe(sourcemaps.init({loadMaps: true}))
  .pipe(uglify())
  // .pipe(sourcemaps.write('./'))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest(`${dist}/js`))
})

gulp.task('browsersync', () => {
  sync.init({
    proxy: 'http://localhost:8888/',
    port: 8888,
    notify: false
  })
})

gulp.task('watch', () => {
  gulp.watch(`${src}/styles/**/*.scss`, ['styles']).on('change', sync.reload)
  gulp.watch(`${src}/scripts/**/*.js`, ['scripts']).on('change', sync.reload)
})