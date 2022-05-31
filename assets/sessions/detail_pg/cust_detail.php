<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add a default marker to a web map</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link rel="stylesheet" href="../../../resource/css/style_db.css">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>


<style>
body { margin: 0; padding: 0; }
#map { width: 25%; height: 200px; }
</style>
</head>
    <style>
table, th, td {
  border:1px solid black;
}
       
        
</style >
    <?php 
     require '../../../libs/_new-header.php'; 
     require '../../../libs/_getJSON.php';
    $msg=" ";
    //  require '../../../libs/_functions.php';
    // $conn = db_connect();
    //session_Start();
    
    global $rid;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        $name1= $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }}
        
        @$msg = $_REQUEST['msg'];
                // echo $msg;
    ?> 
     
    
<body>
    <div >
<h2>Personal Info</h2><br>

<table class="table table-bordered">
                       

                        <?php
     
       $sql = "SELECT * FROM `customer` WHERE `customer_id` = '$msg'";
       $rs = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($rs);
     ?>
     <tbody>
     <tr>
                                <th>Id</th>
                                <td ><input name="username" value="<?php echo $row['customer_id']; ?>"></td>
                                
                            </tr>
                            <tr>
                                <th>Full name</th>
                                <td ><input name="username" value="<?php echo $row['customer_name']; ?>"></td>
                                </tr>
                            <tr>
                                <th>Phone</th>
                                <td ><input name="username" value="<?php echo $row['customer_phone']; ?>"></td>
                            </tr>
                           
                       </tbody>
                    </table>
            
    <h2>Booking Info</h2><br>

                    <table>
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>full Name</td>
                                <td>phone</td>
                                
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody><?php
        if ($rs->num_rows >0) {
     while($row = $rs->fetch_assoc()) {
        echo "
                <tr>
                <td data-label='name'>" . $row["customer_id"]. "</td>
                
                <td data-label='age'> " . $row["customer_name"]. " </td>
            
              <td data-label='sex'> " . $row["customer_phone"]. " </td>
             
               <td data-label='sex'> <a href='detail_pg/route_detail.php'>Detail</a> </td>
              
             

              </tr>";

    }
    
}   

?>                     </tbody>
                    </table>
            
    
<script src="resource/js/main.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>     