<?php  
    include_once("./header.php");
    $id = !isset($_GET['id']) ? header("location: ./index.php"):$_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "b78m");
    $id = $conn->real_escape_string($id);
    $checkPreData = $conn->query("SELECT * FROM `teachers` WHERE `id` = $id");
    ($checkPreData->num_rows != 1) ? header("location: ./index.php"):null;
?>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <?php  
                if(isset($_POST['yes'])){
                    $id = $_POST['id'];
                    $delete = $conn->query("DELETE FROM `teachers` WHERE `id` = $id");

                    if(!$delete){
                        echo "<script>toastr.warning('Something went wrong!')</script>";
                    }else{
                        echo "
                        <script>
                            toastr.success('Teacher deleted successfully!');
                            setTimeout(()=>{
                                history.go(-2);
                            }, 2000);
                        </script>";
                    }
                }
            ?>
            <div class="col-md-5 alert alert-danger m-auto">
                <h5 class="text-center">Do you raaly want to delete the Teacher?</h5>
                <div class="d-flex justify-content-center">
                    <form action="" method="post" class="d-inline">
                        <input type="hidden" value="<?= $id ?>" name="id">
                        <input type="submit" class="btn btn-danger btn-sm me-2" name="yes" value="Yes">
                    </form>
                    <a href="./index.php" class="btn btn-success btn-sm">No</a>
                </div>
            </div>
        </div>
    </div>
<?php  
    include_once("./footer.php");
?>