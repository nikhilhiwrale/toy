<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->

    <head>
       
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        
    </head>

    <body>


        <form id="booking-form" class="" name="form1" method="post" action="">

                
            <p style="color:black;"> <b>Function Date:</b> </p>

                    
                             
                                    <input id="date-from" name="date-from" class="form-control" type="text" style="">
                                    <!----<i class="fa fa-calendar"></i> !----->
                                
                            
                                    <br>
                                    <p style="color:black;"> <b> Return Date <b> </p>
             
                                    <input id="date-to" name="date-to" class="form-control" type="text" onblur="daysDiff();">
                                    <!----<i class="fa fa-calendar"></i> !---->
                             
                    
              
            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        </form>

        
    </body>

</html>