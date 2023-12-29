<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class OrderUnionParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.OrderUnionParam';
    }

    private $unpl;

    public function setUnpl($unpl): void
    {
        $this->params['unpl'] = $unpl;
    }

    public function getUnpl()
    {
        return $this->unpl;
    }

    private $unionId;

    public function setUnionId($unionId): void
    {
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    private $unionSiteId;

    public function setUnionSiteId($unionSiteId): void
    {
        $this->params['unionSiteId'] = $unionSiteId;
    }

    public function getUnionSiteId()
    {
        return $this->unionSiteId;
    }

    private $unionUserName;

    public function setUnionUserName($unionUserName): void
    {
        $this->params['unionUserName'] = $unionUserName;
    }

    public function getUnionUserName()
    {
        return $this->unionUserName;
    }

    private $unionTime;

    public function setUnionTime($unionTime): void
    {
        $this->params['unionTime'] = $unionTime;
    }

    public function getUnionTime()
    {
        return $this->unionTime;
    }

    private $unionEx;

    public function setUnionEx($unionEx): void
    {
        $this->params['unionEx'] = $unionEx;
    }

    public function getUnionEx()
    {
        return $this->unionEx;
    }

    private $mt_xid;

    public function setMt_xid($mt_xid): void
    {
        $this->params['mt_xid'] = $mt_xid;
    }

    public function getMt_xid()
    {
        return $this->mt_xid;
    }

    private $mt_subsite;

    public function setMt_subsite($mt_subsite): void
    {
        $this->params['mt_subsite'] = $mt_subsite;
    }

    public function getMt_subsite()
    {
        return $this->mt_subsite;
    }

    private $mt_ext;

    public function setMt_ext($mt_ext): void
    {
        $this->params['mt_ext'] = $mt_ext;
    }

    public function getMt_ext()
    {
        return $this->mt_ext;
    }

    private $dmpjs;

    public function setDmpjs($dmpjs): void
    {
        $this->params['dmpjs'] = $dmpjs;
    }

    public function getDmpjs()
    {
        return $this->dmpjs;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
