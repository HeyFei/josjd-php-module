<?php

declare(strict_types=1);

namespace LZJos\Request;

class YsdkMemberApplyJsfServiceSaveMemberAndProtocolInfoRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.ysdk.MemberApplyJsfService.saveMemberAndProtocolInfo';
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

    private $memberAndProtocolInfoJson;

    public function setMemberAndProtocolInfoJson($memberAndProtocolInfoJson): void
    {
        $this->memberAndProtocolInfoJson = $memberAndProtocolInfoJson;
        $this->apiParas['memberAndProtocolInfoJson'] = $memberAndProtocolInfoJson;
    }

    public function getMemberAndProtocolInfoJson()
    {
        return $this->memberAndProtocolInfoJson;
    }
}
