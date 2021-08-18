<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="app_colors")
 */
class Colors implements ColorsInterface
{

    /**
     * @var int|null
     * 
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
   private $id;

     /**
    * @var string|null
    * 
    * @ORM\Column(type="string")
    */
    private $name;

    /**
     * @var Collection
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Product\Product", mappedBy="colors")
     */
    private $products;

    public function getId(): ?int
   {
      return $this->id;
   }

   public function getName(): ?string
   {
      return $this->name;
   }
 
   public function setName(?string $name): void
   {
      $this->name = $name;
  
   }

   public function getProducts(): Collection
    {
        return $this->products;
    }

    public function countProducts(): int
    {
       return $this->products->count();
    } 
}