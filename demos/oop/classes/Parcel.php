<?php

 class Parcel implements CRUDInterface {
    private int $number;
    private string $address;

    public function __construct(int $number, string $address)
    {
        $this->number = $number;
        $this->address = $address;
    }
    
    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function add($p)
    {
        throw new \Exception('Not implemented');
    }

    public function read()
    {
        throw new \Exception('Not implemented');
    }

    public function update($p)
    {
        throw new \Exception('Not implemented');
    }

    public function delete($p)
    {
        throw new \Exception('Not implemented');
    }
 }