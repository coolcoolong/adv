fis.set('project.ignore', [
    'output/**',
    'node_modules/**',
    '.git/**',
    '.svn/**',
    'fis-conf.js',
    'fis3.sh'
]);

//生产环境使用生产版本vue.js
fis.match('*.php', {
    preprocessor: fis.plugin('replace', {
        from: '/static/js/vue.js',
        to: '/static/js/vue.min.js',
    }),
});

fis.match(/^\/static\/(.*)/i, {
    useHash: true,
    release: 'web/themes/default/static/$1',
    url: '/themes/default/static/$1',
    domain: ''
});

fis.match('*.js', {
    optimizer: fis.plugin('uglify-js')
});

fis.match('*.css', {
    optimizer: fis.plugin('clean-css')
});

fis.match('*.min.css', {
    optimizer: false
});

fis.match('*.min.js', {
    optimizer: false
});

fis.match('*-lite.js', {
    optimizer: false
});

fis.media('dev')
    .match(/^\/static\/(.*)/i, {
        useHash: true,
        release: 'web/themes/dev/static/$1',
        url: '/themes/dev/static/$1',
        domain: ''
    });