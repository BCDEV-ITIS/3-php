<?php

class OrderLine {
  private int $qty;
  private float $price;
  private Article $article;
  public function __construct(int $q, Article $a) {
    $this->qty = $q;
    $this->article = $a;
  }

  public function computePrice() {
    // Le prix d'une ligne de commande = quantité * prix unitaire de l'article choisi
    $this->price = $this->qty * $this->article->getUnitPrice();
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

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setPrice(float $price): self
  {
    $this->price = $price;

    return $this;
  }

  public function getArticle(): Article
  {
    return $this->article;
  }

  public function setArticle(Article $article): self
  {
    $this->article = $article;

    return $this;
  }
}