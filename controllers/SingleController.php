<?php
class SingleController
{
    public function actionView()
    {
        require_once ROOT . '/views/single/single.php';
        return true;
    }
}