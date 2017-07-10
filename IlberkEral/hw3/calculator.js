window.onload = function() {
screen = document.getElementById("result");
    
/* Functions - Begin */
/* Number function */
function numbers()
{   
    num = this.value;
    output = screen.innerHTML +=num;
}

function operators(){
    operator = this.value;
    if(screen.innerHTML === "") {
    screen.innerHTML = screen.innerHTML.concat("");
    }
    else if(output) {
    screen.innerHTML = output.concat(operator);
    }
}

/* Equal function */
function equal(){ 
    if(screen.innerHTML === output) {
    screen.innerHTML = output + "</br>" + eval(output);
    }
    else {screen.innerHTML = "";}
}

/*Decimal function */
function decimal(){
    decimal = this.value;
    if(screen.innerHTML === "") {
    output = screen.innerHTML = screen.innerHTML.concat("0.");
    }
    else if(screen.innerHTML === output) {
    screen.innerHTML = screen.innerHTML.concat(".");
    }
}

/*Zero function */
function zero(){
    zero = this.value;
    if(screen.innerHTML === "") {
    output = screen.innerHTML = zero;  
    }
    else if(screen.innerHTML === output) {
    output = screen.innerHTML +=zero;
    }
}

/*Clear function */
function clear(){screen.innerHTML = "";}

/*Functions - End */
    
    document.querySelector(".zero").addEventListener("click",zero);
    document.querySelector(".decimal").addEventListener("click",decimal);
    document.querySelector(".equal").addEventListener("click",equal);
    document.querySelector(".delete").addEventListener("click",clear);
    
/*Numbers */
    var numArray = document.querySelectorAll(".number");
    var numArrayLen = numArray.length;
    for(var i = 0; i < numArrayLen; i++ ) {
    numArray[i].addEventListener("click",numbers);
} 

/*Operators */   
    var opArray = document.querySelectorAll(".operator");
    var opArrayLen = opArray.length;
    for(var i = 0; i < opArrayLen; i++ ) {
    opArray[i].addEventListener("click",operators);
 }  

/* Keyboard Control - Not Complated! */

window.addEventListener("keydown", function (e) {
    if (e.keyCode === 13) {equal();}
    else if (e.keyCode == 8) {clear();} 
    else if (e.keyCode == 65){operators(e.key)}
});
}