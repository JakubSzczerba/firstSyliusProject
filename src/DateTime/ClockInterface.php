<?php

declare(strict_types=1);

namespace App\DateTime;


use Sylius\Component\Channel\Context\ChannelContextInterface;
use Sylius\Component\Channel\Model\ChannelInterface;
use Sylius\Component\Channel\Repository\ChannelRepositoryInterface;

interface ClockInterface
{
    public function isNight(): bool;
}