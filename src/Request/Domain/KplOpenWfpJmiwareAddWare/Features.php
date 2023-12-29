<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpJmiwareAddWare;

class Features
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'java.util.Map';
    }

    private $featureKey;

    public function setFeatureKey($featureKey): void
    {
        $this->params['featureKey'] = $featureKey;
    }

    public function getFeatureKey()
    {
        return $this->featureKey;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
