<?php

    require '_functions.php';
    $conn = db_connect();
    session_start();
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
    <main id="container">
         <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="../../../resource/img/logo.png" alt="GUZO" class="logo">
                        </span>
                        <!-- PS C:\xamppp\htdocs\tri\resource> -->
                    </a>
                </li>

                <li>
                    <a href="../../../resource/sessions/c_s/home.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="../../../resource/sessions/c_s/map.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Map</span>
                    </a>
                </li>

               
                <li>
                    <a href="../../../resource/sessions/c_s/booking.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Booking</span>
                    </a>
                </li>

                <li>
                    <a href="../../../resource/sessions/c_s/bank.php">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Bank</span>
                    </a>
                </li>
                <li>
                    <a href="../../../resource/sessions/c_s/profile.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
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

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="uuser">
                <button id="logout" class="btn-sm">
                            <a href="../../../libs/_logout.php">LOGOUT</a>
                        </button>
                </div>
            </div>
