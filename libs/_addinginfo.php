<?php 
require 'authr.php';
require '_functions.php';
$conn = db_connect();

    
    // Should be validated client-side
    $brand = $_POST["brand"];
    $pnum = $_POST["plate_num"];
    

    $bus_exists = exist_buses($conn,$busid);
    $bus_added = false;

    if(!$bus_exists)
    {
        
        // Route is unique, proceed
        $sql ="INSERT INTO `bus`(`bus_id`, `brand`, `plate_number`,`bus_created`) VALUES ('$brand','$pnum',current_timestamp())";

        $result = mysqli_query($conn, $sql);

        if($result)
            $bus_added = true;
    }

    if($bus_added)
    {
        // Show success alert
        echo '<div class="my-0 alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successful!</strong> Bus Information Added
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        // Add the bus to seats table
       
    }
    else{
        
        // Show error alert
        echo '<div class="my-0 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Bus already exists
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }



?>