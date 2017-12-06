<?php

class BookManager
{


  // CONNECTION BDD
  public function getBdd()
  {
    $bdd = new PDO('mysql:host=localhost;dbname=LIBRARY;charset=utf8', 'root', 'leilalababsa');
    return $bdd;
  }


  // INSERT BOOK IN BDD
  public function addBook(book $b)
  {
    // var_dump($b);
    $req=$this->getBdd()->prepare('INSERT INTO books(title, author, year, category, resume)
    VALUES(:title, :author, :year, :category, :resume)');
    // $req->bindValue(':id', $b->getId());
    $req->bindValue(':title', $b->getTitle(), PDO::PARAM_STR);
    $req->bindValue(':author', $b->getAuthor(), PDO::PARAM_STR);
    $req->bindValue(':year', (int)$b->getYear());
    $req->bindValue(':category', $b->getCategory(), PDO::PARAM_STR);
    $req->bindValue(':resume', $b->getResume(), PDO::PARAM_STR);
    // $req->bindValue(':state', (int)$b->getState());
    $req->execute();
    // var_dump($req);
  }

  // SELECT ALL FROM BOOK TABLE
  public function getAllBooks()
  {
    $response=$this->getBdd()->query("SELECT * FROM books");
    $book=$response->fetchAll(PDO::FETCH_ASSOC);
    return $book;
  }

  // SELECT A BOOK
  public function getBook($id)
  {
    $response=$this->getBdd()->prepare("SELECT * FROM books WHERE id=:id");
    $response->bindValue('id', $id, PDO::PARAM_INT);
    $response->execute();
    $book =$response->fetch(PDO::FETCH_ASSOC);
    return $book;
  }

  // UPDATE BOOK STATE
    public function updateState(Book $bk)
    {
      $req=$this->getBdd()->prepare("UPDATE books WHERE id = :id");
      $req->bindValue('id', $bk->getId(), PDO::PARAM_INT);
      $req->bindValue('state', $bk->getState(), PDO::PARAM_STR);
      $req->execute();
    }

// SORT BY CATEGORY
    public function sortCategory($category)
          {
          $req=$this->getBdd()->prepare('SELECT * FROM books WHERE category = :category');
            $req->bindValue(':category', $category);
            $req->execute();
            $books = $req->fetchAll(PDO::FETCH_ASSOC);
          foreach ($books as $key => $value)
            {
              $books[$key] = new Book($value);
            }
            return $books;
          }


    // SELECT ALL FROM USERS TABLE
    public function getAllUsers()
    {
      $response=$this->getBdd()->query("SELECT * FROM users");
      $user=$response->fetchAll(PDO::FETCH_ASSOC);
      return $user;
    }
}
