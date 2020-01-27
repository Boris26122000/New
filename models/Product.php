<?php



class Product
{
    const SHOW_LIMIT = 8;

    public static function getProductList($count = self::SHOW_LIMIT)
    {
        $count = intval($count);

        $db = DB::getConnection();

        $productList = [];
        $result = $db->query('SELECT id,name,price,image,code FROM product LIMIT'. $count);

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
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }


    }


}
