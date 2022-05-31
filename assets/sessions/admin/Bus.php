<?php  require '../../../libs/_admin-header.php';
        require '../../../libs/_getJSON.php';

        // table data
        $sql = "SELECT * FROM `bus` ";
        $rs = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style_db.css">
    <link rel="stylesheet" href="../../styles/modal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Bus List</title>
    <!-- ======= Styles ====== -->
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
</head>
 
<body>
    
            <!-- ======================= Cards ================== -->
            <!-- <div class="cardBox">
                
            </div> -->
    <!-- =============== Navigation ================ -->
    

            <!-- ================ Order Details List ================= -->

            <div class="details">
            <div class="">
               
            <button type="button" class="class='btn btn-secondary'"  data-toggle="modal" data-target="#myModal">Create Bus</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
      <div class="containere">
        <form accept-charset="UTF-8" action="../../../libs/_addinginfo.php" method="post" enctype="multipart/form-data" id="signupForm" >
            
            <h2 class="page-header">Create Bus</h2>

            <label for="latitude">Brand</label>
            <input id="pac-input" class="form-control" type="text" name="brand" placeholder="Ex: Anbesa">
            <br>
    
            <label for="latitude">Plate number</label>
            <input type="text" id="latitude" name="plate_num"  placeholder="Ex: 12112">
            
            <input type="submit" value="create">
        </form>
       

    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Plate number</td>
                                <td>Driver id</td>
                                <td>Route id</td>
                                <td>Bus Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody><?php
        if ($rs->num_rows >0) {
     while($row = $rs->fetch_assoc()) {
        $rid= $row["bus_id"];
        echo "
                <tr>
                <td data-label='name'>" . $row["bus_id"]. "</td>
                
                <td data-label='age'> " . $row["plate_number"]. " </td>
            
              <td data-label='sex'> " . $row["Driver_Id"]. " </td>
              <td data-label='sex'> " . $row["route_id"]. " </td>
              <td data-label='sex'>" . $row["bus_status"]. "</td>

               <td data-label='sex'> <a class='btn btn-secondary' href='../detail_pg/bus_detail.php?msg=$rid'>Detail</a> </td>
              
             

              </tr>";

    }
    
}   

?>                     </tbody>
                    </table>
                </div>
<script> 
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
                 <script src="resource/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</
</body>

</html>