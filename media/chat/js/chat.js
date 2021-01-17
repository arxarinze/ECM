function getMsg()
{
	
    // get references to form elements
	var txt = document.getElementById("SendM").value;
    var sender = document.getElementById('st').value;
    // callback object defines methods for handling response (success and failure)
    var callback = {
        success: function(req) {
            document.getElementById('message').innerHTML += req.responseText;
        },
        failure: function(req) {
            document.getElementById('message').innerHTML = 'An error has occurred.';
        }
    }
    
    // encode form data
    var data = dw_encodeVars( {sendi:txt, sendertype:sender} );
    
    // MIME type for request
    var dataType = 'application/x-www-form-urlencoded';
    
    // arguments: url, callback object, request method, data to post, data type
    dw_makeXHRRequest( '../controller/msg.php', callback, 'POST', data, dataType );

}