<?php  
    include_once("./header.php");
    include_once("./nav.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-md-5 border m-5 mx-auto p-5 rounded shadow">
                <h2>Sign-up Form</h2>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
                   <div class="mb-3">
                     <input type="text" placeholder="Your Name" class="form-control" name="fname" id="fname">
                     <div class="invalid-feedback">
                        <?= $errName ?? null ?>
                     </div>
                   </div>
                   <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Register">
                   </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./node_modules/axios/dist/axios.min.js"></script>
    <script src="./formValidation.js"></script>
<?php  
    include_once("./footer.php");
?>    
    