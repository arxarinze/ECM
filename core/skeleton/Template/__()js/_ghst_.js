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
},
ajaxRequestForm: function ( url, callback, method, postData, dataType ) {
    // check browser support for XMLHttpRequest
    if ( !window.XMLHttpRequest ) {
        return null;
    }
    
    // create request object
    var req = new XMLHttpRequest();
    
    // assign defaults to optional arguments
    method = method || 'GET';
    postData = postData || null;
    dataType = dataType || 'text/plain';
    
    // pass method and url to open method
    req.open( method, url );
    // set Content-Type header 
    req.setRequestHeader('Content-Type', dataType);
    
    // handle readystatechange event
    req.onreadystatechange = function() {
        // check readyState property
        if ( req.readyState === 4 ) { // 4 signifies DONE
            // req.status of 200 means success
            if ( req.status === 200 ) {
                callback.success(req); 
            } else { // handle request failure
                callback.failure(req); 
            }
        }
    }
    
    req.send( postData ); // send request
    
    return req; // return request object
},
decodeRequest: function (params) {
    var str = '';
    for (var i in params ) {
        str += encodeURIComponent(i) + '=' + encodeURIComponent( params[i] ) + '&';
    }
    return str.slice(0, -1);
},
ajaxGetData: function (dataSource, divID)
{
	var XMLHttpRO = new XMLHttpRequest();
	if(XMLHttpRO)
	{
		var obj = document.getElementById(divID);
		XMLHttpRO.open("POST", dataSource);

		XMLHttpRO.onreadystatechange = function()
		{
			if (XMLHttpRO.readyState == 4 && XMLHttpRO.status == 200) {
				obj.innerHTML = XMLHttpRO.responseText;
			}
		}
		XMLHttpRO.send(null);
	}
},
tooltip: function (id, text) //id parameter is the id of the element to apply tooltip
{	//can only be used on positioned elements
	var e = document.getElementById(id);
	var pos = e.getBoundingClientRect();
	var left = pos.left;
	var right = pos.right;
	var top = (pos.top)/4+pos.top;
	var div = document.createElement('div')
	var divText = document.createTextNode(text);
	var posit = "";
	div.setAttribute("class", "tooltip");
	div.appendChild(divText);
	document.body.appendChild(div);
	var stylePosition = document.createElement('style'); 
	var stylePositionText = document.createTextNode('.tooltip{ background-color:lightyellow; display: none; color: gray; overflow: hidden; min-width:0px; max-width:300px; height: 20px; position: absolute; left:'+left+'px; right:'+right+'px; top:'+top+'px; box-shadow: 0px 0px 0px; border-radius: 10px 10px 10px;}')
	stylePosition.appendChild(stylePositionText);
	document.head.appendChild(stylePosition);
	e.addEventListener('mouseover', function (){div.style.display = 'inline'}, true);
	e.addEventListener('mouseout', function (){div.style.display = 'none'}, true);
},
dropDownBox: function (id, type)
{
	var e = document.getElementById(id);
	if (type == 'click')
	{
		
	}
	else if(type == 'hover')
	{
		
	}
	else if (type == 'touch')
	{
		
	}
}

}
__ = _ghost_;

(function(){_ghost_.tooltip('login', 'Login Button')})();