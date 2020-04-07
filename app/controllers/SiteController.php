<?php
namespace app\controllers;

use app\models\Product;

class SiteController
{
    public function actionIndex()
    {
        $latestProducts = [];
        $latestProducts = Product::getProductList();

        require_once(ROOT . "/app/views/main/main.php");
        return true;
    }
}