<?php
namespace app\base;

use app\components\DB;
use Monolog\Logger;

abstract class BaseModel
{
    protected static function getAll($table)
    {
        try {
            $db = DB::getConnection();
            $stmt = $db->prepare("SELECT * FROM " . $table);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }catch (\Exception $e){
            echo "Table:" . $table ."not found" . $e->getMessage();
        }
    }

    protected function getElementById($id, $table)
    {
            $db = DB::getConnection();
        try {
            $stmt = $db->prepare("SELECT * FROM " .$table. " WHERE id=?");
            $stmt->execute(array($id));
            $result = $stmt->fetchAll();
            $loger = new Logger("Logger");

            var_dump($result);
            if($result !== NULL)
                return $result;
            else{
                throw new \Exception("Message $result is NULL");
            }
        }catch (\Exception $e){
            echo "Table:" . $table ."not found" . $e->getMessage();
        }
    }

    /*
     * setElement takes array of values and inserts data into DB in order which they are in arr
     * */
    protected function setElement($data, $table)
    {

    }
}