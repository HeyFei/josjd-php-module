<?php

declare(strict_types=1);

namespace LZJos\Request;

class NewWareAttributeGroupsQueryRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.new.ware.AttributeGroups.query';
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

    private $id;

    public function setId($id): void
    {
        $this->id = $id;
        $this->apiParas['id'] = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}
