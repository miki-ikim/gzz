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
    <title>Route List</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../styles/style_db.css">
    <link rel="stylesheet" href="../../styles/in.css">
    
    
    
</head>
    
 <style>
     td {
  background-color: #f2f2f2;
}'

</style>
<body>
    
            <!-- ======================= Cards ================== -->
            <!-- <div class="cardBox">
                
            </div> -->
    <!-- =============== Navigation ================ -->
    

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="">
                <a class='btn btn-secondary' href="addRoute.php">Create Routes</a>
                    <div class="">
                        
                    </div>

                    <table id="myTable" class="table table-bordered">
                        <thead >
                            <tr>
                                <th>Id</th>
                                <th>Origin</th>
                                <th>Through</th>
                                <th>Destinetion </th>
                                <th>Distance</th>
                                <th>Price</th>
                                
                                <th >Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                            <?php
        if ($rs->num_rows >0) {
            
            global $rid;
     while($row = $rs->fetch_assoc()) {
         $rid= $row["route_Id"];
        
        echo "
                
                <td data-label='name' name='rid'>" . $row["route_Id"]. "</td>
                
                <td data-label='age'> " . $row["Intial_station"]. " </td>

                <td data-label='sex'> " . $row["through"]. " </td>
            
              <td data-label='sex'> " . $row["Final_Station"]. " </td>
              <td data-label='sex'> " . $row["distance"]. " </td>
              <td data-label='sex'> " . $row["price"]. " </td>
              <td data-label='sex'> " .  $rid . " </td>
             
               <td data-label='sex'> <a  class='btn btn-secondary' href='../detail_pg/route_detail.php?msg=$rid'> Detail</a> </td>
               

             

              </tr>";

    }
    
}   

?>                     </tbody>
                    </table>
                </div>

   
            </div>
        
   
    <!-- =========== Scripts =========  -->
    <script src="../../assets/js/edit.js"></script>
    <script src="../../assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>