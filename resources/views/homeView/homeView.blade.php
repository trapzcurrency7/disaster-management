<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Crowd Disaster Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
            margin-top: 1rem;
            border: 1px solid black;
        }
        .main {
            margin: 20px;
        }
        .element_input{
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            border-radius: 10px;
            padding: 2px 5px 2px 5px;
            width: 100%;
            margin-bottom: 10px;
        }
        .element_input:focus{
            border: 1px;
           box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        }
        .headHover:hover{
            color: red;
            border-bottom: 1px solid red;
        }
        .headHover{
            display: inline;
            margin: 1rem;
        }    
        .heading{
            padding: 0.5rem 0rem   ;
        }           

    </style>
</head> 
<body>
    <div class="content">
        <div class="container">
            <div class="row element_card">
                <div class="row element_header">
                    <div class="col-md-6" >
                        <div class="heading">
                            <h4 class="mt-2 headHover">Hello</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="javascript:void(0)" class="btn_save"> Save</a>
                    </div>
                </div>
                <div class="row element_body" style="display: none;">
                    <div class="col-md-6">
                        <label for="name" class="label">Pincode</label>
                        <input type="text" class="element_input" name="pincode" id="pincode">
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="label">Street Address</label>
                        <input type="text" class="element_input" name="stAdress" id="stAdress">
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="label">Phone</label>
                        <input type="number" class="element_input" name="stAdress" id="stAdress">
                    </div>
                </div>
            </div>
            
            <div class="header">
                <h1>Crowd Disaster Management</h1>
                <p>Ensuring safety in crowded places</p>
            </div>
            <div class="main">
                <h2>Welcome to our website</h2>
                <p>Our mission is to provide effective disaster management solutions for crowded places. We aim to prevent and mitigate the impact of disasters through innovative technology and effective crowd management strategies.</p>
            </div>
             <div class="header">
                <h1>Crowd Disaster Management</h1>
                <p>Ensuring safety in crowded places</p>
            </div>
            <div class="main">
                <h2>Welcome to our website</h2>
                <p>Our mission is to provide effective disaster management solutions for crowded places. We aim to prevent and mitigate the impact of disasters through innovative technology and effective crowd management strategies.</p>
            </div>
             <div class="header">
                <h1>Crowd Disaster Management</h1>
                <p>Ensuring safety in crowded places</p>
            </div>
            <div class="main">
                <h2>Welcome to our website</h2>
                <p>Our mission is to provide effective disaster management solutions for crowded places. We aim to prevent and mitigate the impact of disasters through innovative technology and effective crowd management strategies.</p>
            </div>
           
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
            var pageType = "home";
        // })
</script>
    <script src="<?=base_url('/public/assets/libraries/bootbox.all.js')?>"></script>
<script src="<?=base_url('/public/assets/libraries/bootbox.all.min.js')?>"></script>
<script src="<?=base_url('public/assets/js/home.js')?>"></script>

