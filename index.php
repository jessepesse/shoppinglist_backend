<?php
require_once 'inc/functions.php';
require_once 'inc/headers.php';

try{
$db = openDb();
$sql = "select * from item";
$query = $db->query($sql);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
header('HTTP/1.1 200 OK');
print json_encode($result);
} catch (PDOException $pdoex) {
    returnError($pdoex);
}