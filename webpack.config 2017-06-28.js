module.exports = {
	entry: "./app/assets/scripts/App.js",
	/* entry: __dirname + "/app/assets/scripts/App.js", */
	output: {
		/* path: "./app/temp/scripts", */
		/* path: __dirname + "./app/temp/scripts", */
		path: __dirname + "./app/assets/scripts",
		filename: "App.js"
	},
	module: {
		loaders: [
			{
				loader: 'babel-loader',
				query: {
					presets: ['es2015']
				},
				test: /\.js$/,
				exclude: /node_modules/
			}
		]
	}
}
