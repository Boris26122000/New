<?php
include_once ROOT . '/models/Product.php';
class SiteController
{
    public function actionIndex()
    {
        $latestProducts = [];
        $latestProducts = Product::getProductList(2);

        require_once(ROOT . "/views/main/main.php");
        return true;
    }
}