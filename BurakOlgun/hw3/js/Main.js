var es = new ElementSearcher();
calculaterInstance = new CalculaterFactory();
var screener = es.getThisElement("screener");
var control = true;
var number1 = 0;
var number2 = 0;
var marker ;
var key;
screener.innerHTML = '';
function onCKey(evt)
{
    key = evt.target.value;
    console.log(key);
    if (key === "equal")
    {
        calculaterInstance[marker](number1, number2);
    } else if (isNaN(key) && key !== '.')
    {
        control = false;
        marker = key;
        screener.innerHTML += evt.target.textContent;
        return;
    }
    else if(evt.target.textContent === 'C')
    {
        calculaterInstance.clear();
    }
    if (key !== 'equal')
    {
        if (control) {
            number1 = number1 + key;
        } else {
            number2 = number2 + key;
        }
        screener.innerHTML += key;
    }
}
var buttoncls = es.getThisElement('button');
window.addEventListener('keydown',function (event) {
    key = event.key;
    if (!isNaN(key))
    {
        if (control) {
            number1 = number1 + key;
        } else {
            number2 = number2 + key;
        }
        screener.innerHTML += key;
    }
});
for (var i = 0; i < buttoncls.length; i++){
    buttoncls[i].addEventListener("click", onCKey, false);
}