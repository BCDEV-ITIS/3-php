<?php

class Company extends CustomerAbstract {
  private string $contact;
  private float $maxAmountCredit;

  public function editMonthBill(int $param) {}

  public function getContact(): string
  {
    return $this->contact;
  }

  public function setContact(string $contact): self
  {
    $this->contact = $contact;

    return $this;
  }

  public function getMaxAmountCredit(): float
  {
    return $this->maxAmountCredit;
  }

  public function setMaxAmountCredit(float $maxAmountCredit): self
  {
    $this->maxAmountCredit = $maxAmountCredit;

    return $this;
  }
}