const path = require('path');
const webpack = require('webpack');

module.exports = {
	context: path.resolve(__dirname, './src'),
	entry: {
		app: './app/assets/scripts/App.js',
	},
	output: {
		/* path: path.resolve(__dirname, './dist'),  */
		/* path: "./app/assets/scripts",  */
		path: path.resolve(__dirname, "./app/temp/scripts"),
		/* path: './app/temp/scripts',  */
		filename: 'Maru.js',
	}
}