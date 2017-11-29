<?php

class Book
{
  protected $id;
  protected $title;
  protected $date
  protected $author;
  protected $resume;

  const CATEGORY = [
  R => "Roman",
  BD => "Bande Dessinée",
  N => "Nouvelle",
  H => "Histoire"
];


  // SETTERS
  /**
  * Set the value of Id
  *
  * @param mixed id
  *
  * @return self
  */
  public function setId($id)
  {
    $this->id = (int)$id;
  }

  /**
  * Set the value of Title
  *
  * @param mixed title
  *
  * @return self
  */

  public function setTitle($title)
  {
    $this->title = $title;
  }


  /**
  * Set the value of Date
  *
  * @param mixed date
  *
  * @return self
  */
  public function setDate($date)
  {
    $this->date = (int)$date;
  }

  /**
  * Set the value of Author
  *
  * @param mixed author
  *
  * @return self
  */
  public function setAuthor($author)
  {
    $this->author = $author;
  }

  /**
  * Set the value of Resume
  *
  * @param mixed resume
  *
  * @return self
  */
  public function setResume($resume)
  {
    $this->resume = $resume;
  }

  // GETTERS

  /**
  * Get the value of Id
  *
  * @param empty
  *
  * @return int
  */
  public function getId()
  {
    return $this->id;
  }

  /**
  * Get the value of Title
  *
  * @return mixed
  */
  public function getTitle()
  {
    return $this->title;
  }

  /**
  * Get the value of Date
  *
  * @return mixed
  */
  public function getDate()
  {
    return $this->date;
  }

  /**
  * Get the value of Author
  *
  * @return mixed
  */
  public function getAuthor()
  {
    return $this->author;
  }

  /**
  * Get the value of Resume
  *
  * @return mixed
  */
  public function getResume()
  {
    return $this->resume;
  }

  // METHODS

  
  public function hydrate($data)
  {
    foreach ($data as $key => $value) {
      $method = "set" .ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  public function __construct($data)
  {
    $this->hydrate($data);
  }
}
