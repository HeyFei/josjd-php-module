<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class ElectroInvoice
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.ElectroInvoiceParam';
    }

    private $selectInvoiceTitle;

    public function setSelectInvoiceTitle($selectInvoiceTitle): void
    {
        $this->params['selectInvoiceTitle'] = $selectInvoiceTitle;
    }

    public function getSelectInvoiceTitle()
    {
        return $this->selectInvoiceTitle;
    }

    private $selectBookInvoiceContent;

    public function setSelectBookInvoiceContent($selectBookInvoiceContent): void
    {
        $this->params['selectBookInvoiceContent'] = $selectBookInvoiceContent;
    }

    public function getSelectBookInvoiceContent()
    {
        return $this->selectBookInvoiceContent;
    }

    private $selectNormalInvoiceContent;

    public function setSelectNormalInvoiceContent($selectNormalInvoiceContent): void
    {
        $this->params['selectNormalInvoiceContent'] = $selectNormalInvoiceContent;
    }

    public function getSelectNormalInvoiceContent()
    {
        return $this->selectNormalInvoiceContent;
    }

    private $invoiceConsigneeEmail;

    public function setInvoiceConsigneeEmail($invoiceConsigneeEmail): void
    {
        $this->params['invoiceConsigneeEmail'] = $invoiceConsigneeEmail;
    }

    public function getInvoiceConsigneeEmail()
    {
        return $this->invoiceConsigneeEmail;
    }

    private $invoiceConsigneePhone;

    public function setInvoiceConsigneePhone($invoiceConsigneePhone): void
    {
        $this->params['invoiceConsigneePhone'] = $invoiceConsigneePhone;
    }

    public function getInvoiceConsigneePhone()
    {
        return $this->invoiceConsigneePhone;
    }

    private $compayName;

    public function setCompayName($compayName): void
    {
        $this->params['compayName'] = $compayName;
    }

    public function getCompayName()
    {
        return $this->compayName;
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

    public function getInstance()
    {
        return $this->params;
    }
}
