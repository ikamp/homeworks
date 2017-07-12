		
	document.getElementById('c13').style.color='red';
	document.getElementsByClassName('c12')[0].style.color='blue';

	head2.addEventListener('click',listen);
	container.addEventListener('click',containerListen,false);
	window.addEventListener('keydown',keyListen);
	
	var comingId;
	var element = new Element();
	var e = element.getItId('myTextBook');

		function keyListen(event){
			e.innerHTML+=String.fromCharCode(event.which);
			if(event.which==13)
				e.innerHTML+='<br />';
			if(event.which==8){
				var word =e.innerHTML;
				word = word.slice(0,-1);
				e.innerHTML=word;
			}
			if(e.length%20==0)
				e.innerHTML+='<br />';	
			
		};

		function listen(event){
			
			alert("This is child.");
		};

		function containerListen(event){
			alert("This is container.");
		};

		function buttonClick(string){
			alert('xoxo '+string);
		};