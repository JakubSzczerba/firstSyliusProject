<?php

declare(strict_types=1);

namespace App\Fixture;

use Faker\Generator;
use Doctrine\Common\Persistence\ObjectManager;
use Sylius\Bundle\FixturesBundle\Fixture\AbstractFixture;
use Sylius\Bundle\FixturesBundle\Fixture\FixtureInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Sylius\Component\Resource\Factory\FactoryInterface;

final class SupplierFixture extends AbstractFixture implements FixtureInterface
{
    /** @var FactoryInterface */
    private $supplierFactory;

    /** @var ObjectManager */
    private $supplierManager;

    /** @var Generator */
    private $generator;


    public function load(array $options): void 
    {
        for ($i = 0; $i < $options['count']; $i++) {

        }

    }

    public function getName(): string 
    {
        return 'supplier';
    }

    protected function configureOptionsNode(ArrayNodeDefinition $optionsNode): void
    {
        $optionsNode
            ->children()
            ->integerNode('count')
            ;

    }

}