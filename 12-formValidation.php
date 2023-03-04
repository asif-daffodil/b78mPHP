<?php  
    $g = ["Male", "Female"];
    $s = ["HTML", "CSS", "JS", "BS"];

    function safuda ($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    if(isset($_POST["sub123"])){
        $uname = safuda($_POST["uname"]);
        $uemail = safuda($_POST["uemail"]);
        $gender = safuda($_POST["gender"] ?? null);
        $skill = $_POST["skill"] ?? null;
        
        if(empty($uname)){
            $errName = "<span style='color: red'>Please write your name</span>";
        }elseif(!preg_match('/^[A-Za-z. ]*$/', $uname)){
            $errName = "<span style='color: red'>Invalid name formate</span>";
        }else{
            $crrUname = $uname;
        }

        if(empty($uemail)){
            $errEmail = "<span style='color: red'>Please write your Email address</span>";
        }elseif (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
            $errEmail = "<span style='color: red'>Invalid Email address</span>";
        }else{
            $crrEmail = $uemail;
        }

        if(empty($gender)) {
            $errGender = "<span style='color: red'>Please write your gender</span>";
        }elseif(!in_array($gender,$g)){
            $errGender = "<span style='color: red'>Paknami bondho korun</span>";
        }else {
            $crrGender = $gender;
        }

        if(empty($skill)){
            $errSkill = "<span style='color: red'>Please select your skills</span>";
        }else{
            foreach($skill as $sk){
                if(!in_array($sk, $s)){
                    $errSkill = "<span style='color: red'>Paknami bondho korun</span>";
                }
            }
            if(!isset($errSkill)){
                $crrSkill = safuda(implode(", ", $skill));
            }
        }

        if (isset($crrUname) && isset($crrEmail) && isset($crrGender) && isset($crrSkill)) {
            $uname = $uemail = $gender = $skill = null;
        }
   }
?>

<form action="" method="post">
    <input type="text" name="uname" placeholder="Your Name" value="<?= $uname ?? null ?>">
    <?= $errName ?? null ?>
    <br><br>

    <input type="text" placeholder="Email Address" name="uemail" value="<?= $uemail ?? null ?>">
    <?= $errEmail ?? null ?>
    <br><br>

    Your Gender :
    <input type="radio" name="gender" value="Male" <?= isset($gender) && $gender == "Male" ? "checked":null ?>>Male
    <input type="radio" name="gender" value="Female" <?= isset($gender) && $gender == "Female" ? "checked":null ?>>Female
    <?= $errGender ?? null ?>
   <br><br>

    Your Skills :
    <input type="checkbox" value="HTML" name="skill[]" <?= isset($skill) && in_array("HTML", $skill) ? "checked":null ?> >HTML
    <input type="checkbox" value="CSS" name="skill[]" <?= isset($skill) && in_array("CSS", $skill) ? "checked":null ?>>CSS
    <input type="checkbox" value="JS" name="skill[]" <?= isset($skill) && in_array("JS", $skill) ? "checked":null ?>>JS
    <input type="checkbox" value="BS" name="skill[]" <?= isset($skill) && in_array("BS", $skill) ? "checked":null ?>>BS
    <?= $errSkill ?? null ?>
    
    <br><br>
    <input type="submit" name="sub123" value="signup">
</form>

<?php  
    if (isset($crrUname) && isset($crrEmail) && isset($crrGender) && isset($crrSkill)) {
        echo "
            Your Name : $crrUname <br>
            Your Email : $crrEmail <br>
            Your Gender : $crrGender <br>
            Your Skills : $crrSkill
        ";
    }
?>