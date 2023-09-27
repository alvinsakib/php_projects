<?php 

    $view = "shop";
    include("template.php");
    //include("function.php");

    $std_firstname = $_POST['firstName'];
    $std_lastname = $_POST['lastName'];
    $std_email = $_POST['email'];
    $std_phone = $_POST['phoneNo'];
    $std_item = $_POST['itemNo'];
    $std_description = $_POST['description'];

    #database host, database user, database pass, database name
    #connection with database
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = "";
    $dbname = "project";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $connt = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if($conn->connect_error){
        die('Database Connection Error!'.$conn->connect_error);
    }
    else{
      $stmt = $conn->prepare("insert into order_info(firstName,lastName,email,mobileNo,itemNo,des) Values(?,?,?,?,?,?)");
      $stmt->bind_param("sssdis",$std_firstname,$std_lastname,$std_email,$std_phone,$std_item,$std_description); 
      $stmt->execute();
      $stmt->close();
      $conn->close();
    }
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <?php include_once("include/topnav.php"); ?>
    <div class="container my-4 p-4 shadow">
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>item</th>
                  <th>Description</th>
              </tr>
          </thead>
          <tbody>
              <?php

                $sql = "SELECT * FROM order_info;";
                $result = mysqli_query($connt, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0 ){
                  while($row = mysqli_fetch_assoc($result)){
               ?>
              <tr>
                <td><?php echo $row['order_id']; ?></td>
                <td><?php echo $row['firstName']; ?></td>
                <td><?php echo $row['itemNo']; ?></td>
                <td><?php echo $row['des']; ?></td>
              </tr>
              <?php
                  }
                } 
                $connt->close();
              ?>

          </tbody>
      </table>
    </div> 








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
