function getData(dataSource, divID)
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
}
function getData1(dataSource, divID)
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
}
function dw_makeXHRRequest( url, callback, method, postData, dataType ) {
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
}

function dw_encodeVars(params) {
    var str = '';
    for (var i in params ) {
        str += encodeURIComponent(i) + '=' + encodeURIComponent( params[i] ) + '&';
    }
    return str.slice(0, -1);
}
function get()
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
    var data = dw_encodeVars( {searchtype:type, searchterm:term} );
    
    // MIME type for request
    var dataType = 'application/x-www-form-urlencoded';
    
    // arguments: url, callback object, request method, data to post, data type
    dw_makeXHRRequest( 'results.php', callback, 'POST', data, dataType );

}
