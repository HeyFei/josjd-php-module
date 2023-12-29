<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenYaoPropertyUpdate;

class WareListVo
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.WareListVo';
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

    private $validTime;

    public function setValidTime($validTime): void
    {
        $this->params['validTime'] = $validTime;
    }

    public function getValidTime()
    {
        return $this->validTime;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
