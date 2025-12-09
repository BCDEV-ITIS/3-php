<?php

abstract class CustomerAbstract {
  protected string $name;
  protected string $addr;
  protected array $orders;

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getAddr(): string
  {
    return $this->addr;
  }

  public function setAddr(string $addr): self
  {
    $this->addr = $addr;

    return $this;
  }

  public function getOrders(): array
  {
    return $this->orders;
  }

  public function setOrders(array $orders): self
  {
    $this->orders = $orders;

    return $this;
  }
}