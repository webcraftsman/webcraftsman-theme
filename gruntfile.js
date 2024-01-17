module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    'dart-sass': {
      target: {
        files: [{
          expand: true,
          cwd: 'scss/',
          src: ['*.scss'],
          dest: 'css/',
          ext: ['.css']
        }]
      }
    },
    autoprefixer:{
      dist:{
        files:{
          'css/main.css':'css/main.css'
        }
      }
    },
/*    concat: {   
      dist: {
        src: ['_source/js/main.js'],
        dest: 'js/main.js'
      }
    },
    uglify: {
      build: {
        src: 'js/main.js',
        dest: 'js/main.min.js'
      }
    }, */
    cssmin: {
      target: {
        files: {
          'css/main.min.css':'css/main.css'
        }
      }
    },
    watch: {
      css: {
        files: 'scss/*.scss',
        tasks: ['dart-sass', 'autoprefixer','cssmin']
      },
    /*  scripts: {
        files:'_source/js/main.js',
        tasks:['concat','uglify']
      } */
    }
  });
  grunt.loadNpmTasks('grunt-dart-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.registerTask('default',['watch']);
}