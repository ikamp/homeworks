function ElementSearcher() {
    this.getThisElement = function (parameter)
    {
        if (document.getElementById(parameter))
        {
            return document.getElementById(parameter);
        }
        else if (document.getElementsByClassName(parameter))
        {
            return  document.getElementsByClassName(parameter)
        }
        else if (document.getElementsByName(parameter))
        {
            return document.getElementsByClassName(parameter);
        }
        else return 'not found for ' +parameter;
    }
}
