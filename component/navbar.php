<?php include('header.php');?>
<link rel="stylesheet" href="../css/navbar.css">
<div id="hdr">
    <a style="text-decoration: none;" href="..\pages\home.php">
        <div class="lg1">
            Car Hub <sup style="font-size:30px;">2.o</sup>
        </div>
    </a>
    <div class="lg">
        <a href="..\pages\brands.php">
            <i class="fas fa-copyright"></i>Brands
        </a>
    </div>
    <div class="lg"> 
        <a href="..\pages\dealer.php">
           <i class="fas fa-car"></i>Dealer
        </a>
    </div>
    <div class="lg">
        <a href="..\pages\aboutus.php">
            <i class="fas fa-building"></i>About Us
        </a>
    </div>
    <div class="lg">
        <a href="..\pages\login.php">
            <i class="fas fa-sign-out-alt"></i>Log Out
        </a>
    </div>
    <div class="lg">
        <a class="drag" href="..\pages\profile.php" style="font-weight: bold;">
            <i class="fas fa-id-card"></i> Welcome <?php echo $_COOKIE['uname']; ?>
        </a>
    </div>
</div>