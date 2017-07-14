
  var numbers = document.getElementsByTagName("button"),
    numbersLength = numbers.length,
    i = 0;

  for (i = 0; i < numbersLength; i++) {
    numbers[i].onclick = calculate;
  }

  var result = document.getElementById("result");

  function calculate() {
    var amount = this.innerHTML;

    if (amount == "=") {
      try {
        result.value = eval(result.value);
      } catch (e) {
        result.value = "0";
      }
      return;
    }

    result.value += amount;
  }


  var numbers = document.getElementsByTagName("button"),
    numbersLength = numbers.length,
    i = 0,
    result = document.getElementById("result");

  for (i = 0; i < numbersLength; i++) {
    numbers[i].onclick = calculate;
  }

  function calculate() {
    var amount = this.innerHTML;

    if (amount == "=") {
      try {
        result.value = eval(result.value);
      } catch (e) {
        result.value = "0";
      }
      return;
    }

    result.value += amount;
  }

  clearScreen = function() {
    document.getElementById("result").value="";
  }

  var clear = document.getElementById("clear");

  clear.addEventListener('click', clearScreen);
