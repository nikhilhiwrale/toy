<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">

        <link rel="icon" href="images/favicon.png">
        <title>Evone - eCommerce Mobile Template</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="packages/core/css/framework7.bundle.css">
        <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.css">
        <link rel="stylesheet" href="mystyle.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/adminLte.css">

        <style>
            .btn {
                display: inline-block;
                margin-bottom: 0;
                font-weight: normal;
                text-align: center;
                vertical-align: middle;
                touch-action: manipulation;
                cursor: pointer;
                background-image: none;
                border: 1px solid transparent;
                white-space: nowrap;
                height: 40px !important;
                width:100% !important;
                font-size: 14px;
                line-height: 2;
                margin-top: 0px;
                margin-left: 0px !important;
                border-radius: 4px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }  
            form.list ul .item-content .item-inner .item-input-wrap input{
                height: 40px !important;
            }


            .navbar {
                background: rgb(0, 170, 138);
            }

            .external link{

                margin-left: 40px !important;
            }

        </style>
    </head>


</head>
<body >
    <style>
        .avatar {
            vertical-align: left;
            width: 250px !important;
            height: 250px !important;
            border-radius: 50% !important;
        }


        .small-box {
            border-radius: .25rem;
            box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
            display: block;
            margin-bottom: 20px;
            position: relative;
        }
        .small-box>.inner {
            padding: 10px;
        }

    </style>


