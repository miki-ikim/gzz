<?php  require '../../../libs/_admin-header.php';
        require '../../../libs/_getJSON.php';

        // table data
        $sql = "SELECT * FROM `route` ";
        $rs = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Route</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../styles/style_db.css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
</head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: var(--blue);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.containere {
    
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    /* margin-left: 20%; */
    width:50%;
    height: 100%;
    
}
#map { position:grid;left: 350px; top:600px; bottom:0px;height:550px ;width:660px; }
.geocoder {
    position:grid;left: 350px; top:290px;
}
</style>
<body>


<div class="containere">
        <form accept-charset="UTF-8" action="./locations_model.php" method="post" enctype="multipart/form-data" id="signupForm" >
            
            <h2 class="page-header">Create Route</h2>
            <!-- orgine  -->
            <label for="latitude">Origen</label>
            <input id="pac-input" class="form-control" type="text" name="origen" placeholder="Orgine">
            <br>
    
            <label for="latitude">lat</label>
            <input type="text" id="latitude" name="latitudeo" placeholder="Your lat..">

            <label for="longitude">lng</label>
            <input type="text" id="longitude" name="longitudeo" placeholder="Your lng..">
               <!-- through -->
               <label for="latitude">Through</label>
            <input id="pac-input" class="form-control" name="through"type="text" placeholder="Through">
            <br>
    
            <label for="latitude">lat</label>
            <input type="text" id="latitude" name="latitudet" placeholder="Your lat..">

            <label for="longitude">lng</label>
            <input type="text" id="longitude" name="longitudet" placeholder="Your lng..">
               <!-- Destinetion -->
               <label for="latitude">Destinetion</label>
            <input id="pac-input" class="form-control" name="destinetion"type="text" placeholder="Destinetion">
            <br>
    
            <label for="latitude">lat</label>
            <input type="text" id="latitude" name="latituded" placeholder="Your lat..">

            <label for="longitude">lng</label>
            <input type="text" id="longitude" name="longituded" placeholder="Your lng..">
            <!-- price -->
            <label for="latitude">Price</label>
            <input type="text" id="latitude" name="price" placeholder="0.0">

            <label for="longitude">distance</label>
            <input type="text" id="longitude" name="distance" placeholder="0.0">
            <br>

            <input type="submit">
        </form>
       

    </div>

    
   

    <script src="resource/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>





</body>

</html>