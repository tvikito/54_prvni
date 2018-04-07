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
                compress: true,
                yuicompress: true,
                optimization: 2,
                sourceMap: true,
                sourceMapFilename: 'css/main.css.map', // where file is generated and located
                sourceMapURL: '/main.css.map', // the complete url and filename put in the compiled css file
                sourceMapBasepath: 'css', // Sets sourcemap base path, defaults to current working directory.
                sourceMapRootpath: '/', // adds this path onto the sourcemap filename and less file paths
            },
            files: {
                "css/styles.css" : "css/_css/styles.less",
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
