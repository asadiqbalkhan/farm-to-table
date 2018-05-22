<?php
 include_once("connection.php");
 session_start();
 if(!(isset($_SESSION['login']) && $_SESSION['login'] != '')){
                 header ("Location: login.php");
             }
?>
<!DOCTYPE html>

<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Farmable Admin panel</title>
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/dist/img/ico/fav.png">
        <!-- Start Global Mandatory Style
             =====================================================================-->
        <!-- jquery-ui css -->
        <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <!-- materialize css -->
        <link href="assets/plugins/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap css-->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Animation Css -->
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" />
        <!-- Material Icons CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Monthly css -->
        <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css" />
        <!-- simplebar scroll css -->
        <link href="assets/plugins/simplebar/dist/simplebar.css" rel="stylesheet" type="text/css" />
        <!-- mCustomScrollbar css -->
        <link href="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
        <!-- custom CSS -->
        <link href="assets/dist/css/stylematerial.css" rel="stylesheet">
    </head>

    <body>
        <div id="wrapper">
            <!--navbar top-->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <!-- Logo -->
                <a class="navbar-brand pull-left" href="index.php">
                    <br>
                    <h2>Farmable</h2>
                </a>
                <a id="menu-toggle">
                    <i class="material-icons">apps</i>
                </a>
                <div class="navbar-custom-menu hidden-xs">

                    <ul class="navbar navbar-right">
                        <!--Notification-->

                        <!--user profile-->
                        <li class="dropdown">
                            <a class='dropdown-button user-pro' href='#' data-activates='dropdown-user'>
                                <img src="assets/dist/img/avatar5.png" class="img-circle" height="45" width="50" alt="User Image">
                            </a>
                            <ul id='dropdown-user' class='dropdown-content'>
                                <li>
                                    <a href="#!"><i class="material-icons">perm_identity</i> View profile</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="material-icons">settings</i> Settings</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="material-icons">lock</i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <!-- /.user profile -->
                    </ul>
                </div>
            </nav>
            <!-- Sidebar -->
            <div id="sidebar-wrapper" class="waves-effect" data-simplebar>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="list-header">Main Navigation ---</li>
                            <li class="active-link"><a href="index.php"><i class="material-icons">dashboard</i>Dashboard</a></li>
                            <li>
                                <a><i class="material-icons"></i>Products<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="inventory.php?flag=0"> Inventory</a></li>
                                    <li><a href="addproducts.php?flag=0">Add Product</a></li>
                                </ul>
                            </li>
                            <li><a><i class="material-icons">text_format</i> Sales<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="sales.php?flag=0">Sales info</a></li>
                                    <li><a href="addsales.php">Add sales </a></li>
                                </ul>
                            </li>
                            <li><a><i class="material-icons">business</i>Customers<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="customers.php?flag=0">
                                    Customers</a></li>
                                    <li><a href="addcustomers.php">Add Customers</a></li>
                                </ul>
                            </li>
                            <li><a><i class="material-icons">business</i>Users<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="users.php?flag=0">User list</a></li>
                                    <li><a href="addusers.php">Add users</a></li>
                                </ul>
                            </li>


                            <li class="side-last"></li>
                        </ul>
                        <!-- ./sidebar-nav -->
                    </div>
                    <!-- ./sidebar -->
                </div>
                <!-- ./sidebar-nav -->
            </div>
            <!-- ./sidebar-wrapper -->
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-table"></i>
                        </div>
                        <div class="header-title">
                            <h1>Sales</h1>

                            <ul class="link hidden-xs">
                                <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="addsales.php">Add sales</a></li>
                            </ul>
                        </div>
                    </section>
                            <!-- bootstrap table -->
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-table fa-lg"></i>
                                        <h2>Edit sales</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="table-responsive">
                                          <!-- Form to edit users -->
                                          <!-- Send the edited form to updateusers.php -->
                                        <form action="updatesales.php?id=<?php echo $_GET['id']; ?>" name="myform" id="myForm" method="POST">
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <?php
                                              $id = $_GET['id'];

                                              // Select user Id from the database
                                              $query1 = "Select * FROM sales WHERE salesID = $id ";

                                              $result1 = mysqli_query($connection, $query1);
                                                while ($row1 = mysqli_fetch_assoc($result1))
                                                      { ?>
                                                      <label for="inputState">Item Category</label>
                                                        <select id="itemCategory" name="itemCategory" class="form-control" value="<?php echo $row1["itemCategory"];?>">
                                                          <option selected>Item Category</option>
                                                          <option>Vegetable</option>
                                                          <option>Fruit</option>
                                                          <option>Meat</option>
                                                        </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label for="item_name">Item Name</label>
                                              <input type="text" class="form-control" id="itemName" name="itemName" value="<?php echo $row1["itemName"];?>" placeholder="Enter Item Name">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="sale_quantity">Item Quantity</label>
                                            <input type="number" class="form-control" id="itemQuantity" name="itemQuantity" value="0" min="0" max="100000" value="<?php echo $row1["itemQuantity"];?>">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="sale_date">Sale Date</label>
                                            <input type="date" class="form-control" id="date" name="date" placeholder="Enter the date of the sale" value="<?php echo $row1["date"];?>">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="sale_time">Transaction Time</label>
                                            <input type="time" class="form-control" id="time" name="time" value="<?php echo $row1["time"];?>">
                                          </div>

                                          <?php } ?>
                                          <br>
                                          <br>
                                          <input type="button" onclick="myFunction()" class="btn btn-warning" value="Edit">
                                          <input type="button" onclick="cancelFunction()" class="btn btn-warning" value="Cancel">
                                        </form>
                                        <!-- Form to add products ends here -->
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ./data table -->
                        </div>
                        <!-- ./row -->
                    </div>
                    <!-- ./cotainer -->

                </div>
                <!-- ./page-content -->
            </div>
            <!-- ./page-content-wrapper -->
        </div>
        <!-- ./page-wrapper -->
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-position">
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-teal">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Start Core Plugins
             =====================================================================-->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- materialize  -->
        <script src="assets/plugins/materialize/js/materialize.min.js" type="text/javascript"></script>
        <!-- metismenu-master -->
        <script src="assets/plugins/metismenu-master/dist/metisMenu.min.js" type="text/javascript"></script>
        <!-- m-custom-scrollbar -->
        <script src="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>
        <!-- dataTables js -->
        <script src="assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
        <!-- custom js -->
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins-->
        <!-- Start Theme label Script
             =====================================================================-->
        <!-- main js -->
        <script src="assets/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script
             =====================================================================-->
        <script>
             "use strict";
            $(document).ready(function () {
                function dtable() {
                    $('#dataTableExample1').DataTable({
                        "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                        "lengthMenu": [
                            [6, 25, 50, -1],
                            [6, 25, 50, "All"]
                        ],
                        "iDisplayLength": 6
                    });
                }
                return (dtable());
            });
        </script>
    </body>

</html>
<script>
  function myFunction() {
    document.getElementById("myForm").submit();
}
function cancelFunction() {
  document.location.href = 'sales.php';
}
</script>
