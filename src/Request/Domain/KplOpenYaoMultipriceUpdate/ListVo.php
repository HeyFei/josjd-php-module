<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenYaoMultipriceUpdate;

class ListVo
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.ListVo';
    }

    private $venderSku;

    public function setVenderSku($venderSku): void
    {
        $this->params['venderSku'] = $venderSku;
    }

    public function getVenderSku()
    {
        return $this->venderSku;
    }

    private $priceNames;

    public function setPriceNames($priceNames): void
    {
        $size = \count($priceNames);
        for ($i = 0; $i < $size; ++$i) {
            $priceNames[$i] = $priceNames[$i]->getInstance()
            ;
        }
        $this->params['priceNames'] = $priceNames;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
