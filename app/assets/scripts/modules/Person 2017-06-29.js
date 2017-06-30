class Person {
	constructor(fullName, favColor) {
		this.name = fullName;
		this.favoriteColor = favColor;
	}
	
	greet() {
		console.log("Hallo, i am " + this.name + " and i like " + this.favoriteColor + ".");
	}
}

// es5
// module.exports = Person;

// es6
export default Person;


/* function Person (fullName, favColor) {
	this.name = fullName;
	this.favoriteColor = favColor;
	this.greet = function() {
		console.log("Hallo, ich bin " + this.name + " and i like " + this.favoriteColor + ".");
	}
}

module.exports = Person; */