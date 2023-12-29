<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpVscVerifiedNotify;

class Data
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.VerifyNotify';
    }

    private $recordList;

    public function setRecordList($recordList): void
    {
        $size = \count($recordList);
        for ($i = 0; $i < $size; ++$i) {
            $recordList[$i] = $recordList[$i]->getInstance()
            ;
        }
        $this->params['recordList'] = $recordList;
    }

    private $transactionId;

    public function setTransactionId($transactionId): void
    {
        $this->params['transactionId'] = $transactionId;
    }

    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
