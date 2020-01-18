<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Reservation Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
<form id="booking-form" class="booking-form" name="form1" method="post" action="">
    
       <font color="green"> <i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp Select Function date and Return date &nbsp <i class="fa fa-arrow-down" aria-hidden="true"></i></font>
        <div style="overflow-x:hidden">
            <div>
                <table class="table" style="border:none!important;width:100%; border-top: none !important;"> 
<th>
  Function Date:
</th>
<tr>
<th>
                <div>
                    <input id="date-from" name="date-from" class="form-control" type="text">
                    <!----<i class="fa fa-calendar"></i> !----->
                </div>
            </div>
</th>
</tr>
<tr>
<th>Return Date :</th>
<tr>
<th>
            <div>
                    <input id="date-to" name="date-to" class="form-control" type="text" onblur="daysDiff();">
                    <!----<i class="fa fa-calendar"></i> !---->
                </div>
</th>
</tr>
</tr>
</table>
            </div>
       

        </div>
        <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
    </form>

    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>