<?php
namespace app\models;
use app\base\BaseModel;

class Category extends BaseModel
{
    public static function getCategoryList()
    {
        $categoryList = [];
        $result = self::getAll("categories");
        $i=0;
        while($row = $result[$i]){
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['categoryName'] = $row['categoryName'];
            $i++;
        }

        return $categoryList;
    }
}