<?php
session_start();
if (isset($_SESSION['user']) && $_SESSION['user']['status'] == 'active') {
    header("location: ./trainer");
}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Niyamot Online</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' />
</head>

<body>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-6 m-auto bordr shadow rounded fs-2 p-4 text-center text-danger">
                Please contact with admin to get approved!
            </div>
        </div>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>