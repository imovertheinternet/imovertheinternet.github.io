module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      sass: {
        files: "assets/vendor/materialize/sass/**/*.scss", 
        tasks: ['sass', 'notify:sass'],
            options: {
              livereload: false,
            },
          }
    },

    notify: {
      sass: {
        options: {
          title: 'Task Complete',  // optional
          message: 'SASS is done yo', //required
        }
      }
    },


    // SASS task config
    sass: {
        dev: {
            files: {
                // destination                                                       // source file
                "assets/vendor/materialize/dist/css/materialize.css" : "assets/vendor/materialize/sass/materialize.scss"
            }
        }
    },





    uglify: {
      options: {
      mangle: false
    },
    my_target: {
      files: {
        'assets/vendor/materialize/dist/js/min.js': ['assets/vendor/materialize/js/*.js']
        }
      }
    }
    /*,
    uglify: {
    my_target: {
      files: {
        'pages/js/main.min.js': ['pages/js/*.js']
        }
      }
    }
  */
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  // grunt.loadNpmTasks('grunt-contrib-qunit');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-notify');
  //grunt.loadNpmTasks('grunt-contrib-compass');
  // grunt.registerTask('test', ['jshint', 'qunit']);
  grunt.registerTask('default', ['sass']);
  grunt.registerTask('zzz', ['sass', 'watch', 'notify']);
  grunt.registerTask('ugly', ['uglify']);
};