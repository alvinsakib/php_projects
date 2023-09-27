<?php 
    $view = "shop";
    include("template.php");
?>
 <?php
//   include("function.php");

//   $objCrudAdmin = new projectApp();
  
//   if(isset($_POST['add_info'])) {
//     $return_msg = $objCrudAdmin->add_data($_POST);
//   }

//   $students =  $objCrudAdmin->display_data();
  
//   if(isset($_GET['status'])) {
//     if($_GET['status'] = 'delete') {
//       $delete_id = $_GET['id'];
//       $display_msg = $objCrudAdmin->delete_data($delete_id);
//     }
//   }
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Order Form</title>
        <link href="css/custom.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="head">
            <div class="margin">
                <h3>
                    Order
                </h3>
                <h4>
                For Order, We recommanded at least 10 PM in Advance.
                </h4>
            </div>

        </div>
        <div>
            <form class="form order-form container my-4 p-4 shadow" action="show.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="John" name="firstName">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="LastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Nake" name="lastName">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phoneNo">Phone No</label>
                        <input type="digit" class="form-control" id="phoneNo" placeholder="+880" name="phoneNo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="itemNo">No of Items</label>
                    <input type="digit" class="form-control" id="itemNo" placeholder="5" name="itemNo">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="5 kg Apple, 2 kg Grape, 1 kg Orange" name="description">
                </div>
                <!-- <div class="btn btn-primary add_info">
                    Place Order
                </div> -->
                <input type="submit" value="Place Order" name="add_info" id="" class="form-control bg-warning">
            </form>
        </div>

        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Project Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
