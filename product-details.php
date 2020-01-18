

<div class="page">
    <div class="navbar navbar-page" style="display:none;">
        <div class="navbar-inner sliding">
            <div class="left">
                <a href="#" class="link back">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
       
            <div class="right"></div>
        </div>
    </div>
    <div class="page-content">
        <!-- product details -->
        <div class="product-details segments">
            <div class="container">
                <!-- slider product details -->
                <div class="slider-p-details">
                    <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" class="swiper-container swiper-init swiper-container-horizontal">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="content">
                                    <div class="mask"></div>
                                    <img src="images/item-5.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content">
                                   <div class="mask"></div>
                                   <img src="images/item-6.jpg" alt="">
                               </div>
                           </div>
                           <div class="swiper-slide">
                            <div class="content">
                                <div class="mask"></div>
                                <img src="images/item-7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider product details -->

            <!-- wrap content product details -->
            <div class="wrapper-content">
                <div class="wrap-title-product wrap-c-margin">
                    <h4>cheap elegant sweater with collar</h4>
                    <p class="price" style="font-size:14px!important;">₹ 45000</p>
                </div>
                <div class="freeship">
                    <p><i class="fa fa-truck"></i> Free Shipping</p>
                </div>
                <div class="wrap-info">
                    <div class="list">
                        <ul>
                            <li>
                                <a href="#" class="item-link item-content sheet-open" data-sheet=".description-sheet">
                                    <div class="item-inner item-cell">
                                        <div class="item-row">
                                            <div class="item-cell">Product Details</div>
                                            <div class="item-cell">Description</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="item-link item-content sheet-open" data-sheet=".specification-sheet">
                                    <div class="item-inner item-cell">
                                        <div class="item-row">
                                            <div class="item-cell">Specification</div>
                                            <div class="item-cell">Merk, Model, Material</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
      
                  <p style="color:black;"> <b>Function Date:</b> </p>

                    
                             
                                    <input id="date-from" name="date-from" class="form-control" type="date" style="">
                                    <!----<i class="fa fa-calendar"></i> !----->
                                
                            
                                    <br>
                                    <p style="color:black;"> <b> Return Date <b> </p>
             
                                    <input id="date-to" name="date-to" class="form-control" type="date" onblur="daysDiff();">
                                    <!----<i class="fa fa-calendar"></i> !---->
                             
                    
                    <!-- description sheet modal -->
                    <div class="sheet-modal description-sheet" style="height:42% !important">
                        <div class="toolbar">
                            <div class="toolbar-inner">
                                <div class="center" style='font-size:19px !important;'> &nbsp; &nbsp;&nbsp;Order Summary</div>
                                <div class="right">
                                    <a href="#" class="link sheet-close"><i class="fa fa-check"></i></a>
                                </div>
                            </div>
                        </div>
                        <style>
                            
                            th,td{
                              font-family: sans-serif;
                              color: black;
                              font-size: 14px;
                            }                                
                            
                            </style>
                      
                        <div class="" style="height:50%;>
                            <div class=" ">
                                <div class="">
                                    <div class="divider-space-text" style="display:none;"></div>
                                    <!-- end divider space for text -->

                                    
                                    
                                    	<div class="body">
                    
                        <table class="table table-bordered" border="" style="width:100%; border-collapse: collapse;;border-left: none;
    border-right: none;
    border-bottom: none !important;
    border-color: burlywood; " cellpadding="10">
                           
                            <tr>
                                <th align="left">Color/Size </th>
                                <td colspan="3"  style="">Red - 48(XL)</td>                   
                            </tr>
                            <tr>
                                <th align="left">Date </th>
                                <td  colspan="2"><font id="fromDate">10/10/2019</font> - <font id="toDate">15/10/2019</font></td>   
                            <tr>
                            </tr>
                          
                                <th align="left">Rent </th>
                                <td  colspan="3">₹ 2,900 * <font id="days">6</font> days = <font id="Total"></td>   
                                
                            </tr>
                            
                             <tr>
                                <th align="left">Deposit </th>
                                <td  colspan="3">₹ 5,000</td>  
                                
                            </tr>
                            
                            <tr> 
                                <th align="left" >Grand Total</th>
                                <td colspan="3" style="color:red;"><font id="Grand"></td>   

                            </tr>

                        </table> 
                                            <br>
                        <a href="#" class="btn  btn-block" style="background:royalblue  !important;  width: 100% !important; margin-left: -15px; color:white"><i class="fa fa-cart-plus"></i> &nbsp;&nbsp;Confirm Purchase</a>

                
    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end description sheet modal -->

                    <!-- specification sheet modal -->
                    <div class="sheet-modal specification-sheet">
                        <div class="toolbar">
                            <div class="toolbar-inner">
                                <div class="left">Specification</div>
                                <div class="right">
                                    <a href="#" class="link sheet-close"><i class="fa fa-check"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="sheet-modal-inner segments">
                            <div class="page-content">
                                <div class="container">
                                    <ul>
                                        <li>Merk <span>ABC</span></li>
                                        <li>Material <span>Plactic</span></li>
                                        <li>Model <span>123</span></li>
                                        <li>Status <span>Local Product</span></li>
                                        <li>The Warranty <span>Official Guarantee</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end specification sheet modal -->

                </div>

                <!-- related products -->
                <div class="related-products segments no-pd-b">
                    <div class="section-title">
                        <h3>Related Products <a href="#" class="see-all-link">See All</a></h3>
                    </div>
                    <div data-space-between="10" data-slides-per-view="auto" class="swiper-container swiper-init">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="content content-shadow-product">
                                    <img src="images/related-product1.jpg" alt="">
                                    <div class="text">
                                        <a href="#">
                                            <p class="title-product">Original plain sweater - gray</p>
                                        </a>
                                        <p class="price">$55.00</p>
                                        <p class="location">New York</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content content-shadow-product">
                                    <img src="images/related-product2.jpg" alt="">
                                    <div class="text">
                                        <a href="#">
                                            <p class="title-product">Premium men's knit sweaters</p>
                                        </a>
                                        <p class="price">$75.00</p>
                                        <p class="location">New York</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content content-shadow-product">
                                    <img src="images/related-product3.jpg" alt="">
                                    <div class="text">
                                        <a href="#">
                                            <p class="title-product">Plain black men's shirt</p>
                                        </a>
                                        <p class="price">$80.00</p>
                                        <p class="location">New York</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content content-shadow-product">
                                    <img src="images/related-product4.jpg" alt="">
                                    <div class="text">
                                        <a href="#">
                                            <p class="title-product">Premium soft plain shirt</p>
                                        </a>
                                        <p class="price">$60.00</p>
                                        <p class="location">New York</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content content-shadow-product">
                                    <img src="images/related-product5.jpg" alt="">
                                    <div class="text">
                                        <a href="#">
                                            <p class="title-product">Mountain jacket - waterproof</p>
                                        </a>
                                        <p class="price">$105.99</p>
                                        <p class="location">New York</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end related products -->
            </div>
            <!-- end wrap content product details -->
        </div>
        <!-- wrap store -->
        <div class="wrap-store">
            <div class="container">
                <div class="row">
                    <div class="col-70">
                        <div class="user-caption">
                            <img src="images/user-seller1.png" alt="">
                            <div class="title-name">
                                <h4>Variantsports</h4>
                                <p class="date">online 2 minute ago</p>
                                <p class="location"><i class="fa fa-map-marker-alt"></i>Washington</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="user-button">
                            <a href="#" class="button primary-button">Follow</a>
                            <a href="/account-seller/" class="button secondary-button">Visit Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end wrap store -->

        <!-- product review -->
        <div class="product-review segments">
            <div class="container">
                <div class="section-title">
                    <h3>Product Reviews</h3>
                </div>
                <div class="content">
                    <img src="images/user-buyer2.png" alt="">
                    <div class="text">
                        <h6>Rashaad</h6>
                        <ul class="rate-product">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-alt"></i></li>
                        </ul>
                        <p class="date">3 min ago</p>
                        <i class="fa fa-thumbs-up like-button"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, explicabo.</p>
                    </div>
                </div>

                <!-- divider -->
                <div class="divider-line-half"></div>
                <!-- end divider -->

                <div class="content">
                    <img src="images/user-buyer1.png" alt="">
                    <div class="text">
                        <h6>Aamir</h6>
                        <ul class="rate-product">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-alt"></i></li>
                        </ul>
                        <p class="date">3 min ago</p>
                        <i class="fa fa-thumbs-up like-button"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, explicabo.</p>
                    </div>
                </div>

                <!-- divider -->
                <div class="divider-line-half"></div>
                <!-- end divider -->

                <div class="content">
                    <img src="images/user-buyer3.png" alt="">
                    <div class="text">
                        <h6>Kemal</h6>
                        <ul class="rate-product">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-alt"></i></li>
                        </ul>
                        <p class="date">3 min ago</p>
                        <i class="fa fa-thumbs-up like-button"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, explicabo.</p>
                    </div>
                </div>
                <!-- view all reviews -->
                <div class="view-all-review">
                    <a href="/all-reviews/">View All Reviews</a>
                </div>
                <!-- end view all reviews -->
            </div>
        </div>
        <!-- end product review -->

        <!-- divider -->
        <div class="divider-line-full"></div>
        <!-- end divider -->

        <!-- recommended for you -->
        <div class="recommended-you">
            <div class="container">
                <div class="section-title">
                    <h3>Recommended</h3>
                </div>
                <div data-space-between="10" data-slides-per-view="auto" class="swiper-container swiper-init">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <img src="images/product1.jpg" alt="">
                                <div class="text">
                                    <a href="#">
                                        <p class="title-product">Sweater with triangle collar</p>
                                    </a>
                                    <p class="price">$75.00</p>
                                    <p class="location">New York</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <img src="images/product2.jpg" alt="">
                                <div class="text">
                                    <a href="#">
                                        <p class="title-product">New slim smartwatch</p>
                                    </a>
                                    <p class="price">$49.00</p>
                                    <p class="location">New York</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <img src="images/product3.jpg" alt="">
                                <div class="text">
                                    <a href="#">
                                        <p class="title-product">Army jacket premium</p>
                                    </a>
                                    <p class="price">$99.99</p>
                                    <p class="location">New York</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content content-shadow-product">
                                <img src="images/product5.jpg" alt="">
                                <div class="text">
                                    <a href="#">
                                        <p class="title-product">Black premium shirt plain</p>
                                    </a>
                                    <p class="price">$45.00</p>
                                    <p class="location">New York</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end recommended for you -->

    </div>
    <!-- end product details -->

    <!-- action product details -->
    <div class="wrap-action-product-d">
        <div class="">
            <div class="row">
                 <div class="col-50">
                    <div class="content-button">
                        <a href="#" class="btn  btn-block" style="background:royalblue  !important;  width: 85% !important; margin-left: -15px; color:white"><i class="fa fa-cart-plus"></i> &nbsp;&nbsp;Rent Now</a>
                    </div>
                </div>
               
                <div class="col-50">
                    <div class="content-button">
                        <a href="#" class="btn  btn-block" style="background: white !important; width: 88% !important;"><i class="fa fa-cart-arrow-down"></i>&nbsp;&nbsp;Add to Cart</a>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- end action product details -->
