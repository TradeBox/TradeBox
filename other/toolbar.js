$(document).ready(function(){

	$('#toolbarlinks > li').hoverIntent({
		over: function() {
			$(this).children('ul').show();
			$(this).addClass('active');
		},
		timeout: 5,
		out: function() {
			$(this).children('ul').hide();
			$(this).removeClass('active');
		}
	});

	$('ul#toolbarlinks > li > ul > li .body').bind('mousewheel',function(e, delta){
		if(delta>0) {
			return true;
		}
		if($(this)[0].scrollHeight - $(this).scrollTop() <= $(this).outerHeight()) {
			console.log(e);
			return false;
		}
		return true;
	});

    $('#toolbarRecentTickets')
        .html('<div style="text-align: center;"><img style="padding-top: 10px;" src="/resources/leap3/imgs/global/loading-dark.gif"><div style="color: white;">Loading Tickets</div></div>');
    $.post("/api/template/support", { type: "toolbar" })
        .done(function(data) {
            var res = jQuery.parseJSON(data);
            $('#toolbarRecentTickets').html(res.display);
    });

});