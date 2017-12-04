<?php

class Book
{
  protected $id;
  protected $title;
  protected $author;
  protected $year;
  const CATEGORY = [
    1 => "Roman",
    2 => "Bande Dessinée",
    3 => "Nouvelle",
    4 => "Histoire"
  ];
  protected $resume;
protected $state;


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
  * Set the value of Year
  *
  * @param mixed year
  *
  * @return self
  */
  public function setYear($year)
  {
    $this->year = (int)$year;
  }

  /**
  * Set the value of Category
  *
  * @param mixed category
  *
  * @return self
  */
  public function setCategory($category)
  {
    $this->category = $category;
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

  /**
  * Set the value of State
  *
  * @param mixed state
  *
  * @return self
  */
  public function setState($state)
  {
    $this->state = $state;
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
  * Get the value of Author
  *
  * @return mixed
  */
  public function getAuthor()
  {
    return $this->author;
  }

  /**
  * Get the value of Year
  *
  * @return mixed
  */
  public function getYear()
  {
    return $this->year;
  }

  /**
  * Get the value of Category
  *
  * @return mixed
  */
  public function getCategory()
  {
    return $this->category;
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

  /**
  * Get the value of State
  *
  * @return mixed
  */
  public function getState()
  {
    return $this->state;
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
