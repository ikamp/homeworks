
var element = new Element();

element.getIt("first").style.color= 'red';
element.getIt("second")[0].style.color = 'blue';
element.getIt("third").style.color= 'purple'; 
        
function buttonClick(string) {
    alert('Heyoo! ' + string);
}

function textclick() {alert('This is H1')}
element.getIt("element1").addEventListener("click", textclick)

function textclick1() {alert('This is Container')}
element.getIt("container")[0].addEventListener("click", textclick1)



window.addEventListener('keydown',function (e) {
   //alert(text);
    var a = element.getIt("myTextBook");
    if (e.keyCode != 13) {
        a.innerHTML += event.key;
        if (length(a)==10){
            a.innerHTML += "<br />"
        }
    }
    else{
        a.innerHTML += "<br />"
    }
    
    
})



console.log(element.getIt("second")[0].style.color = 'blue');
