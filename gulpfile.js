(function () {
	'use strict';

	var gulp    = require('gulp');
	var phpunit = require('gulp-phpunit');

	var opts = {
		debug: false  // this is just here to make sure the proper command is executed
	};

	gulp.task('phpunit', function() {
		return gulp.src('custom.phpunit.xml')
			.pipe(phpunit('', opts));
	});

})();

