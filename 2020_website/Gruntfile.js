module.exports = function (grunt) {
    'use strict';
    grunt.loadNpmTasks('grunt-fileindex');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-bake');
    grunt.initConfig({
        bake: { default: { files: {
            'build/index.html': 'src/index.html',
            'build/work.html': 'src/work.html',
            'build/photography.html': 'src/photography.html'
        } } },
        connect: {
            server: {
                options: {
                    port: 3000,
                    keepalive: true,
                    livereload: true,
                    base: 'build',
                    hostname: '*'
                }
            }
        },
        copy: {
            // js: {
            //     files: [{
            //             expand: true,
            //             cwd: 'src/js',
            //             src: ['**'],
            //             dest: 'build/js'
            //         }]
            // },
            img: {
                files: [{
                        expand: true,
                        cwd: 'src/img',
                        src: ['**'],
                        dest: 'build/img'
                    }]
            },
            fonts: {
                files: [{
                        expand: true,
                        cwd: 'src/fonts',
                        src: ['**'],
                        dest: 'build/fonts'
                    }]
            }
        },
        imagemin: {
            png: {
                options: { optimizationLevel: 7 },
                files: [{
                        expand: true,
                        cwd: 'src/img',
                        src: ['**/*.{png,jpg}'],
                        dest: 'src/img'
                    }]
            }
        },
        less: { default: { files: { 'build/css/app.css': 'src/less/app.less' } } },
        uglify: {
            js: {
                files: {
                    'build/js/libs.js': ['src/js/lib/hbs.js']
                }
            }
        },
        watch: {
            less: {
                files: ['src/**/*.less'],
                tasks: ['less'],
                options: { livereload: true }
            },
            html: {
                files: ['src/**/*.html'],
                tasks: ['bake'],
                options: { livereload: true }
            },
            js: {
                files: ['src/**/*.js'],
                tasks: [
                    'copy',
                    'uglify'
                ],
                options: { livereload: true }
            },
            img: {
                files: ['src/**/*.{png,gif,jpg}'],
                tasks: [
                    'copy:img',
                    'imagemin'
                ]
            }
        },
        compress: {
            default: {
                options: { archive: 'project.zip' },
                files: [
                    {
                        src: ['build/**'],
                        dest: '/'
                    },
                    {
                        src: ['docs/**'],
                        dest: '/'
                    },
                    {
                        src: ['src/**'],
                        dest: '/'
                    },
                    {
                        src: ['Gruntfile.js'],
                        dest: '/'
                    },
                    {
                        src: ['package.json'],
                        dest: '/'
                    }
                ]
            }
        },
        fileindex: {
            custom: {
                options: {
                    format: function (list, options, dest) {
                        var html = '<html><head><meta name="viewport" content="width=device-width;" /></head><body>';
                        html = html.concat('<h1>Template Listing</h1>\n\n<ul>\n');
                        for (var i in list) {
                            if (!list.hasOwnProperty(i)) {
                                continue;
                            }
                            var next = list[i];
                            html = html.concat('<li><a href="' + next + '">' + next + '</a></li>\n');
                        }
                        html = html.concat('</ul>');
                        html = html.concat('</body></html>');
                        return html;
                    }
                },
                files: [{
                        dest: 'build/index.html',
                        src: ['*.html'],
                        cwd: 'src',
                        filter: 'isFile'
                    }]
            }
        }
    });
    grunt.registerTask('default', [
        'less',
        'bake',
        'uglify',
        'copy'
    ]);
    grunt.registerTask('compress', ['compress']);
};