<?php
     require 'authr.php';
    require '_functions.php';

    $conn = db_connect();
    
    

    // Getting user details
    // $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM user WHERE user_id = '2'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result))
    {
        $user_fullname = $row["First_Name"];
        $user_name = $row["Last_Name"];
    }
?>

<!-- <header>
        <nav id="navbar">
            <ul>
                <li class="nav-item">
                    <?php 
                        echo $user_name;
                    ?>
                </li>
                <li class="nav-item">
                    <img class="adminDp" src="../assets/img/admin_pic.jpg" alt="Admin Profile Pic" width="22px" height="22px">
                </li>
            </ul>
        </nav>
    </header> -->
    <main id="cntainer">
         <div class="cntainer">
        <div class="navigation">
            <ul>
                <li>
                    <a >
                        <span class="icon">
                            <img src="../../img/logo.png" alt="GUZO" class="logo">
                        </span>
                        
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="customer.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="bus.php">
                        <span class="icon">
                            <ion-icon name="bus-outline"></ion-icon>
                        </span>
                        <span class="title">Bus</span>
                    </a>
                </li>

                <li>
                    <a href="router_list.php">
                        <span class="icon">
                            <ion-icon name="car-outline"></ion-icon>
                        </span>
                        <span class="title">Route</span>
                    </a>
                </li>

                <li>
                    <a href="bookind_list.php">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Booking</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Bank</span>
                    </a>
                </li>
                <li>
                    <a href="ad_profile.php">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>
           
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div >
                <div class="alert alert-info">
                    <strong>Info!</strong> Lets Move The City
                 </div>
                </div>

                <div class="logout">
                <button id="logout" class="btn-sm">
                            <a href="../../../libs/_logout.php">LOGOUT</a>
                        </button>
                </div>
            </div>
            <style>
        #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
    </style>
    <script src="../assets/js/main.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>