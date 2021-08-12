<?php

declare(strict_types=1);

namespace App\Entity;


/**
 * @ORM\Entity()
 * @ORM\Table(name="app_supplier")
 */
interface SupplierInterface
{
    public function getId(): int;

    public function getName(): string;
    public function setName(string $name): void;

    public function getEmail(): string;
    public function setEmail(string $email): void;


}