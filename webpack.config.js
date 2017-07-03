module.exports = {
	entry: {
		// App: "./app/assets/scripts/App.js",
		// Vendor: "./app/assets/scripts/Vendor.js"
		App: __dirname + '/app/assets/scripts/App.js',
		Vendor: __dirname + '/app/assets/scripts/Vendor.js'
	},
	output: {
		filename: 'App.js',
		// path: "./app/temp/scripts",
		path: __dirname + '/app/temp/scripts',
		filename: "[name].js"
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
