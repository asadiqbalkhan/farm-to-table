<!DOCTYPE html>
<?php
include "connection.php";
session_start();

if(!(isset($_SESSION['login']) && $_SESSION['login'] != '')){
                header ("Location: login.php");
}
            ?>
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
                                    <a href="logout.php"><i class="material-icons">lock</i> Logout</a>
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
                                    <li><a href="inventory.php"> Inventory</a></li>
                                    <li><a href="addproducts.php">Add Product</a></li>
                                </ul>
                            </li>
                            <li><a><i class="material-icons">text_format</i> Sales<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="sales.php">Sales info</a></li>
                                    <li><a href="addsales.php">Add sales </a></li>
                                </ul>
                            </li>
                            <li><a><i class="material-icons">business</i>Customers<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="customers.php">
                                    Customers</a></li>
                                    <li><a href="addcustomers.php">Add Customers</a></li>
                                </ul>
                            </li>
                            <li><a><i class="material-icons">business</i>Users<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="users.php">User list</a></li>
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
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <div class="header-title">
                            <h1> Dashboard</h1>
                            <small> Dashboard features</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="index.php">Dashboard</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-primary">
                                    <div class="panel-body card-item panel-refresh">
                                        <a class="refresh" href="#">
                                            <span class="fa fa-refresh"></span>
                                        </a>
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer" data-to="2" data-speed="1500">0</div>
                                        <div class="cardbox-icon">
                                            <i class="material-icons">directions_run</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Total Vendors</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-success">
                                    <div class="panel-body card-item panel-refresh">
                                        <a class="refresh" href="#">
                                            <span class="fa fa-refresh"></span>
                                        </a>
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer" data-to="5" data-speed="1500">0</div>
                                        <div class="cardbox-icon">
                                            <i class="material-icons">supervisor_account</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Customers</h4>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-warning">
                                    <div class="panel-body card-item panel-refresh">
                                        <a class="refresh2" href="#">
                                            <span class="fa fa-refresh"></span>
                                        </a>
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer" data-to="5" data-speed="1500">0</div>
                                        <div class="cardbox-icon">
                                            <i class="material-icons">visibility</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Total Products</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-dark">
                                    <div class="panel-body card-item panel-refresh">
                                        <a class="refresh" href="#">
                                            <span class="fa fa-refresh"></span>
                                        </a>
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer" data-to="0" data-speed="1500">0</div>
                                        <div class="cardbox-icon">
                                            <i class="material-icons">email</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Total Sales</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./counter Number -->
                            <!-- chart -->
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bar-chart fa-lg"></i>
                                        <h2>Bar Chart</h2>
                                    </div>
                                    <div class="card-content">
                                        <canvas id="lineChart" height="150"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- ./chart -->
                            <!-- Calender -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-calendar-check-o fa-lg"></i>
                                        <h2>Calender</h2>
                                    </div>
                                    <div class="card-content">
                                        <!-- monthly calender -->
                                        <div class="monthly_calender">
                                            <div class="monthly" id="m_calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Calender -->
                            <!-- ./Table content -->
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
        <!-- SlimScroll -->
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- m-custom-scrollbar -->
        <script src="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>
        <!-- custom js -->
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins
             =====================================================================-->
        <!-- Start Page Lavel Plugins
             =====================================================================-->
        <!-- Sparkline js -->
        <script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- ChartJs JavaScript -->
        <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>

        <!-- End Page Lavel Plugins
             =====================================================================-->
        <!-- Start Theme label Script
             =====================================================================-->
        <!-- main js-->
        <script src="assets/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script
             =====================================================================-->
        <script>
            $(document).ready(function () {
                "use strict";
                // Message
                function slscroll() {
                    $('.chat_list , .activity-list , .message_inner').slimScroll({
                        size: '3px',
                        height: '320px',
                        allowPageScroll: true,
                        railVisible: true
                    });
                }
                slscroll();
                function chatscroll() {
                    $('.chat_list').slimScroll({
                        size: '3px',
                        height: '290px'
                    });
                }
                chatscroll();

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });

                //panel refresh
                $.fn.refreshMe = function (opts) {
                    var $this = this,
                            defaults = {
                                ms: 1500,
                                started: function () {},
                                completed: function () {}
                            },
                            settings = $.extend(defaults, opts);

                    var panelToRefresh = $this.parents('.panel').find('.refresh-container');
                    var dataToRefresh = $this.parents('.panel').find('.refresh-data');
                    var ms = settings.ms;
                    var started = settings.started;		//function before timeout
                    var completed = settings.completed;	//function after timeout

                    $this.click(function () {
                        $this.addClass("fa-spin");
                        panelToRefresh.show();
                        started(dataToRefresh);
                        setTimeout(function () {
                            completed(dataToRefresh);
                            panelToRefresh.fadeOut(800);
                            $this.removeClass("fa-spin");
                        }, ms);
                        return false;
                    });
                };

                $(document).ready(function () {
                    $('.refresh, .refresh2').refreshMe({
                        started: function (ele) {
                            ele.html("Getting new data..");
                        },
                        completed: function (ele) {
                            ele.html("This is the new data after refresh..");
                        }
                    });
                });

                //line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [{
                                label: "Total income",
                                borderColor: "#73879C",
                                borderWidth: "1",
                                backgroundColor: "#73879C",
                                data: [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]
                            }, {
                                label: "Total Expense",
                                borderColor: "rgba(26, 187, 156, 0.64)",
                                borderWidth: "1",
                                backgroundColor: "rgba(26, 187, 156, 0.64)",
                                pointHighlightStroke: "rgba(26, 187, 156, 0.64)",
                                data: [16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]
                            }]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });

            });
        </script>
    </body>
</html>
