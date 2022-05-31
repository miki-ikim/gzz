<?php  
         require '../../../libs/_admin-header.php';
        require '../../../libs/_getJSON.php';
    //  Will have access to variables 
    //     1. routeJson
    //     2. customerJson
    //     3. seatJson
    //     4. busJson
    //     5. adminJson
    //     6. bookingJSON
    $routeData = json_decode($routeJson);
    $customerData = json_decode($customerJson);
    // $seatData = json_decode($seatJson);
    $busData = json_decode($busJson);
    // $adminData = json_decode($adminJson);
    $bookingData = json_decode($bookingJson);
    // $earningData = json_decode($earningJson);

    // echo "<pre>";
    // var_export(get_object_vars($adminData[0])["user_fullname"]);
    // var_export($adminData);
    // var_export($_SESSION);
    // echo "</pre>";

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../styles/style_db.css">
</head>
 
<body>
    
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers" ><?php  echo count($bookingData);?></div>
                        <div class="cardName">Total Booking</div>
                        <div class="cardName">Booking</div> 
                        <div  style="float:right;" ><a class="status inProgress" herf="bookind_list.php">View More</a></div> 
                    </div>

                    <div class="iconBx">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                <div>
                        <div class="numbers" ><?php  echo count($busData);?></div>
                        <div class="cardName">Total Bus</div>
                        <div class="cardName">Bus</div> 
                        <div  style="float:right;" ><a class="status inProgress" herf="../../resource/sessions/bus.php">View More</a></div> 
                    </div>

                    <div class="iconBx">
                        <ion-icon name="bus-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                <div>
                        <div class="numbers" ><?php  echo count($customerData);?></div>
                        <div class="cardName">Total Customers</div>
                        <div class="cardName">Customers</div> 
                        <div  style="float:right;" ><a class="status inProgress" herf="#">View More</a></div> 
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                <div>
                        <div class="numbers" ><?php  echo count($routeData);?></div>
                        <div class="cardName">Total Earn</div>
                        <div class="cardName">Earn</div> 
                        <div  style="float:right;" ><a class="status inProgress" herf="#">View More</a></div> 
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>

                
                </div>
            </div>
    <div> 
     
 </div>

 
<div class="containere" style="margin-top:250px;">
    <h2>System Feedback </h2>
    
</div>


        <!-- =========== Scripts =========  -->
        <script src="resource/js/main.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    </html>