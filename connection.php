<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'food_concept'; 

/* End config */

try{
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>

<!-- $db_host		= 'localhost';
$db_user		= 'crystalh_cryexma';
$db_pass		= 'passWORD55%&123';
$db_database	= 'crystalh_crystalexpensesmanager'; 

try{
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
} -->
