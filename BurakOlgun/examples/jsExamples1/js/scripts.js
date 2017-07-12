// var firstH1 = document.getElementById('firstH1');
// var firstH2 = document.getElementById('firstH2');
// var liSecond = document.getElementsByClassName('liSecond');
// var buttonOne = document.getElementsByName('buttonOne');
// var container = document.getElementById('container');
// var containerSecond = document.getElementById('containerSecond');
// var writeInP = document.getElementById('icineYaz');
// console.log(liSecond);
// console.log(buttonOne);
// function write(evt)
// {
//     if (evt.key == "Enter")
//     {
//         writeInP.innerHTML += "</br>" ;
//     }
//     else if(evt.key == "Backspace")
//     {
//         writeInP.innerHTML = newStr;
//         console.log(outer);
//     }
//     else
//     {
//         writeInP.innerHTML += evt.key;
//     }
// }

// function onClick(evt)
// {
//     firstH1.style.color = 'red';
//     firstH2.style.color = 'gray';
//     liSecond[0].style.color = 'red';
//     window.alert("OK!  ");
//     buttonOne[0].style.color = 'purple';
//     buttonOne[0].style.backgroundColor = 'black';
//     buttonOne[0].value = 'tabii ki :)';
// }

var elementSearcher = new ElementSearcherClass();
var firstH1 = elementSearcher.getThisElement('firstH1');
console.log(firstH1);
firstH1.style.color = 'purple';
var firstH2 = elementSearcher.getThisElement('firstH2');
firstH2.style.color = 'green';
var firstClass = elementSearcher.getThisElement('liSecond');
console.log(firstClass);
firstClass[0].style.color = "green";




// buttonOne[0].addEventListener("click" , onClick);
// container.addEventListener("click", onClick);
// window.addEventListener("keyup", write);
//

