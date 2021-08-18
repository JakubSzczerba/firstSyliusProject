<?php

declare(strict_types=1);

namespace App\Entity\Product;

use App\Entity\SupplierInterface;
use App\Entity\ColorsInterface;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{
    /**
     * @var SupplierInterface|null
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Supplier", inversedBy="products")
     * @ORM\JoinColumn(name="supplier_id", referencedColumnName="id")
     */
    private $supplier;

    /**
     * @var ColorsInterface|null
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Colors", inversedBy="products")
     * @ORM\JoinColumn(name="colors_id", referencedColumnName="id")
     */
    private $colors;

    public function getSupplier(): ?SupplierInterface
    {
        return $this->supplier;
    }
    public function setSupplier(?SupplierInterface $supplier): void
    {
        $this->supplier = $supplier;
    }

    
    public function getColors(): ?ColorsInterface
    {
        return $this->colors;
    }
    public function setColors(?ColorsInterface $colors): void
    {
        $this->colors = $colors;
    }
    


    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }

   
}
