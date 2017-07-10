function Element(){}

Element.prototype.getIt = function(param){
    return document.querySelectorAll(param);
}
