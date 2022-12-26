module.exports = function(grunt){
    grunt.initConfig({
        concat: {
            options: {
              separator: ';',
            },
            js: {
              src: [
                'js/jquery-3.6.1.min.js',
                'js/script.js'
              ],
              dest: 'dist/core.bundle.js',
            },
            css: {
                src: [
                  'style.css',
                  'css/*.css'
                ],
                dest: 'core.bundle.css',
              },
          },
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
};