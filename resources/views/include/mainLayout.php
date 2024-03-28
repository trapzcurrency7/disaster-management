<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		i
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-6">Helo</div>
		<div class="col-md-6">Helo1</div>
	</div>
<?php echo View::make('include/header'); ?>
<?= isset($template)? View::make($template):'' ?>
<?php echo View::make('include/footer'); ?>
</body>
</html>
<script type="text/javascript">
</script>


