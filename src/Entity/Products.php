<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductsRepository")
 */
class Products
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="integer")
     */
    public $quantity;

    /**
     * @ORM\Column(type="integer")
     */
    public $type_id;

    /**
     * @ORM\Column(type="text")
     */
    public $gender;

    /**
     * @ORM\Column(type="text")
     */
    public $name;

    /**
     * @ORM\Column(type="integer")
     */
    public $price;

    /**
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @ORM\Column(type="string")
     */

    public $created_date;



    public function setId(int $id):self
    {
        $this->id=$id;
        return $this;
    }




    public function getId()
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getTypeId(): ?int
    {
        return $this->type_id;
    }


    public function setTypeId(string  $type_id): self
    {
        $this->type_id = $type_id;

        return $this;
    }





    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /*

    public function getCreatedDate(): ?\DateTimeInterface
    {
        return $this->created_date;
    }

    public function setCreatedDate(\DateTimeInterface $created_date): self
    {
        $this->created_date = $created_date;

        return $this;
    }
    */


    public function getCreatedDate()
    {
        return $this->created_date;
    }

    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;

        return $this;
    }



}
