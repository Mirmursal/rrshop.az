
<!-- footer begin -->
<footer id="footer">
    <div class="container">
        <!-- introduce-box -->
        <div id="introduce-box" class="row">
            <div class="col-md-3">
                <div id="address-box">
                    <a href="<?php echo base_url("");?>">
                        <img src="http://rrshop.az/assets/data/option5/logo.png" alt="logo">
                    </a>
                    <div id="address-list">
                        <div class="tit-name">Ünvan:</div>
                        <div class="tit-contain"><?php echo $about_our_company[0]->address;?></div>
                        <div class="tit-name">Telefon:</div>
                        <div class="tit-contain"><?php echo $about_our_company[0]->contact_number;?></div>
                        <div class="tit-name">Email:</div>
                        <div class="tit-contain"><?php echo $about_our_company[0]->email;?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="introduce-title">Əlavə məlumat</div>
                <ul id="introduce-company" class="introduce-list">
                    <li>
                        <a href="<?php echo base_url("home/about");?>">Haqqımızda</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("contact");?>">Bizimlə əlaqə</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <div id="contact-box">
                    <div class="introduce-title">Sosial</div>
                    <div class="social-link">
                        <a href="<?php echo $about_our_company[0]->facebook_page_link;?>">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="<?php echo $about_our_company[0]->instagram_page_link;?>">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#introduce-box -->
        <hr>
        <!-- #trademark-text-box -->
        <div id="trademark-text-box" class="row">
            <div class="col-sm-12">
                <ul id="trademark-shoes-list" class="trademark-list">
                    <li class="trademark-text-tit">Kateqoriyalar:</li>
                <?php foreach($categories as $category){ ; ?>

                    <li>
                        <a href="#" title="<?php echo $category->name; ?>"><?php echo $category->name; ?></a>
                    </li>

                    <?php };?>
                </ul>
            </div>
        </div>
        <!-- /#trademark-text-box -->
        <div id="footer-menu-box">

            <p class="text-center">Copyrights © 2018 RRShop. All Rights Reserved. Created by
                <a target="_blank" href="https://webpage.az">Webpage.az</a>
            </p>
        </div>
        <!-- /#footer-menu-box -->
    </div>
</footer>

<!-- footer end -->