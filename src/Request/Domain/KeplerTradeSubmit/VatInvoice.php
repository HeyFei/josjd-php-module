<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class VatInvoice
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.VATInvoiceParam';
    }

    private $companyName;

    public function setCompanyName($companyName): void
    {
        $this->params['companyName'] = $companyName;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    private $code;

    public function setCode($code): void
    {
        $this->params['code'] = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    private $regAddr;

    public function setRegAddr($regAddr): void
    {
        $this->params['regAddr'] = $regAddr;
    }

    public function getRegAddr()
    {
        return $this->regAddr;
    }

    private $regPhone;

    public function setRegPhone($regPhone): void
    {
        $this->params['regPhone'] = $regPhone;
    }

    public function getRegPhone()
    {
        return $this->regPhone;
    }

    private $regBank;

    public function setRegBank($regBank): void
    {
        $this->params['regBank'] = $regBank;
    }

    public function getRegBank()
    {
        return $this->regBank;
    }

    private $regBankAccount;

    public function setRegBankAccount($regBankAccount): void
    {
        $this->params['regBankAccount'] = $regBankAccount;
    }

    public function getRegBankAccount()
    {
        return $this->regBankAccount;
    }

    private $normalInvoiceContent;

    public function setNormalInvoiceContent($normalInvoiceContent): void
    {
        $this->params['normalInvoiceContent'] = $normalInvoiceContent;
    }

    public function getNormalInvoiceContent()
    {
        return $this->normalInvoiceContent;
    }

    private $bookInvoiceContent;

    public function setBookInvoiceContent($bookInvoiceContent): void
    {
        $this->params['bookInvoiceContent'] = $bookInvoiceContent;
    }

    public function getBookInvoiceContent()
    {
        return $this->bookInvoiceContent;
    }

    private $invoiceConsignee;

    public function setInvoiceConsignee($invoiceConsignee): void
    {
        $this->params['invoiceConsignee'] = $invoiceConsignee->getInstance()
        ;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
