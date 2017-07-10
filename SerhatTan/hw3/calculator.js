// Creating Calculator Class
// In this class there are four methods that called sum, subtraction, multiply, division
// That methods should take two parameters number1 and number2

function Calculator() {

	this.sum = function(number1, number2) {
		return parseFloat(number1) + parseFloat(number2);
	}
	this.subtraction = function(number1, number2) {
		return number1 - number2;
	}
	this.multiply = function(number1, number2) {
		return number1 * number2;
	}
	this.division = function(number1, number2) {
		return number1 / number2;
	}
}