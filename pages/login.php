<head>
    <title>Login</title>
</head> 
<?php include('..\component\header.php');?>

<link rel="stylesheet" href="../css/login.css">
    <body>
        <div id="hdr">
            <a style="text-decoration: none;" href="../carhub.php">
                <div class="lg">
                    Car Hub <sup style="font-size:30px;">2.o</sup></div>
                </div>
            </a>
            <div class="lg1">
                <span>C</span>
                <span>a</span>
                <span>r</span>
                <span>H</span>
                <span>u</span>
                <span>b</span>
            </div>  
        </div>
        
        <div class="mn">
            <div class="su">
                <div class="nm">
                    Login
                </div>
                <form action="login_process.php" method="POST">
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error']==1){
                                ?>
                                    <div style="border-radius: 30px;" class="alert alert-danger pop">
                                        Invalid username / password
                                    </div>
                                <?php
                            }
                            if($_GET['error']==2){
                                ?>
                                    <div style="border-radius: 30px;" class="alert alert-danger pop">
                                        Login Not Found
                                    </div>
                                <?php
                            }
                        }
                    ?>    
                    <div class="fl">
                        <div class="unm">
                            <i class="fas fa-user"></i>
                            <input type="username" name="uname" placeholder="Enter Your Username">
                        </div>
                        <div class="pnm">  
                            <i class="fas fa-key"></i>              
                            <input type="password" name="pname" placeholder="Enter Your password">
                        </div>
                    <div class="bnm">
                        <input type="submit" value="Log In">
                    </div>
                </form>
                <hr>
                <form action="signup.php">
                    <div class="bnm1">
                        If you haven't an account!</br>
                        <button>Sign Up</button>
                    </div>
                </form>                
            </div>
        </div>
        <div class="footer">
            &copy;2020 CarHub All Rights Reserved 
        </div>
    </body>