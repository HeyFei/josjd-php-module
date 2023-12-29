<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerPushmsgSaveBatchSubBehaviour;

class BusinessBehaviourJsfDto
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.k.dto.BusinessBehaviourJsfDto';
    }

    private $templateId;

    public function setTemplateId($templateId): void
    {
        $this->params['templateId'] = $templateId;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

    private $behaviour;

    public function setBehaviour($behaviour): void
    {
        $this->params['behaviour'] = $behaviour;
    }

    public function getBehaviour()
    {
        return $this->behaviour;
    }

    private $businessCode;

    public function setBusinessCode($businessCode): void
    {
        $this->params['businessCode'] = $businessCode;
    }

    public function getBusinessCode()
    {
        return $this->businessCode;
    }

    private $businessId;

    public function setBusinessId($businessId): void
    {
        $this->params['businessId'] = $businessId;
    }

    public function getBusinessId()
    {
        return $this->businessId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
