/**
 * Created by yalcin on 09.07.2017.
 */


var div=document.getElementById('resultscreen');

function addButtonValuesToScreen(buttons)
{

  div.value+=buttons;
  document.getElementById("resultscreen").style.color="black";
  document.getElementById("resultscreen").style.fontSize="large";

  if(buttons==='c')
  {
    div.value="";
  }


}
function equalSign()
{
   x=div.value;
   x=eval(x);
   div.value=x;
}

