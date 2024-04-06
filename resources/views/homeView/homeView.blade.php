<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?=  csrf_token()?>">
    <input type="hidden" id="csrf" name="" value="<?=csrf_token()?>">
    <title>Crowd Disaster Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .container .main-card .card-bottom label{
            display: block;
        }

        .container{
            display: grid;
            place-items: center;
            
        }

        .main-card{
            display: flex;
            flex-direction: column;
            width: 80%;
            background-color: rgb(39, 38, 38);
            padding: 1rem;
            margin: 2rem 0rem;
            border-radius: 1rem;
        }

        .card-top{
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-bottom: 2px solid white;
        }

        .card-bottom{
            display: grid;
            grid-template-columns: 1fr 1fr;
                margin: 1.5rem 1rem;
        }
        .headrM:hover{
            color: red;
        }
        
        input{
            width: 98%;
            margin-bottom: 2rem;
            border-radius: 0.5rem;  
            border: none;
            padding: 0.2rem 0.5rem;
        }
        button{
            padding: 0.4rem 3rem;
            border-radius: 0.5rem;
            background-color: whitesmoke;
            color: black;
            float: right;
        }
        
        .greeting h1, label{
            color: white;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr  ;
            align-items: center;
            justify-content: center;
        }

        .display-update{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .victimForm{
            display: grid;
            grid-template-columns: 1fr;
        }

        .display-right{
            display: flex;
            align-items: center;
        }

        .update-card{
            width: 80%;
            padding: 1rem 2rem;
            border: 2px solid black ;
        }

        .heading {
            border-bottom: 2px solid black;
        }
    </style>
</head> 
<body>
    <div class="container">
        <div class="main-card" style="display:none;">
            <div class="card-top">
                <div class="greeting">
                    <h1 class="headrM" style="display: inline;">Help!!</h1>
                </div>
                <div class="victim-button">
                    <button class=" saveVictimForm">Save</button>
                </div>
            </div>
            <div class="card-bottom victimForm">
                <form id="formData">

                    <div class="address">
                        <label for="address"><strong>Address</strong></label>
                        <input type="text" class="address1" name="address" id="" placeholder="Enter your address">
                    </div>
                    <div class="pincode">
                        <label for="pincode"><strong>Pincode</strong></label>
                        <input type="text" name="pincode" id="" placeholder="Enter your pincode">

                    </div>
                    <div class="disaster-type">
                        <label for="disaster type"><strong>Disaster Type</strong></label>
                        <input type="text" name="disasterType" id="" placeholder="Enter the disaster type">
                    </div>
                </form>
            </div>
        </div>

        <div class="update-card">
            <div class="heading">
                <h1>Scroll for Updates</h1>
            </div>

            <div class="display-update">
                <div class="display-left">
                    <h1>Pune</h1>
                    <h2>411036</h2>
                    <h3>Disaster Type</h3>
                </div>
                <div class="display-right">
                    <h1>Number of Helpers: 7</h1>
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
<script src="<?=base_url('public/assets/js/common.js')?>"></script>
<script type="text/javascript">
        // $(document).ready(function() {
            var pageType = "home";
        // })
</script>
    <script src="<?=base_url('/public/assets/libraries/bootbox.all.js')?>"></script>
<script src="<?=base_url('/public/assets/libraries/bootbox.all.min.js')?>"></script>
<script src="<?=base_url('public/assets/js/home.js')?>"></script>

