const path = require('path');

module.exports = {
  entry: './src/js/APP/main.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'build/js/APP'),
  },
};