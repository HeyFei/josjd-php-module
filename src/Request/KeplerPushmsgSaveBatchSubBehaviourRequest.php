<?php

declare(strict_types=1);

namespace LZJos\Request;

class KeplerPushmsgSaveBatchSubBehaviourRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.kepler.pushmsg.saveBatchSubBehaviour';
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

    private $param;

    public function setParam($param): void
    {
        $this->apiParas['param'] = $param;
    }

    public function getParam()
    {
        return $this->apiParas['param'];
    }
}