</div>
</div>
  
<script>
    
    
       
           $('#close').click(function(){
    location.reload();
});
            function close(){
                
                
                  $('#fixed-form-container').hide();
                            $('html, body').css({
    overflow: 'auto',
    height: '100%'
});
            }
      

            document.addEventListener("touchstart", function () {}, false);
            function calculateRent() {
                daysDiff();
                    $('html, body').css({
    overflow: 'hidden',
    height: '100%'
});
                $('#fixed-form-container').fadeIn();
            }

            function daysDiff() {

                var dateTo = new Date($('#date-to').val());
                var dateFrom = new Date($('#date-from').val())

                var Difference_In_Time = dateTo.getTime() - dateFrom.getTime();

                // To calculate the no. of days between two dates
                var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
                
                var rent=2900 * (Difference_In_Days);
              
                
                var grandTotal = 2900 * (Difference_In_Days)+5000;
        


                $('#days').html(Difference_In_Days);
                

                var fromDate = $('#date-from').val();
                var toDate = $('#date-to').val();

                $('#fromDate').html(fromDate);
                $('#toDate').html(toDate);
                $('#days').html(Difference_In_Days);
                $('#Grand').html('₹'+ grandTotal);
                 $('#Total').html('₹'+ rent);

            }
            $(document).ready(function () {

                var quantitiy = 0;
                $('.quantity-right-plus').click(function (e) {

                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());

                    // If is not undefined

                    $('#quantity').val(quantity + 1);


                    // Increment

                });

                $('.quantity-left-minus').click(function (e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());

                    // If is not undefined

                    // Increment
                    if (quantity > 0) {
                        $('#quantity').val(quantity - 1);
                    }
                });

            });
            </script>
  