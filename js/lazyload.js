jQuery(document).ready(function($) { 
$("img").lazyload({
    placeholder : "../images/grey.gif",       
    effect      : "fadeIn"
	});
});