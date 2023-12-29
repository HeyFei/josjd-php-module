<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenChannelRelationGet;

class ChannelRelationGetReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.channel.relation.ChannelRelationGetReq';
    }

    private $pin;

    public function setPin($pin): void
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    private $inviteCode;

    public function setInviteCode($inviteCode): void
    {
        $this->params['inviteCode'] = $inviteCode;
    }

    public function getInviteCode()
    {
        return $this->inviteCode;
    }

    private $note;

    public function setNote($note): void
    {
        $this->params['note'] = $note;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
