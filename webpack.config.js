const path = require('path');
const webpack = require('webpack');

module.exports = {
    output: { 
        filename: 'bullets.js' 
    },
    devtool: "sourcemap",
    module: {
        loaders: [
            {
                test: /.js?$/,
                loader: 'babel-loader',
                exclude: /node_modules/,
                query: {
                    presets: ['es2015', 'stage-0'],
                    plugins: [
                        ["transform-es2015-for-of", {
                            "loose": true
                        }]
                    ],
                }
            }
        ]
    }
}
