<head>
    <title>Sign Up</title>
</head>
<?php include('..\component\header.php');?>
<link rel="stylesheet" href="../css/signup.css">
    <body>
        <div id="hdr">
            <a style="text-decoration: none;" href="../carhub.php">
                <div class="lg">
                    Car Hub <sup style="font-size:30px;">2.o</sup>
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
                    Sign Up
                </div>
                <form action="signup_process.php" method="POST">
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error']==1){
                                ?>
                                    <div style="border-radius: 30px;" class="alert alert-danger pop" role="alert">
                                        Fill The Detail
                                    </div>
                                <?php
                            }
                            if($_GET['error']==2){
                                ?>
                                    <div style="border-radius: 30px;" class="alert alert-danger pop" role="alert">
                                        Please! Choose another Username. Username is taken.
                                    </div>
                                <?php
                            }
                        }
                    ?>
                    <div class="fl">
                        <div class="unm">
                            <i class="fas fa-user"></i>
                            
                            <input type="username" name="uname" placeholder="Enter Your Username" >
                        </div>
                        <div class="pnm">  
                            <i class="fas fa-key"></i>  
                            
                            <input type="password" name="pname" placeholder="Enter Your password" >
                        </div>
                        <div class="enm">    
                            <i class="fas fa-envelope"></i> 
                                       
                            <input type="email" name="email" placeholder="Enter Your Email" >
                        </div>
                        <div class="mnm">    
                            <i class="fas fa-mobile"></i>
                                        
                            <input type="mobile" name="mobile" placeholder="Enter Contact Number" >
                        </div>
                        <select style="border-radius:30px;" name="gender" name="gender" class="form-control text-muted" >
                            <option selected value="-1">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select> 
                    </div>
                    <div class="bnm">
                        <input type="submit" value="Sign Up">
                    </div>
                </form>
                <hr>
                <form action="login.php">
                <div class="bnm1">
                    If you have an account!</br>
                    <button>Login</button>
                </div>                
                </form>
            </div>
        </div>
        <div class="footer">
            &copy;2020 CarHub All Rights Reserved 
        </div>
    </body>
</html>
