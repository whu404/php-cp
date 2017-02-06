--TEST--
Testing php-cp platform

--SKIPIF--
<?php
require(dirname(__DIR__) . DIRECTORY_SEPARATOR . "environment.php");
?>

--FILE--
<?php
try{
    $db = new pdoProxy('mysql:dbname=mysql;host=127.0.0.1;port=3306;charset=utf8', "travis", "");
    $result = $db->query("SELECT 1")->fetchAll();
    $db->release();
    var_dump((bool) $result);
} catch (\Exception $e) {
    var_dump($e);
}
?>
--EXPECT--
bool(true)

--CLEAN--
<?php
?>

