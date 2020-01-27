<?php
include_once ROOT.'/models/News.php';

class NewsController
{
    public function actionIndex()
    {
        $newList = [];
        $news = new News();
        $newList = $news->getNewsList();
        \count($newList);
        var_dump($newList);
        echo "Cписок новостей";
        return true;
    }
    public function actionView($id = 1)
    {

       /* if($id)
        {
            $new = new News();
            $newsItem = $new->getNewsItemById($id);
            var_dump($newsItem);
        }
        echo "Просмотр одной новости";
       */
       require ROOT . '/views/main.php';
       return true;
    }
}
