<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Submerchant implements JsonSerializable
{
    /**
     * Payment Facilitator Code
     * @required
     * @maps payment_facilitator_code
     * @var string $paymentFacilitatorCode public property
     */
    public $paymentFacilitatorCode;

    /**
     * Code
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * Name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Merchant Category Code
     * @required
     * @maps merchant_category_code
     * @var string $merchantCategoryCode public property
     */
    public $merchantCategoryCode;

    /**
     * Document number. Only numbers, no special characters.
     * @required
     * @var string $document public property
     */
    public $document;

    /**
     * Document type. Can be either 'individual' or 'company'
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\GetPhoneResponse $phone public property
     */
    public $phone;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\Address1 $address public property
     */
    public $address;

    /**
     * Constructor to set initial or default values of member properties
     * @param string           $paymentFacilitatorCode Initialization value for $this->paymentFacilitatorCode
     * @param string           $code                   Initialization value for $this->code
     * @param string           $name                   Initialization value for $this->name
     * @param string           $merchantCategoryCode   Initialization value for $this->merchantCategoryCode
     * @param string           $document               Initialization value for $this->document
     * @param string           $type                   Initialization value for $this->type
     * @param GetPhoneResponse $phone                  Initialization value for $this->phone
     * @param Address1         $address                Initialization value for $this->address
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->paymentFacilitatorCode = func_get_arg(0);
            $this->code                   = func_get_arg(1);
            $this->name                   = func_get_arg(2);
            $this->merchantCategoryCode   = func_get_arg(3);
            $this->document               = func_get_arg(4);
            $this->type                   = func_get_arg(5);
            $this->phone                  = func_get_arg(6);
            $this->address                = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['payment_facilitator_code'] = $this->paymentFacilitatorCode;
        $json['code']                     = $this->code;
        $json['name']                     = $this->name;
        $json['merchant_category_code']   = $this->merchantCategoryCode;
        $json['document']                 = $this->document;
        $json['type']                     = $this->type;
        $json['phone']                    = $this->phone;
        $json['address']                  = $this->address;

        return $json;
    }
}