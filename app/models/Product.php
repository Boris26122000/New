<?php
namespace app\models;

use app\base\BaseModel;
use app\components\DB;

class Product extends BaseModel
{
    const SHOW_LIMIT = 8;

    public static function getProductList($count = self::SHOW_LIMIT)
    {
        $count = intval($count);

        $productList = [];
        $table = 'product';
        $result = parent::getAll($table);
//        var_dump($result);
        $i=0;
        while ($row = $result[$i]) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['Name'] = $row['Name'];
            $productList[$i]['Price'] = $row['Price'];
            $productList[$i]['Image'] = $row['Image'];
            $productList[$i]['Code'] = $row['Code'];
            $i++;
        }
        return $productList;
    }

    public static  function getProductsListByCategory($categoryId = false)
    {
        if ($categoryId) {
        $db = DB::getConnection();
            $products = [];
            $result = $db->query("SELECT id,name,price,image FROM product 
                                    WHERE category_id = '{$categoryId}' ");

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['image'] = $row['image'];
                $i++;
            }
            return $products;
        }
    }

    public static function getProductById($productId)
    {
        $productId = intval($productId);

        if($productId){
            $db = DB::getConnection();
            $result = $db->query("SELECT * FROM product WHERE id = " . $productId);
            $result->setFetchMode(\PDO::FETCH_ASSOC);

            return $result->fetch();
        }


    }


}
