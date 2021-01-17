var XMLHttpRO = false;
var oo;
if (window.ActiveXObject)
{
	XMLHttpRO = new ActiveXObject("Msxml2.XMLHTTP");
}
else
{
	XMLHttpRO = new XMLHttpRequest();
}
	

function getData(dataSource, divID)
{
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
}
function getXML(datasource, divID)
{
	
		var obj = document.getElementById(divID);
		XMLHttpRO.open("POST", datasource);
	XMLHttpRO.onreadystatechange = function()
		{
			if (XMLHttpRO.readyState == 4) {
				var xml = XMLHttpRO.responseText;				
				obj.innerHTML = xml;
		
			}
		}
		XMLHttpRO.send(null);
	
}

getXML('../view/profile1.php', 'profile');
