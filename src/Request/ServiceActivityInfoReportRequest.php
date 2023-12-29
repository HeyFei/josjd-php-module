<?php

declare(strict_types=1);

namespace LZJos\Request;

class ServiceActivityInfoReportRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.service.activity.info.report';
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

    private $timeStamp;

    public function setTimeStamp($timeStamp): void
    {
        $this->timeStamp = $timeStamp;
        $this->apiParas['timeStamp'] = $timeStamp;
    }

    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    private $wxAppId;

    public function setWxAppId($wxAppId): void
    {
        $this->wxAppId = $wxAppId;
        $this->apiParas['wxAppId'] = $wxAppId;
    }

    public function getWxAppId()
    {
        return $this->wxAppId;
    }

    private $pluginAppId;

    public function setPluginAppId($pluginAppId): void
    {
        $this->pluginAppId = $pluginAppId;
        $this->apiParas['pluginAppId'] = $pluginAppId;
    }

    public function getPluginAppId()
    {
        return $this->pluginAppId;
    }

    private $activityIdentification;

    public function setActivityIdentification($activityIdentification): void
    {
        $this->activityIdentification = $activityIdentification;
        $this->apiParas['activityIdentification'] = $activityIdentification;
    }

    public function getActivityIdentification()
    {
        return $this->activityIdentification;
    }

    private $activityDescription;

    public function setActivityDescription($activityDescription): void
    {
        $this->activityDescription = $activityDescription;
        $this->apiParas['activityDescription'] = $activityDescription;
    }

    public function getActivityDescription()
    {
        return $this->activityDescription;
    }

    private $serviceIdentification;

    public function setServiceIdentification($serviceIdentification): void
    {
        $this->serviceIdentification = $serviceIdentification;
        $this->apiParas['serviceIdentification'] = $serviceIdentification;
    }

    public function getServiceIdentification()
    {
        return $this->serviceIdentification;
    }

    private $wxNickname;

    public function setWxNickname($wxNickname): void
    {
        $this->wxNickname = $wxNickname;
        $this->apiParas['wxNickname'] = $wxNickname;
    }

    public function getWxNickname()
    {
        return $this->wxNickname;
    }

    private $token;

    public function setToken($token): void
    {
        $this->token = $token;
        $this->apiParas['token'] = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    private $wxOpenId;

    public function setWxOpenId($wxOpenId): void
    {
        $this->wxOpenId = $wxOpenId;
        $this->apiParas['wxOpenId'] = $wxOpenId;
    }

    public function getWxOpenId()
    {
        return $this->wxOpenId;
    }

    private $pluginOpenId;

    public function setPluginOpenId($pluginOpenId): void
    {
        $this->pluginOpenId = $pluginOpenId;
        $this->apiParas['pluginOpenId'] = $pluginOpenId;
    }

    public function getPluginOpenId()
    {
        return $this->pluginOpenId;
    }

    private $type;

    public function setType($type): void
    {
        $this->type = $type;
        $this->apiParas['type'] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    private $prizeType;

    public function setPrizeType($prizeType): void
    {
        $this->prizeType = $prizeType;
        $this->apiParas['prizeType'] = $prizeType;
    }

    public function getPrizeType()
    {
        return $this->prizeType;
    }

    private $rewardDescription;

    public function setRewardDescription($rewardDescription): void
    {
        $this->rewardDescription = $rewardDescription;
        $this->apiParas['rewardDescription'] = $rewardDescription;
    }

    public function getRewardDescription()
    {
        return $this->rewardDescription;
    }

    private $typeDescription;

    public function setTypeDescription($typeDescription): void
    {
        $this->typeDescription = $typeDescription;
        $this->apiParas['typeDescription'] = $typeDescription;
    }

    public function getTypeDescription()
    {
        return $this->typeDescription;
    }

    private $count;

    public function setCount($count): void
    {
        $this->count = $count;
        $this->apiParas['count'] = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

    private $resultStatus;

    public function setResultStatus($resultStatus): void
    {
        $this->resultStatus = $resultStatus;
        $this->apiParas['resultStatus'] = $resultStatus;
    }

    public function getResultStatus()
    {
        return $this->resultStatus;
    }

    private $testData;

    public function setTestData($testData): void
    {
        $this->testData = $testData;
        $this->apiParas['testData'] = $testData;
    }

    public function getTestData()
    {
        return $this->testData;
    }
}
