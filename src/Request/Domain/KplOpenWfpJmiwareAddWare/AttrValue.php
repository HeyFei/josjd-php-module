<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpJmiwareAddWare;

class AttrValue
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.AttrValueParam';
    }

    private $valueObj;

    public function setValueObj($valueObj): void
    {
        $this->params['valueObj'] = $valueObj;
    }

    public function getValueObj()
    {
        return $this->valueObj;
    }

    private $aliasName;

    public function setAliasName($aliasName): void
    {
        $this->params['aliasName'] = $aliasName;
    }

    public function getAliasName()
    {
        return $this->aliasName;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
