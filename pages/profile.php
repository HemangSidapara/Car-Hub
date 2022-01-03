<head>
    <title>Profile</title>
</head>
<?php include('..\component\header.php');?>
<?php include('..\component\navbar.php');?>
<link rel="stylesheet" href="..\css\profile.css">
<?php include('..\component\dc.php') ?>
<div class="profile">
    
    <div class="container">
        </br></br></br>
        <div class="row">
            <div class="col-md-2 conn font">
                <?php
                    $uname = $_COOKIE['uname'];
                    $sql2 = "SELECT * FROM profile_pic where uname = '$uname'";
                    $result1 = $conn->query($sql2);
                    if($result1->num_rows > 0){
                        while($row1 = $result1->fetch_assoc()){
                            ?>
                                <img class="img-thumbnail conn" src="<?php echo $row1["path"]; ?>" alt="Profile Image"/>
                            <?php
                        }
                    }
                ?>
            </div>
            <div class="col-md-8 container">
                <table class="font table">
                    <?php
                        $sql = "SELECT * FROM info_tbl where uname = '$uname'";
                        $sql1 = "SELECT * FROM login_tbl where uname = '$uname'";
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                ?> 
                                    <tr>
                                        <td class="hdr"><i class="fas fa-map-pin"></i> <?php echo $row["uname"];?></td>
                                    </tr>
                                    <tr>
                                        <td class="dta">&nbsp;&nbsp;<i class="fas fa-envelope"></i> <?php echo $row["email"];?></td>
                                    </tr>
                                    <tr>
                                        <td class="dta">&nbsp;&nbsp;<i class="fas fa-mobile"></i>&nbsp;<?php echo $row["mobile"];?></td>
                                    </tr>
                                    <tr>
                                        <td class="dta">&nbsp;&nbsp;<i class="fas fa-venus-mars"></i> <?php echo $row["gender"];?></td>
                                    </tr>   
                                    <div class="update">
                                        <form action="update.php" method="POST">
                                            <td></td>
                                            <td><input class="bnm" type="submit" name="update" value="Update Profile"/></td>
                                        </form>
                                    </div> 
                                <?php
                            }
                        }
                    ?>
                </table>
            </div>
            
        </div>
    </div>
</div>    
<?php include('..\component\footer.php');?>