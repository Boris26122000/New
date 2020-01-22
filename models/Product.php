<?php
class Product
{
    const SHOW_LIMIT = 8;

    public static function getProductList($count = self::SHOW_LIMIT)
    {
        $count = intval($count);

        $db = DB::getConnection();

        $productList = [];
        $result = $db->query('SELECT id,name,price,image,code FROM product');

        $i=0;
        while ($row = $result->fetch()){
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['image'] = $row['image'];
            $productList[$i]['code'] = $row['code'];
            $i++;
        }
        return $productList;

    }


}
