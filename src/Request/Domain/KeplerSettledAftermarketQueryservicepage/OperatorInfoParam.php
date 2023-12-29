<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerSettledAftermarketQueryservicepage;

class OperatorInfoParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.OperatorInfoParam';
    }

    private $operatorPin;

    public function setOperatorPin($operatorPin): void
    {
        $this->params['operatorPin'] = $operatorPin;
    }

    public function getOperatorPin()
    {
        return $this->operatorPin;
    }

    private $operatorName;

    public function setOperatorName($operatorName): void
    {
        $this->params['operatorName'] = $operatorName;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    private $operatorRemark;

    public function setOperatorRemark($operatorRemark): void
    {
        $this->params['operatorRemark'] = $operatorRemark;
    }

    public function getOperatorRemark()
    {
        return $this->operatorRemark;
    }

    private $operatorDate;

    public function setOperatorDate($operatorDate): void
    {
        $this->params['operatorDate'] = $operatorDate;
    }

    public function getOperatorDate()
    {
        return $this->operatorDate;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
