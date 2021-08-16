<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;
use Doctrine\Common\Collections\Collection;

interface SupplierInterface extends ResourceInterface
{
    public function getName(): ?string;
    public function setName(?string $name): void;

    public function getEmail(): ?string;
    public function setEmail(?string $email): void;

    public function getState(): string;
    public function setState(string $state):void;

    public function getProducts(): Collection;
    

}