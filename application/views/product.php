
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
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="/">RRShop.az</a>
                <span class="navigation-pipe">&nbsp;</span>
                <a href="/smartfonlar-c44" title="Smartfonlar">Smartfonlar</a>
                <span class="navigation-pipe">&nbsp;</span>
                <a href="/xiaomi-s133" title="<?php echo $product[0]->name; ?>"><?php echo $product[0]->name; ?></a>
            </div>
            <!-- row -->
            <div class="row">

                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-12">
                    <!-- Product -->
                    <div id="product">
                            <div class="primary-box row">
                                <div class="left-column col-xs-12 col-sm-5">
                                    <!-- product-imge-->
                                    <div class="product-image">
                                        <div class="product-full">
                                            <img style="width: 280px;height: 500px;" id="product-zoom" src="<?php echo base_url("/assets/images/bestSeller/".$product[0]->img);?>" data-zoom-image="<?php echo base_url("/assets/images/bestSeller/".$product[0]->img);?>">
                                        </div>
                                        <div class="product-img-thumb">
                                            <h4>owl carousel will be here</h4>
                                        </div>
                                    </div>
                                    <!-- product-imge-->
                                </div>
                                <div class="right-column col-xs-12 col-sm-7">
                                    <h1 class="product-name"><?php echo $product[0]->name ; ?></h1>
                                    <div class="product-price-group">
                                        <span class="price"><?php echo round($product[0]->active_price);?> AZN</span>
                                        <span class="old-price"><?php echo round($product[0]->old_price ); ?> AZN</span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Məhsul kodu: <?php echo $product[0]->barcode ; ?></p>
                                    </div>
                                    <div class="product-desc">
                                        <?php foreach($properties as $item){;?>
                                         <?php echo $item->prop_key .":".$item->prop_val . "<br>" ;?>
                                        <?php } ;?>
                                    </div>
                                    <div class="form-action">
                                        <div class="button-group">
                                            <a class="btn-add-cart" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">İndi sifariş et</a>
                                            <a class="btn-call" href="tel:0507081111">İndi zəng et</a>
                                        </div>
                                    </div>
                                    <div class="form-share">
                                    </div>
                                </div>
                            </div>
                        <!-- box product -->
                        <div class="product-box">
                            <h3 class="heading">Bənzər Məhsullar</h3>
                            <?php if(count($similar_products)== 0){;?>
                            <div class="alert alert-warning">Bu məhsulun bənzəri yoxdur</div>
                            <?php };?>
                            <ul class="product-list">
                                <?php foreach($similar_products as $item){;?>
                                    <li class="col-sm-3 col-md-3">
                                        <div class="right-block">
                                            <h5 class="product-name">
                                                <a href="<?php echo base_url("product/index/$item->id");?>"><?php echo $item->name;?></a>
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
                                                <a title="Add to Cart" href="#">İndi sifariş et</a>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        here begin-->
        <!-- modal begin -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">İndi sifariş et</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- modal body begin -->
                        <span class="blue"><?php echo $product[0]->name ; ?></span>
                        <br>
                        <b>Cəmi:  <?php echo round($product[0]->active_price) ; ?>Azn</b>
                        <br>



                        <form action="<?php echo base_url("product/order");?>" method="post">
                            <table class="table5" style="margin: 10px 0px; max-width: 500px;">
                                <tbody>
                                    <tr>
                                        <td>Ad və soyad:</td>
                                        <td>
                                            <input required="" type="text" name="fullname" value="" maxlength="70" class="required">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Telefon:</td>
                                        <td>
                                            <select name="operator" style="width: 70px;">
                                                <option value="055">055</option>
                                                <option value="050">050</option>
                                                <option value="051">051</option>
                                                <option value="070">070</option>
                                                <option value="077">077</option>
                                                <option value="012">012</option>
                                            </select>
                                            <input style="width:70%;" required="" type="number" name="number" value="" maxlength="7" placeholder="1234567"> </td>
                                        <input type="hidden" name="product_id" value="<?php echo $product[0]->id ; ?>">
                                    </tr>
                                    <tr>
                                        <td>Ünvan:</td>
                                        <td>
                                            <input required="" type="text" name="address" value="" maxlength="70" class="required"> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input required="" type="hidden" name="miqdar" value="1">
                                            <button type="submit" class="btn btn-primary">Sifariş et</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Geri qayit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <!-- modal body end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->


    </div>
    <!-- content edn -->

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