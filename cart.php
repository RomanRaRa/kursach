<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <?php include "head.php"?>
    <body>
    <div id="wrapper">
       <?php include "header.php" ?>

        <section id="content">
            <div id="breadcrumb-container">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Shopping Cart</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <header class="content-title">
                            <h1 class="title">Shopping Cart</h1>
                            <p class="title-desc">Just this week, you can use the free premium delivery.</p>
                        </header>
                        <div class="xs-margin"></div><!-- space -->
                        <div class="row">

                            <div class="col-md-12 table-responsive">

                                <table class="table cart-table">
                                <thead>
                                    <tr>
                                        <th class="table-title">Product Name</th>
                                        <th class="table-title">Product Code</th>
                                        <th class="table-title">Unit Price</th>
                                        <th class="table-title">Quantity</th>
                                        <th class="table-title">SubTotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="item-name-col">
                                            <figure>
                                                <a href="#"><img src="images/products/compare1.jpg" alt="Lowlands Lace Blouse"></a>
                                            </figure>
                                            <header class="item-name"><a href="#">Lowlands Lace Blouse</a></header>
                                            <ul>
                                                <li>Color: White</li>
                                                <li>Size: SM</li>
                                            </ul>
                                        </td>
                                        <td class="item-code">MP125984154</td>
                                        <td class="item-price-col"><span class="item-price-special">$1175</span></td>
                                        <td>
                                            <div class="custom-quantity-input">
                                                <input type="text" name="quantity" value="1">
                                                <a href="#" onclick="return false;" class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
                                                <a href="#" onclick="return false;" class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
                                            </div>
                                        </td>
                                        <td class="item-total-col"><span class="item-price-special">$1175</span>
                                        <a href="#" class="close-button"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="item-name-col">
                                            <figure>
                                                <a href="#"><img src="images/products/compare2.jpg" alt="Samsung Galaxy Ace"></a>
                                            </figure>
                                            <header class="item-name"><a href="#">Samsung Galaxy Ace</a></header>
                                            <ul>
                                                <li>Color: Black</li>
                                                <li>Size: XL</li>
                                            </ul>
                                        </td>
                                        <td class="item-code">MP125984154</td>
                                        <td class="item-price-col"><span class="item-price-special">$1475</span></td>
                                        <td>
                                            <div class="custom-quantity-input">
                                                <input type="text" name="quantity" value="1">
                                                <a href="#" onclick="return false;" class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
                                                <a href="#" onclick="return false;" class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
                                            </div>
                                        </td>
                                        <td class="item-total-col"><span class="item-price-special">$1475</span>
                                        <a href="#" class="close-button"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="item-name-col">
                                            <figure>
                                                <a href="#"><img src="images/products/compare3.jpg" alt="Iphone Case Cover Original"></a>
                                            </figure>
                                            <header class="item-name"><a href="#">Iphone Case Cover Original</a></header>
                                            <ul>
                                                <li>Color: White</li>
                                                <li>Size: SM</li>
                                            </ul>
                                        </td>
                                        <td class="item-code">MP125984154</td>
                                        <td class="item-price-col"><span class="item-price-special">$399</span></td>
                                        <td>
                                            <div class="custom-quantity-input">
                                                <input type="text" name="quantity" value="3">
                                                <a href="#" onclick="return false;" class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
                                                <a href="#" onclick="return false;" class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
                                            </div>
                                        </td>
                                        <td class="item-total-col"><span class="item-price-special">$1197</span>
                                        <a href="#" class="close-button"></a>
                                        </td>
                                    </tr>
                                </tbody>
                              </table>

                            </div><!-- End .col-md-12 -->

                        </div><!-- End .row -->
                        <div class="lg-margin"></div><!-- End .space -->

                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12 lg-margin">

                                <div class="tab-container left clearfix">
                                        <ul class="nav-tabs">
                                          <li class="active"><a href="#shipping" data-toggle="tab">Shipping &amp; Taxes</a></li>
                                          <li><a href="#discount" data-toggle="tab">Discount Code</a></li>
                                          <li><a href="#gift" data-toggle="tab">Gift voucher </a></li>

                                        </ul>
                                        <div class="tab-content clearfix">
                                            <div class="tab-pane active" id="shipping">

                                                <form action="#" id="shipping-form">
                                                    <p class="shipping-desc">Enter your destination to get a shipping estimate.</p>
                                                    <div class="form-group">
                                                        <label for="select-country" class="control-label">Country&#42;</label>
                                                        <div class="input-container normal-selectbox">
                                                            <select id="select-country" name="select-country" class="selectbox">
                                                                <option  value="Japan">Japan</option>
                                                                <option  value="Brazil">Brazil</option>
                                                                <option  value="France">France</option>
                                                                <option  value="Italy">Italy</option>
                                                                <option  value="Spain">Spain</option>
                                                            </select>
                                                        </div><!-- End .select-container -->
                                                    </div><!-- End .form-group -->
                                                    <div class="xss-margin"></div>
                                                    <div class="form-group">
                                                        <label for="select-state" class="control-label">Regison/State&#42;</label>
                                                        <div class="input-container normal-selectbox">
                                                            <select id="select-state" name="select-state" class="selectbox">
                                                            <option  value="California">California</option>
                                                            <option  value="Texas">Texas</option>
                                                            <option  value="NewYork">NewYork</option>
                                                            <option  value="Narnia">Narnia</option>
                                                            <option  value="Jumanji">Jumanji</option>
                                                        </select>
                                                        </div><!-- End .select-container -->
                                                    </div><!-- End .form-group -->
                                                  <div class="xss-margin"></div>
                                                <div class="form-group">
                                                    <label for="select-country" class="control-label"  >Post Code&#42;</label>
                                                    <div class="input-container">
                                                        <input type="text" required class="form-control" placeholder="Your fax">
                                                    </div>
                                                </div><!-- End .form-group -->
                                                <div class="xss-margin"></div>
                                                <p class="text-right">
                                                    <input type="submit" class="btn btn-custom-2" value="GET QUOTES">
                                                </p>
                                                </form>

                                            </div><!-- End .tab-pane -->

                                            <div class="tab-pane" id="discount">
                                                <p>Enter your discount coupon code here.</p>
                                                <form action="#">
                                                    <div class="input-group">
                                                        <input type="text" required class="form-control" placeholder="Coupon code">

                                                    </div><!-- End .input-group -->
                                                <input type="submit" class="btn btn-custom-2" value="APPLY COUPON">
                                                </form>
                                            </div><!-- End .tab-pane -->

                                            <div class="tab-pane" id="gift">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dignissimos nostrum debitis optio molestiae in quam dicta labore obcaecati ullam necessitatibus animi deleniti minima dolor suscipit nobis est excepturi inventore.</p>
                                            </div><!-- End .tab-pane -->

                                        </div><!-- End .tab-content -->
                                </div><!-- End .tab-container -->

                            </div><!-- End .col-md-8 -->

                            <div class="col-md-4 col-sm-12 col-xs-12">

                                <table class="table total-table">
                                    <tbody>
                                        <tr>
                                            <td class="total-table-title">Subtotal:</td>
                                            <td>$434.50</td>
                                        </tr>
                                        <tr>
                                            <td class="total-table-title">Shipping:</td>
                                            <td>$6.00</td>
                                        </tr>
                                        <tr>
                                            <td class="total-table-title">TAX (0%):</td>
                                            <td>$0.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>Total:</td>
                                            <td>$440.50</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="md-margin"></div><!-- End .space -->
                                <a href="http://allprogs.com/category.php" class="btn btn-custom-2">CONTINUE SHOPPING</a>
                                <a href="http://allprogs.com/checkout.php" class="btn btn-custom">CHECKOUT</a>
                            </div><!-- End .col-md-4 -->
                        </div><!-- End .row -->
                        <div class="md-margin2x"></div><!-- Space -->

                        <div class="similiar-items-container carousel-wrapper">
                            <header class="content-title">
                                <div class="title-bg">
                                    <h2 class="title">Similiar Products</h2>
                                </div><!-- End .title-bg -->
                                <p class="title-desc">Note the similar products - after buying for more than $500 you can get a discount.</p>
                            </header>

                                <div class="carousel-controls">
                                    <div id="similiar-items-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                    <div id="similiar-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                </div><!-- End .carousel-controls -->
                                <div class="similiar-items-slider owl-carousel">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container">
                                                <a href="product.html">
                                                    <img src="images/products/item3.jpg" alt="item1" class="item-image">
                                                    <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                </a>
                                            </figure>
                                            <div class="item-price-container">
                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <span class="new-rect">New</span>
                                        </div><!-- End .item-image-wrapper -->
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="80"></div>
                                                </div><!-- End .ratings -->
                                                <span class="ratings-amount">
                                                    5 Reviews
                                                </span>
                                            </div><!-- End .rating-container -->
                                            <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                            <div class="item-action">
                                                <a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Add to Cart</span>
                                                </a>
                                                <div class="item-action-inner">
                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                </div><!-- End .item-action-inner -->
                                            </div><!-- End .item-action -->
                                        </div><!-- End .item-meta-container -->
                                    </div><!-- End .item -->

                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container">
                                                <a href="product.php">
                                                    <img src="images/products/item1.jpg" alt="item1" class="item-image">
                                                    <img src="images/products/item1-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                </a>
                                            </figure>
                                            <div class="item-price-container">
                                                <span class="item-price">$100</span>
                                            </div><!-- End .item-price-container -->
                                        </div><!-- End .item-image-wrapper -->
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="99"></div>
                                                </div><!-- End .ratings -->
                                                <span class="ratings-amount">
                                                    4 Reviews
                                                </span>
                                            </div><!-- End .rating-container -->
                                            <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                            <div class="item-action">
                                                <a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Add to Cart</span>
                                                </a>
                                                <div class="item-action-inner">
                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                </div><!-- End .item-action-inner -->
                                            </div><!-- End .item-action -->
                                        </div><!-- End .item-meta-container -->
                                    </div><!-- End .item -->

                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container">
                                                <a href="product.php">
                                                    <img src="images/products/item4.jpg" alt="item1" class="item-image">
                                                    <img src="images/products/item4-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                </a>
                                            </figure>
                                            <div class="item-price-container">
                                                <span class="old-price">$100</span>
                                                <span class="item-price">$80</span>
                                            </div><!-- End .item-price-container -->
                                            <span class="discount-rect">-20%</span>
                                        </div><!-- End .item-image-wrapper -->
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="75"></div>
                                                </div><!-- End .ratings -->
                                                <span class="ratings-amount">
                                                    2 Reviews
                                                </span>
                                            </div><!-- End .rating-container -->
                                            <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                            <div class="item-action">
                                                <a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Add to Cart</span>
                                                </a>
                                                <div class="item-action-inner">
                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                </div><!-- End .item-action-inner -->
                                            </div><!-- End .item-action -->
                                        </div><!-- End .item-meta-container -->
                                    </div><!-- End .item -->

                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container">
                                                <a href="product.php">
                                                    <img src="images/products/item10.jpg" alt="item1" class="item-image">
                                                    <img src="images/products/item10-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                </a>
                                            </figure>
                                            <div class="item-price-container">
                                                <span class="old-price">$120</span>
                                                <span class="item-price">$60</span>
                                            </div><!-- End .item-price-container -->
                                            <span class="discount-rect">-50%</span>
                                        </div><!-- End .item-image-wrapper -->
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="65"></div>
                                                </div><!-- End .ratings -->
                                                <span class="ratings-amount">
                                                    4 Reviews
                                                </span>
                                            </div><!-- End .rating-container -->
                                            <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                            <div class="item-action">
                                                <a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Add to Cart</span>
                                                </a>
                                                <div class="item-action-inner">
                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                </div><!-- End .item-action-inner -->
                                            </div><!-- End .item-action -->
                                        </div><!-- End .item-meta-container -->
                                    </div><!-- End .item -->

                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container">
                                                <a href="product.php">
                                                    <img src="images/products/item5.jpg" alt="item1" class="item-image">
                                                    <img src="images/products/item5-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                </a>
                                            </figure>
                                            <div class="item-price-container">
                                                <span class="item-price">$99</span>
                                            </div><!-- End .item-price-container -->
                                            <span class="new-rect">New</span>
                                        </div><!-- End .item-image-wrapper -->
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="40"></div>
                                                </div><!-- End .ratings -->
                                                <span class="ratings-amount">
                                                    3 Reviews
                                                </span>
                                            </div><!-- End .rating-container -->
                                            <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                            <div class="item-action">
                                                <a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Add to Cart</span>
                                                </a>
                                                <div class="item-action-inner">
                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                </div><!-- End .item-action-inner -->
                                            </div><!-- End .item-action -->
                                        </div><!-- End .item-meta-container -->
                                    </div><!-- End .item -->

                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container">
                                                <a href="product.php">
                                                    <img src="images/products/item7.jpg" alt="item1" class="item-image">
                                                    <img src="images/products/item7-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                </a>
                                            </figure>
                                            <div class="item-price-container">
                                                <span class="item-price">$280</span>
                                            </div><!-- End .item-price-container -->
                                        </div><!-- End .item-image-wrapper -->
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                            </div><!-- End .rating-container -->
                                            <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                            <div class="item-action">
                                                <a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Add to Cart</span>
                                                </a>
                                                <div class="item-action-inner">
                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                </div><!-- End .item-action-inner -->
                                            </div><!-- End .item-action -->
                                        </div><!-- End .item-meta-container -->
                                    </div><!-- End .item -->

                                </div><!--purchased-items-slider -->
                            </div><!-- End .purchased-items-container -->

                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

        </section><!-- End #content -->

        <?php include "footer.php"?>

    </div><!-- End #wrapper -->
        <a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a><!-- End #scroll-top -->
    <!-- END -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.debouncedresize.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.hoverIntent.min.js"></script>
    <script src="js/twitter/jquery.tweet.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jflickrfeed.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.selectbox.min.js"></script>
    <script src="js/main.js"></script>

    </body>
</html>
