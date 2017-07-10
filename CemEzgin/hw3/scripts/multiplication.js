var Multiplication = function(firstNumber,lastNumber){
	this.firstNumber = firstNumber;
	this.lastNumber = lastNumber;
}
Multiplication.prototype.answer = function(){
	var answer = parseFloat(this.firstNumber) * parseInt(this.lastNumber);
	document.getElementById('display').innerHTML="";
	return buttonClick(answer);
}