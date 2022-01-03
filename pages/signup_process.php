<?php include('..\component\dc.php'); ?>
<?php
    $uname = $_POST['uname'];
    $pname = $_POST['pname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    if(isset($uname) and isset($pname) and isset($email) and isset($mobile) and isset($gender) ){

        $sql = "INSERT INTO login_tbl values('$uname','$pname');";
        $sql1 = "INSERT INTO info_tbl values('$uname','$email','$mobile','$gender');";
    
        if($conn->query($sql)==TRUE and $conn->query($sql1)==TRUE){  
            $sql = "SELECT * FROM login_tbl where uname = '$uname' and pname = '$pname';";                
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                setcookie("uname",$uname);
                header('location:login.php');
            }else{
                header('location:signup.php?error=1');
            }          
        }
        else{
            header('location:signup.php?error=2');
        }

    }else{
        echo "Invalid Input";
    }
?>
