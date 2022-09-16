<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;
use MundiAPILib\Utils\DateTimeHelper;

/**
 *Transfer response
 */
class GetTransferResponse implements JsonSerializable
{
    /**
     * Id
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * Transfer amount
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * Transfer status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Transfer creation date
     * @required
     * @maps created_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * Transfer last update date
     * @required
     * @maps updated_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $updatedAt public property
     */
    public $updatedAt;

    /**
     * Bank account
     * @required
     * @maps bank_account
     * @var \MundiAPILib\Models\GetBankAccountResponse $bankAccount public property
     */
    public $bankAccount;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                  $id          Initialization value for $this->id
     * @param integer                 $amount      Initialization value for $this->amount
     * @param string                  $status      Initialization value for $this->status
     * @param \DateTime               $createdAt   Initialization value for $this->createdAt
     * @param \DateTime               $updatedAt   Initialization value for $this->updatedAt
     * @param GetBankAccountResponse  $bankAccount Initialization value for $this->bankAccount
     * @param array                   $metadata    Initialization value for $this->metadata
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->id          = func_get_arg(0);
            $this->amount      = func_get_arg(1);
            $this->status      = func_get_arg(2);
            $this->createdAt   = func_get_arg(3);
            $this->updatedAt   = func_get_arg(4);
            $this->bankAccount = func_get_arg(5);
            $this->metadata    = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['id']           = $this->id;
        $json['amount']       = $this->amount;
        $json['status']       = $this->status;
        $json['created_at']   = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']   = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['bank_account'] = $this->bankAccount;
        $json['metadata']     = $this->metadata;

        return $json;
    }
}
