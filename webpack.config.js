const path = require('path');
const webpack = require('webpack');

module.exports = {
    entry: ["./assets/app/app.js"],
    output: { 
        path: __dirname + "/assets/js",
        filename: 'bullets.js' 
    },
    devtool: "sourcemap",
    externals: {
        "jquery": "jQuery"
    },    
    module: {   
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules\/(?!bullets-js)/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['babel-preset-env']
            }
          }
        }
      ]
    }
}
