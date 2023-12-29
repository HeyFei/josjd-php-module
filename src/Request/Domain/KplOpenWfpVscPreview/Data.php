<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpVscPreview;

class Data
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.Preview';
    }

    private $cardNum;

    public function setCardNum($cardNum): void
    {
        $this->params['cardNum'] = $cardNum;
    }

    public function getCardNum()
    {
        return $this->cardNum;
    }

    private $pwd;

    public function setPwd($pwd): void
    {
        $this->params['pwd'] = $pwd;
    }

    public function getPwd()
    {
        return $this->pwd;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
