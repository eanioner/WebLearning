"use strict"

$(document).ready(function() {
	
	$('input').click(transpose);

	function transpose() {
		$('table').each(function() {
			
			var newRows = [];
			var numRows = $(this).find('tr').length;
			var elems = $(this).find('tr *');
			var numCols = elems.length / numRows;

			for (var i = 0; i < numCols; i++) {
				newRows.push($('<tr></tr>'));
			}

			for (var i = 0; i < elems.length; i++) {
				newRows[i % numCols].append($(elems[i]));
			}

			$(this).empty();

			for (var i = 0; i < newRows.length; i++) {
				$(this).append(newRows[i]);
			}
			
		});
	};

});





