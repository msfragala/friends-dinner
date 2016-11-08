const webpack = require('webpack')
const path = require('path')
const validate = require('webpack-validator')

module.exports = validate({
  devtool: 'cheap-source-map',
  output: {
    filename: '[name].js'
  },
  resolve: {
    root: path.resolve('./src/js'),
    modulesDirectories: [path.resolve('./node_modules')]
  },
  module: {
    loaders: [
      {
        test: /\.js$/,
        include: [path.resolve('./src/js')],
        loaders: ['babel-loader']
      }
    ]
  },
  plugins: [
    new webpack.optimize.DedupePlugin()
  ]
})
