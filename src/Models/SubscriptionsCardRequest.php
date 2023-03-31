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
class SubscriptionsCardRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\Card1 $card public property
     */
    public $card;

    /**
     * Credit card id
     * @required
     * @maps card_id
     * @var string $cardId public property
     */
    public $cardId;

    /**
     * Constructor to set initial or default values of member properties
     * @param Card1  $card   Initialization value for $this->card
     * @param string $cardId Initialization value for $this->cardId
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->card   = func_get_arg(0);
            $this->cardId = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['card']    = $this->card;
        $json['card_id'] = $this->cardId;

        return $json;
    }
}