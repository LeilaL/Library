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



include '../views/singleView.php';
