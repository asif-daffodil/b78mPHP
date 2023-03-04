<?php  
    $name = "Dip Chandra Sarkar";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.min.css">
</head>
<body>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <?php if(isset($name)){ ?>
                <div class="col-md-6 m-auto display-6 text-center">
                    <?php  
                        echo $name;
                    ?>
                </div>
            <?php }else{ ?>
                <div class="col-md-6 m-auto display-6 text-center text-danger">
                    <?php  
                        echo "NAME NOT FOUND";
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
    
</body>
</html>