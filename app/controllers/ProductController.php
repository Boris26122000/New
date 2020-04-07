<?php

namespace app\controllers;

use app\models\Product;
class ProductController
{
    public function actionView($productId)
    {
        $product = Product::getProductById($productId);
        require_once ROOT . '/views/products/view.php';
        return true;
    }
}