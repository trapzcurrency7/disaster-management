<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">

        body{
            padding: 0;
            margin: 0;
            calc:0;
        }
        ol,ul{
            padding-left: 0;
        }
        img{
            aspect-ratio: 2/3;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <div class="content" >
        <div class="card">
            <div class="card-header">
                <h4>Dashboard</h4>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>No of Complaints</h4>
                            </div>
                            <div class="card-body">
                                5
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>No of Complaints</h4>
                            </div>
                            <div class="card-body">
                                5
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>No of Complaints</h4>
                            </div>
                            <div class="card-body">
                                5
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>No of Complaints</h4>
                            </div>
                            <div class="card-body">
                                5
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i=300;
                for ($i = 300; $i <320 ; ++$i) {
                    ?>
                    <div class="row text-center mt-4">
                        <div class="col-md-6">
                            <img src="<?="https://picsum.photos/250/".$i ?>" style="aspect-ratio: 2/2; object-fit: contain;">
                        </div>
                        <div class="col-md-6">
                            <img src="<?="https://picsum.photos/251/".$i ?>">
                        </div>
                    </div>
                  <?php
                }
                ?>
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
<script src="<?=base_url('/public/assets/adminJs/common.js')?>"></script>

<script src="<?=base_url('/public/assets/adminJs/dashboard.js')?>"></script>
<script type="text/javascript">
    var pageType = "dashboard";
</script>