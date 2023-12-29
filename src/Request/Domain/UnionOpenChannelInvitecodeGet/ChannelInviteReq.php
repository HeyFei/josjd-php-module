<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenChannelInvitecodeGet;

class ChannelInviteReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.channel.invite.ChannelInviteReq';
    }

    private $inviteType;

    public function setInviteType($inviteType): void
    {
        $this->params['inviteType'] = $inviteType;
    }

    public function getInviteType()
    {
        return $this->inviteType;
    }

    private $channelType;

    public function setChannelType($channelType): void
    {
        $this->params['channelType'] = $channelType;
    }

    public function getChannelType()
    {
        return $this->channelType;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
