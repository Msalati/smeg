<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','smegdb');

try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
    die("ERROR: Could not connect to ".DB_SERVER." ".$e->getMessage());
    
}
$sSQL = 'SET CHARACTER SET utf8'; 
$pdo->query($sSQL);
?>
