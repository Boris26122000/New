<?php
class Category
{
    public static function getCategoryList()
    {
        $db = DB::getConnection();
        $categoryList = [];
        $result = $db->query('SELECT id,categoryName FROM categories');
        $i=0;
        while($row = $result->fetch()){
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['categoryName'] = $row['categoryName'];
            $i++;
        }

        return $categoryList;
    }
}