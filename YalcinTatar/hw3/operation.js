/**
 * Created by yalcin on 09.07.2017.
 */
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