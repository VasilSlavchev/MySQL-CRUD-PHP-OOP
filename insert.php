<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
// $email = $db->escapeString($email); // Escape any input before insert

$k = 500;
for ($i=1; $i < $k; $i++) {
    $name = "name".$i;
    $email = "email".$i."@email.com";
    $array_in = array('name'=>$name,'email'=>$email);
    $db->insert('CRUDClass', $array_in);  // Table name, column names and respective values
    $res = $db->getResult();
    // print_r($array_in);
}
//print results
print_r($res);
echo "inserted rows in database.";
