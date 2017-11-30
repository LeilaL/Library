<?php
require("../model/BookManager.php");
require("../entities/Book.php");

// INSTANTIATION OF BookManager
$bookManager = new BookManager();


// INSERT INFOS IN BDD
if (!empty($_POST['add']) && isset($_POST['add'])) {
  if (!empty($_POST)) {
  $book = new Book(
    ['title' => htmlspecialchars($_POST['title']),
    'author' => htmlspecialchars($_POST['author']),
    'year' => (int)htmlspecialchars($_POST['year']),
    'category' => htmlspecialchars($_POST['category']),
    'resume' => htmlspecialchars($_POST['resume'])]
  );
  $bookManager->addBook($book);
}
  }

// FOREACH FOR SHOW INFOS
$books= $bookManager->getAllBooks();
// foreach ($books as $key => $value) {
//   $books[$key] = new Book($value);
// }


include '../views/indexView.php';
