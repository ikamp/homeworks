var Element= function(){
}
Element.prototype.getItId = function(string){	
	return document.getElementById(string);
}
Element.prototype.getItClass = function(string){	
	return document.getElementsByClassName(string);
}