<body>
    <div id="app">

        <div class="view view-main" data-url="/">

            <div class="page">
                <div class="navbar navbar-home" style="margin-top: -3px !important;">
                    <div class="navbar-inner">
                        <div class="left">
                            <a href="#" class="panel-open" data-panel="left">
                                <i class="fa fa-bars" style="color:white;"></i>
                            </a>
                        </div>
                        <div class="title">
                            <h2 style="font-family:Cookie;font-size:26px; color: white"> <center>Rent-On <center></h2>
                                        </div>
                                        <a href="#tab-search" class="tab-link" style="display:none;">
                                            <i class="fa fa-search" style="color:white;"></i>

                                        </a>

                                        <div class="">
                                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                                <i class="far fa-bell"></i>
                                                <span class="badge badge-warning navbar-badge">2</span>
                                            </a>
                                            <a href="/notification/" style="display:none;">
                                                <i class="fa fa-cart-arrow-down" style="color:white;"></i>

                                            </a>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="page-content">

                                            <div class="panel-backdrop"></div>
                                            <div class="panel panel-left panel-cover sidebar">
                                                <div class="list accordion-list">


                                                    <ul id="slide-out" class="sidenav">


                                                         <li style="background: rgb(0, 170, 138) !important;"><a href="#!">
                                            <div class="item-inner">
                                                <div class="item-title" style="margin-bottom: -8px;"> <font style="color:white;font-size:20px;"> &nbsp; &nbsp;&nbsp;
                                                    <i class="fa fa-user-circle" style="color:white; font-size:30px;"></i> &nbsp;Hello, Nikhil      &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <a class="panel-close"> <i class="fa fa-times" style="color:white;"></i> </a>  </font></div></a>
                                        </div>
                                           
                                    </li>
                                    




                                                        <li><a href="circle.php" class="external link" style="margin-left: 40px !important; color:black">
                                                                <div class="">
                                                                    <i class="fa fa-home"></i>
                                                                </div>
                                                                <div class="item-inner">
                                                                    <div class="item-title"> &nbsp;Dashboard</div>

                                                                </div>
                                                            </a></li>

                                                        <li class="accordion-item">
                                                            <a href="#" class="item-link item-content">
                                                                
                                                                <div class="item-inner" style="margin-left:25px;">
                                                                    <div class="item-title">Catalog Master</div>
                                                                </div>
                                                            </a>
                                                            <div class="accordion-item-content" style="" aria-hidden="true">

                                                                <!-- divider -->
                                                                <div class="divider-space-text"></div>
                                                                <!-- end divider -->

                                                                
                                                                <a href="/all-categories/" class="panel-close"><i class="fas fa-layer-group"></i>Categories</a>
                                                                <a href="/wishlist/" class="panel-close"><i class="fas fa-heart"></i>Brand</a>
                                                             

                                                                <!-- divider -->
                                                                <div class="divider-space-text"></div>
                                                                <!-- end divider -->

                                                            </div>
                                                        </li>
                                                        
                                                        <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                <div class="item-inner">
                                                                    <div class="item-title">Rent Master</div>

                                                                </div>
                                                            </a></li>
                                                        <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                <div class="item-inner">
                                                                    <div class="item-title">Reviews</div>

                                                                </div>
                                                            </a></li>

                                                        <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                <div class="item-inner">
                                                                    <div class="item-title">Your Account</div>

                                                                </div>
                                                            </a></li>
                                                        <!---<li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                <div class="item-inner">
                                                                    <div class="item-title">Become a Seller</div>

                                                                </div>
                                                            </a></li> !--->
                                                        <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                                                <div class="item-inner">
                                                                    <div class="item-title">Customer Support</div>

                                                                </div>
                                                            </a></li>

                                                    </ul> 
                                                </div>
                                            </div>
                                            <!-- product details -->
                                            <section class="content">
                                                <div class="container-fluid">
                                                    <!-- Small boxes (Stat box) -->
                                                    <div class="row">
                                                        <div class="col-lg-3 col-6">
                                                            <!-- small box -->
                                                            <div class="small-box bg-info">
                                                                <div class="inner">
                                                                    <h3>15 K</h3>

                                                                    <p>Total Orders</p>
                                                                </div>
                                                                <div class="icon">
                                                                    <i class="ion ion-bag"></i>
                                                                </div>
                                                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!-- ./col -->
                                                        <div class="col-lg-3 col-6">
                                                            <!-- small box -->
                                                            <div class="small-box bg-success">
                                                                <div class="inner">
                                                                    <h3>2.5 M</h3>

                                                                    <p>Total Sales</p>
                                                                </div>
                                                                <div class="icon">
                                                                    <i class="ion ion-stats-bars"></i>
                                                                </div>
                                                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!-- ./col -->
                                                        <div class="col-lg-3 col-6">
                                                            <!-- small box -->
                                                            <div class="small-box bg-warning">
                                                                <div class="inner">
                                                                    <h3>10K</h3>

                                                                    <p>Total Customers</p>
                                                                </div>
                                                                <div class="icon">
                                                                    <i class="ion ion-person-add"></i>
                                                                </div>
                                                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!-- ./col -->
                                                        <div class="col-lg-3 col-6">
                                                            <!-- small box -->
                                                            <div class="small-box bg-danger">
                                                                <div class="inner">
                                                                    <h3>05</h3>

                                                                    <p>Orders Today</p>
                                                                </div>
                                                                <div class="icon">
                                                                    <i class="ion ion-pie-graph"></i>
                                                                </div>
                                                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!-- ./col -->
                                                    </div>
                                                    <!-- /.row -->
                                                    <!-- Main row -->

                                                    <!-- /.row (main row) -->
                                                </div><!-- /.container-fluid -->
                                                <div class="card">
                                                    <div class="card-header border-transparent">
                                                        <h3 class="card-title">Latest Orders</h3>

                                                        <div class="card-tools" style="display:none;">
                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <style>
                                                        th{
                                                            font-size: 15px !important;

                                                        }td{
                                                            font-size: 15px !important;

                                                        }
                                                    </style>
                                                    <div class="card-body p-0">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Order ID</th>
                                                                        <th>Item</th>
                                                                        <th>Status</th>
                                                                        <th>Date</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a href="invoice.html" class="external link">OR9842</a></td>
                                                                        <td>Manyar cloth</td>
                                                                        <td><span class="badge badge-success">Shipped</span></td>
                                                                        <td>
                                                                            18/12/19
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="invoice.html" style="external link">OR1848</a></td>
                                                                        <td>Armani Suit</td>
                                                                        <td><span class="badge badge-warning">Pending</span></td>
                                                                        <td>
                                                                            18/12/19
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- /.table-responsive -->
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="card-footer clearfix">

                                                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary btn-flat float-right">View All Orders</a>
                                                    </div>
                                                    <!-- /.card-footer -->
                                                </div>
                                            </section>
                                            <center>
                                                <h2>Fashion For </h2>
                                                <br>
                                                <a href="Form.php?category=male" class="external link">  <img src="Images/item-6.jpg" alt="Avatar" class="avatar"> </a>
                                                &nbsp; &nbsp; &nbsp;
                                                <br>
                                                <br><a href="Form.php?category=male" class="link external"><img src="Images/item-16.jpg" alt="Avatar" class="avatar"></a>


                                                <h4> <strong>Click on image to get started </strong></h4>
                                            </center>
                                            <!-- end action product details -->
                                        </div>

                                        </div>
                                        </div>
                                        </div>
                                        <script src="js/jquery.min.js"></script>
                                        <script src="packages/core/js/framework7.bundle.min.js"></script>
                                        <script src="js/routes.js">

                                        </script>
                                        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
                                        <script>
                                            WebFont.load({
                                                google: {
                                                    families: ["Cookie:regular"]
                                                }
                                            });

                                        </script>
                                        <script src="js/app.js"></script>



                                        <script src="js/plugins.js"></script>
                                        <script src="js/main.js"></script>
                                        <script src="js/main2.js"></script>
                                        </body>


                                        <script>
                                                                                                $('.enter_link').click(function () {
                                                                                                    $(this).parent().fadeOut(500);
                                                                                                });

                                        </script>







                                        </body>
                                        </html>
