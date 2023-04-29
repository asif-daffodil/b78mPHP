<?php  
    include_once("./header.php");
    $id = !isset($_GET['id']) ? header("location: ./index.php"):$_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "b78m");
    $id = $conn->real_escape_string($id);
    $getPreData;

    function getCheckData () {
        $id = $GLOBALS['id'];
        $getPreData = $GLOBALS['conn']->query("SELECT * FROM `teachers` WHERE `id` = $id");
        $GLOBALS['getPreData'] = ($getPreData->num_rows != 1) ? header("location: ./index.php"):$getPreData->fetch_object();
    }

    getCheckData();
?>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <?php 
                if(isset($_POST["up123"])){
                    $tname = $_POST['tname'];
                    $gender = $_POST['gender'] ?? null;
                    $update = $conn->query("UPDATE `teachers` SET `name` = '$tname', `gender` = '$gender' WHERE `id` = $id");
                    if(!$update){
                        echo "<script>toastr.warning('Something went wrong!')</script>";
                    }else{
                        echo "<script>toastr.success('Teacher updated successfully!')</script>";
                        getCheckData();
                    }
                }
            ?>
            <div class="col-md-5 m-auto border rounded shadow p-4">
                <h2 class="mb-4">Update Teacher</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" placeholder="Teacher Name" name="tname" value="<?= $getPreData->name ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <label for="" class="from-check-label">Gender</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="Male" required <?= $getPreData->gender == "Male" ? "checked":null ?> name="gender">
                            <label for="" class="from-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="Female" required <?= $getPreData->gender == "Female" ? "checked":null ?> name="gender">
                            <label for="" class="from-check-label">Female</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-sm" name="up123">Update Teacher</button>
                    </div>
                </form>
                <a href="./index.php">Back</a>
            </div>
        </div>
    </div>


<?php 
    include_once("./footer.php")
 ?>