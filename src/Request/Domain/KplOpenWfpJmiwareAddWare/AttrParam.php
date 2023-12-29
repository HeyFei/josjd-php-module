<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpJmiwareAddWare;

class AttrParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.AttrParam';
    }

    private $letter;

    public function setLetter($letter): void
    {
        $this->params['letter'] = $letter;
    }

    public function getLetter()
    {
        return $this->letter;
    }

    private $attrValue;

    public function setAttrValue($attrValue): void
    {
        $this->params['attrValue'] = $attrValue->getInstance()
        ;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
