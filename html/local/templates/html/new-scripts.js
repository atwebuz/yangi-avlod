$(function () {
	var hash = window.location.hash;
	if(hash) {
		console.log(hash);
		$('.tab-content .tab-pane').removeClass('show').removeClass('active');
		$('.tab-content '+hash).addClass('show').addClass('active');
		$('.nav-tabs [data-target]').removeClass('active');
		$('.nav-tabs [data-target="'+hash+'"]').addClass('active');
		$("html, body").scrollTop(0);
	}

});

if(window.getCookie === undefined){

    function getCookie(name) {
        var nameEQ = encodeURIComponent(name) + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ')
                c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0)
                return decodeURIComponent(c.substring(nameEQ.length, c.length));
        }
        return null;
    }

}