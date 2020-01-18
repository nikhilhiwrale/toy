<head>
            
            
            
           <style>
               
  #colorlib-hero .flexslider .slider-text > .slider-text-inner .btn {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: #fff;
    padding: 20px 20px 40px !important;
    border: none;
}*{padding:0;margin:0;}

body{
	font-family:Verdana, Geneva, sans-serif;
	font-size:18px;
	background-color:#CCC;
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:22px;
}



.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}
.carousel-inner{
  width:100%;
  max-height: 400px !important;
}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: white;
  color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 1px;
  margin-right: 16px;
  font-size: 17px;
  width:100%;
  margin-right: -10px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
   
  }
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: grey !important ;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: black !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: black !important;
}


input[type="text"] {
    height: auto !important;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: grey;
  color: white;
  
  text-align: center;
}
$shopping-cart-red: #DF0000;

.fa-stack[data-count]:after{
  position:absolute;
  right:0%;
  top:0%;
  content: attr(data-count);
  font-size:40%;
  padding:.6em;
  border-radius:999px;
  line-height:.75em;
  color: white;
  color:$shopping-cart-red;
  text-align:center;
  min-width:2em;
  font-weight:bold;
  background: white;
  border-style:solid;
}
.fa-circle {
  color:#DF0000;
}

.red-cart {
	color: #DF0000; background:white;
}

.badge {
  padding-left: 9px;
  padding-right: 9px;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}

.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
}
#lblCartCount {
    font-size: 12px;
    background: #ff0000;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -10px; 
}

img {
  width: 100%;
  height: auto;
  vertical-align: middle;
}

.pics_in_a_row {
  display: flex;
}

.img1 { flex: 1.3344; }
.img2 { flex: 1.3345; }
.img3 { flex: 0.7505; }
.img4 { flex: 1.5023; }
.img5 { flex: 0.75; }



/* Aaaand just some general styling. */

*, *:before, *:after {
  box-sizing: border-box;
}

body {
  background: rebeccapurple;
}

.container {
  background: white;
  margin: 0 auto;
  padding: 5%;
  width: 75%;
}

h1 {
  margin-top: 0;
}

h2 {
  font-weight: normal;
  font-size: 19px;
  margin-bottom: 30px;
}

.muted {
  font-style: italic;
  color: #666;
}

p, li {
  line-height: 1.5
}

li {
  margin-bottom: 7px;
}

p + p {
  margin-top: -7px;
}

code {
  background: #eee;
  padding: 2px 5px;
  font-size: 90%;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin: 0 2px;
}

.pics_in_a_row {
  margin: 25px 0;
}

.pics_in_a_row > div:not(:last-child) {
  margin-right: 2%;
}
.topnav {
    overflow: hidden;
    background-color: white !important;
}
input:focus, textarea:focus, select:focus{
        outline: none !important;
    }
      .input-icons i { 
            position: absolute; 
        } 
          
        .input-icons { 
            width: 100%; 
            margin-bottom: 10px; 
        } 
          
        .icon { 
            padding: 10px; 
            min-width: 40px; 
        } 
          
        .input-field { 
            width: 100%; 
            padding: 10px; 
            text-align: left; 
        } 
        .input-icons {
    width: 100%;
    margin-bottom: 1px;
    background-color: white;
}
.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 0px solid #ddd !important;
}
input:not([type]):focus:not([readonly]), input[type=text]:not(.browser-default):focus:not([readonly]), input[type=password]:not(.browser-default):focus:not([readonly]), input[type=email]:not(.browser-default):focus:not([readonly]), input[type=url]:not(.browser-default):focus:not([readonly]), input[type=time]:not(.browser-default):focus:not([readonly]), input[type=date]:not(.browser-default):focus:not([readonly]), input[type=datetime]:not(.browser-default):focus:not([readonly]), input[type=datetime-local]:not(.browser-default):focus:not([readonly]), input[type=tel]:not(.browser-default):focus:not([readonly]), input[type=number]:not(.browser-default):focus:not([readonly]), input[type=search]:not(.browser-default):focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
    border-bottom: none!important;
    -webkit-box-shadow: 0 0px 0 0 white !important;
    /* box-shadow: 0 1px 0 0 #26a69a; */
}
.searchContainer {
  display: inline-flex;
  flex: 1 1 300px;
  position: relative;
  border: 1px solid #ccc;
  border-radius: 5px;
  overflow: hidden;
}

