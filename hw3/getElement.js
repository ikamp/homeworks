var Elements = function(){
 
};

Elements.prototype.getElements = function(variable){
   var idElement;
   //return document.getElementByClassName(variable) || document.getElementById(variable); 
   if(document.getElementById(variable))
   {
       idElement = document.getElementById(variable);
   }else if(document.getElementByClassName(variable))
   {
       idElement = document.getElementClassName(variable);
   }else if(document.getElementsByTagName(variable))
   {
       idElement = document.getElementsTagName(variable);
   }else
	idElement = false;

   return idElement;
  
}
