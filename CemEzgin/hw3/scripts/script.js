equal.addEventListener('click',takeToArray);
window.addEventListener('keydown',keyListen);
function buttonClick(number){
	document.getElementById('display').innerHTML+= number;
	if(number=="c")
		document.getElementById('display').innerHTML= "";
}
//For taking the numbers and operations from keyboard.
function keyListen(event){
	console.log(event.which);
	if(event.which==48 || event.which==96){
		document.getElementById('display').innerHTML+=0;
	}else if(event.which==49 || event.which==97){
		document.getElementById('display').innerHTML+=1;
	}else if(event.which==50 || event.which==98){
		document.getElementById('display').innerHTML+=2;
	}else if(event.which==51 || event.which==99){
		document.getElementById('display').innerHTML+=3;
	}else if(event.which==52 || event.which==100){
		document.getElementById('display').innerHTML+=4;
	}else if(event.which==53 || event.which==101){
		document.getElementById('display').innerHTML+=5;
	}else if(event.which==54 || event.which==102){
		document.getElementById('display').innerHTML+=6;
	}else if(event.which==55 || event.which==103){
		document.getElementById('display').innerHTML+=7;
	}else if(event.which==56 || event.which==104){
		document.getElementById('display').innerHTML+=8;
	}else if(event.which==57 || event.which==105){
		document.getElementById('display').innerHTML+=9;
	}else if(event.which==111){
		document.getElementById('display').innerHTML+='/';
	}else if(event.which==106){
		document.getElementById('display').innerHTML+='*';
	}else if(event.which==107){
		document.getElementById('display').innerHTML+='+';
	}else if(event.which==109){
		document.getElementById('display').innerHTML+='-';
	}else if(event.which==110){
		document.getElementById('display').innerHTML+='.';
	}
}
//for taking operations and sending to operations clases from display when click equal button.
function takeToArray(){
	var char = document.getElementById('display').innerHTML;
		for (var i = 0; i < char.length; i++) {
	    	if(char.charAt(i)=="+"){
	    		var firstNum = char.slice(0,i);
	    			lastNumLength = firstNum.length+1;
	    		var lastNum = char.slice(lastNumLength,char.length-1);
	    		var plus = new Plus(firstNum,lastNum);
	    			plus.answer();
	    	}else if(char.charAt(i)=="-"){
				var firstNum = char.slice(0,i);
	    			lastNumLength = firstNum.length+1;
	    		var lastNum = char.slice(lastNumLength,char.length-1);
	    		var minus = new Minus(firstNum,lastNum);
	    			minus.answer();
	    	}else if(char.charAt(i)=="*"){
	    		var firstNum = char.slice(0,i);
	    			lastNumLength = firstNum.length+1;
	    		var lastNum = char.slice(lastNumLength,char.length-1);
	    		var multiplication = new Multiplication(firstNum,lastNum);
	    			multiplication .answer();
	    	}else if(char.charAt(i)=="/"){
	    		var firstNum = char.slice(0,i);
	    			lastNumLength = firstNum.length+1;
	    		var lastNum = char.slice(lastNumLength,char.length-1);
	    		var division = new Division(firstNum,lastNum);
	    			division.answer();
	    	}
		}
}