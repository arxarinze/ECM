
var _ghost_ = {
validate_input: function (form, id)
{		
	if(document.getElementById('form')!=null)
	{
		if (form.password.value == "" || form.name.value == "")
		{
		document.getElementById('errMsg').innerHTML = '<br>Empty Fields:(';
		if (form.password.value == "")
		form.password.focus();
		if (form.name.value == "")
		form.name.focus();
		return false;
		}
		else
		{
		return true;
		}
	}
},
ghst: function (blur, stat)
{
	if (stat == 'on'){
	var sty = document.createElement('style'); 
	var tsty = document.createTextNode('.blur{ background-color: rgba(255,255,255);filter: blur(5px);-webkit-filter: blur(5px); -moz-filter: blur(5px);-o-filter: blur(5px);-ms-filter: blur(5px);filter:alpha(opacity=50);opacity: 0.5;-moz-opacity:0.50;transition: all .1s linear;}')
	sty.appendChild(tsty);
	document.head.appendChild(sty);
	if(document.getElementById(blur).getAttribute("class") != "blur")
	{
	document.getElementById(blur).setAttribute("class", "blur");
	}
	else if(document.getElementById(blur).getAttribute("class") != "normal")
	{
	document.getElementById(blur).setAttribute("class", "normal");
	}
	}
},
show$hide: function (logon, type)
{
	var types = ["inline", "block", "flex", "inline-block", "inline-flex", "inline-table", "run-in", "table"];
	for (var i = 0; i < types.length; i++)
	{
	if(document.getElementById(logon).style.display != types[i])
	{
		if (type != types[i] && type != 'none')
	{
		type = 'block';
		document.getElementById(logon).style.display = type;
		break;
	}
	}
	else if(document.getElementById(logon).style.display == types[i])
	{
	document.getElementById(logon).style.display = type;
	}
	}
}
}
__ = _ghost_;