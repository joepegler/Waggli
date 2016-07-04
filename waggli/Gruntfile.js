module.exports = function(grunt) {

  grunt.initConfig({
    uglify: {
      build: {
        files: [{
          expand: true,
          cwd: 'waggli/js',
          src: '**/*.js',
          dest: 'waggli/js',
        }]
      }
    },
    cssmin: {
      build: {
        files: [{
          expand: true,
          cwd: 'waggli/css',
          src: '**/*.js',
          dest: 'waggli/css',
        }]
      }
    }
  });


  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['uglify', 'cssmin']);

};