.searchIcon {
  padding: 0.5rem;
}

.searchBox {
  border: 0;
  padding: 0.5rem 0.5rem 0.5rem 0;
  flex: 1;
}

.searchButton {
  background: #538AC5;
  border: 0;
  color: white;
  padding: 0.5rem;
  border-radius: 0;
}

.img-responsive {
  width: 100%;
  height: 250px !important;
  vertical-align: middle;
}

#fixed {
overflow: scroll;
-webkit-overflow-scrolling: touch;
}
body
{
overflow-x: hidden;
width:100%;
}

header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}
        </style>  
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
	
        <META name="viewport" content="initial-scale=1, user-scalable=no">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/normalize2.css">
        <link rel="stylesheet" href="css/main2.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Compiled and minified JavaScript -->
   

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
        <body >
	
	 <div class="colorlib-loader"></div>

        <div class="row" >

            <table class="table table-bordered">     
                <tr style="background-color:#020202;">
                    <th>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-target="slide-out" class="sidenav-trigger" style="margin-top:-10px;"> 
                            <i class="fa fa-bars fa-2x" style="color:white;margin-top: 9px !important"></i></a>
                            <strong>&nbsp; &nbsp; <font size="5" style="color:white;"><img src="images/logo5.png" style="width:28%;margin-top: -11px !important"></font></strong> 

<!----  &nbsp;&nbsp;<img src="logo.png" style="margin-top: 15px;"> !---->

 

                        <i class="fa" style="font-size:30px;float:right;margin-top: 8px;     margin-right: 15px;
                           color: white">&#xf07a;</i>
                        <span class='badge badge-warning' id='lblCartCount' style="float:right;margin-top: 8px; 
                              color: white"> 5 </span>
                              <a onclick="show();"><i class="fa fa-search searchIcon" style="font-size: 22px;float:right;margin-right: 30px;margin-top: 4px; color: white  "></i></a>

                        &nbsp; &nbsp; &nbsp;
                    </th>
                </tr>
                <th style="background-color:#020202; !important;display:none;" id="search">


                    <div class="col-sm-12" >
                        <div class="searchContainer" style="background-color:white;width:100%;     border: 2px solid yellowgreen;   padding: 1px;">
                            <i class="fa fa-search searchIcon" style="font-size: 20px;"></i>
                            <input class="searchBox" type="text" id="search" name="search" placeholder=" Search" style="height:26px;;margin-top: 1px;" onkeyup="hideDiv();">

                        </div>
                    </div>

                    <script>
                        function show(){
                            
                           $('#search').show();
                        }
                        
                        </script>


                </th>


            </table>
   
     

        
        
        
            
        
  <ul id="slide-out" class="sidenav">
    <li style="display:none;">
        <div class="user-view">
      <div class="background">
        <img class="circle" src="logo.png">
      </div>
      <a href="#user"></a> 
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div>
    </li>
    <br>
    <li><a href="#!"><font size="4"> <span class="glyphicon glyphicon-user"></span> &nbsp; Hello, Nikhil</a></font></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Home</a></li>
    <li><a class="waves-effect" href="#!">Shop</a></li>
     <li><a class="waves-effect" href="#!"> Today's Deals</a></li>
     <li><a class="waves-effect" href="#!"> Your Orders</a></li>
     <li><a class="waves-effect" href="#!">  Your Account</a></li>
      <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="http://192.168.0.105/colorlib-regform-8/">  Become a Seller</a></li>
      <li><a class="waves-effect" href="#!"> Customer Service</a></li>
  </ul>
      </div>
        <script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	
        
       

    
        <script src="js/main.js"></script>
    
        <script>
  
  function hideDiv(){
      
      var charcter=$('#search').val();
      
      var length=charcter.length;
     
      if(length>0){
        $('#hideMyDiv').hide();
     }
     else{
          $('#hideMyDiv').show();
     }
  }



  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
      
         </script>   