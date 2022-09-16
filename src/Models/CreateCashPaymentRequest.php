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
class CreateCashPaymentRequest implements JsonSerializable
{
    /**
     * Description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Indicates whether cash collection will be confirmed in the act of creation
     * @required
     * @var bool $confirm public property
     */
    public $confirm;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $description Initialization value for $this->description
     * @param bool   $confirm     Initialization value for $this->confirm
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->description = func_get_arg(0);
            $this->confirm     = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['description'] = $this->description;
        $json['confirm']     = $this->confirm;

        return $json;
    }
}
