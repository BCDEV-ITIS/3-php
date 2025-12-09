<?php
 class Package implements CrudInterface {
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
 }