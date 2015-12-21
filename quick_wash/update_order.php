<?
include "helper.php";
?>

<html>

<head>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <script src="chosen/chosen.jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="chosen/chosen.css">
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		function mainajaxcall()
    	{
		$.ajax({
              type: 'POST',
              url: 'helper.php',
              data:{action:'load_pendingorders'}, 
              dataType:'json',
              success:function(data)
                {
                $('#pending_orders').html(data);
                $('.editable').editable
              ({
              success: function(response, newValue) {
                //alert(response);
                }
              });
                	$('.chosen-container').width('100%');
                	$('#add_new_group').click(function()
                	{
                      $("#group_name").prop("readonly", false);
                      $('#update_insert').val('0');
                      $('#group_name').val('');
                      $('#subth').val('');$('#subth').trigger('chosen:updated');
                       $('#sub').val('');$('#sub').trigger('chosen:updated');  
                	     $("#group_box").modal('show');

                  });

            	}
               });
}
mainajaxcall();

	});
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
	jQuery(".chosen").chosen();
});
	</script>
	<style type="text/css">
/*	            .container 
	            {
				width: 80%;
				border: 2px solid green;
				top: 30%;
				bottom: 10%;
				left: 0;
				right: 0;
				margin: auto;
			   }*/
			   .chosen-container
			   {
			   	width:100%;
			   }
         .default
         {
          height: 34px !important;
          border-radius:2em;
         }
	</style>
	
</head>

<body>

<script type="text/javascript">
			$(function(){
			    $(".chosen-select").chosen();
			    $(".chosen-select").chosen({width: "95%"});
			});
	</script>

<div class="page-header text-center">
			<h1 style="font-family:serif; font-weight: bold">Quick Wash</h1>      
		</div>

<div class="container-full" id="pending_orders">
</div>

</body>


</html>