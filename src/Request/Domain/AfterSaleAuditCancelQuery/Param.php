<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\AfterSaleAuditCancelQuery;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.QueryParamVo';
    }

    private $approveNotes;

    public function setApproveNotes($approveNotes): void
    {
        $this->params['approveNotes'] = $approveNotes;
    }

    public function getApproveNotes()
    {
        return $this->approveNotes;
    }

    private $serviceIdList;

    public function setServiceIdList($serviceIdList): void
    {
        $this->params['serviceIdList'] = $serviceIdList;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
