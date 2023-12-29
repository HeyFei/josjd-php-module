<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\AfterSaleAfsApplyCreate;

class AsCustomerDto
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.AfterSaleCustomerDto';
    }

    private $customerContactName;

    public function setCustomerContactName($customerContactName): void
    {
        $this->params['customerContactName'] = $customerContactName;
    }

    public function getCustomerContactName()
    {
        return $this->customerContactName;
    }

    private $customerTel;

    public function setCustomerTel($customerTel): void
    {
        $this->params['customerTel'] = $customerTel;
    }

    public function getCustomerTel()
    {
        return $this->customerTel;
    }

    private $customerMobilePhone;

    public function setCustomerMobilePhone($customerMobilePhone): void
    {
        $this->params['customerMobilePhone'] = $customerMobilePhone;
    }

    public function getCustomerMobilePhone()
    {
        return $this->customerMobilePhone;
    }

    private $customerEmail;

    public function setCustomerEmail($customerEmail): void
    {
        $this->params['customerEmail'] = $customerEmail;
    }

    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    private $customerPostcode;

    public function setCustomerPostcode($customerPostcode): void
    {
        $this->params['customerPostcode'] = $customerPostcode;
    }

    public function getCustomerPostcode()
    {
        return $this->customerPostcode;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
