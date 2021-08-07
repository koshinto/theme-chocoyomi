const path = require('path');
const outpath = path.join(__dirname, 'dist', 'js');

module.exports = {
  mode: 'development',
  entry: './main.js',
  output: {
    path: outpath,
    filename: 'bundle.js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: { loader: 'babel-loader' }
      },
      {
        test: /\.(c|sa|sc)ss$/,
        use: [
          'style-loader',
          'css-loader',
          'sass-loader'
        ]
      }
    ]
  },
  devtool: 'source-map',
  devServer: {
    contentBase: __dirname,
    publicPath: outpath,
    hot: true,
    hotOnly: true,
    writeToDisk: true
  }
}