<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="app_supplier")
 */
class Supplier implements SupplierInterface
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
    private $state = 'new';
    

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
}