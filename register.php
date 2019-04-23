<?php

if ($_POST) {
    include('class/mysql_crud.php');
    $db = new Database();
    $db->connect();
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $password = $_POST['password'];

    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $username = $db->escapeString($username); // Escape any input before insert
    $fname = $db->escapeString($fname); // Escape any input before insert
    $lname = $db->escapeString($lname); // Escape any input before insert
    $email = $db->escapeString($email); // Escape any input before insert
    $city = $db->escapeString($city); // Escape any input before insert
    $postcode = $db->escapeString($postcode); // Escape any input before insert
    $password = $db->escapeString($password); // Escape any input before insert
    $age = $db->escapeString($age); // Escape any input before insert
    $gender = $db->escapeString($gender); // Escape any input before insert

    $password = md5($password); // md5 for password.

    $array_in = array(
        'username'=>$username,
        'fname'=>$fname,
        'lname'=>$lname,
        'email'=>$email,
        'city'=>$city,
        'postcode'=>$postcode,
        'password'=>$password,
        'age'=>$age,
        'gender'=>$gender
    );

    $db->insert('users', $array_in);  // Table name, column names and respective values
    print_r($array_in);
    $res = $db->getResult();
    print_r($res);
    echo "Data rows inserted in database succeseful.";
}
else {
    echo 'No post data!';
}

// $k = 500;
// for ($i=1; $i < $k; $i++) {
//     $name = "name".$i;
//     $email = "email".$i."@email.com";
//     $array_in = array(
//                 'fname'=>$fname,
//                 'lname'=>$lname,
//                 'city'=>$city,
//                 'postcode'=>$postcode,
//                 'password'=>$password
//             );
//     $db->insert('CRUDClass', $array_in);  // Table name, column names and respective values
//     $res = $db->getResult();
//     print_r($array_in);
// }

//print results

