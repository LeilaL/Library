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
  public function addBook (book $b)
  {
    $req=$this->getBdd()->prepare('INSERT INTO books(id, title, author, year, category, resume)
    VALUES(:id, :title, :author, :year, :category, :resume)');
    $req->bindValue(':id', $b->getId());
    $req->bindValue(':title', $b->getName(), PDO::PARAM_STR);
    $req->bindValue(':author', $b->getAmount(), PDO::PARAM_INT);
    $req->bindValue(':year', $b->getAmount(), PDO::PARAM_INT);
    $req->bindValue(':category', $b->getAmount(), PDO::PARAM_INT);
    $req->bindValue(':resume', $b->getAmount(), PDO::PARAM_INT);
    $req->execute();
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
      $req->bindValue('amount', $bk->getAmount(), PDO::PARAM_INT);
      $req->execute();
    }
}
