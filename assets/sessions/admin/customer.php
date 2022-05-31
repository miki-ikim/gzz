<?php  require '../../../libs/_admin-header.php';
        require '../../../libs/_getJSON.php';

        // table data
        $sql = "SELECT * FROM `customer` ";
        $rs = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../styles/style_db.css">
</head>
 
<body>
            <div class="details">
                <div class="">
                    <div class="">
                        
                    </div>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>full Name</th>
                                <th>phone</th>
                                
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody><?php
        if ($rs->num_rows >0) {
     while($row = $rs->fetch_assoc()) {
      $rid=$row["customer_id"];  
      echo "
        
                <tr>
                <td data-label='name'>" . $row["customer_id"]. "</td>
                
                <td data-label='age'> " . $row["customer_name"]. " </td>
            
              <td data-label='sex'> " . $row["customer_phone"]. " </td>
             
               <td data-label='sex'> <a class='btn btn-secondary' width='100%' href='../detail_pg/cust_detail.php?msg=$rid'>Detail</a> </td>
              
             

              </tr>";

    }
    
}   

?>                     </tbody>
                    </table>
                </div>

   
            </div>
        
   
    <!-- =========== Scripts =========  -->
    <script src="resource/js/main.js"></script>
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
    td = tr[i].getElementsByTagName("td")[1];
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
    <!-- ====== ionicons ======= -->
    
</body>

</html>