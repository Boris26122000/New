<?php
namespace app\controllers;
use app\models\Product;

class CatalogController
{
    public function actionIndex()
    {
        $latestProducts = [];
        $latestProducts = Product::getProductList(2);

        include_once ROOT . '/views/catalog/index.php';
        return true;
    }

    public function actionCategory($categoryId, $page = 1)
    {

        $categoryProducts = [];
        $categoryProducts = Product::getProductsListByCategory($categoryId);
        require_once ROOT . '/views/catalog/category.php';
        return true;
    }


}