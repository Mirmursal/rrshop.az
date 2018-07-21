<!-- header begin -->
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="language ">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" href="#">
                        <img src="http://rrshop.az/assets/images/az.png">AZE </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="/setlang/az">
                                <img src="http://rrshop.az/assets/images/az.png">AZE</a>
                        </li>
                        <li>
                            <a href="/setlang/ru">
                                <img src="http://rrshop.az/assets/images/ru.png">РУС</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="top-bar-social">
                <a href="https://www.facebook.com/rrshopaz">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/rrshop.az">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
            <div class="support-link">
                <a class="hidden-xs" href="<?php echo base_url("home/about");?>">Haqqımızda</a>
                <a href="<?php echo base_url("contact");?>">Bizimlə əlaqə</a>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-4 col-sm-12 col-md-5 col-lg-4 header-search-box">

                <form class="form-inline" action="/search/" method="post">
                    <div class="form-group input-serach ">
                        <input type="text" placeholder="Axtarış" name="query">
                    </div>
                    <button type="submit" class="pull-right btn-search">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 logo">
                <a href="<?php echo base_url("");?>">
                    <img alt="RRShop" src="http://rrshop.az/assets/data/option5/logo.png">
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 group-button-header">
                <a title="Əlaqə nömrəsi" href="tel:0507081111" class="phonenumbber">
                    <h2>
                        <i class="fa fa-phone"></i> (050) 708 11 11</h2>
                </a>
            </div>
        </div>
    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div id="main-menu" class="col-sm-9 main-menu">
                    <div class="navbarr navbar-default">
                        <div class="container-fluid">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler ml-auto mt-2" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fa fa-bars"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <?php foreach($categories as $category) {;?>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-cat_id = "<?php echo $category->id ; ?>" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <?php echo $category->name; ?>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <?php foreach($sub_categories as $sub_category){; ?>
                                                        <?php if($sub_category->main_cat_id == $category->id){?>
                                                            <a data-subCatId = "<?php echo $sub_category->id;?>" class="dropdown-item" href="#"><?php echo $sub_category->name;?></a>
                                                      <?php  } ;?>
                                                    <?php } ;?>
                                                </div>
                                            </li>
                                        <?php } ;?>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
        </div>
    </div>
</div>
<!-- header end -->