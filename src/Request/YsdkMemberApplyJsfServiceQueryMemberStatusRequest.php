<?php

declare(strict_types=1);

namespace LZJos\Request;

class YsdkMemberApplyJsfServiceQueryMemberStatusRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.ysdk.MemberApplyJsfService.queryMemberStatus';
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return json_encode($this->apiParas);
    }

    public function check(): void
    {
    }

    public function putOtherTextParam($key, $value): void
    {
        $this->apiParas[$key] = $value;
        $this->{$key} = $value;
    }

    private $version;

    public function setVersion($version): void
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    private $requestId;

    public function setRequestId($requestId): void
    {
        $this->requestId = $requestId;
        $this->apiParas['requestId'] = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    private $platformCode;

    public function setPlatformCode($platformCode): void
    {
        $this->platformCode = $platformCode;
        $this->apiParas['platformCode'] = $platformCode;
    }

    public function getPlatformCode()
    {
        return $this->platformCode;
    }
}
