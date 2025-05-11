$(document).ready(function(){
	$('#data_table').Tabledit({
		deleteButton: false,
		editButton: false,   		
		columns: {
		  identifier: [0, 'id'],                    
		  editable: [[1, 'project'], [2, 'details'], [3, 'status'], [4, 'scale'], [5, 'information'], [6, 'other']]
		},
		hideIdentifier: false,
		url: 'live_edit.php'		
	});
});