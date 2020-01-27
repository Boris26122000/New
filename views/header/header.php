<?php
include_once ROOT . '/models/Category.php';
$categories = [];
$categories = Category::getCategoryList();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Store A Ecommerce</title>
    <link href="/template/css/bootstrap.css" rel="stylesheet" type="text/css">
<!--    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css" type="text/css">-->

    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/template/css/style.css" rel="stylesheet" type="text/css">
    <link href="/template/css/ftlexslider.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link href="/template/css/memenu.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--            модальное окно-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="myform">
            <div class="modal-body">

                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <br>
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="button" class="btn btn-primary login" value="Login">
            </div>
            </form>
        </div>
    </div>
</div>
<!--            конец модального окна-->
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="search">
                <form>
                    <input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="Go">
                </form>
            </div>
            <div class="header-left">
                <ul>
                    <li><a class="btn btn-primary lock" data-toggle="modal" data-target="#exampleModal">Login</a></li>
                    <li><a class="lock btn btn-primary" href="/registration">Register</a></li>
                    <li>
                    </li>

                </ul>
                <input type="button" class="showCart">
                <div class="cart box_1">
                    <a href="/basket">
                        <h3> <div class="total">
                                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items<script>var count = 0; document.write(count)</script>)</div>
                            <img src="../../images/cart.png" alt=""/></h3>
                    </a>
                    <p><a href="/" class="simpleCart_empty">Empty Cart</a></p>

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container">


        <div class="head-top">
            <div class="logo">
                <a href="/"><img src="../../images/logo.png" alt=""></a>
            </div>
            <div class=" h_menu4">
                <ul class="memenu skyblue">
                    <li class="active grid"><a class="color8" href="/">Home</a></li>
                    <li><a class="color1" href="/catalog">Shop</a>
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                              <?php foreach($categories as $category){?>
                                                <li><a href="/category/<?= $category['id']?>"><?= $category['categoryName']?></a></li>
                                              <?php }?>
                                        </ul>
                                    </div>
                                </div>
                                <!--<div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="../products/products.php">Shirts</a></li>
                                            <li><a href="../products/products.php">Shoes, Boots & Trainers</a></li>
                                            <li><a href="../products/products.php">Shorts</a></li>
                                            <li><a href="../products/products.php">Suits & Blazers</a></li>
                                            <li><a href="../products/products.php">Sunglasses</a></li>
                                            <li><a href="../products/products.php">Sweatpants</a></li>
                                            <li><a href="../products/products.php">Swimwear</a></li>
                                            <li><a href="../products/products.php">Trousers & Chinos</a></li>
                                            <li><a href="../products/products.php">T-Shirts</a></li>
                                            <li><a href="../products/products.php">Underwear & Socks</a></li>
                                            <li><a href="../products/products.php">Vests</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="../products/products.php">Levis</a></li>
                                            <li><a href="../products/products.php">Persol</a></li>
                                            <li><a href="../products/products.php">Nike</a></li>
                                            <li><a href="../products/products.php">Edwin</a></li>
                                            <li><a href="../products/products.php">New Balance</a></li>
                                            <li><a href="../products/products.php">Jack & Jones</a></li>
                                            <li><a href="../products/products.php">Paul Smith</a></li>
                                            <li><a href="../products/products.php">Ray-Ban</a></li>
                                            <li><a href="../products/products.php">Wood Wood</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="grid"><a class="color2" href="#">	Lookbook</a>
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="../products/products.php">Accessories</a></li>
                                            <li><a href="../products/products.php">Bags</a></li>
                                            <li><a href="../products/products.php">Caps & Hats</a></li>
                                            <li><a href="../products/products.php">Hoodies & Sweatshirts</a></li>
                                            <li><a href="../products/products.php">Jackets & Coats</a></li>
                                            <li><a href="../products/products.php">Jeans</a></li>
                                            <li><a href="../products/products.php">Jewellery</a></li>
                                            <li><a href="../products/products.php">Jumpers & Cardigans</a></li>
                                            <li><a href="../products/products.php">Leather Jackets</a></li>
                                            <li><a href="../products/products.php">Long Sleeve T-Shirts</a></li>
                                            <li><a href="../products/products.php">Loungewear</a></li>
                                        </ul>
                                    </div>
                                </div>-->
                                <!--<div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="../products/products.php">Shirts</a></li>
                                            <li><a href="../products/products.php">Shoes, Boots & Trainers</a></li>
                                            <li><a href="../products/products.php">Shorts</a></li>
                                            <li><a href="../products/products.php">Suits & Blazers</a></li>
                                            <li><a href="../products/products.php">Sunglasses</a></li>
                                            <li><a href="../products/products.php">Sweatpants</a></li>
                                            <li><a href="../products/products.php">Swimwear</a></li>
                                            <li><a href="../products/products.php">Trousers & Chinos</a></li>
                                            <li><a href="../products/products.php">T-Shirts</a></li>
                                            <li><a href="../products/products.php">Underwear & Socks</a></li>
                                            <li><a href="">Vests</a></li>
                                        </ul>
                                    </div>
                                </div>-->
                                <!--<div class="col1">
                                    <div class="h_nav">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="../products/products.php">Levis</a></li>
                                            <li><a href="../products/products.php">Persol</a></li>
                                            <li><a href="../products/products.php">Nike</a></li>
                                            <li><a href="../products/products.php">Edwin</a></li>
                                            <li><a href="../products/products.php">New Balance</a></li>
                                            <li><a href="../products/products.php">Jack & Jones</a></li>
                                            <li><a href="../products/products.php">Paul Smith</a></li>
                                            <li><a href="../products/products.php">Ray-Ban</a></li>
                                            <li><a href="../products/products.php">Wood Wood</a></li>
                                        </ul>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </li>
                    <li><a class="color4" href="../blog.php">Blog</a></li>
                    <li><a class="color6" href="../contact.php">Conact</a></li>
                </ul>
            </div>


