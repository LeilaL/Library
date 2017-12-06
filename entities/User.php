<?php

class User
{
  protected $id;
  protected $lastName;
  protected $firstName;
  protected $city;


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
  * Set the value of LastName
  *
  * @param mixed lastName
  *
  * @return self
  */

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }

  /**
  * Set the value of FirstName
  *
  * @param mixed firstName
  *
  * @return self
  */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }

  /**
  * Set the value of City
  *
  * @param mixed city
  *
  * @return self
  */
  public function setCity($city)
  {
    $this->city = $city;
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
  * Get the value of LastName
  *
  * @return mixed
  */
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
  * Get the value of FirstName
  *
  * @return mixed
  */
  public function getFirstName()
  {
    return $this->firstName;
  }

  /**
  * Get the value of City
  *
  * @return mixed
  */
  public function getCity()
  {
    return $this->city;
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
?>
