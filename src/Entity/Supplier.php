<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="app_supplier")
 */
class Supplier
{
    /**
     * @var int
     * 
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
   private $id;

   /**
    * @var string
    * 
    * @ORM\Column(type="string")
    */
   private $name;

   /**
    * @var string
    * 
    * @ORM\Column(type="string")
    */
   private $email;
    

   public function getId()
   {
      return $this->id;
   }

   public function getName()
   {
      return $this->name;
   }
 
   public function setName(string $name)
   {
      $this->name = $name;

      return $this;
   }
 
   public function getEmail()
   {
      return $this->email;
   }
  
   public function setEmail(string $email)
   {
      $this->email = $email;

      return $this;
   }
}