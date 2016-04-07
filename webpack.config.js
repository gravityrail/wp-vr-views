var path = require('path');
var webpack = require('webpack');

module.exports = {
    devtool: 'source-map',
    entry: {
        'vrview': './public/jssrc/vrview.js',
    },
    output: {
        path: path.join(__dirname, 'public/js'),
        filename: '[name].js',
    },
    plugins: [],
    module: {
        loaders: [
            {
                test: /\.js?$/,
                exclude: /node_modules/,
                loader: 'babel', 
                include: __dirname,
                query: {
                    presets: ['es2015']
                }
            }
        ]
    }
};