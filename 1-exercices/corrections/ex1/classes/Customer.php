<?php
require_once 'CustomerAbstract.php';
class Customer extends CustomerAbstract {
  private string $creditCardNumber;
  public function __construct(string $name, string $addr, int $cbNumber) {
    $this->name = $name;
    $this->addr = $addr;
    $this->creditCardNumber = $cbNumber;
  }

  public function getCreditCardNumber(): string
  {
    return $this->creditCardNumber;
  }

  public function setCreditCardNumber(string $creditCardNumber): self
  {
    $this->creditCardNumber = $creditCardNumber;

    return $this;
  }
}