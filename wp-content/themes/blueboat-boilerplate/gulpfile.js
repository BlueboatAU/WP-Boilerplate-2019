const gulp = require("gulp");
const sass = require("gulp-sass");
const postcss = require("gulp-postcss");
// const del = require("del");
const rollup = require("gulp-better-rollup");
const babel = require("gulp-babel");
const resolve = require("@rollup/plugin-node-resolve");
const uglify = require("rollup-plugin-uglify");

// sass.compiler = require('sass');

var distTarget = "./";

var css = {
	src: "src/sass/style.scss",
	sassOpts: {
		outputStyle: "compressed",
		precision: 3,
		errLogToConsole: true,
		includePaths: ['node_modules/']
	},
	processors: [
		require("autoprefixer"),
		require("cssnano"),
	],
};

var js = {
	src: "src/js/app.js",
	rollup: {
		treeshake: true,
		plugins: [
			babel(),
			resolve.nodeResolve(),
			uglify.uglify(),
		],
	},
	rollupFormat: {
		format: "iife",
	}
}

//Setup Basic Actions

gulp.task("clean", () => {
	return del([distTarget]);
});

gulp.task("styles", () => {
	return gulp
		.src(css.src)
		.pipe(sass(css.sassOpts).on('error', sass.logError))
		.pipe(postcss(css.processors))
		.pipe(gulp.dest(distTarget));
});

gulp.task("scripts", () => {
  return gulp
		.src(js.src)
		.pipe(rollup(js.rollup, js.rollupFormat))
		.pipe(gulp.dest(distTarget));
});

//Useful Tasks
gulp.task("build", gulp.series(["styles", "scripts"]));

gulp.task("watch", () => {
	gulp.watch("src/**", (done) => {
		gulp.series(["styles", "scripts"])(done);
	});
});
