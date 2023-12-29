<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\OpenOrderSplitDeliverNew;

class Attribute1
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.gongxiao.kepler.domain.OrderExtSkuInfo';
    }

    private $batchList;

    public function setBatchList($batchList): void
    {
        $size = \count($batchList);
        for ($i = 0; $i < $size; ++$i) {
            $batchList[$i] = $batchList[$i]->getInstance()
            ;
        }
        $this->params['batchList'] = $batchList;
    }

    private $commonName;

    public function setCommonName($commonName): void
    {
        $this->params['commonName'] = $commonName;
    }

    public function getCommonName()
    {
        return $this->commonName;
    }

    private $packageSpec;

    public function setPackageSpec($packageSpec): void
    {
        $this->params['packageSpec'] = $packageSpec;
    }

    public function getPackageSpec()
    {
        return $this->packageSpec;
    }

    private $manufacturer;

    public function setManufacturer($manufacturer): void
    {
        $this->params['manufacturer'] = $manufacturer;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    private $venderSku;

    public function setVenderSku($venderSku): void
    {
        $this->params['venderSku'] = $venderSku;
    }

    public function getVenderSku()
    {
        return $this->venderSku;
    }

    private $skuName;

    public function setSkuName($skuName): void
    {
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName()
    {
        return $this->skuName;
    }

    private $skuPlace;

    public function setSkuPlace($skuPlace): void
    {
        $this->params['skuPlace'] = $skuPlace;
    }

    public function getSkuPlace()
    {
        return $this->skuPlace;
    }

    private $skuCount;

    public function setSkuCount($skuCount): void
    {
        $this->params['skuCount'] = $skuCount;
    }

    public function getSkuCount()
    {
        return $this->skuCount;
    }

    private $approvalNumber;

    public function setApprovalNumber($approvalNumber): void
    {
        $this->params['approvalNumber'] = $approvalNumber;
    }

    public function getApprovalNumber()
    {
        return $this->approvalNumber;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
