<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenCommentCommentlist;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kepler.trade.sdk.export.comment.domain.CommentListReqParam';
    }

    private $productId;

    public function setProductId($productId): void
    {
        $this->params['productId'] = $productId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    private $score;

    public function setScore($score): void
    {
        $this->params['score'] = $score;
    }

    public function getScore()
    {
        return $this->score;
    }

    private $sortType;

    public function setSortType($sortType): void
    {
        $this->params['sortType'] = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    private $pageIndex;

    public function setPageIndex($pageIndex): void
    {
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    private $pageSize;

    public function setPageSize($pageSize): void
    {
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    private $logId;

    public function setLogId($logId): void
    {
        $this->params['logId'] = $logId;
    }

    public function getLogId()
    {
        return $this->logId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
