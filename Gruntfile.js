module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    concat: {
        css: {
            src: ["css/*.css"],
            dest: "css/main.css",
        },

        js: {
            src: ["js/_js/*.js"],
            dest: "js/main.js",
        },
    },

    less: {
        development: {
            options: {
                paths: ["less/"]
            },
            files: {
                "css/styles.css" : "css/_css/styles.less"
            }
        }
    },

    watch: {
        all: {
          files: ["css/_css/*", "js/_js/*"],
          tasks: ["concat"],
        },
      },

});

  // Load the plugins that provide tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');


  // Default task(s).
  grunt.registerTask('default', ['concat', 'less']);
};
