<?php

class Article {
  private string $name;
  private int $qty;
  private float $unitPrice;
  /**
   * @var array of OrderLine
   */
  private array $lines = array();
  
  public function __construct(int $q, float $price) {
    $this->qty = $q;
    $this->unitPrice = $price;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getQty(): int
  {
    return $this->qty;
  }

  public function setQty(int $qty): self
  {
    $this->qty = $qty;

    return $this;
  }

  public function getUnitPrice(): float
  {
    return $this->unitPrice;
  }

  public function setUnitPrice(float $unitPrice): self
  {
    $this->unitPrice = $unitPrice;

    return $this;
  }

  public function getLines(): array
  {
    return $this->lines;
  }

  public function setLines(array $lines): self
  {
    $this->lines = $lines;

    return $this;
  }
}