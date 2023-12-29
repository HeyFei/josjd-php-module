<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class Freight
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.OrderFreightParam';
    }

    private $generalFreight;

    public function setGeneralFreight($generalFreight): void
    {
        $this->params['generalFreight'] = $generalFreight->getInstance()
        ;
    }

    private $remoteRegionFreightList;

    public function setRemoteRegionFreightList($remoteRegionFreightList): void
    {
        $size = \count($remoteRegionFreightList);
        for ($i = 0; $i < $size; ++$i) {
            $remoteRegionFreightList[$i] = $remoteRegionFreightList[$i]->getInstance()
            ;
        }
        $this->params['remoteRegionFreightList'] = $remoteRegionFreightList;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
