<?php

declare(strict_types=1);
/**
 * API入参静态检查类
 * 可以对API的参数类型、长度、最大值等进行校验.
 */

namespace JdJos;

class RequestCheckUtil
{
    /**
     * 校验字段 fieldName 的值$value非空.
     *
     * @param mixed $value
     * @param mixed $fieldName
     */
    public static function checkNotNull($value, $fieldName): void
    {
        if (self::checkEmpty($value)) {
            throw new \Exception('client-check-error:Missing Required Arguments: '.$fieldName, 40);
        }
    }

    /**
     * 检验字段fieldName的值value 的长度.
     *
     * @param mixed $value
     * @param mixed $maxLength
     * @param mixed $fieldName
     */
    public static function checkMaxLength($value, $maxLength, $fieldName): void
    {
        if (!self::checkEmpty($value) && mb_strlen($value, 'UTF-8') > $maxLength) {
            throw new \Exception('client-check-error:Invalid Arguments:the length of '.$fieldName.' can not be larger than '.$maxLength.'.', 41);
        }
    }

    /**
     * 检验字段fieldName的值value的最大列表长度.
     *
     * @param mixed $value
     * @param mixed $maxSize
     * @param mixed $fieldName
     */
    public static function checkMaxListSize($value, $maxSize, $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        $list = preg_split('/,/', $value);
        if (\count($list) > $maxSize) {
            throw new \Exception('client-check-error:Invalid Arguments:the listsize(the string split by ",") of '.$fieldName.' must be less than '.$maxSize.' .', 41);
        }
    }

    /**
     * 检验字段fieldName的值value 的最大值
     *
     * @param mixed $value
     * @param mixed $maxValue
     * @param mixed $fieldName
     */
    public static function checkMaxValue($value, $maxValue, $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        self::checkNumeric($value, $fieldName);

        if ($value > $maxValue) {
            throw new \Exception('client-check-error:Invalid Arguments:the value of '.$fieldName.' can not be larger than '.$maxValue.' .', 41);
        }
    }

    /**
     * 检验字段fieldName的值value 的最小值
     *
     * @param mixed $value
     * @param mixed $minValue
     * @param mixed $fieldName
     */
    public static function checkMinValue($value, $minValue, $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        self::checkNumeric($value, $fieldName);

        if ($value < $minValue) {
            throw new \Exception('client-check-error:Invalid Arguments:the value of '.$fieldName.' can not be less than '.$minValue.' .', 41);
        }
    }

    /**
     * 检验字段fieldName的值value是否是number.
     *
     * @param mixed $value
     * @param mixed $fieldName
     */
    protected static function checkNumeric($value, $fieldName): void
    {
        if (!is_numeric($value)) {
            throw new \Exception('client-check-error:Invalid Arguments:the value of '.$fieldName.' is not number : '.$value.' .', 41);
        }
    }

    /**
     * 校验$value是否非空
     *  if not set ,return true;
     *	if is null , return true;.
     *
     * @param mixed $value
     */
    public static function checkEmpty($value)
    {
        if (!isset($value)) {
            return true;
        }
        if (null === $value) {
            return true;
        }
        if ('' === trim($value)) {
            return true;
        }

        return false;
    }
}
