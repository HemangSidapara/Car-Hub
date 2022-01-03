<?php include('..\component\dc.php') ?>
<?php
    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $pname = mysqli_real_escape_string($conn,$_POST['pname']);
    
    $sql = "SELECT * FROM login_tbl where uname = '$uname' and pname = '$pname';";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        header('location:home.php');
    }else {
        header('location:login.php?error=1');
    }
?>
