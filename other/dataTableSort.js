/**
 * @author Jake Warner 
 */
$(document).ready(function() {
		$('.dataTable th.sortable').click(function() {
			sortTable($(this).closest('.dataTable'), $(this));
		});
		
		function sortTable(dataTable, header) {
			if(!header) {
				header = $(dataTable).find('th.sorted');
			}
			
			if(header.length == 0) {
				return;
			} else {
				if(dataTable.hasClass('expandableDetails')) {
					var body = header.closest('thead~tbody');
				} else {
					var body = header.closest('tbody');
				}
			}
			
			var index = header.index();
				
			if(body.attr('data-sorted')=='asc') {
				inverse = true;
				body.attr('data-sorted', 'desc');
			} else if(body.attr('data-sorted')=='desc' || !body.attr('data-sorted')) {
				inverse = false;
				body.attr('data-sorted', 'asc');
			}
			
			body.find('th.sorted').removeClass('sorted');
			header.addClass('sorted');
			
			body
				.children('tr:not(.sub)')
				.children('td')
				.filter(function(){
					return $(this).index() === index;
				})
				.sort(function(a, b){
					
					a = $(a).text().replace('$', '');
					b = $(b).text().replace('$', '');
					
					return (
						isNaN(a) || isNaN(b) ?
							a > b : +a > +b
						) ?
							inverse ? -2 : 2 :
							inverse ? 2 : -2;
						
				}, function(){
					return this.parentNode;
				});
			
			if(dataTable.hasClass('expandableDetails')) {
				/**
				 * Move the sub rows (for .expandableDetails)
				 */
				rows = body.find('tr.sub');
				
				rows.each(function() {
					var row = $(this),
						pair = $(this).data('dt-pair');
					row.remove().insertAfter(body.find('tr.main[data-dt-pair=' + pair + ']'));
				});
			}
		}
		
		/**
		 * Sort all of the tables on page load.
		 */
		$('.dataTable').each(function() {
			var dataTable = $(this);

			if(dataTable.hasClass('expandableDetails')) {
				/**
				 * Create an index (for .expandableDetails)
				 */
				var workingIndex = 0;
				$(dataTable).find('thead~tbody > tr').each(function() {
					var row = $(this);
					if(row.hasClass('main')) {
						workingIndex = row.index();
						$(this).attr('data-dt-pair', workingIndex);
					} else if(row.hasClass('sub')) {
						$(this).attr('data-dt-pair', workingIndex);
					}
				});
			}

			sortTable(dataTable, false);
			
		});
});