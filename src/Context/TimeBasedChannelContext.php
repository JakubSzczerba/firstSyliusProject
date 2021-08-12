<?php

declare(strict_types=1);

namespace App\Context;


use Sylius\Component\Channel\Context\ChannelContextInterface;
use Sylius\Component\Channel\Model\ChannelInterface;
use Sylius\Component\Channel\Repository\ChannelRepositoryInterface;

final class TimeBasedChannelContext implements ChannelContextInterface
{

    /**
     * @var ChannelRepositoryInterface
     */
    private $channelRepository;

    public function __construct(ChannelRepositoryInterface $channelRepository)
    {
        $this->channelRepository = $channelRepository;

    }

    public function getChannel(): ChannelInterface
    {
        if ($this->isNight()) {
            return $this->channelRepository->findOneByCode('NIGHT');
        }

    }

} 