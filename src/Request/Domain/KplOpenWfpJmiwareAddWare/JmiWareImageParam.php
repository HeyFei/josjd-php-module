<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpJmiwareAddWare;

class JmiWareImageParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.JmiWareImageParam';
    }

    private $wareId;

    public function setWareId($wareId): void
    {
        $this->params['wareId'] = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    private $imgPath;

    public function setImgPath($imgPath): void
    {
        $this->params['imgPath'] = $imgPath;
    }

    public function getImgPath()
    {
        return $this->imgPath;
    }

    private $zone;

    public function setZone($zone): void
    {
        $this->params['zone'] = $zone;
    }

    public function getZone()
    {
        return $this->zone;
    }

    private $indexId;

    public function setIndexId($indexId): void
    {
        $this->params['indexId'] = $indexId;
    }

    public function getIndexId()
    {
        return $this->indexId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
