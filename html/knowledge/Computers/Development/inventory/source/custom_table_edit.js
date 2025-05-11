$(document).ready(function(){
	$('#data_table').Tabledit({
		deleteButton: false,
		editButton: false,   		
		columns: {
		  identifier: [0, 'id'],                    
			editable: [[1, 'item'], [2, 'source'], [3, 'order_date'], [4, 'expected_delivery']]
		},
		hideIdentifier: true,
		url: 'live_edit.php'		
	});
});