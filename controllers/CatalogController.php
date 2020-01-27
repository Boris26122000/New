<?php

include_once ROOT . '/models/Product.php';
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
        echo 'Category :' . $categoryId;
        echo '<br>Page :' . $page;

        $categoryProducts = [];
        $categoryProducts = Product::getProductsListByCategory($categoryId);
        require_once ROOT . '/views/catalog/category.php';
        return true;
    }


}