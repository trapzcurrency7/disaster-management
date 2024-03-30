<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body {
          	min-height: 100vh;
            margin: 0;
            padding: 0;
        }
	</style>
</head>
<body>
	
<?php echo View::make('include/header'); ?>
<?= isset($template)? View::make($template):'' ?>
<?php echo View::make('include/footer'); ?>
</body>
</html>



