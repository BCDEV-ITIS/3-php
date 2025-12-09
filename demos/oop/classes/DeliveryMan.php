<?php

require_once (__DIR__.'/Person.php');

class DeliveryMan extends Person {
 private string $email;
 private int $age;

 public function __construct(int $id, string $firstName, string $lastName, string $email, int $age)
 {
    // Appel du constructeur du parent donc de la classe Person avec l'opérateur parent::
    parent::__construct($id, $firstName, $lastName);
    $this->email = $email;
    $this->age = $age;
 }

 public function getEmail(): string
 {
  return $this->email;
 }

 // : self => type de retour, ici la classe elle même
 public function setEmail(string $email): self
 {
  $this->email = $email;
  return $this;
 }

 // type de retour un int
 public function getAge(): int
 {
  return $this->age;
 }

 public function setAge(int $age): self
 {
  $this->age = $age;
  return $this;
 }

 public function packages ()  {
    echo 'TODO';
 }

}