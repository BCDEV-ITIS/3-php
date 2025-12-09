<?php

class DeliverySociety extends Entity implements CRUDInterface
{
    private string $email;
    private DateTime $createdAt;

    public function __construct(int $id, string $name, string $address, string $email, DateTime $createdAt)
    {
        // Appel du constructeur du parent donc de la classe Entity avec l'opérateur parent::
        parent::__construct($id, $name, $address);
        $this->email = $email;
        $this->createdAt = $createdAt;
    }

    public function packagesCollection()
    {
        echo 'TODO function packagesCollection()';
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

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
