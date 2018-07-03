<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *The card payment token request
 */
class CreateCardPaymentTokenRequest implements JsonSerializable
{
    /**
     * The authentication type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * The apple pay authentication request
     * @required
     * @maps apple_pay
     * @var \MundiAPILib\Models\ApplePayRequest $applePay public property
     */
    public $applePay;

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $type     Initialization value for $this->type
     * @param ApplePayRequest $applePay Initialization value for $this->applePay
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->type     = func_get_arg(0);
            $this->applePay = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']      = $this->type;
        $json['apple_pay'] = $this->applePay;

        return $json;
    }
}