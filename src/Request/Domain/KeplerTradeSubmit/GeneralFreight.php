<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class GeneralFreight
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.GeneralFreightParam';
    }

    private $freight;

    public function setFreight($freight): void
    {
        $this->params['freight'] = $freight;
    }

    public function getFreight()
    {
        return $this->freight;
    }

    private $verderId;

    public function setVerderId($verderId): void
    {
        $this->params['verderId'] = $verderId;
    }

    public function getVerderId()
    {
        return $this->verderId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
