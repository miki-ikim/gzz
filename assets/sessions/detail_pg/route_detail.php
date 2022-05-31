<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add a default marker to a web map</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link rel="stylesheet" href="../../styles/style_sb.css">
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
     
     
    //  $busData = json_decode($busJson);
    // //  $busData = json_decode($$busJson);
     
     
 
    $msg=" ";
    
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

    <div  class="home" >
       <button><a  class='btn btn-secondary' href="../admin/Bus.php" >Back</a></button>
<h2>Route Info</h2><br>

 
<table class="table table-bordered">
                       

                        <?php
     
       $sql = "SELECT * FROM `route` WHERE `route_Id` = '$msg'";
       $rs = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($rs);
       
        
    
?> 
     <tbody>
     <tr>
                                <th>Id</th>
                                <td ><input name="Id" value="<?php echo $row['route_Id']; ?>"></td>
                                
                            </tr>
                            <tr>
                                <th>Orgen</th>
                                <td ><input name="Brand" value="<?php echo $row['Intial_station']; ?>"></td>
                                </tr>
                            <tr>
                                <th>Through</th>
                                <td ><input name="Plate Number  " value="<?php echo $row['through']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Destinetion</th>
                                <td ><input name="Plate Number  " value="<?php echo $row['Final_Station']; ?>"></td>
                            </tr>
                            <tr>
                                <th>Distance</th>
                                <td ><input name="Plate Number  " value="<?php echo $row['distance']; ?>"> <a class='btn btn-secondary'>Detail<a></td>
                               
                            </tr>

                            <tr>
                                <th>Price</th>
                                <td ><input name="Plate Number  " value="<?php echo $row['price']; ?>"> <a class='btn btn-secondary'>Detail<a></td>
                               
                            </tr>

                           
                       </tbody>
                            
                    </table>
            

<div class="container" style="width=50%;" id="map"></div>

<script> 
 mapboxgl.accessToken = 'pk.eyJ1IjoibWlraWlraW0iLCJhIjoiY2wzYnRremN2MDBsdDNqcnhvcDFhNTY5aCJ9.EoI7zg7Zcm1fCaDrR342Fg'; 
const map = new mapboxgl.Map({ 
container: 'map', 
style: 'mapbox://styles/mapbox/streets-v11', 
center: [38.801076,9.019405], 
zoom: 15

}); 
<?php
   echo "var long='$long'";
   echo "var lat='$lat';";
   
 ?>
console.log(long);
console.log(lat);

  
// Create a default Marker and add it to the map. 
const marker1 = new mapboxgl.Marker() 
.setLngLat([38.801076,9.019405]) 
.addTo(map); 
  
map.addControl(new mapboxgl.NavigationControl());

</script>
<script src="../../js/script_sb.js"></script>
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>     