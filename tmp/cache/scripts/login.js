(function(){
	__('<div').attr({
		id: 'm1',class: 'normal'
	}).append('<br>');
	__('#main').append(__('#m1'));
	__('<button>').attr({
		id: 'login',class: 'login',onclick: "__('#logonScreen').show$hide('table'); __('#m1').ghst('on');"
	}).css({
		display: 'inline',top : "200px",left: "317px"
	}).innerTxt('Login');
		__('<button>').attr({
		id: 'login1',class: 'login',onclick: "__('#logonScreen').show$hide('table'); __('#m1').ghst('on');"
	}).css({
		display: 'inline',top : "200px",left: "317px"
	}).innerTxt('Login');
		__('<button>').attr({
		id: 'login2',class: 'login',onclick: "__('#logonScreen').show$hide('table'); __('#m1').ghst('on');"
	}).css({
		display: 'inline',top : "200px",left: "317px"
	}).innerTxt('Login');
	__('<img>').attr({
		id: 'tt',class: 'lin', src: "img/logo.png", height : "200", width: "320"
	});
	__('<a>').prepend(__("~$img")).attr({
		id: "ew",href: '#'
	});
		if(__("~#login") != null && __("~#ew") != null)
	{
	__('#m1').append(__("~#login")).append(__("~#login1")).append(__("~#login2")).prepend(__("~#ew")).css({
        padding: "10px",color: "red"
    });
	}
	__('<button>').attr({
		id: 'lgin',class: 'loin',onclick: "__('.login').css({bgcolor: 'red', width: '200px', height: '200px'})"
	}).css({
		display: 'inline',top : "200px",left: "317px"
	}).innerTxt('Login');
	
	__('#logonScreen').css({
		zIndex: 1
	})
__('#main').append(__('#logonScreen'));
})();
