$(document).ready(function() {

	var osOptions = {};

	function showOsOptions(cloudId) {
		$osSelects.hide();
		var $select = $('#os_select_'+cloudId).show();
		$osInput.val($select.val());
	}

	var $osInput = $('#os_hidden_input')
	var $osSelects = $('.os_select').change(function() {
		$osInput.val(this.value);
	});
	var $hiddenCloudInput = $('#hidden_cloud_input');
	var $dcSelect = $('#datacenter_select').change(function() {
		var cloudId = $(this).find('option:selected').attr('data-cloud-id');
		showOsOptions(cloudId);
		$hiddenCloudInput.val(cloudId);
	});

	showOsOptions($dcSelect.find('option[value='+$dcSelect.val()+']').attr('data-cloud-id'));

	$("#options > div").click(function() {
    	$("#options > div").removeClass('active');
		$("#options > ul:not(.ignore)").slideUp();
		$("#options a").removeClass('popupOpen');
		$(this).addClass('active');
		$(".options_popouts").fadeOut();
		$(this).next('ul:not(.ignore)').slideToggle();
	});

	$('.slider').each(function() {
		var sliderContainer = $(this).parent();
		$(this).slider({
			orientation: 'horizontal',
			range: "min",
			value: sliderContainer.data('default'),
			min: sliderContainer.data('min'),
			max: sliderContainer.data('max'),
			step: sliderContainer.data('steps'),
			slide: function( event, ui ) {
				if(ui.value < 1){
					ui.value = sliderContainer.data('min');
				}
				$(this).closest('td').find('input.choice').val(ui.value);
				$(this).closest('td').find('.slider').each(function() {
					if($(this).slider('value')!=ui.value) {
						$(this).slider('value', ui.value);
					}
				});
				runVMUpdater();
			},
			change: function( event, ui ) {
				if(ui.value < 1){
					ui.value = sliderContainer.data('min');
				}
				$(this).closest('td').find('input.choice').val(ui.value);
				$(this).closest('td').find('.slider').each(function() {
					if($(this).slider('value')!=ui.value) {
						$(this).slider('value', ui.value);
					}
				});
				runVMUpdater();
			}
		});
		if(sliderContainer.data('min')==sliderContainer.data('max')) {
			$(this).hide();
		}
	});

	$('#billingtype').change(function() {
		runVMUpdater();
		renderVMBilling();
	});

	/**
	 * Initalize
	 */
	runVMUpdater();
	renderVMBilling();

	$("#orderform > ul input[type=checkbox], #orderform > ul select").change(function() {
		runVMUpdater();
	});

	$('#storage_backend').change(function() {
		if($('#storage_backend').val()=='sata') {
			$('#storage_sliders div').hide();
			$('#storage_sliders div[data-type=sata], #storage_sliders div[data-type=sata] div').show();
		} else if($('#storage_backend').val()=='sas') {
			$('#storage_sliders div').hide();
			$('#storage_sliders div[data-type=sas], #storage_sliders div[data-type=sas] div').show();
		} else if($('#storage_backend').val()=='san') {
			$('#storage_sliders div').hide();
			$('#storage_sliders div[data-type=san], #storage_sliders div[data-type=san] div').show();
		}
		runVMUpdater();
	});


	var delay = (function(){
		var timer = 0;
		return function(callback, ms){
			clearTimeout (timer);
			timer = setTimeout(callback, ms);
		};
	})();



	 /**
     * Disable 'enter' submit.
     */
	$('#orderform').find('input:text, textarea').bind('keypress', function(e) {
		if (e.which == 13) {
			return false;
		}
	});


	/**
	 * Initial check
	 */
	$jqhxr = $.post(
		'/solutions/sub/verify-hostname/',
		{hostname: $(this).val()},
		function(data) {
			if(data==1) {
				$('#hostname').css('color', 'inherit');
				$('#finalize').show();
			} else {
				$('#hostname').css('color', 'red');
				$('#finalize').hide();
			}
		}
	);

    $('#hostname').bind('keyup blur', function() {
        var hostname = $(this).val();
        if (!hostname.match(/.*\..*\..*/)) {
        	$('#hostname').css('color', 'red');
            $('#finalize').hide();
            return;
        }
        if ($jqhxr) {
            $jqhxr.abort();
        }
        $jqhxr = $.ajax({
            type: "POST",
            url: '/solutions/sub/verify-hostname/',
            data: {hostname: hostname},
            dataType: "json",
            success: function(data) {
                $jqhxr = null;
                if(data==1) {
                    $('#hostname').css('color', 'inherit');
                    $('#finalize').show();
                } else {
                    $('#hostname').css('color', 'red');
                    $('#finalize').hide();
                }
            },
            error: function(request, status, err) {
                $jqhxr = null;
                if(status == "timeout") {
                    $('#hostname').css('color', 'inherit');
                    $('#finalize').show();
                }
            }
        });
    });
});

function renderVMBilling() {
	if($('#billingtype').val()=='monthly') {
		$("ul[data-prices=hourly]").hide();
		$("div[data-prices=monthly]").show();
	} else {
		$("div[data-prices=monthly]").hide();
		$("ul[data-prices=hourly]").show();
	}
}

function runVMUpdater() {
	var running = 0;
	var online = 0;
	var offline = 0;
	if($('#billingtype').val()=='monthly') {
		$('.slider').each(function() {
			var container = $(this).parent();
			var current = container.find('input.choice').val();
			var price = (container.data('monthly-default')*1)+(((current*1)-container.data('steps'))*(container.data('monthly-upgrade')*1));
			container.find('input.price').val(price);
			container.find('span').text(current + ' ' + container.data('unit') + ' @ $' + price.toFixed(2) + ' / month');
			if($(this).parent().is(':visible')) {
				running += price;
			}
		});
	} else {
		$('.slider').each(function() {
			var container = $(this).parent();
			var current = container.find('input.choice').val();
			var price = (current*(container.data('hourly-online')*1));
			var offlinePrice = (current*(container.data('hourly-offline')*1));
			container.find('input.price').val(price);
			container.find('span').text(current + ' ' + container.data('unit') + ' @ $' + price.toFixed(4) + ' / hour online, $' + offlinePrice.toFixed(4) + ' offline');
			if($(this).parent().is(':visible')) {
				online += price;
				offline += offlinePrice;
			}
		});
	}

	$("#orderform > ul select").each(function() {
		var matches = $(this).find('option:selected').text().match(/\(\+\$([0-9.]+)\)/);
		if(matches) {
			running += matches[1]*1;
		}
	});

	$("#orderform > ul input[type=checkbox]:checked").siblings('.cbprice').each(function() {
		var matches = $(this).text().match(/\(\+\$([0-9.]+)\)/);
		if(matches) {
			running += matches[1]*1;
		}
	});

	if($('#billingtype').val()=='monthly') {
		running = running.toFixed(2);
		$("#total span").html(running);
	} else {
		running = running.toFixed(4);
		$("ul[data-prices=hourly] li[data-price=month] span").html(running);
		online = online.toFixed(4);
		$("ul[data-prices=hourly] li[data-price=online] span").html(online);
		offline = offline.toFixed(4);
		$("ul[data-prices=hourly] li[data-price=offline] span").html(offline);
	}

}