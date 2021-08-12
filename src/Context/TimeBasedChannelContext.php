<?php

declare(strict_types=1);

namespace App\Context;

final class TimeBasedChannelContext implements ChannelContextInterface
{

    /**
     * @var ChannelRepositoryInterface
     */
    private $channelRepository;

    public function getChannel(): ChannelInterface
    {

    }

}