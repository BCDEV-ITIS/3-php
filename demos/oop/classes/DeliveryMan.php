<?php

require_once (__DIR__.'/Person.php');
require_once (__DIR__.'/../interfaces/CrudInterface.php');

class DeliveryMan extends Person implements CrudInterface {
 private string $email;
 private int $age;

 public function __construct(int $id, string $firstName, string $lastName, string $email, int $age)
 {
    // Appel du constructeur du parent donc de la classe Person avec l'opérateur parent::
    parent::__construct($id, $firstName, $lastName);
    $this->email = $email;
    $this->age = $age;
 }

 public function packages ()  {
    echo 'TODO';
 }

     public function add()
    {
        throw new \Exception('Not implemented');
    }

    public function read()
    {
        throw new \Exception('Not implemented');
    }

    public function remove()
    {
        throw new \Exception('Not implemented');
    }

    public function delete()
    {
        throw new \Exception('Not implemented');
    }

 /**
  * Get the value of email
  */
 public function getEmail(): string
 {
  return $this->email;
 }

 /**
  * Set the value of email
  */
 public function setEmail(string $email): self
 {
  $this->email = $email;

  return $this;
 }
}