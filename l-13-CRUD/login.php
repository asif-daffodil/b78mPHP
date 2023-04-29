<?php  
    include_once("./header.php");
    isset($_SESSION['uinfo']) ? header("location: ./index.php"):null;
?>

<div class="container">
    <div class="row min-vh-100 d-flex">
        <?php
        if (isset($_POST['log123'])) {
            $eumail = $_POST['eumail'];
            $pass = md5($_POST['pass']);

            $conn = mysqli_connect("localhost", "root", "", "b78m");

            $check_with_uname_query = "SELECT * FROM `users` WHERE `uname` = '$eumail' AND `pass` = '$pass'";
            $check_with_email_query = "SELECT * FROM `users` WHERE `email` = '$eumail' AND `pass` = '$pass'";
            $check_with_uname = $conn->query($check_with_uname_query);
            $check_with_email = $conn->query($check_with_email_query);

            if($check_with_uname->num_rows === 1 ){
                echo "<script>toastr.success('Login Successfull!')</script>";
                $uinfo = $check_with_uname->fetch_object();
                $_SESSION['uinfo'] = ["name" => $uinfo->name, "email" => $uinfo->email, "role" => $uinfo->role];
                echo "<script>setTimeout(()=>{location.href='index.php'},2000)</script>";
            }elseif($check_with_email-> num_rows === 1){

            }else{
                echo "<script>toastr.warning('Wrong login info!')</script>";
            }
        }
        ?>
        <div class="col-md-6 m-auto p-3 border rounded shadow">
            <h2 class="text-primary mb-3">Log in Form</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <input type="text" placeholder="Email/Usser Name" name="eumail" class="form-control" required value="<?= $eumail ?? null ?>">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Password" name="pass" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Log in" class="btn btn-primary btn-sm" name="log123">
                </div>
            </form>
            don't have account? <a href="./signup.php">Sign up</a> Here
        </div>
    </div>
</div>

<?php  
    include_once("./footer.php");
?>