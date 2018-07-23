
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Məhsul</title>

    <link rel="icon" href="../assets/images/myLogo/mm-icon-circle.png">
    <!-- links here -->

    <?php $this->load->view("dependencies/style");?>
</head>

<body>


<!-- header begin -->
<?php include "header.php" ; ?>
<!-- header end -->
<!-- content begin -->
<div class="mainContent">
    <div class="container">


            <?php if(count($product_by_cat)==0){;?>
                <div class="center_column col-xs-12 col-sm-12">
                    <!-- Product -->
                    <div id="product">
                        <!-- box product -->
                        <div class="alert alert-warning">Bu kateqoriya üzrə müvəqqəti olaraq məhsul yoxdu, tezliklə yeni məhsullar əlavə olunacaq. Bizi izləməkdə davam edin</div>
                    </div>
                </div>
            <?php }
            else{;?>
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="/">RRShop.az</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="/smartfonlar-c44" title="Smartfonlar">Smartfonlar</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="/xiaomi-s133" title="<?php echo "marka"; ?>"><?php echo $product_by_cat[0]->marka_name ;?></a>
        </div>
        <!-- row -->
        <div class="row">
                <div class="center_column col-xs-12 col-sm-12">
                    <!-- Product -->
                    <div id="product">
                        <!-- box product -->
                        <div class="product-box">
                            <h3 class="heading"><?php echo $product_by_cat[0]->marka_name ;?></h3>

                            <ul class="product-list">
                                <?php foreach($product_by_cat as $item){;?>
                                    <li class="col-sm-3 col-md-3">
                                        <div class="right-block">
                                            <h5 class="product-name">
                                                <a href="#"><?php echo $item->name;?></a>
                                            </h5>
                                            <div class="content_price">
                                                <span class="price product-price"><?php echo $item->active_price;?></span>
                                            </div>
                                        </div>
                                        <div class="left-block">
                                            <a href="<?php echo base_url("product/index/$item->id");?>">
                                                <img class="img-responsive" alt="product" src="<?php echo base_url("/assets/images/bestSeller/".$item->img);?>">
                                            </a>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="<?php echo base_url("product/index/$item->id");?>">İndi sifariş et</a>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ;?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php };?>

            <!-- Center colunm-->

        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->


</div>
<!-- content end -->

<!-- footer begin -->
<?php include "footer.php"; ?>

<!-- footer end -->

<!-- scrool here -->
<a href="#" class="scroll_top" title="Scroll to Top">Scroll</a>
<!-- scroll here -->

<!-- script links here -->
<?php $this->load->view("dependencies/scripts");?>
</body>

</html>