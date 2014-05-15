module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
    	    dist: {
            src: [
                'js/html5shiv.js',
    	       'js/respond.min.js',
               'js/bootstrap.js',
            ],
            dest: 'js/concat.js',
            }
        },

        less: {
            development: {
            options: {
              paths: [""]
            },
            files: {
              "style.css": "style.less"
            }
          }

        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-less');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat']);

};

