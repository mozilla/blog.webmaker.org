module.exports = function(grunt) {
  grunt.initConfig({
    compress: {
      main: {
        options: {
          mode: "zip",
          archive: "../OneMozilla-child.zip"
        },
        files: [
          {expand: true, src: [ "**", "!node_modules/**" ]}
        ]
      }
    },
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

  grunt.loadNpmTasks('grunt-contrib-compress');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['jshint', 'imagemin', 'compress']);
  grunt.registerTask('dev', ['watch']);
};
