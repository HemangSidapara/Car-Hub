<head>
    <title>Profile Update</title>
</head>
<?php include('..\component\header.php'); ?>

<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {
            $("#deactive").click(function(e) {
                e.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover your account and data!",
                        icon: "warning",
                        buttons: false,
                        dangerMode: false,
                    })
                    .then((willDelete) => {
                        window.location = "deactive.php";
                    });
            });
        });
    </script>
</head>
<?php include('..\component\navbar.php'); ?>
<link rel="stylesheet" href="..\css\update.css">
<?php include('..\component\dc.php') ?>
<div class="profile">

    <div class="container">
        </br></br>
        <div class="row">
            <div class="col-md-2 conn font">
                <?php
                $uname = $_COOKIE['uname'];
                if (isset($_POST['upload'])) {
                    $file_name = $_FILES['profilepic']['name'];
                    $file_type = $_FILES['profilepic']['type'];
                    $file_tmp_name = $_FILES['profilepic']['tmp_name'];
                    $file_error = $_FILES['profilepic']['error'];
                    $file_size = $_FILES['profilepic']['size'];
                    $uploadpath = "../images/profilepic/" . $file_name;

                    if (move_uploaded_file($file_tmp_name, $uploadpath)) {
                        $sql3 = "SELECT uname FROM profile_pic where uname = '$uname'";
                        $result2 = $conn->query($sql3);
                        if ($file_type == 'image/jpg' or $file_type == 'image/png' or $file_type == 'image/jpeg' or $file_type == 'image/gif' or $file_type == 'audio/mpeg') {
                            if ($result2->num_rows > 0) {
                                $sql1 = "UPDATE profile_pic SET path = '$uploadpath' where uname = '$uname'";
                                $conn->query($sql1);
                            }
                            $sql1 = "INSERT into profile_pic value('$uname','$uploadpath')";
                            $conn->query($sql1);
                        } else {
                ?>
                            <div class="alert alert-danger error">
                                Please! Upload a file in valid format.
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="alert alert-danger error">
                            Please! Upload a file in valid format.
                        </div>
                <?php
                    }
                }
                ?>
                <form action="?" method="POST" enctype="multipart/form-data">
                    <?php
                   
                    $sql2 = "SELECT * FROM profile_pic where uname = '$uname'";
                    $result1 = $conn->query($sql2);
                    if ($result1->num_rows > 0) {
                        while ($row1 = $result1->fetch_assoc()) {
                    ?>
                            <img class="img-thumbnail conn" src="<?php echo $row1["path"]; ?>" alt="Profile Photo" /><br>
                    <?php
                        }
                    }
                    ?>
                    <br>
                    <tr>
                        <td></td>
                        <td><input type="file" name="profilepic" class="bnm" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><br><input style="margin-top: 25%; width: 100%;color:#0c5460;background-color:#d1ecf1;" type="submit" name="upload" value="Upload Image" class="bnm" /></td>
                    </tr>
                </form>
                </br></br>
                <div class="deactive">
                    <form id="deactive" action="deactive.php" method="POST">
                        <td></td>
                        <td><input style="margin-top:0; width:100%;color:#721c24;background-color:#f8d7da;" type="submit" name="upload" value="Deactive Account" class="bnm" /></td>
                    </form>
                </div>

            </div>

            <div class="col-md-8 container">

                <?php
                $sql = "SELECT * FROM info_tbl where uname = '$uname'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="hdr">
                            <i class="fas fa-map-pin"></i> <?php echo $row["uname"]; ?>
                        </div>
                <?php
                    }
                }
                ?>
                <div class="text text-danger">
                    *If you want to update your profile than write all details! (It's not necessary to write all details different than before, write details as it is if you don't want to update that data!)
                </div>
                <div class="col-md-5">
                    <table style="margin-top:-14%;" class="table">

                        <form action="update_process.php" method="POST">
                            <div class="dta">
                                <tr>
                                    <td style="text-align: right;"><i class="fas fa-key"></i></td>
                                    <td><input type="password" name="pname" placeholder="Enter Your password"></td>
                                </tr>
                            </div>
                            </br>
                            <div class="dta">
                                <tr>
                                    <td style="text-align: right;"><i class="fas fa-envelope"></i></td>
                                    <td><input type="email" name="email" placeholder="Enter Your Email"></td>
                                </tr>
                            </div>
                            </br>
                            <div class="dta">
                                <tr>
                                    <td style="text-align: right;"><i class="fas fa-mobile"></i></td>
                                    <td><input type="mobile" name="mobile" placeholder="Enter Contact Number"></td>
                                </tr>
                            </div>
                            <tr>
                                <td></td>
                                <td>
                                    <select style="border-radius:30px;" name="gender" name="gender" class="form-control text-muted">
                                        <option selected value="-1">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input style="margin-top: 0; width:100%;color:#155724;background-color:#d4edda;" type="submit" name="upload" value="Save Profile" class="bnm" /></td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include('..\component\footer.php'); ?>