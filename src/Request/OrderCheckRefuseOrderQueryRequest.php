<?php

declare(strict_types=1);

namespace LZJos\Request;

class OrderCheckRefuseOrderQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'biz.order.checkRefuseOrder.query';
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

    private $date;

    public function setDate($date): void
    {
        $this->apiParas['date'] = $date;
    }

    public function getDate()
    {
        return $this->apiParas['date'];
    }

    private $page;

    public function setPage($page): void
    {
        $this->apiParas['page'] = $page;
    }

    public function getPage()
    {
        return $this->apiParas['page'];
    }
}
