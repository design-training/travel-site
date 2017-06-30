module.exports = {
	entry: './app/assets/scripts/App.js',
	output: {
		/* path: "./app/assets/scripts",  */
		/* path: path.resolve(__dirname, "./app/temp/scripts"),  */
		path: '.|app/temp/scripts',
		filename: 'Furry.js',
	}
}