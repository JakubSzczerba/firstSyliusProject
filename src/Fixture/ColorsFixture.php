<?php

declare(strict_types=1);

namespace App\Fixture;

use App\Entity\Colors;
use Doctrine\Common\Persistence\ObjectManager;
use Sylius\Bundle\FixturesBundle\Fixture\AbstractFixture;
use Sylius\Bundle\FixturesBundle\Fixture\FixtureInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Sylius\Component\Resource\Factory\FactoryInterface;
use Doctrine\ORM\EntityManagerInterface;

final class ColorsFixture extends AbstractFixture implements FixtureInterface
{
    /** @var FactoryInterface */
    private $colorsFactory;

    /** @var EntityManagerInterface */        
    private $colorsManager;

    public function __construct(FactoryInterface $colorsFactory, EntityManagerInterface $colorsManager)
    {
        $this->colorsFactory = $colorsFactory;
        $this->colorsManager = $colorsManager;
    }


    public function load(array $options): void 
    {
        foreach ($this->getColors() as [$color]) {
            for ($i = 0; $i < $options['count']; $i++) {       
                /** @var ColorsInterface $colors */
                $colors = $this->colorsFactory->createNew();
                $colors->setName($color);
                $this->colorsManager->persist($colors);
            }

        }

        $this->colorsManager->flush();

    }

    public function getColors(): array
    {
        return [
            ['red'],
            ['blue'],
            ['green'],
        ];
    }

    public function getName(): string 
    {
        return 'colors';
    }

    protected function configureOptionsNode(ArrayNodeDefinition $optionsNode): void
    {
        $optionsNode
            ->children()
            ->integerNode('count')
            ;

    }
}