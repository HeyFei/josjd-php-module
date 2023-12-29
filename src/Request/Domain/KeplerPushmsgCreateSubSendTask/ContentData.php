<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerPushmsgCreateSubSendTask;

class ContentData
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'java.util.Map';
    }

    private $cMap;

    public function setCMap($cMap): void
    {
        $this->params['cMap'] = $cMap;
    }

    public function getCMap()
    {
        return $this->cMap;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
