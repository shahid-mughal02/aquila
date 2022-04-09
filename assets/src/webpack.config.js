const path = require( 'path' );

const JS_DIR = path.resolve( __dirname, '/src/js' );
const IMG_DIR = path.resolve( __dirname, '/src/img' );
const BUIL_DIR = path.resolve( __dirname, 'build' );

const entry = {
    main: JS_DIR + "/main.js",
    single: JS_DIR + "/single.js"
};
const output = {
    path: BUIL_DIR,
    filename: "/js/[name].js"
};

module.exports = ( env, argv ) => ({
    entry: entry,
    output: output
})