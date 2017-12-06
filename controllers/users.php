<?php
require("../model/BookManager.php");
require("../entities/User.php");


// INSTANTIATION OF BookManager
$bookManager = new BookManager();

// FOREACH FOR SHOW INFOS OF USERS
$users= $bookManager->getAllUsers();
foreach ($users as $key => $value) {
  $users[$key] = new User($value);
}


include '../views/usersView.php';
?>
