<?php

namespace Source\Models;

use Source\Core\Connect;

class Product
{

    
    private $id;
    private $nome;
    private $price;
    private $old_price;


    public function __construct(
        $nome = null,
        $price = null,
        $old_price = null,
    ) {
        $this->nome = $nome;
        $this->price = $price;
        $this->old_price = $old_price;

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getOldPrice(): int
    {
        return $this->old_price;
    }


    // Setters
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }


    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setOldPrice(int $old_price): void
    {
        $this->$old_price = $old_price;
    }

    

    public function selectAll ()
    {
        $query = "SELECT * FROM products";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

    public function selectByCategory (string $categoryName)
    {
        $query = "SELECT products.* 
        from products 
        join categories on categories.id = products.categories_id 
        where categories.nome like '{$categoryName}'";

        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        $query = "SELECT * FROM products WHERE id = {$id}";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }
}
