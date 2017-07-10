function Calculator()
{
    this.addition;
    this.subtraction;
    this.multiplication;
    this.division;
    this.amount;
    this.poww;
    this.percent;
}

Calculator.prototype.add = function(numberOne,numberTwo){
 	this.addition = Number(numberOne)+Number(numberTwo);
	return this.addition;
     
}

Calculator.prototype.subtract = function(numberOne,numberTwo){
	this.subtraction = Number(numberOne)-Number(numberTwo);
	return this.subtraction;
     
}

Calculator.prototype.multiply = function(numberOne,numberTwo){
        this.multiplication = Number(numberOne)*Number(numberTwo);
	return this.multiplication;
     
}

Calculator.prototype.divide = function(numberOne,numberTwo){
       this.division = Number(numberOne)/Number(numberTwo);
       return this.division;
     
}

Calculator.prototype.poww = function(numberOne,numberTwo){
        this.poww = Math.pow(Number(numberOne),Number(numberTwo));
	return this.poww;
     
}
Calculator.prototype.percent = function(numberOne){
        this.percent = numberOne/100;
	return this.percent;
     
}
Calculator.prototype.total = function(numberOne){
        this.amount = numberOne;
	return this.amount;
     
}
Calculator.prototype.getTotal= function(){
	return this.amount;
     
}



