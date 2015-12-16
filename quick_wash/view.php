<!DOCTYPE html>
<html>
<head>
	<title>Quick Wash</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
</head>
<body>
	<div class="container-full">
		<div class="page-header text-center">
			<h1 style="font-family:serif; font-weight: bold">Quick Wash</h1>      
		</div>
		<div role="tabpanel">
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#pendingDetails" aria-controls="home" role="tab" data-toggle="tab">Pending Orders</a></li>
		    <li role="presentation"><a href="#deliveredDetails" aria-controls="messages" role="tab" data-toggle="tab">Delivered Orders</a></li>
		  </ul>
		  <!-- Tab panes -->
		  <div class="tab-content" style="display:none">
		    <div role="tabpanel" class="tab-pane active" id="pendingDetails">
		    	<table id="pendingDetailsTable" class="display table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Id</th>
		                <th>Name</th>
		                <th>Mobile</th>
		                <th>Alternate Mobile</th>
		                <th>Email</th>
		                <th>Address</th>
		                <th>Pincode</th>
		                <th>Date</th>
		                <th>Service</th>
		                <th>Status</th>
		            </tr>
		        </thead>
		 
		        <tfoot>
		            <tr>
		                <th>Id</th>
		                <th>Name</th>
		                <th>Mobile</th>
		                <th>Alternate Mobile</th>
		                <th>Email</th>
		                <th>Address</th>
		                <th>Pincode</th>
		                <th>Date</th>
		                <th>Service</th>
		                <th>Status</th>
		            </tr>
		        </tfoot>
		    </table>
		    </div>
		    <div role="tabpanel" class="tab-pane" id="deliveredDetails">
		    	<table id="deliveredDetailsTable" class="display table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Id</th>
		                <th>Name</th>
		                <th>Mobile</th>
		                <th>Alternate Mobile</th>
		                <th>Email</th>
		                <th>Address</th>
		                <th>Pincode</th>
		                <th>Date</th>
		                <th>Service</th>
		                <th>Status</th>
		            </tr>
		        </thead>
		 
		        <tfoot>
		            <tr>
		                <th>Id</th>
		                <th>Name</th>
		                <th>Mobile</th>
		                <th>Alternate Mobile</th>
		                <th>Email</th>
		                <th>Address</th>
		                <th>Pincode</th>
		                <th>Date</th>
		                <th>Service</th>
		                <th>Status</th>
		            </tr>
		        </tfoot>
		    </table>
		    </div>
		  </div>
		</div>
	</div>
<script src="js/script.js"></script>
</body>
</html>