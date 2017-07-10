
imported.src = 'example2.js';

document.getElementById("first").style.color= 'red';
document.getElementsByClassName("second")[0].style.color = 'blue';
document.getElementById("third").style.color= 'purple'; 
        
function buttonClick(string) {
    alert('Heyoo! ' + string);
}

function textclick() {alert('This is H1')}
document.getElementById("element1").addEventListener("click", textclick)

function textclick1() {alert('This is Container')}
document.getElementsByClassName("container")[0].addEventListener("click", textclick1)
        


window.addEventListener('keydown',function (e) {
   //alert(text);
    var a = document.getElementById("myTextBook");
    if (e.keyCode != 13) {
        a.innerHTML += event.key;
        if (count(a)==10){
            a.innerHTML += "<br />"
        }
    }
    else{
        a.innerHTML += "<br />"
    }
    
    
})



console.log(document.getElementsByClassName("second")[0].style.color = 'blue');
