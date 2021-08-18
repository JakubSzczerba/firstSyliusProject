<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;
use Doctrine\Common\Collections\Collection;

interface ColorsInterface extends ResourceInterface
{
    public function getName(): ?string;
    public function setName(?string $name): void;

    public function getProducts(): Collection;
    public function countProducts(): int;
}