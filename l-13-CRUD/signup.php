<?php
include_once("./header.php");
isset($_SESSION['uinfo']) ? header("location: ./index.php"):null;
?>
<div class="container">
    <div class="row min-vh-100 d-flex">
        <?php
        if (isset($_POST['sign123'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $uname = $_POST['uname'];
            $pass = $_POST['pass'];
            $conn = mysqli_connect("localhost", "root", "", "b78m");

            $check_email_query = "SELECT * FROM `users` WHERE `email` = '$email '";
            $check_email = $conn->query($check_email_query);

            if ($check_email->num_rows > 0) {
                echo "<script>toastr.warning('Email Already Exicts!')</script>";
            } else {
                $check_uname_query = "SELECT * FROM `users` WHERE `uname` = '$uname '";
                $check_uname = $conn->query($check_uname_query);
                if ($check_uname->num_rows > 0) {
                    echo "<script>toastr.warning('Username Already Exicts!')</script>";
                } else {
                    $pass = md5($pass);
                    $insert_query = "INSERT INTO `users` (`name`, `email`, `uname`, `pass`) VALUES ('$name', '$email', '$uname', '$pass') ";
                    $insert = $conn->query($insert_query);
                    if (!$insert) {
                        echo "<script>toastr.warning('Something went wrong!')</script>";
                    } else {
                        echo "<script>toastr.success('Registration successful! Please login now')</script>";
                        echo "<script>setTimeout(()=>{location.href='login.php'},2000)</script>";
                    }
                }
            }
        }
        ?>
        <div class="col-md-6 m-auto p-3 border rounded shadow">
            <h2 class="text-primary mb-3">Sing up Form</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <input type="text" placeholder="Your name" name="name" class="form-control" required value="<?= $name ?? null ?>">
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Your email" name="email" class="form-control" required value="<?= $email ?? null ?>">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Username" name="uname" class="form-control" required value="<?= $uname ?? null ?>">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Password" name="pass" class="form-control" required value="<?= $pass ?? null ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Sign up" class="btn btn-primary btn-sm" name="sign123">
                </div>
            </form>
            already have account? <a href="./login.php">Log in</a> Here
        </div>
    </div>
</div>
<?php
include_once("./footer.php");
?>