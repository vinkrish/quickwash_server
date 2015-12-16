	$(document).ready(function(){      

		$.ajax({ 
	   url: 'select_pending.php',
	   data: {
	   	'action' : 'get_pending_order',
	   },
	   type: 'post', 
	   dataType: 'json',        
	   success: function(data) {
	   		$('#pendingDetailsTable').dataTable( {
	   				destroy: true,
		        "data" : data,
		        "columns": [
		            { "data": "id"},
		            { "data": "name" },
		            { "data": "mobile" },
		            { "data": "alternate_mobile" },
		            { "data": "email"},
		            { "data": "address" },
		            { "data": "pincode" },
		            { "data": "date" },
		            { "data": "service" },
		            { "data": "status" }
		        ]
		    } );
			}
		});

		$.ajax({ 
	   url: 'select_delivered.php',
	   data: {
	   	'action' : 'get_delivered_order',
	   },
	   type: 'post', 
	   dataType: 'json',        
	   success: function(data) {
	   		$('#deliveredDetailsTable').dataTable( {
	   				destroy: true,
		        "data" : data,
		        "columns": [
		            { "data": "id" },
		            { "data": "name" },
		            { "data": "mobile" },
		            { "data": "alternate_mobile" },
		            { "data": "email" },
		            { "data": "address" },
		            { "data": "pincode" },
		            { "data": "date" },
		            { "data": "service" },
		            { "data": "status" }
		        ]
		    } );
			}
		});

		$(".tab-content").show();

	});