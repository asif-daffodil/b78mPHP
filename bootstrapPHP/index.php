<?php  
    include_once("./header.php");
    include_once("./nav.php");
    include_once("./slider.php");

    if(basename($_SERVER['PHP_SELF']) == "index.php") {
        echo "active"
    }else{
        echo null;
    }
?>
    <?= basename($_SERVER['PHP_SELF'])  ?>
<?php  
    include_once("./footer.php");
?>
    