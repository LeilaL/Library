  <?php
require("../model/BookManager.php");
require("../entities/Book.php");

// INSTANTIATION OF BookManager
$bookManager = new BookManager();


// INSERT INPUT VALUES IN BDD
if (!empty($_POST['add']) && isset($_POST['add'])) {
  if (!empty($_POST['title'] && $_POST['author'] && $_POST['year'] && $_POST['category'] && $_POST['resume'])) {
    // ajouter tout les post dans la condition
  $book = new Book(
    ['title' => htmlspecialchars($_POST['title']),
    'author' => htmlspecialchars($_POST['author']),
    'year' => (int)htmlspecialchars($_POST['year']),
    'category' => htmlspecialchars($_POST['category']),
    'resume' => htmlspecialchars($_POST['resume'])]
  );
  $bookManager->addBook($book);
  // TO AVOID FORM RESUBMISSION WHEN PAGE IS REFRESHED :
  header('Location:index.php');
}
  }

// FOREACH FOR SHOW INFOS OF BOOKS
$books= $bookManager->getAllBooks();
foreach ($books as $key => $value) {
  $books[$key] = new Book($value);
}


// SORT BY CATEGORY
if(isset($_POST['search']))
{
  $books = $bookManager->sortCategory($_POST['category']);
}

// STATE OF BOOK
// if (!empty($_POST['state']) && isset($_POST['state'])) {
// $id
// $state = $_POST['state']
// $bookManager->updateState($state);
// }

// if (isset($_POST['submit'])){
// $update = $bookManager->getBook($_POST['id']);
// if(isset($_POST['state'])){
//     $update-> setState($_POST['state']);
// }
//   $bookManager->updateState($update);
// }

include '../views/indexView.php';
