//Listening the some dom elements and fetch their values
//Calling operations function from Calculator class
//Sending values to operations function parameters
//Clear screen with click function event



var classname = document.getElementsByClassName("btn");
var digits = [];

digitProcess = function(e) {
	// e.target.innerHTML is the button's number like 5, 6 
	digits.push(e.target.innerHTML);
	var number = digits.join("");
	document.getElementById("screen").innerHTML = number;
};

calculate = function() {
	var screen = document.getElementById("screen");
	data = screen.innerHTML;

	console.log(data.indexOf("+"));
	// Gets the first index where a operand occours
	if (data.indexOf("+")!=-1) {
		var index = data.indexOf("+");
		operation = "sum";
	} else if (data.indexOf("-")!=-1) {
		var index = data.indexOf("-");
		operation = "subtraction";
	} else if (data.indexOf("*")!=-1) {
		var index = data.indexOf("*");
		operation = "multiply";
	} else if (data.indexOf("/")!=-1) {
		var index = data.indexOf("/");
		operation = "division";
	}
	var number1 = data.substr(0, index); // Gets the first part
	var number2 = data.substr(index + 1).slice(0, -1); // Gets the second part

	var calculator = new Calculator();
	result = calculator[operation](number1, number2);
	screen.innerHTML = result;
	digits = [];
	digits.push(result);
}

clearScreen = function() {
	digits = [];
	document.getElementById("screen").innerHTML= "";
}

//getElementsByClassName("btn-info") return array like object
for (var i = 0; i < classname.length; i++) {
	classname[i].addEventListener('click', digitProcess, false);
}


var equalButton = document.getElementById("equalButton");
equalButton.addEventListener('click', calculate, false);

var clearButton = document.getElementById("clearButton");
clearButton.addEventListener('click', clearScreen, false);