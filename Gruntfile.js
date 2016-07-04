module.exports = function(grunt) {

  grunt.initConfig({
    uglify: {
      my_target: {
        files: [{
          expand: true,
          cwd: 'waggli/js/',
          src: '**/*.js',
          dest: 'waggli/js/'
        }]
      }
    },
    cssmin: {
      my_target: {
        files: [{
          expand: true,
          cwd: 'waggli/css/',
          src: '**/*.css',
          dest: 'waggli/css/'
        }]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['uglify', 'cssmin']);

};