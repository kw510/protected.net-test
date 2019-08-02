module.exports = function (gulp, exec, conf, errorHandler) {
  gulp.task(
    "cubex-serve-development",
    function (done) {
      let child = exec("./cubex dev -d --port=" + conf.development.port);

      child.stdout.on(
        'data',
        function (data) { console.log(data); }
      );

      child.stderr.on(
        'data',
        function (data) { console.log(data); }
      );

      child.on(
        'close',
        function (code) { console.log('Closing code: ' + code); }
      );

      done();
    }
  );
};
