<div style="text-transform: uppercase;">
    <?php
        if(!isset($_COOKIE['uname'])){
            header('location:login.php?error=2');
        }
    ?>
</div>
<?php include('..\component\header.php');?>
<link rel="stylesheet" href="../css/home.css">
<?php include('..\component\navbar.php');?>
    <body>
        <div class="cars">
            <div class="ftr">
                <i class="fas fa-arrow-circle-right"></i>
                New Arrivals:-
            </div> 
            <div class="plt">
                <div class="nm">
                    MG Hector Plus
                </div>
                <img src="https://drive.google.com/uc?id=1dc7By0ORw2TRzooIwFry1wCzWlI0Y0Sa" alt="Hector Plus">
                <table>
                    <tr>
                        <th colspan="2">Hector Plus Key Specifications:-</th>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>₹ 13.49 Lakh onwards</td>
                    </tr>
                    <tr>
                        <td>Mileage</td>
                        <td>16.6 kmpl</td>
                    </tr>
                    <tr>
                        <td>Engine</td>
                        <td>1451 to 1956 cc</td>
                    </tr>	
                    <tr>
                        <td>Transmission</td>
                        <td>Manual and Automatic</td>
                    </tr>	
                    <tr>
                        <td>FuelType</td>
                        <td>Petrol and Diesel</td>    
                    </tr>	
                    <tr>
                        <td>Seating Capacity</td>
                        <td>6</td>
                    </tr>
                </table>
            </div>
            <div class="plt">
                <div class="nm">
                    Honda WR-V
                </div>
                <img src="https://drive.google.com/uc?id=1-15QWmpURjgXqPHJU8O9ltrY3lc_mBpH" alt="Honda WR-V">
                <table>
                    <tr>
                        <th colspan="2">Honda WR-V Key Specifications:-</th>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>₹ 8.62 Lakh onwards</td>
                    </tr>
                    <tr>
                        <td>Mileage</td>
                        <td>16.5 to 23.7 kmpl</td>
                    </tr>
                    <tr>
                        <td>Engine</td>
                        <td>1199 to 1498 cc</td>
                    </tr>	
                    <tr>
                        <td>Transmission</td>
                        <td>Manual</td>
                    </tr>	
                    <tr>
                        <td>FuelType</td>
                        <td>Petrol and Diesel</td>    
                    </tr>	
                    <tr>
                        <td>Seating Capacity</td>
                        <td>5</td>
                    </tr>
                </table>
            </div>
            <div class="plt">
                <div class="nm" style="font-size: 14px;">
                    Mercedes-Benz GLS
                </div>
                <img src="https://drive.google.com/uc?id=1TAOd7_n_aTnyUy1NUx-8kv5r-6ZS6_6m" alt="Mercedes-Benz GLS">
                <table>
                    <tr>
                        <th colspan="2">Mercedes-Benz GLS Key Specifications:-</th>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>₹ 99.9 Lakh onwards</td>
                    </tr>
                    <tr>
                        <td>Mileage</td>
                        <td>10.1 to 12.5 kmpl</td>
                    </tr>
                    <tr>
                        <td>Engine</td>
                        <td>2925 to 2999 cc</td>
                    </tr>	
                    <tr>
                        <td>Transmission</td>
                        <td style="font-size: 11px;">Automatic (Torque Converter)</td>
                    </tr>	
                    <tr>
                        <td>FuelType</td>
                        <td>Petrol and Diesel</td>    
                    </tr>	
                    <tr>
                        <td style="font-size: 10px; font-weight:bold;">Seating Capacity</td>
                        <td>7</td>
                    </tr>
                </table>
            </div>
            <div class="plt">
                <div class="nm">
                    BMW X6
                </div>
                <img src="https://drive.google.com/uc?id=1rdm6obm6wpbOPCpTtNGEGt26yfrHxCxK" alt="BMW X6">
                <table>
                    <tr>
                        <th colspan="2">BMW X6 Key Specifications:-</th>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>₹ 99.9 Lakh onwards</td>
                    </tr>
                    <tr>
                        <td>Mileage</td>
                        <td>10.1 to 12.5 kmpl</td>
                    </tr>
                    <tr>
                        <td>Engine</td>
                        <td>2925 to 2999 cc</td>
                    </tr>	
                    <tr>
                        <td>Transmission</td>
                        <td style="font-size: 11px;">Automatic (Torque Converter)</td>
                    </tr>	
                    <tr>
                        <td>FuelType</td>
                        <td>Petrol and Diesel</td>    
                    </tr>	
                    <tr>
                        <td style="font-size: 10px; font-weight:bold;">Seating Capacity</td>
                        <td>7</td>
                    </tr>
                </table>
            </div>
            <div class="plt">
                <div class="nm">
                    Lexus LC 500h
                </div>
                <img src="https://drive.google.com/uc?id=13l93dammUYvr_j5Jf7x4Pq0nrHwqVUGN" alt="Lexus LC 500h">
                <table>
                    <tr>
                        <th colspan="2">Lexus LC 500h Key Specifications:-</th>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>₹ 1.96 Crore onwards</td>
                    </tr>
                    <tr>
                        <td>Mileage</td>
                        <td>13 kmpl</td>
                    </tr>
                    <tr>
                        <td>Engine</td>
                        <td>3456 cc</td>
                    </tr>	
                    <tr>
                        <td>Transmission</td>
                        <td>Automatic</td>
                    </tr>	
                    <tr>
                        <td>FuelType</td>
                        <td>Hybrid (Electric + Petrol)</td>    
                    </tr>	
                    <tr>
                        <td style="font-size: 10px; font-weight:bold;">Seating Capacity</td>
                        <td>7</td>
                    </tr>
                </table>
            </div>
            <div class="plt">
                <div class="nm">
                    BMW M8
                </div>
                <img src="https://drive.google.com/uc?id=10PD2TTxQ-8U90DoCHHGvkPQp7V94kslL" alt="BMW M8">
                <table>
                    <tr>
                        <th colspan="2">BMW M8 Key Specifications:-</th>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>₹ 2.15 Crore onwards</td>
                    </tr>
                    <tr>
                        <td>Mileage</td>
                        <td>6.59 kmpl</td>
                    </tr>
                    <tr>
                        <td>Engine</td>
                        <td>3456 cc</td>
                    </tr>	
                    <tr>
                        <td>Transmission</td>
                        <td>4395 cc</td>
                    </tr>	
                    <tr>
                        <td>FuelType</td>
                        <td style="font-size: 11px;">Automatic (Torque Converter)</td>    
                    </tr>	
                    <tr>
                        <td>Petrol</td>
                        <td>4</td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
<?php include('..\component\footer.php');?>