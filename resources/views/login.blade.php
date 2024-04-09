<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="<?=  csrf_token()?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<input type="hidden" id="csrfTokenId" name="" value="<?=csrf_token()?>">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background-color: white;
			background: url('https://cdn.pixabay.com/photo/2018/01/08/02/00/mati-3068595_1280.jpg');
		}
		input{
			border-radius: 8px;
			padding: 0px 8px 0px 8px;
			outline: none;
			border: none;r
		}
		.card-body{
			box-shadow:10px 10px 10px grey;
		}
		.card-header{
			box-shadow: 6px 10px 10px grey;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row text-center" style="justify-content: center;">
			<div class="card" style="margin-top: 15%;width: 30%; background: none;border: none;">
				<div class="card-header text-center" style="background-color: red;color: white;border-radius: 10px;font-weight: 500;">
				Login
				</div>
				<div class="card-body text-center" style="background-color: blue; border-radius: 10px;">
					<div class="row gx-0 mx-0 ">
						<div class="col-md-6" style="display: flex; justify-content:end; padding-right: 10px;">
							<span style="font-weight: 700; color: white;">Email :</span>
						</div>
						<div class="col-md-6">
							<input type="email" style="width: 100%;" placeholder="E-mail" class="email" name="e-mail">
						</div>
					</div>
					<div class="row mt-2 gx-0 mx-0">
						<div class="col-md-6" style="display: flex; justify-content:end;padding-right: 10px;" >
							<span style="color: white; font-weight: 700;">Password :</span>
						</div>
						<div class="col-md-6">
							<input type="Password" style="width: 100%;" placeholder="Password" class="password" name="Password">
						</div>
					</div>
					<a href="javascript:void(0)" style="background-color:red;color: white;font-weight: 500;" class="btn btn-succesful mt-4 login">Login</a>
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
<script src="<?=base_url('/public/assets/js/login.js')?>"></script>
<script src="<?=base_url('/public/assets/adminJs/common.js')?>"></script>
 <script src="<?=base_url('/public/assets/libraries/bootbox.all.js')?>"></script>
<script src="<?=base_url('/public/assets/libraries/bootbox.all.min.js')?>"></script>
<script type="text/javascript">
	var pageType = "login";
	var base_url = "<?= base_url() ?>";
</script>
