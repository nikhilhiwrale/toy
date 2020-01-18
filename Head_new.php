
<style>
    
   
    .block{
        
        padding-left: 0px !important;
        padding-right: 0px !important;
    }
    
p:hover { background-color: rgba(0,0,0,0.05) }
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent !important;
    vertical-align: middle;
    z-index: 1;
    -webkit-transition: .3s ease-out;
    transition: .3s ease-out !important;
}
.divider {
    height: 1px;
    overflow: hidden;
    background-color: #e0e0e0;
}
a{
margin: 5px 0px 1px 30px;
text-decoration:none!important;
    line-height: 40px;
}
p{
    
    color: rgba(0,0,0,0.87);
    display: block;
    font-size: 14px;
    font-weight: 500;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent !important;
    vertical-align: middle;
    z-index: 1;
    -webkit-transition: .3s ease-out;
    transition: .3s ease-out !important;
  
    
}
</style>
   <link rel="stylesheet" href="packages/core/css/framework7.bundle.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/my-app.css">
  </head>




    <!-- App root element -->
 <div id="app">
    <div class="panel panel-left panel-reveal panel-resizable panel-init">
        <div class="block" style="padding-left:0 px!important">
        <p  style="display:none;">Left Panel content here <a class="panel-close" href="#"><i class="fa fa-times" style="float:right; display:none;"></i></a></p>
        
 <a href="#!"><font size="4"> <span class="glyphicon glyphicon-user"></span> &nbsp; Hello, Nikhil</a></font>
  <p><div class="divider"></div></p> 
           
                <p><a >Home</a></li>
                <p><a class="waves-effect" href="#!" style="color:black !important">Shop</a></p>
                <p><a class="waves-effect" href="#!"style="color:black !important"> Today's Deals</a>
<p><div class="divider"></div></p>
                <p><a class="waves-effect" href="#!"style="color:black !important"> Your Orders</a></li>
                <p><a class="waves-effect" href="#!"style="color:black !important">  Your Account</a></p>
           <p><div class="divider"></div></p>     
      <p><a class="waves-effect" href="#!" style="color:black !important"> Become a Seller</a>
                <p><a class="waves-effect" href="#!" style="color:black !important"> Customer Service</a></li>
      
      </div>
    </div>
    
   
    <div class="view view-main view-init">
      <div class="page">
        <div class="navbar">
          <div class="navbar-bg"></div>
          <div class="navbar-inner">
           
            <div class="title" style="float: left !important; left:0!important;"><a class="button panel-open" href="#" data-panel=".panel-left"><i class="fa fa-bars" style="color:;margin-top: 9px !important; font-size:24px; float:left !"></i></a></div>
            <div class="right" ></div>
           
            <div class="subnavbar" style="overflow-x:hidden !important;overflow-y: hidden!important;">
        <!-- Searchbar with auto init -->
        <form class="searchbar">
          <div class="searchbar-inner">
            <div class="searchbar-input-wrap">
                 <div class="divider"></div>
              <input type="search" placeholder="Search">
              <i class="searchbar-icon"></i>
              <span class="input-clear-button"></span>
            </div>
            <span class="searchbar-disable-button if-not-aurora">Cancel</span>
          </div>
        </form>
      </div>
          </div>
        </div>

   
      
      </div>
   

  



    <!-- Path to Framework7 Library Bundle JS-->
    <script type="text/javascript" src="packages/core/js/framework7.bundle.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="path/to/my-app.js"></script>


<script>

var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'My App',
  // App id
  id: 'com.myapp.test',
  // Enable swipe panel
  panel: {
    swipe: 'left',
  },
  // Add default routes
  routes: [
    {
      path: '/about/',
      url: 'about.html',
    },
  ],
 
});




// App Events
app.on('panelClose', function (panel) {
  console.log('Panel ' + panel.side + ': close');
});
app.on('panelClosed', function (panel) {
  console.log('Panel ' + panel.side + ': closed');
});
app.on('panelResize', function (panel, newPanelWidth) {
  console.log('Panel resized to ' + newPanelWidth + 'px');
});




// create searchbar
var searchbar = app.searchbar.create({
  el: '.searchbar',
  searchContainer: '.list',
  searchIn: '.item-title',
  on: {
    search(sb, query, previousQuery) {
      console.log(query, previousQuery);
    }
  }
});












</script>
