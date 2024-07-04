var LiveReloadWebpackPlugin = require('@kooneko/livereload-webpack-plugin');
//Ensure this is added at after your mix.js() code lines.
module.exports = {
  plugins: [
    new LiveReloadWebpackPlugin(options)
  ]
}