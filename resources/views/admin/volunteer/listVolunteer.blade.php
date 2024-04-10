<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Volunteer</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
	 <style type="text/css">
	 	body{
			    padding: 0;
			    margin: 0;
			    calc:0;
			}
		ol,ul{
		    	padding-left: 0;
			}
		.btn-save{
			font-weight: 400;
			border-radius: 10px;
			text-decoration: none;
			padding: 2px 8px 2px 8px;
			background-color: #1a101d;
			color: white;
		}
		.btn-save:hover{
			color: red;
		}
	 </style>
</head>
<body>
	<div class="content">
		<div class="card">
			<div class="card-header">
				<div class="row" style="align-items: center;">
					<div class="col-md-6 justify-content-start">
						<h4>Volunteers</h4>
					</div>
					<div class="col-md-6 d-flex justify-content-end">
						<a href="javascript:void(0)" class="btn-save" >Add Volunteer</a>
						
					</div>
				</div>
				
				
			</div>
			<div class="card-body">
				<div class="row">
					<table id="listVolunteer" class="display" width="100" style="width:100%;">
						 <thead>
					        <tr>
					            <th>Column 1</th>
					            <th>Column 2</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php 
					    	for ($i = 0; $i < 15; ++$i) {
					    		?>
				    			 <tr>
						            <td>Row 1 Data 1</td>
						            <td>Row 1 Data 2</td>
						        </tr>
					    		<?php
					    	}
					    	 ?>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js" type="text/javascript"></script>
<script src="<?=base_url('/public/assets/adminJs/common.js')?>"></script>

<script src="<?=base_url('/public/assets/adminJs/volunteer.js')?>"></script>
<script type="text/javascript">
	$('#listVolunteer').DataTable();
    var pageType = "listVolunteer";
</script>