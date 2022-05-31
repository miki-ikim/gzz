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
    <title>Admin Profile</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../styles/style_db.css">
</head>
 
<body>
    
  
      <?php
      // echo "miki";
      // echo $_SESSION["user_id"]; 
      $id=$_SESSION["user_id"];
      $sql = "SELECT * FROM `user` WHERE `User_id`='$id'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      
    
    ?>
    <form class="card-body">
    <div class="mb-3 mt-3">
    <label class="form-label">Username</label>
    <input  name="username" value="<?php echo $row['First_Name']; ?>">
    <input name="username" value="<?php echo $row['Last_Name'] ?>">
</div>
<div class="mb-3 mt-3">
    <br><label>Phone</label>
    <input name="phone" value="<?php echo $row['Phone_number'];?>"> 
</div>
    <div class="mb-3">
    <br><label>Email</label>
    <input name="email" value="<?php echo $row['email'];?>">    
    <div>                                         
    <br><label >Adress</label>
    <input name="ad" value="<?php echo $row['Address'];?>">        
    
    <button class="btn btn-success">Update</button>
    </form>
    
    

    <script src="resource/js/main.js"></script>

  
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>