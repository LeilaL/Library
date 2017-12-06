<?php
require("../model/BookManager.php");
require("../entities/Book.php");


// INSTANTIATION OF BookManager
$bookManager = new BookManager();

// WORK WITH GET
if (!empty($_GET['join'])) {
  $id =(int) $_GET['join'];
  $singleBook = $bookManager->getBook($id);
  $book = new Book($singleBook);
}

// STATE OF BOOK
// if (!empty($_POST['state']) && isset($_POST['state'])) {
// $id
// $state = $_POST['state']
// $bookManager->updateState($state);
// }

if (isset($_POST['id'])){
$update = $bookManager->getBook($_POST['id']);
$update->getState();

$user_id = $_POST['user_id'];
$update->setUser_id($user_id);

$update->setState($_POST['state']);
  $bookManager->updateState($update);
}

include '../views/singleView.php';
