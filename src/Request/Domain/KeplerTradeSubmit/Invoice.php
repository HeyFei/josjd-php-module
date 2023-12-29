<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class Invoice
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.InvoiceParam';
    }

    private $selectInvoiceType;

    public function setSelectInvoiceType($selectInvoiceType): void
    {
        $this->params['selectInvoiceType'] = $selectInvoiceType;
    }

    public function getSelectInvoiceType()
    {
        return $this->selectInvoiceType;
    }

    private $invoicePutType;

    public function setInvoicePutType($invoicePutType): void
    {
        $this->params['invoicePutType'] = $invoicePutType;
    }

    public function getInvoicePutType()
    {
        return $this->invoicePutType;
    }

    private $vatInvoice;

    public function setVatInvoice($vatInvoice): void
    {
        $this->params['vatInvoice'] = $vatInvoice->getInstance()
        ;
    }

    private $normalInvoice;

    public function setNormalInvoice($normalInvoice): void
    {
        $this->params['normalInvoice'] = $normalInvoice->getInstance()
        ;
    }

    private $electroInvoice;

    public function setElectroInvoice($electroInvoice): void
    {
        $this->params['electroInvoice'] = $electroInvoice->getInstance()
        ;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
