<?php include('..\component\dc.php'); ?>
<?php
    $uname = $_COOKIE['uname'];
    $pname = $_POST['pname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    if(isset($pname) and isset($email) and isset($mobile) and isset($gender) ){

        $sql = "UPDATE login_tbl SET pname = '$pname' where uname = '$uname'";
        $conn->query($sql);
        $sql1 = "UPDATE info_tbl SET email = '$email', mobile = '$mobile', gender = '$gender' where uname = '$uname'";
        $conn->query($sql1);
        header('location:profile.php');
    }else{
        echo "Invalid Input";
    }
?>
