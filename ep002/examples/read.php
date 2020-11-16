<?php

require __DIR__."/../vendor/autoload.php";

// use CoffeeCode\DataLayer\Connect;

// $conn = Connect::getInstance();
// $error = Connect::getError();

// if($error){
//     echo $error->getMessage();
//     die();
// }

// $query = $conn->query("SELECT * FROM users");
// var_dump($query->fetchAll());

use Source\Models\User;

$user = new User();
$list = $user->find()->fetch(true);

/** @var $userItem User */

foreach($list as $userItem){
    var_dump($userItem->first_name);
    var_dump($userItem->addresses());
}