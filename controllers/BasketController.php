<?php
class BasketController
{
    public function actionView()
    {
        require_once ROOT . "/views/basket/checkout.php";
        return true;
    }
}