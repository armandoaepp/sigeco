// capturar variables de de URL con JQuery 
(function($) {  
    $.get = function(key)   {  
        key = key.replace(/[\[]/, '\\[');  
        key = key.replace(/[\]]/, '\\]');  
        var pattern = "[\\?&]" + key + "=([^&#]*)";  
        var regex = new RegExp(pattern);  
        var url = unescape(window.location.href);  
        var results = regex.exec(url);  
        if (results === null) {  
            return null;  
        } else {  
            return results[1];  
        }  
    }  
})(jQuery); 
// forma de obtener el valor de una url
//   var idContrato = $.get("id");
/*
Y su uso es muy sencillo, digamos que tenemos la siguiente URL
	http://somehost.com/folder/?id=xx&other=param
Entonces nuestro codigo javascript seria asi
	var a = $.get("id");
	var b = $.get("other");
*/