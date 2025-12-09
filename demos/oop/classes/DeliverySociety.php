<?php

class DeliverySociety extends Entity implements CRUDInterface
{
    private string $email;
    private DateTime $createdAt;
    private $parcels;

    // Dans le constructeur le paramètre parcel est optionnel car il a une valeur par défaut qui est un tableau vide
    public function __construct(int $id, string $name, string $address, string $email, DateTime $createdAt, $parcels = [])
    {
        // Appel du constructeur du parent donc de la classe Entity avec l'opérateur parent::
        parent::__construct($id, $name, $address);
        $this->email = $email;
        $this->createdAt = $createdAt;
        $this->parcels = $parcels;
    }

    public function parcelNumbers()
    {
        $numbers = [];
        foreach($this->parcels as $parcel) {
            $numbers[] = ($parcel->getNumber());
        }
        return $numbers;
    }

    public function add($parcel)
    {
        array_push($this->parcels,$parcel);
    }

    public function read()
    {
        throw new \Exception('Not implemented');
    }

    public function update($parcel)
    {
        throw new \Exception('Not implemented');
    }

    public function delete($parcel)
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
