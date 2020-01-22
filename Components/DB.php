<?php
class DB
{
public static function getConnection()
{
    $paramsPath = ROOT . '/config/db_params.php';
    $params = include($paramsPath);
    $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
    try {
        $db = new PDO($dsn, $params['user'], $params['password']);
 /*       $db-exec('set names utf-8');*/
    } catch (PDOException $e) {
        echo 'Подключение не удалось: ' . $e->getMessage();
    }
    return $db;
}
}