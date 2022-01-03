<?php include('..\component\dc.php') ?>
<?php
    $uname = $_COOKIE['uname'];
    
    $sql = "DELETE FROM login_tbl where uname = '$uname'";
    $sql1 = "DELETE FROM info_tbl where uname = '$uname'";
    $sql2 = "DELETE FROM profile_pic where uname = '$uname'";
    
    $result = $conn->query($sql);
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);

    if($result->num_rows == 0 and $result->num_rows == 0 and $result2->num_rows == 0){
        header('location:signup.php');
    }else{
        header('location:update.php');
    }
?>