
function Element(){}

Element.prototype.getIt = function(param){
    if (document.getElementById(param)){
        return document.getElementById(param);
    }
    else if (document.getElementsByClassName(param)){
        return document.getElementsByClassName(param);     
    }
}
