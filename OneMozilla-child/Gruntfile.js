module.exports = function(grunt) {
  grunt.initConfig({
    imagemin: {
      options: {
        optimizationLevel: 5,
        pngquant: false
      },
      primary: {
        files: [{
          expand: true,
          cwd: "img/",
          src: ["**/*.{png,jpg,gif}"],
          dest: "img/"
        }]
      }
    },
    jshint: {
      all: ['Gruntfile.js','js/**/*.js']
    },
    less: {
      development: {
        options: {
          compress: false,
          optimization: 2,
          strictMath: true
        },
        files: {
          "style.css": "less/style.less"
        }
      }
    },
    watch: {
      styles: {
        files: ['less/**/*.less'],
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['jshint', 'imagemin']);
  grunt.registerTask('dev', ['watch']);
};
