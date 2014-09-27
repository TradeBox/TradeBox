$(document).ready(function(){
	$(document).on('click', '.expandableDetails:not(.expandableDetailsLimited) tbody tr.main', function(e) {
		if(e.target.className.indexOf('no_expand') < 0){
			if($(this).next('.sub').is(':visible')) {
				$(this).closest('.expandableDetails').find('.sub').hide();
				$(this).closest('.expandableDetails').find('.indicator').attr('src', '/resources/leap3/imgs/global/triangle_closed.png');
			} else {
				$(this).closest('.expandableDetails').find('.sub').hide();
				$(this).closest('.expandableDetails').find('.indicator').attr('src', '/resources/leap3/imgs/global/triangle_closed.png');
				$(this).next('.sub').show();
				$(this).find('.indicator').attr('src', '/resources/leap3/imgs/global/triangle_open.png');
			}
		}
	});
	/**
	 * Override 
	 */
	$(document).on('click', '.expandableDetailsLimited tbody tr.main .indicator', function() {
		if($(this).closest('tr.main').next('.sub').is(':visible')) {
			$(this).closest('.expandableDetails').find('.sub').hide();
			$(this).closest('.expandableDetails').find('.indicator').attr('src', '/resources/leap3/imgs/global/triangle_closed.png');
		} else {
			$(this).closest('.expandableDetails').find('.sub').hide();
			$(this).closest('.expandableDetails').find('.indicator').attr('src', '/resources/leap3/imgs/global/triangle_closed.png');
			$(this).closest('tr.main').next('.sub').show();
			$(this).attr('src', '/resources/leap3/imgs/global/triangle_open.png');
		}
	});

	$("input[name='deleteselected']").on('click', function(e){
		e.preventDefault();
		var delButton = $(this),
		delForm = delButton.parent("form"),
		imageid = delForm.contents().find("input[name='imageid']:radio:checked");
		if(!imageid.length) {
			var popup = _leap.ui.modal({
				visible:true,
				height:50,
				width:350,
				html:"<div>" +
							"<h3 style='text-align:center;color:#f00;' class='red'>Please choose a template to delete</h3>" +
						"</div>"
			});
			$('body').append(popup.show());
			return false;
		}
		var solution = imageid.data('solution');
		var popup = _leap.ui.modal({
			visible:true,
			height:100,
			width:350,
			html:"<div>" +
						"<h3 style='text-align:center;'>Are you sure you want to delete this template?</h3>" +
						((solution) ? "<p style='text-align:center;color:#f00;'>This template is currently being used in the following solutions:"+solution+". Do you still want to continue?</p>" : "") +
						"<p style='text-align:center;'>"+
							"<input type='button' id='confirmDelTemplate' class='green del-temp' value='Continue'/>"+
							"<input type='button' id='cancelConfirmTemplate' class='green del-temp' value='Cancel'/>"+
						"</p>"+
					"</div>"
		});
		$('body').append(popup.show());
		$("input.green.del-temp").unbind().bind('click', function(e){
			if($(this).get(0).id == "cancelConfirmTemplate") {
				popup.destroy();
				return;
			}
			$("input.green.del-temp").attr("disabled", true);
			delForm.append("<input type='hidden' name='deletetemplate' value='1' />").submit();
		});
	});

});