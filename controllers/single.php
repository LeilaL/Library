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

// STATE OF BOOK + LINK A USER TO A BOOK
// if (isset($_POST['id'])){
// $update = $bookManager->getBook($_POST['id']);
// $update->getState();
//
// $user_id = $_POST['user_id'];
// $user = $update->getUser($user_id);
// $update->setUser_id($user);
//
// $update->setState($_POST['state']);
//
// $bookManager->updateState($update);
// header('Location:single.php');
//  }


include '../views/singleView.php';
?>
