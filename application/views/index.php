
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RRShop.az - elektronika dükanı</title>
    <link rel="icon" href="assets/images/myLogo/mm-icon-circle.png">

    <?php $this->load->view("dependencies/style");?>

</head>

<body>

   <?php include "header.php" ;?>
    <!-- home slider begin -->
    <div id="mainSlider">
        <div class="container">
            <div class="row">
                <div class="owl-carousel  owl-theme">
                    <?php foreach($slide_items as $item){ ; ?>
                    <div class="item">
                        <img src="assets/images/<?php echo $item->img_name;?>" alt="" class="img-responsive">
                    </div>
                    <?php } ;?>
                </div>
            </div>

            <div class="owlMyNav">
                <div class="pull-left" id="customNextBtn">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
                <div class="pull-right" id="customPrevBtn">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>

        </div>
    </div>
    <!-- home slider end -->

    <!-- en cox satilanlar begin -->
    <div id="top-Content" class="my-spec-caro">
        <div class="container">
            <div class="row">

                <!-- edit -->
                <div class="col-xs-12 col-sm-12">
                    <h2 class="page-heading">
                        <span class="page-heading-title">Çox satılanlar</span>
                    </h2>
                    <div class="latest-deals-product">
                        <!-- owl begin -->
                        <ul class="owl-carousel myCarousel">
                            <!-- edit -->
                            <li class="item">
                                <div class="left-block">
                                    <a class="imgg" href="pages/product.html" title="Xiaomi MI A1 4GB/64GB Dual SIM Gold">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product1.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="İndi sifariş et" href="pages/product.html">İndi sifariş et</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi MI A1 4GB/64GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">380 Azn</span>
                                    </div>
                                </div>
                            </li>
                            <!-- edit -->
                            <li class="item">
                                <div class="left-block">
                                    <a class="imgg" href="#" title="Xiaomi MI A1 4GB/64GB Dual SIM Gold">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product5.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="İndi sifariş et" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi MI A1 4GB/64GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">380 Azn</span>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="left-block">
                                    <a class="imgg" href="#" title="Xiaomi MI A1 4GB/64GB Dual SIM Gold">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product2.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="İndi sifariş et" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi MI A1 4GB/64GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">380 Azn</span>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="left-block">
                                    <a class="imgg" href="#" title="Xiaomi MI A1 4GB/64GB Dual SIM Gold">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product3.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="İndi sifariş et" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi MI A1 4GB/64GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">380 Azn</span>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="left-block">
                                    <a class="imgg" href="#" title="Xiaomi MI A1 4GB/64GB Dual SIM Gold">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product4.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="İndi sifariş et" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi MI A1 4GB/64GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">380 Azn</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- owl end -->
                    </div>
                </div>
                <!-- edit -->
            </div>
        </div>
    </div>
    <!-- en cox satilanlarend -->
    <!-- umumi kategoriyaya gore begin -->
    <div id="body-Content">
        <div class="container">
            <div class="categoryFeatured">
                <!-- navbar category begin -->
                <nav class="navbar nav-menu brandWrap">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand" style="width: 165px">
                            <a href="#">Smartfonlar</a>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </nav>
                <!-- navbar category end -->
            </div>

            <!-- productFeatrued begin -->

            <div class="productFeatured">
                <div class="row">
                    <div class="wrapProduct">
                        <ul class="product-list row">
                            <li class="col-sm-3">
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi Redmi 5 3GB/32GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">269 Azn</span>
                                    </div>
                                </div>
                                <div class="left-block">
                                    <a class="imgg" href="/xiaomi-redmi-5-3gb-32gb-dual-sim-gold-142.html">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product1.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi Redmi 5 3GB/32GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">269 Azn</span>
                                    </div>
                                </div>
                                <div class="left-block">
                                    <a class="imgg" href="/xiaomi-redmi-5-3gb-32gb-dual-sim-gold-142.html">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product1.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi Redmi 5 3GB/32GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">269 Azn</span>
                                    </div>
                                </div>
                                <div class="left-block">
                                    <a class="imgg" href="/xiaomi-redmi-5-3gb-32gb-dual-sim-gold-142.html">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product1.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi Redmi 5 3GB/32GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">269 Azn</span>
                                    </div>
                                </div>
                                <div class="left-block">
                                    <a class="imgg" href="/xiaomi-redmi-5-3gb-32gb-dual-sim-gold-142.html">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product3.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi Redmi 5 3GB/32GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">269 Azn</span>
                                    </div>
                                </div>
                                <div class="left-block">
                                    <a class="imgg" href="/xiaomi-redmi-5-3gb-32gb-dual-sim-gold-142.html">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product5.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi Redmi 5 3GB/32GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">269 Azn</span>
                                    </div>
                                </div>
                                <div class="left-block">
                                    <a class="imgg" href="/xiaomi-redmi-5-3gb-32gb-dual-sim-gold-142.html">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product2.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi Redmi 5 3GB/32GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">269 Azn</span>
                                    </div>
                                </div>
                                <div class="left-block">
                                    <a class="imgg" href="/xiaomi-redmi-5-3gb-32gb-dual-sim-gold-142.html">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product3.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="right-block">
                                    <h5 class="product-name">
                                        <a href="#">Xiaomi Redmi 5 3GB/32GB Dual SIM Gold</a>
                                    </h5>
                                    <div class="content_price">
                                        <span class="price product-price">269 Azn</span>
                                    </div>
                                </div>
                                <div class="left-block">
                                    <a class="imgg" href="/xiaomi-redmi-5-3gb-32gb-dual-sim-gold-142.html">
                                        <img class="img-responsive" alt="product" src="assets/images/bestSeller/product4.jpg">
                                    </a>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">İndi sifariş et</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- product featured end -->

        </div>
    </div>
    <!-- umumi kategoriyaya gore end -->
    <?php include "footer.php" ;?>
    <!-- scrool here -->
    <a href="#" class="scroll_top" title="Scroll to Top">Scroll</a>
    <!-- scroll here -->
   <?php $this->load->view("dependencies/scripts");?>
</body>

</html>