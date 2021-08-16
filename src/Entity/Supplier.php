<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="app_supplier")
 */
class Supplier implements SupplierInterface
{
   public const STATE_NEW = 'new';
   public const STATE_TRUSTED = 'trusted';


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
    * @var string|null
    * 
    * @ORM\Column(type="string")
    */
   private $email;

   /**
    * @var string
    * 
    * @ORM\Column(type="string")
    */
    private $state = self::STATE_NEW;

    /**
     * @var Collection
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Product\Product", mappedBy="supplier")
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
 
   public function getEmail(): ?string
   {
      return $this->email;
   }
  
   public function setEmail(?string $email): void
   {
      $this->email = $email;

   }

   
    public function getState(): string
    {
        return $this->state;
    }

    
    public function setState(string $state):void 
    {
        $this->state = $state;
    }

    public function getProducts(): Collection
    {
        return $this->products;
    }

    
}