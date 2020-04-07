<?php
namespace app\components;
use PDO;

class DB
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/app/config/db_params.php';
        $params = include($paramsPath);
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        try {
            $db = new PDO($dsn, $params['user'], $params['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (\Exception $e) {
            echo 'Подключение не удалось: ' . $e->getMessage();
        }
        return $db;
    }
}