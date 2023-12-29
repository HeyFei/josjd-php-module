<?php

declare(strict_types=1);

namespace LZJos\Request;

class DetectionImagesRedLineDetectBatchRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.detection.imagesRedLineDetectBatch';
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

    private $timeZone;

    public function setTimeZone($timeZone): void
    {
        $this->timeZone = $timeZone;
        $this->apiParas['timeZone'] = $timeZone;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }

    private $key;

    public function setKey($key): void
    {
        $this->key = $key;
        $this->apiParas['key'] = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    private $value;

    public function setValue($value): void
    {
        $this->value = $value;
        $this->apiParas['value'] = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    private $detectItem;

    public function setDetectItem($detectItem): void
    {
        $this->detectItem = $detectItem;
        $this->apiParas['detectItem'] = $detectItem;
    }

    public function getDetectItem()
    {
        return $this->detectItem;
    }

    private $imageUrl;

    public function setImageUrl($imageUrl): void
    {
        $this->imageUrl = $imageUrl;
        $this->apiParas['imageUrl'] = $imageUrl;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }
}
