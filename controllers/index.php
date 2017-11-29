<?php
require("../model/BookManager.php");
require("../entities/Book.php");

// INSTANTIATION OF BookManager
$bookManager = new BookManager();


// INSERT INFOS IN BDD
if (!empty($_POST)) {
  $book = new Book(
    ['title' => htmlspecialchars($_POST['title']),
    'year' => (int)htmlspecialchars($_POST['year']),
    'author' => htmlspecialchars($_POST['author']),
    'resume' => htmlspecialchars($_POST['resume'])]
  );
  $bookManager->addBook($book);
}

// FOREACH FOR SHOW INFOS
$books= $bookManager->getAllBooks();
foreach ($books as $key => $value) {
  $books[$key] = new Book($value);
}


include '../views/indexView.php';
