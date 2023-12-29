<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpVscMakeCertCallback;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'java.util.Map';
    }

    private $merchantRequestWrap;

    public function setMerchantRequestWrap($merchantRequestWrap): void
    {
        $this->params['merchantRequestWrap'] = $merchantRequestWrap->getInstance()
        ;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
