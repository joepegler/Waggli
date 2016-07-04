module.exports = function(grunt) {

  grunt.initConfig({
    uglify: {
      my_target: {
        files: [{
            expand: true,
            cwd: 'waggli/js',
            src: '**/*.js',
            cwd: 'waggli/js',
        }]
      }
    }
  });

  cssmin: {
    target: {
      files: [{
        expand: true,
        cwd: 'waggli/css',
        src: '**/*.js',
        cwd: 'waggli/css',
      }]
    }
  }

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['uglify']);

};