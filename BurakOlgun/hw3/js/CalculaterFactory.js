CalculaterFactory = function ()
{
    screener = document.getElementById("screener");

    this.summer = function (number1 , number2)
  {
      return screener.innerHTML = parseFloat(number1) + parseFloat(number2);
  };

  this.subtraction = function (number1 , number2)
  {
      return screener.innerHTML = (parseFloat(number1) - parseFloat(number2));
  };

  this.multiple = function (number1 , number2)
  {
      return screener.innerHTML = parseFloat(number1) * parseFloat(number2);
  };

  this.division = function (number1 , number2)
  {
      return screener.innerHTML = parseFloat(number1) / parseFloat(number2);
  };
  this.percent = function (number1 , number2)
  {
      var num = number1 / 100;
      num = num * number2;
      return screener.innerHTML = parseFloat(num);
  };
  this.pow2 = function (number1) {
      return screener.innerHTML = parseFloat(number1) * parseFloat(number1)
  };
  this.clear = function ()
  {
      screener.innerHTML = '';
       control = true;
       number1 = 0;
       number2 = 0;
       marker = '';
  }
};