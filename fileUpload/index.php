<style>
    #images>div {
        width: max-content;
        display: inline-block;
        margin-right: 20px;
        position: relative;
        overflow: hidden;
    }

    #images>div::before {
        content: "X";
        position: absolute;
        width: 100px;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        background: rgba(0, 0, 0, 0.2);
        transition: 0.1s;
        top: 100px;
        left: 100px;
        z-index: 100;
        cursor: pointer;
        font-family: arial;
    }

    #images>div:hover::before {
        top: 0px;
        left: 0px;
    }
</style>
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST["uimgbtn"])) {

    $fnames = $_FILES["myPic"]["name"];
    $tmpname = $_FILES["myPic"]["tmp_name"];

    $x = 0;
    foreach($fnames as $fname){
        if (empty($fname)) {
            $errs[] = "<span style='color: red'>Please write your name</span>";
        } elseif (!getimagesize($tmpname[$x])) {
            $errs[] = "<span style='color: red'>Invalid image file</span>";
        } else {
            if (!is_dir("./uploads")) {
                mkdir("./uploads");
            }
            $ext = pathinfo($fname, PATHINFO_EXTENSION);
            $amarVar = "ABCDEFFGHIJKLMOPQRSTUVWXYZabcdefghijklmmnopqrstuvwxyz0123456789";
            $amarVar = str_shuffle($amarVar);
            $amarVar = strrev($amarVar);
            $amarVar =  substr($amarVar, -6);
            $amarVar = uniqid("a") . str_shuffle($amarVar . rand() . date("FdYDlhisHaA")) . "." . $ext;
    
            $muf = move_uploaded_file($tmpname[$x], "./uploads/$amarVar");
            if (!$muf) {
                $errs[] = "<span style='color: red'>File upload fail!</span>";
            } else {
                $errs[] = "<span style='color: green'>Image uploaded successfully</span>";
            }
        }
        $x++;
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="myPic[]" multiple>
    <button type="submit" name="uimgbtn">Upload Image</button>
</form>


<?php
foreach($errs as $err){
    echo "$err <br>";
}
?>

<div id="images"></div>

<script>
    const myPic = document.getElementsByName("myPic[]")[0];
    const images = document.getElementById("images");

    myPic.addEventListener("change", () => {
        const files = myPic.files;
        Array.from(files).map(file => {
            if (file) {
                const div = document.createElement("div");
                const img = document.createElement("img");
                img.src = URL.createObjectURL(file);
                img.style.cssText = `
                width: 100px;
                height: 100px;
                object-fit: cover;
                `;
                div.appendChild(img)
                images.appendChild(div);
            }
        })
        Array.from(images.children).map(c => {
            c.addEventListener('click', () => {
                images.removeChild(Array.from(images.children)[Array.from(images.children).indexOf(c)]);
            })
        })
    })
</script>