<?php  
    if (isset($_GET['fname'])) {
        $fname = $_GET['fname'];
        $msg = [];
        if(empty($fname)){
            $msg['errName'] = "Please write your name";
        }else{
            $msg['crrName'] = $fname;
        }
        echo json_encode($msg);
    }
?>