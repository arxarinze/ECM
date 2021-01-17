/*!
 * _Ghost_ JavaScript Library beta version-
 *
 * Created By: Arize V.
 * Realesd under the _ghst_ framework-
 * Copyright of N-Aspire-
 *
 * Date: 2016-07-19.
 */
( function() {
	"use strict";

	function Ajax()
{
	
    // get references to form elements
    var type = document.getElementById('sc').value;
	var term = document.getElementById('sn').value;
    // callback object defines methods for handling response (success and failure)
    var callback = {
        success: function(req) {
            document.getElementById('view0').innerHTML = req.responseText;
        },
        failure: function(req) {
            document.getElementById('view0').innerHTML = 'An error has occurred.';
        }
    }
    
    // encode form data
    var data = __.decodeRequest( {searchtype:type, searchterm:term} );
    
    // MIME type for request
    var dataType = 'application/x-www-form-urlencoded';
    
    // arguments: url, callback object, request method, data to post, data type
    __.ajaxRequestForm( '../controller/results.php', callback, 'POST', data, dataType );

}
var opts = {};
function RuN( code, doc ) {
		doc = doc || document;

		var script = doc.createElement( "script" );

		script.text = code;
		doc.head.appendChild( script ).parentNode.removeChild( script );
	}
function cMP(event){return {x:event.clientX,y:event.clientY};}//returns the clients mouse pointer position in an array-like objectect
function getPos()
{
	var obj = this.convert_constructor();
	var w = obj.getBoundingClientRect();
	var y = w.top;
	var x = w.left;
	return {top: parseInt(y), side: parseInt(x)};
}
var object = '';
function _Ghost_(Eid) {
this.errorMsg = "";
this.notice = '<br>Empty Fields:(';
this.fnn = '';
this.validate_input = function ()
{		//name of login form must be password and name  
	if(document.getElementById(Eid)!=null)
	{
		if (form.password.value == "" || form.name.value == "")
		{
		document.getElementById('errMsg').innerHTML = this.notice;
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
	return this;
};
this.ghst = function (stat)// slashed!!!! write new function for blur
{
	var obj = this.convert_constructor();
	 if (obj == "[object HTMLCollection]")
		 {
		for (var i = 0; i < obj.length; i++)
		{
			if (stat == 'on'){
		var sty = document.createElement('style'); 
	var tsty = document.createTextNode('#blur{ background-color: rgba(255,255,255);filter: blur(5px);-webkit-filter: blur(5px); -moz-filter: blur(5px);-o-filter: blur(5px);-ms-filter: blur(5px);filter:alpha(opacity=50);opacity: 0.5;-moz-opacity:0.50;transition: all .1s linear;}')
	sty.appendChild(tsty);
	document.head.appendChild(sty);
	sty.setAttribute("id", "style");
	if(obj[i].getAttribute("id") != "blur")
	{
	obj[i].setAttribute("id", "blur");
	}
	else if(obj[i].getAttribute("id") != "normal")
	{
	obj[i].setAttribute("id", "normal");
	}
	}
	else if (stat == 'off')
	{
		if (document.getElementById('style') != null)
		{
		document.head.removeChild(document.getElementById('style'));
		obj[i].setAttribute("class", "normal");
		}
	}
		}
		 }
		 else
		 {
	if (stat == 'on'){
		var sty = document.createElement('style'); 
	var tsty = document.createTextNode('.blur{ z-index: -1; background-color: rgba(255,255,255);filter: blur(5px);-webkit-filter: blur(5px); -moz-filter: blur(5px);-o-filter: blur(5px);-ms-filter: blur(5px);filter:alpha(opacity=50);opacity: 0.5;-moz-opacity:0.50;transition: all .1s linear;}')
	sty.appendChild(tsty);
	document.head.appendChild(sty);
	sty.setAttribute("id", "style");
	if(object.getAttribute("class") != "blur")
	{
	object.setAttribute("class", "blur");
	}
	else if(object.getAttribute("class") != "normal")
	{
	object.setAttribute("class", "normal");
	}
	}
	else if (stat == 'off')
	{
		if (document.getElementById('style') != null)
		{
		document.head.removeChild(document.getElementById('style'));
		object.setAttribute("class", "normal");
		}
	}
}
	return this;
};
this.display = function (type)
{
	var obj = this.convert_constructor();
		 if (obj == "[object HTMLCollection]")
		 {
		for (var i = 0; i < obj.length; i++)
		{
		if (type != null)
		{
		obj[i].style.display = type;
		}
		}
		 }
		 else
		 {
	if (type != null)
	{
		object.style.display = type;
	}
}
	return this;
};
this.show$hide = function (type)
{
	var obj = this.convert_constructor();
	if (obj == "[object HTMLCollection]")
		 {
		for (var i = 0; i < obj.length; i++)
		{
		if (type != null)
		{
			if (window.getComputedStyle(obj[i],null).getPropertyValue("display") == 'none')
			{
				obj[i].style.display = type;
			}
			else
			{
				obj[i].style.display = 'none';
			}
		}
		}
		 }
		 else
		 {
		if (type != null)
	{
			if (window.getComputedStyle(object,null).getPropertyValue("display") == 'none')
			{
				object.style.display = type;
			}

			else
			{
				object.style.display = 'none';
				
			}

	}
}
	return this;
};

this.ajaxRequestForm = function ( url, callback, method, postData, dataType ) {
    // check browser support for XMLHttpRequest
    if ( !window.XMLHttpRequest ) {
        return null;
    }
    
    // create request objectect
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
    
    return req; // return request objectect
};
this.decodeRequest = function (params) {
    var str = '';
    for (var i in params ) {
        str += encodeURIComponent(i) + '=' + encodeURIComponent( params[i] ) + '&';
    }
    return str.slice(0, -1);
};
this.ajaxGetData = function (data)
{
	var XMLHttpR = new XMLHttpRequest();
	var obj = this.convert_constructor();
	if(XMLHttpR)
	{
		XMLHttpR.open("POST", data);


		XMLHttpR.onreadystatechange = function()
		{
			if (XMLHttpR.readyState == 4 && XMLHttpR.status == 200) {
				object.innerHTML = XMLHttpR.responseText;
			}
		}
		XMLHttpR.send(null);
	}
	
	return this;
};
this.ajaxRealTime = function (dataSource)
{
	var XMLHttpRO = new XMLHttpRequest();
	var obj = this.convert_constructor();
	setInterval(function(){
if(XMLHttpRO)
	{
			XMLHttpRO.open("POST", dataSource);


		XMLHttpRO.onreadystatechange = function()
		{
			if (XMLHttpRO.readyState == 4 && XMLHttpRO.status == 200) {
				object.innerHTML = XMLHttpRO.responseText;
			}
		}
		XMLHttpRO.send(null);
	
	}},1000);	
	return this;
};
this.convert_constructor = function(){
	if(typeof(Eid) == 'string' && Eid[0] == '#')
	{
		var e = Eid.replace("#", "");
		object = document.getElementById(e);
	
	}
	else if (typeof(Eid) == 'string' && Eid[0] == '.')
	{

		var e = Eid.replace(".", "");
		var oj = document.getElementsByClassName(e);
		object = oj;
		return object;
	}
	else if (typeof(Eid) == 'string' && Eid[0] == '$')
	{
		var e = Eid.replace("$", "");
		var oj = document.getElementsByTagName(e);
		object = oj;
		return object;
	
	}
	else if(typeof(Eid) == 'object')
	{
		object = Eid;
    }
},
this.css = function(options){
	if(typeof(options) == "object")
	{
		
		  var obj = this.convert_constructor();
		 var arr = ['position', 'display', 'float', 'backgroundColor', 
			'top', 'bottom', 'left', 'right', 'color', 'text-align', 
			'zIndex', 'padding', 'margin', 'borderRadius', 'height', 
			'width', 'maxWidth', 'minWidth', 'maxHeight', 'minHeight'
			];
		   if (obj == "[object HTMLCollection]")
		 {
		for (var i = 0; i < obj.length; i++)
		{
			
				Object.keys(options).forEach(function(val) {
					if(val == "bgcolor" || val == "background-color" || val == "bgColor")
			{
					var	val0 = val;
					val = 'backgroundColor';
					for (var g = 0; g < arr.length; g++)
					{
					if(obj[i].style[val] != null)
					{
						if(val == arr[g])
						{
						obj[i].style[val] = options[val0];
						break;
						}
					}
					}
			}
			else
			{
				if(obj[i].style[val] != null)
				{
			obj[i].style[val] = options[val];
				}
				else
				{
					_Ghost_.errorMsg = val + " " +"is not a style property";
					console.log(_Ghost_.errorMsg);
				}
			}
		})
		}
		 }
		 else
		 {
	 if (object != null)
		 {
			
				Object.keys(options).forEach(function(val) {
					
			if(object.style[val] != null)
				{
			object.style[val] = options[val];
				}
				else
				{
					_Ghost_.errorMsg = val + " " +"is not a style property";
					console.log(_Ghost_.errorMsg);
				}
})
			
		 }
		 }
	}
	else if (typeof(options) == 'string')
	{
		var obj = this.convert_constructor();
		if(options == "bgcolor" || options == "backgroundColor" || options == "bgColor")
			{
					options = 'background-color';
			}
		if (object != null)
	{	
		var arr = ['position', 'display', 'float', 'background-color', 
			'top', 'bottom', 'left', 'right', 'color', 'text-align', 
			'z-index', 'padding', 'margin', 'border-radius', 'height', 
			'width', 'max-width', 'min-width', 'max-height', 'min-height'
			];
		
		for(var k = 0; k < arr.length; k++)
		{
						if(getComputedStyle(object, null).getPropertyValue(options) != null)
					{
						if(options == arr[k])
						{
						return getComputedStyle(object, null).getPropertyValue(options);
						}
					}
					else
					{
					_Ghost_.errorMsg = val + " " +"is not a style property";
					console.log(_Ghost_.errorMsg);
					}
		}
	}
	}
	return this;
},
this.attr = function(options)
{
	var obj = this.convert_constructor();
	var arr = ["id", "class"];
	var result = "";
	 if (obj == "[object HTMLCollection]")
		 {
		for (var i = 0; i < obj.length; i++)
		{
			if (typeof(options) == 'object')
			{
			Object.keys(options).forEach(function(val) {
			obj[i].setAttribute(val, options[val]);
})
	 return this;
			}
	else if (typeof(options) == 'string')
	{
			var ob = [];
		for (var i = 0; i < obj.length; i++)
		{
			ob[i] = obj[i].getAttribute(options);
		}
		return ob;
	} 
		}
		 }
		 else if (object != null)
		 {
			 if (typeof(options) == 'object')
			{
					Object.keys(options).forEach(function(val) {
			object.setAttribute(val, options[val]);
})
	 return this;
			}
			if (typeof(options) == 'string')
			{
				return object.getAttribute(options);
			}
		 }
},
this.tooltip = function (text) //id parameter is the id of the element to apply tooltip |||| text is the tooltip content
{	
	if(document.getElementById('sP') == null)
	{
	var stylePosition = document.createElement('style'); 
	var stylePositionText = document.createTextNode(".tooltip{ padding-right:10px; padding-left: 10px; padding-top: 10px;background-color:lightyellow; display: none; color: gray; overflow: hidden; width:auto; height: 30px; position: absolute;box-shadow: 0px 0px 0px; border-radius: 10px 10px 10px; z-index: 1;}");
	stylePosition.appendChild(stylePositionText);
	document.head.appendChild(stylePosition);
	stylePosition.setAttribute("id", "sP");
	}
	var obj = this.convert_constructor();
	 if (obj == "[object HTMLCollection]")
		 {
		for (var i = 0; i < obj.length; i++)
		{
			if (obj[i] != null)
	{
	var div = document.createElement('div');
	var divText = document.createTextNode(text);
	div.setAttribute("class", "tooltip");
	div.innerHTML = text;
	obj[i].addEventListener('mouseover' && 'mousemove', function (event){document.body.appendChild(div); div.style.opacity=1; div.style.display = 'block'; var po = cMP(event); div.style.top = po.y+"px"; div.style.left = (30+po.x)+"px";}, true);
	obj[i].addEventListener('mouseout', function (){document.body.removeChild(div)}, true);
	}
		}
		 }
		 else
		 {
	if (object != null)
	{
	var div = document.createElement('div');
	var divText = document.createTextNode(text);
	div.setAttribute("class", "tooltip");
	div.appendChild(divText);
	object.addEventListener('mouseover' && 'mousemove', function (event){document.body.appendChild(div); div.style.display = 'block'; var po = cMP(event); div.style.top = po.y+"px"; div.style.left = (30+po.x)+"px";}, true);
	object.addEventListener('mouseout', function (){document.body.removeChild(div)}, true);
	}
}
	return this;
},

this.dropDownBox = function (id, type)
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
},
this.spectre= function (obj, id, animation) 
{
	if (obj == 'cursor' || obj == 'pointer' && id == null)
	{
	var div = document.getElementById(object);
	
	document.addEventListener('mouseover' && 'mousemove', function (event){div.style.transitionProperty = 'all'; div.style.transitionDuration=".5s"; div.style.transitionTimingFunction="linear"; div.style.display = 'inline'; var po = _ghost_.cMP(event); div.style.position = 'fixed'; div.style.top = po.y+"px"; div.style.left = (po.x)+"px";}, true);
	}
	if (obj == 'div' || obj == 'container' && id != null)
	{
	var div = document.getElementById(object);
	var divid = document.getElementById(id);	
	}
	return this;
},
this.load= function (fps,type,speed,callback)// used in making loaders works with "Ajax only""......cant replace the refresh method of default forms
{
	this.convert_constructor();
		e = object;
		if (e != null)
		{
			var r = object;
		r.addEventListener('click', function(){
		if(type == 'ssideCover')
		{
		var body_width = window.innerWidth;
		
		var div = document.createElement('div');attr
		div.setAttribute('id', 'cover');
		div.setAttribute('style','position: fixed; height:100%; width: 100%;background-color:white;top: 0px; left:-1887px; border-right: 0px solid white; z-index: 9000');
		document.body.appendChild(div);
		div.style.height = window.outerHeight+'px';
		div.style.left = (-body_width)+"px";
		var x = div.style.left;
		var xx = x.replace("px", "");
		var xxx = parseInt(xx);
		var count = 0;
		var start = setInterval(frame, fps);
		var stat = false;
		var b = false
		function frame()
		{
			if(stat === false)
			{
				if (count >= 0)
				{
				count++;
				xxx = xxx+speed;
				}
				div.style.left = xxx+"px";
				if(xxx >= 0)
				{
					stat = true;
					callback.success(div);
				}
				
			}
			if(stat === true && count >= 0 && xxx <= body_width)
				{
					count--;
					xxx = xxx-speed;
					div.style.left = xxx+"px";
				if(xxx == -body_width)
				{
					document.body.removeChild(div);
					clearInterval(start);
				}
				}
			
		}
		}
		else if (type == 'dsideCover')
		{
		var body_width = window.innerWidth;
		var div = document.createElement('div');
		div.setAttribute('id', 'cover');
		div.setAttribute('style', 'position: fixed; height:100%; width: 100%; background-color: white;top: 0px; left:-9999px; border-right: 0px solid white;z-index:9000');
		document.body.appendChild(div);
		div.style.height = window.outerHeight+"px";
		div.style.left = (-body_width)+"px";
		var x = div.style.left;
		var xx = x.replace("px", "");
		var xxx = parseInt(xx);
		var div2 = document.createElement('div');
		div2.setAttribute('id', 'cover1');
		div2.setAttribute('style', 'position: fixed; height:100%; width: 100%; background-color: white;top: 0px; right:1887px; border-right: 0px solid white;z-index:9000');
		document.body.appendChild(div2);
		div2.style.height = window.outerHeight+'px';
		div2.style.left = (body_width)+"px";
		var x1 = div2.style.left;
		var xx1 = x1.replace("px", "");
		var xxx1 = parseInt(xx1);
		var count = 0;
		
		var start = setInterval(frame, fps);
		var stat = false;
		var b = false
		function frame()
		{
			if(stat === false)
			{
				if (count >= 0)
				{
				count++;
				xxx = xxx+speed;
				xxx1 = xxx1-speed;
				}
				div.style.left = xxx+"px";
				div2.style.left = xxx1+"px";
				if(xxx >= (-body_width)/2)
				{
					stat = true;
					callback.success(div);
					
				}
				
			}
			if(stat === true && count >= 0 && xxx <= body_width/2)
				{
					count--;
					xxx = xxx-speed;
					xxx1 = xxx1+speed;
					div.style.left = xxx+"px";
					div2.style.left = xxx1+"px";
				if(xxx == -body_width)
				{
					
					document.body.removeChild(div2);
					document.body.removeChild(div);
					clearInterval(start);
				}
				}
			
		}
		}
		else if (type == 'dtopCover')
		{
			var body_height = window.innerHeight;
		var div = document.createElement('div');
		div.setAttribute('id', 'cover');
		div.setAttribute('style', 'position: fixed; height:100%; width: 100%; background-color: white;top: 0px; left:0px; border-right: 0px solid white; z-index: 9000');
		
		div.style.height = window.innerHeight+'px';
		div.style.top = (body_height)+"px";
		var x = div.style.top;
		var xx = x.replace("px", "");
		var xxx = parseInt(xx);
		var div2 = document.createElement('div');
		div2.setAttribute('id', 'cover1');
		div2.setAttribute('style', 'position: fixed; height:100%; width: 100%; background-color: white; bottom: 0px; right:0px; border-right: 0px solid white; z-index: 9000');
		document.body.appendChild(div);
		document.body.appendChild(div2);
		div2.style.height = (window.innerHeight)+'px';
		div2.style.top = (-body_height)+"px";
		var x1 = div2.style.top;
		var xx1 = x1.replace("px", "");
		var xxx1 = parseInt(xx1);
		var count = 0;
		
		var start = setInterval(frame, fps);
		var stat = false;
		function frame()
		{
			if(stat === false)
			{
				if (count >= 0)
				{
				count++;
				xxx = xxx-speed;
				xxx1 = xxx1+speed;
				}
				div.style.top = xxx+"px";
				div2.style.top = xxx1+"px";
				if(xxx <= (body_height/2))
				{
					stat = true;
					callback.success(div);
				}
				
			}
			if(stat === true && count >= 0)
				{
					count--;
					xxx = xxx+speed;
					xxx1 = xxx1-speed;
					div.style.top = xxx+"px";
					div2.style.top = xxx1+"px";
				}
				if(count == 0)
				{
					
					document.body.removeChild(div2);
					document.body.removeChild(div);
					clearInterval(start);
				}
			
		}
		}
			
	else if (type == '' || type == null)
	{
		this.errorMsg = "Type can't be 'empty' or 'null'. See Documentation For More Information";
		console.log(this.errorMsg);
	}
	else {console.log("Wrong Use Of Function")}
		}, true)
		}
		return this;
	},
this.drag = function (event)
{
},
this.drop= function (event)
{},
this.dragNdrop= function()
{},
this.resize= function()
{},
this.identify= function()
{},
this.slidino= function()
{},
this.click = function(click)
{
	object.addEventListener('click', callback, true)
}
this.innerTxt = function(text)
{
	var obj = this.convert_constructor();
		if (obj == "[object HTMLCollection]")
		 {
		for (var i = 0; i < obj.length; i++)
		{
			obj[i].innerHTML = text;
		}
		 }
		 else
		 {
	object.innerHTML = text;
		 }
	return this;
},
this.append = function (text)
{
	var obj = this.convert_constructor();
	if (typeof(text) == 'string' && text[0] != '<')
	{
	var c = document.createTextNode(text);
	object.appendChild(c);
	}
	else if (typeof(text) == 'string' && text[0] == '<')
	{
		var r = text.replace("<", "");
		var l = r.replace(">", "");
		var c = document.createElement(l);
		object.appendChild(c);
	}
	else if (text == "[object HTMLCollection]")
		 {
		for (var i = 0; i < text.length; i++)
		{
			var c = text[i];
			object.appendChild(c);
		}
		 }

		else if (text instanceof HTMLElement === true)
	{
		var c = text;
		object.appendChild(c);
	}
	
		
	return this; 
},
this.prepend = function (text)
{
	var obj = this.convert_constructor();
	if (typeof(text) == 'string' && text[0] != '<')
	{
	var c = document.createTextNode(text);
		object.insertBefore(c, object.childNodes[0]);
	}
	else if (typeof(text) == 'string' && text[0] == '<')
	{
		var r = text.replace("<", "");
		var l = r.replace(">", "");
		var c = document.createElement(l);
		object.insertBefore(c, object.childNodes[0]);
	}
	else if (text == "[object HTMLCollection]")
		 {
		for (var i = 0; i < text.length; i++)
		{
			var c = text[i];
			object.insertBefore(c, object.childNodes[0]);
		}
		 }
	else if (text instanceof HTMLElement === true)
	{
		var c = text;
		object.insertBefore(c, object.childNodes[0]);
	}
return this;
}
}
var __ = window.__ = function (Eid) {
	 if (Eid != null && Eid.indexOf('<') != -1)
{
	var Ei = Eid.replace("<", "");
	var E = Ei.replace(">", "");
	var f = document.createElement(E);
	document.body.appendChild(f);
	return new _Ghost_(f);
}	
else if (Eid != null && Eid[0] == '~' && Eid[1] == '#')
	{
		var Ei = Eid.replace("~", "");
	var E = Ei.replace("#", "");
		object = document.getElementById(E);
		return object;
	}
	else if (Eid != null && Eid[0] == '~' && Eid[1] == '.')
	{
		var Ei = Eid.replace("~", "");
	var E = Ei.replace(".", "");
		object = document.getElementsByClassName(E);
		return object;
	}
		else if (Eid != null && Eid[0] == '~' && Eid[1] == '$')
	{
		var Ei = Eid.replace("~", "");
		var E = Ei.replace("$", "");
		object = document.getElementsByTagName(E);
		return object;
	}
else
	{
	return new _Ghost_(Eid)
	}
};
} )();