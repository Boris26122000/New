<?php
class News
{
    public function getNewsItemById($id)
    {
        $db = DB::getConnection();
        $result = $db->query('SELECT * FROM authors WHERE id=' . $id);
        $author = $result->fetch();
        return $author;
    }

    public function getNewsList()
    {
        $db = DB::getConnection();
        $result = $db->query('SELECT * FROM authors');
        $author = $result->fetch();
    }
}