var $ = require('jquery');

// es5
// var Person = require('./modules/Person');


import Person from './modules/Person';


class Adult extends Person {
	payTaxes() {
		console.log(this.name + " now owes $0 in taxes.");
	}
}

alert("MARU and FURRY testen");

var john = new Person("John Doe", "blue");
john.greet();

var jane = new Adult("Mary Smith", "yellow ");
jane.greet();
jane.payTaxes();