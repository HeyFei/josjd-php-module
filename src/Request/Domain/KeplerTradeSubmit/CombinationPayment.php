<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class CombinationPayment
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.CombinationPaymentParam';
    }

    private $mainPaymentType;

    public function setMainPaymentType($mainPaymentType): void
    {
        $this->params['mainPaymentType'] = $mainPaymentType;
    }

    public function getMainPaymentType()
    {
        return $this->mainPaymentType;
    }

    private $subPaymentType;

    public function setSubPaymentType($subPaymentType): void
    {
        $this->params['subPaymentType'] = $subPaymentType;
    }

    public function getSubPaymentType()
    {
        return $this->subPaymentType;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
