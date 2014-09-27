/**
 * @author Jake Warner 
 */
$(document).ready(function() {
	$('.select2slider').each(function() {
		var slider = $(this);
		slider.prepend('<div class="select2slider-container"></div>');
		
		var select = slider.find('select');

		slider.prepend('<input type="hidden" name="' + select.attr('name') + '" value="' + slider.data('default') + '" />');
		
		select.removeAttr('name');

		var container = slider.find('.select2slider-container');
		
		container.append('<div class="select2slider-handle"></div>');
		var handle = container.find('.select2slider-handle');
		
		container.append('<div class="select2slider-range"></div');
		var range = container.find('.select2slider-range');

		var left = 0;
		
		if(slider.data('width-assist')) {
			/**
			 * Width assist is used when the slider is hidden natively and we cannot automatically determine the width. 
			 */
			var width = (slider.data('width-assist')*1)-26;
		} else {
			var width = slider.width()-26;
		}
		
		var options = slider.find('select option').length-1;
		
		var iteration = width/options;
		
		var i = 0;
		select.find('option').each(function() {
			if($(this).data('price')) {
				var price = 'data-price="' + $(this).data('price') + '"';
			}
			container.append('<div ' + price + ' data-step="' + i + '" data-val="' + $(this).val() + '" style="left: ' + (Math.round(left)-10) + 'px;" class="select2slider-tick">' + $(this).text() + '</div>');
			if($(this).val()==slider.data('default')) {
				container.find('div[data-step=' + i + ']').addClass('select2slider-active');
			}
			left += iteration;
			i++;
		});
		
		/**
		 * Init 
		 */
		update();

		handle.draggable({
			containment: container,
			drag: function() {
				var position = handle.position().left;
				if(position>width) {
					position = width;
				}
				range.width(position+10);
				update();
			},
			stop: function() {
				var position = handle.position().left;
				if(position>width) {
					position = width;
				}
				position = Math.round(position/iteration)*iteration;
				range.animate({'width': (position+10) + 'px'}, 500);
				handle.animate({'left': position + 'px'}, 500);
				update();
			}
		});
		
		container.click(function(e) {
			var position = e.pageX-container.offset().left-5;
			if(position>width) {
				position = width;
			}
			position = Math.round(position/iteration)*iteration;
			range.animate({'width': (position+10) + 'px'}, 300);
			handle.animate({'left': position + 'px'}, 300);
			setTimeout(function() { update(); }, 320);
		});
		
		function update() {
			var step = Math.round(handle.position().left/iteration);
			var active = container.find('[data-step=' + step + ']');
			if(slider.data('update')) {
				$(slider.data('update')).text(active.text());
				container.find('div.select2slider-tick').removeClass('select2slider-active');
				active.addClass('select2slider-active');
			}
			slider.find('input').val(active.data('val'));
			if(slider.data('callback')) {
				var cb = slider.data('callback');
				eval(cb + '.call()');
			}
		}
	});
});