<?php
require ROOT . '/views/header/header.php';
?>
<!--content-->
<div class="content">
    <div class="container">
        <div class="content-top">
            <h1>Catalog</h1>
            <div class="grid-in">
                <?php
                foreach($latestProducts as $AllProducts) {?>
                    <div class="col-md-4 grid-top">
                        <a href="/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive"
                                                                                            src="../images/pi.jpg" alt="">
                            <div class="b-wrapper">
                                <h3 class="b-animate b-from-left    b-delay03 ">
                                    <span><?= $AllProducts['name']?></span>
                                </h3>
                            </div>
                        </a>
                        <a><div data-id="<?= $AllProducts['id']?>" data-name="<?= $AllProducts['name']?>" data-price="<?= $AllProducts['price']?>" class="addCart">Add To Cart</div></a>
                        <p class="price"><?= $AllProducts['price']?></p>
                        <p class="name"><a href="/single"><?= $AllProducts['name']?></a></p>
                    </div>
                <?php }?>
            </div>

            <!---->
            <div class="content-bottom">
                <ul>
                    <li><a href="#"><img class="img-responsive" src="../../../images/lo.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="../../../images/lo1.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="../../../images/lo2.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="../../../images/lo3.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="../../../images/lo4.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="../../../images/lo5.png" alt=""></a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer-top-at">

                    <div class="col-md-4 amet-sed">
                        <h4>MORE INFO</h4>
                        <ul class="nav-bottom">
                            <li><a href="#">How to order</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="views/contact.php">Location</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Membership</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 amet-sed ">
                        <h4>CONTACT US</h4>

                        <p>
                            Contrary to popular belief</p>
                        <p>The standard chunk</p>
                        <p>office: +12 34 995 0792</p>
                        <ul class="social">
                            <li><a href="#"><i> </i></a></li>
                            <li><a href="#"><i class="twitter"> </i></a></li>
                            <li><a href="#"><i class="rss"> </i></a></li>
                            <li><a href="#"><i class="gmail"> </i></a></li>

                        </ul>
                    </div>
                    <div class="col-md-4 amet-sed">
                        <h4>Newsletter</h4>
                        <p>Sign Up to get all news update
                            and promo</p>
                        <form>
                            <input type="text" value="" onfocus="this.value='';"
                                   onblur="if (this.value == '') {this.value ='';}">
                            <input type="submit" value="Sign up">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="footer-class">
                <p>© 2015 New store All Rights Reserved | Design by <a href="http://w3layouts.com/"
                                                                       target="_blank">W3layouts</a></p>
            </div>
        </div>
        <?php include_once ROOT . '/views/footer/footer.php'; ?>
