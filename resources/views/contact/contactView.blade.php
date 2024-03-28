<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Crowd Disaster Source Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }
   /* .container {
      max-width: 800px;
      margin: 50px auto;
      padding: 0 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }*/
    h1 {
      margin-top: 30px;
      text-align: center;
      color: #007bff;
    }
    .pClass {
      line-height: 1.6;
      margin-bottom: 20px;
      color: #444;
    }
    form {
      margin-top: 30px;
    }
    label {
      display: block;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    textarea {
      height: 150px;
    }
    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
	<div class="content">
		<div class="container">
		    <h1>Contact Us</h1>
		    <p class="pClass">If you have any questions or feedback, please feel free to contact us using the form below:</p>
		    <form action="#" method="post">
	      		<label for="name">Your Name:</label>
		      	<input type="text" id="name" name="name" required>
		      	<label for="email">Your Email:</label>
		      	<input type="email" id="email" name="email" required>
		      	<label for="message">Message:</label>
		      	<textarea id="message" name="message" required></textarea>
		      	<input type="submit" value="Submit">
		    </form>
	  </div>
	</div>
  
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?=base_url('public/assets/js/common.js')?>"></script>
<script type="text/javascript">
        // $(document).ready(function() {
            var pageType = "contact";
        // })
</script>
<script src="<?=base_url('public/assets/js/contact.js')?>"></script>