<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class NormalInvoice
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.NormalInvoiceParam';
    }

    private $selectedInvoiceTitle;

    public function setSelectedInvoiceTitle($selectedInvoiceTitle): void
    {
        $this->params['selectedInvoiceTitle'] = $selectedInvoiceTitle;
    }

    public function getSelectedInvoiceTitle()
    {
        return $this->selectedInvoiceTitle;
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
