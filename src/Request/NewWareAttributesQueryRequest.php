<?php

declare(strict_types=1);

namespace LZJos\Request;

class NewWareAttributesQueryRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.new.ware.Attributes.query';
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

    private $ids;

    public function setIds($ids): void
    {
        $this->apiParas['ids'] = $ids;
    }

    public function getIds()
    {
        return $this->apiParas['ids'];
    }
}
