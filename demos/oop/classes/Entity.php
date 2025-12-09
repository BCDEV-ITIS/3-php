<?php

class Entity {
    private int $id;
    protected string $name;
    protected string $address;

    public function __construct(int $id, string $name, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
    }
    
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
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

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }
}