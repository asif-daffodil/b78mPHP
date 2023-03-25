<?php
$select_teachers = $conn = null;
function seam () {
    $GLOBALS['conn'] = mysqli_connect("localhost", "root", "", "b78m");
    $GLOBALS['select_teachers'] = $GLOBALS['conn']->query("SELECT * FROM `teachers`");
}

seam();

function safuda($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

$genderList = ["Male", "Female"];

if (isset($_POST['addTeacher'])) {
    $tname = safuda($_POST['tname']);
    $gender = safuda($_POST['gender'] ?? null);

    if (empty($tname)) {
        $errName = "Please write your name";
    } elseif (!preg_match('/^[A-Za-z. ]*$/', $tname)) {
        $errName = "Invalid name format";
    } else {
        $crrName = $conn->real_escape_string($tname);
    }

    if (empty($gender)) {
        $errGender = "Please select your gender";
    } elseif (!in_array($gender, $genderList)) {
        $errGender = "Paknami bondho korun!";
    } else {
        $crrGender = $conn->real_escape_string($gender);
    }

    if (isset($crrName) && isset($crrGender)) {
        $insert = $conn->query("INSERT INTO `teachers` (`name`, `gender`) VALUES ('$crrName', '$crrGender')");
        if (!$insert) {
            $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">Something went wrong!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }else{
            $msg = '<div class="alert alert-success alert-dismissible fade show" role="alert">Teacher added successfully!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            $tname = $gender = null;
            seam();
        }
    }
}



?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Bootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-3">
                <div class="border shadow rounded my-3 p-3">
                    <h2>Add Teacher</h2>
                    <?= $msg ?? null ?>
                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="text" placeholder="Teacher Name" class="form-control <?= isset($errName) ? "is-invalid" : null ?>" name="tname" value="<?= $tname ?? null ?>">
                            <div class="invalid-feedback"><?= $errName ?? null ?></div>
                        </div>
                        <div class="mb-3">
                            <div class="form-control <?= isset($errGender) ? "is-invalid" : "border-0"; ?>">
                                <div class="form-check form-check-inline ps-0">
                                    <label for="" class="form-check-label">Gender :</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label for="" class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" value="Male" <?= isset($gender) && $gender === "Male" ? "checked" : null ?>>Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label for="" class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" value="Female" <?= isset($gender) && $gender === "Female" ? "checked" : null ?>>Female
                                    </label>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $errGender ?? null ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-sm" name="addTeacher">Add Teacher</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8  p-3">
                <div class="border shadow rounded my-3  p-3">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        <?php while ($select_teacher = $select_teachers->fetch_object()) { ?>
                            <tr>
                                <td><?= $select_teacher->id; ?></td>
                                <td><?= $select_teacher->name; ?></td>
                                <td><?= $select_teacher->gender; ?></td>
                                <td>
                                    <?= date('F-d-Y', strtotime($select_teacher->created_at)); ?>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>