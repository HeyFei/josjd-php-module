<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class OrderParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kepler.trade.sdk.export.trade.domain.order.SubmitOrderParam';
    }

    private $orderUnionParam;

    public function setOrderUnionParam($orderUnionParam): void
    {
        $this->params['orderUnionParam'] = $orderUnionParam->getInstance()
        ;
    }

    private $payPassword;

    public function setPayPassword($payPassword): void
    {
        $this->params['payPassword'] = $payPassword;
    }

    public function getPayPassword()
    {
        return $this->payPassword;
    }

    private $checkcodeTxt;

    public function setCheckcodeTxt($checkcodeTxt): void
    {
        $this->params['checkcodeTxt'] = $checkcodeTxt;
    }

    public function getCheckcodeTxt()
    {
        return $this->checkcodeTxt;
    }

    private $checkCodeAnswer;

    public function setCheckCodeAnswer($checkCodeAnswer): void
    {
        $this->params['checkCodeAnswer'] = $checkCodeAnswer;
    }

    public function getCheckCodeAnswer()
    {
        return $this->checkCodeAnswer;
    }

    private $trackID;

    public function setTrackID($trackID): void
    {
        $this->params['trackID'] = $trackID;
    }

    public function getTrackID()
    {
        return $this->trackID;
    }

    private $userAgent;

    public function setUserAgent($userAgent): void
    {
        $this->params['userAgent'] = $userAgent;
    }

    public function getUserAgent()
    {
        return $this->userAgent;
    }

    private $remark;

    public function setRemark($remark): void
    {
        $this->params['remark'] = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    private $sopNotPutInvoice;

    public function setSopNotPutInvoice($sopNotPutInvoice): void
    {
        $this->params['sopNotPutInvoice'] = $sopNotPutInvoice;
    }

    public function getSopNotPutInvoice()
    {
        return $this->sopNotPutInvoice;
    }

    private $presaleMobile;

    public function setPresaleMobile($presaleMobile): void
    {
        $this->params['presaleMobile'] = $presaleMobile;
    }

    public function getPresaleMobile()
    {
        return $this->presaleMobile;
    }

    private $presalePayType;

    public function setPresalePayType($presalePayType): void
    {
        $this->params['presalePayType'] = $presalePayType;
    }

    public function getPresalePayType()
    {
        return $this->presalePayType;
    }

    private $giftBuyHidePrice;

    public function setGiftBuyHidePrice($giftBuyHidePrice): void
    {
        $this->params['giftBuyHidePrice'] = $giftBuyHidePrice;
    }

    public function getGiftBuyHidePrice()
    {
        return $this->giftBuyHidePrice;
    }

    private $checkCodeRid;

    public function setCheckCodeRid($checkCodeRid): void
    {
        $this->params['checkCodeRid'] = $checkCodeRid;
    }

    public function getCheckCodeRid()
    {
        return $this->checkCodeRid;
    }

    private $paymentId;

    public function setPaymentId($paymentId): void
    {
        $this->params['paymentId'] = $paymentId;
    }

    public function getPaymentId()
    {
        return $this->paymentId;
    }

    private $orderGuid;

    public function setOrderGuid($orderGuid): void
    {
        $this->params['orderGuid'] = $orderGuid;
    }

    public function getOrderGuid()
    {
        return $this->orderGuid;
    }

    private $address;

    public function setAddress($address): void
    {
        $this->params['address'] = $address->getInstance()
        ;
    }

    private $combinationPayment;

    public function setCombinationPayment($combinationPayment): void
    {
        $this->params['combinationPayment'] = $combinationPayment->getInstance()
        ;
    }

    private $invoice;

    public function setInvoice($invoice): void
    {
        $this->params['invoice'] = $invoice->getInstance()
        ;
    }

    private $freight;

    public function setFreight($freight): void
    {
        $this->params['freight'] = $freight->getInstance()
        ;
    }

    private $orderNeedMoney;

    public function setOrderNeedMoney($orderNeedMoney): void
    {
        $this->params['orderNeedMoney'] = $orderNeedMoney;
    }

    public function getOrderNeedMoney()
    {
        return $this->orderNeedMoney;
    }

    private $orderNeedMoneyStr;

    public function setOrderNeedMoneyStr($orderNeedMoneyStr): void
    {
        $this->params['orderNeedMoneyStr'] = $orderNeedMoneyStr;
    }

    public function getOrderNeedMoneyStr()
    {
        return $this->orderNeedMoneyStr;
    }

    private $clientInfo;

    public function setClientInfo($clientInfo): void
    {
        $this->params['clientInfo'] = $clientInfo->getInstance()
        ;
    }

    private $orderFrom;

    public function setOrderFrom($orderFrom): void
    {
        $this->params['orderFrom'] = $orderFrom->getInstance()
        ;
    }

    private $clientPin;

    public function setClientPin($clientPin): void
    {
        $this->params['clientPin'] = $clientPin;
    }

    public function getClientPin()
    {
        return $this->clientPin;
    }

    private $pin;

    public function setPin($pin): void
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    private $serverName;

    public function setServerName($serverName): void
    {
        $this->params['serverName'] = $serverName;
    }

    public function getServerName()
    {
        return $this->serverName;
    }

    private $userIP;

    public function setUserIP($userIP): void
    {
        $this->params['userIP'] = $userIP;
    }

    public function getUserIP()
    {
        return $this->userIP;
    }

    private $countKey;

    public function setCountKey($countKey): void
    {
        $this->params['countKey'] = $countKey;
    }

    public function getCountKey()
    {
        return $this->countKey;
    }

    private $userKey;

    public function setUserKey($userKey): void
    {
        $this->params['userKey'] = $userKey;
    }

    public function getUserKey()
    {
        return $this->userKey;
    }

    private $requestPath;

    public function setRequestPath($requestPath): void
    {
        $this->params['requestPath'] = $requestPath;
    }

    public function getRequestPath()
    {
        return $this->requestPath;
    }

    private $repAbsPathPrex;

    public function setRepAbsPathPrex($repAbsPathPrex): void
    {
        $this->params['repAbsPathPrex'] = $repAbsPathPrex;
    }

    public function getRepAbsPathPrex()
    {
        return $this->repAbsPathPrex;
    }

    private $fullName;

    public function setFullName($fullName): void
    {
        $this->params['fullName'] = $fullName;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    private $gendan;

    public function setGendan($gendan): void
    {
        $this->params['gendan'] = $gendan->getInstance()
        ;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
