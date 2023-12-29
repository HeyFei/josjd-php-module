<?php

declare(strict_types=1);

namespace LZJos\Request;

class UnionOpenStatisticsRedpacketPidQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.union.open.statistics.redpacket.pid.query';
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return json_encode($this->apiParas);
    }

    public function check(): void
    {
    }

    public function putOtherTextParam($key, $value): void
    {
        $this->apiParas[$key] = $value;
        $this->{$key} = $value;
    }

    private $version;

    public function setVersion($version): void
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    private $redPacketPidEffectDataReq;

    public function setRedPacketPidEffectDataReq($redPacketPidEffectDataReq): void
    {
        $this->apiParas['redPacketPidEffectDataReq'] = $redPacketPidEffectDataReq;
    }

    public function getRedPacketPidEffectDataReq()
    {
        return $this->apiParas['redPacketPidEffectDataReq'];
    }
}
