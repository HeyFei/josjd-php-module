<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerPushmsgSendSingleSubMsg;

class Data
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'java.util.Map';
    }

    private $dMap;

    public function setDMap($dMap): void
    {
        $this->params['dMap'] = $dMap;
    }

    public function getDMap()
    {
        return $this->dMap;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
