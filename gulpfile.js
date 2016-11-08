const bs = require('browser-sync')
const chalk = require('chalk')
const gulp = require('gulp')
const print = require('gulp-print')
const yargs = require('yargs')

const argv = yargs.argv
const browser = bs.create()


/******************************
  Task Declarations
******************************/

gulp.task('build', Build)
gulp.task('default', Default)
gulp.task('scripts', Scripts)
gulp.task('serve', Serve)
gulp.task('styles', Styles)
gulp.task('watch', Watch)


/******************************
  Task Functions
******************************/

function Styles() {
  watchStyles(argv.w)
  return gulp.src('./src/css/*.css')
  .pipe(print())
  .pipe(gulp.dest('./theme/assets/css'))
}

function Scripts() {
  watchScripts(argv.w)
  return gulp.src('./src/js/*.js')
  .pipe(print())
  .pipe(gulp.dest('./theme/assets/js'))
}

function Build(done) {
  gulp.parallel(Styles, Scripts)(done)
}

function Serve() {
  browser.init({
    notify: false,
    open: argv.o,
    port: 3000,
    proxy: 'http://localhost:8000'
  })
}

function Watch() {
  watchStyles(true)
  watchScripts(true)
}

function Default() {
  gulp.series(Build, Serve)()
}


/******************************
  Helper Functions
******************************/

function watchStyles(condition) {
  if (condition) {
    const globs = './src/css/**/*.css'
    console.log(chalk.gray(timestamp()), chalk.green(`Watching "${globs}"`))
    gulp.watch(globs, Styles)
  }
}

function watchScripts(condition) {
  if (condition) {
    const globs = './src/js/**/*.js'
    console.log(chalk.gray(timestamp()), chalk.green(`Watching "${globs}"`))
    gulp.watch(globs, Scripts)
  }
}

function timestamp() {
  const time = new Date
  return `[${time.getHours()}:${time.getMinutes()}:${time.getSeconds()}]`
}
