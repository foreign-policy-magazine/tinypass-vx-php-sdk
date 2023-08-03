<?php
/**
 * Copyright (c) 2014, Tinypass, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or
 * without modification, are permitted provided that the following
 * conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 * notice, this list of conditions and the following disclaimer in the
 * documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
 * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
 * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

/**
 * The TPPublisherVoucher model.
 */
class TPPublisherVoucher {

    public static $dataTypes = array(
        "pubId" => "string",
        "code" => "string",
        "state" => "string",
        "stateLabel" => "string",
        "recipientName" => "string",
        "recipientEmail" => "string",
        "recipientMessage" => "string",
        "sendDate" => "string",
        "createDate" => "string",
        "expires" => "string",
        "expireDate" => "string",
        "redeemed" => "string",
        "revokeDate" => "string",
        "period" => "string",
        "appName" => "string",
        "termName" => "string",
        "termType" => "string",
        "termId" => "string",
        "resourceName" => "string",
        "price" => "string",
        "transactionId" => "string",
        "isRevocable" => "bool",
        "isRefundable" => "bool",
        "isResendable" => "bool",
        "refundAmount" => "string",
        "refundAmountRecalculated" => "bool",
        "userAddress" => "TPPublisherUserAddress",
    );
    /**
     * @var string $pubId  The public ID of the voucher
     */
    public $pubId;
    /**
     * @var string $code  The voucher code
     */
    public $code;
    /**
     * @var string $state  The voucher state
     */
    public $state;
    /**
     * @var string $stateLabel  The label of the voucher state
     */
    public $stateLabel;
    /**
     * @var string $recipientName  The name of the voucher recipient
     */
    public $recipientName;
    /**
     * @var string $recipientEmail  The voucher recipient's email
     */
    public $recipientEmail;
    /**
     * @var string $recipientMessage  The message to the recepient
     */
    public $recipientMessage;
    /**
     * @var string $sendDate  When the voucher was sent
     */
    public $sendDate;
    /**
     * @var string $createDate  When the voucher was created
     */
    public $createDate;
    /**
     * @var string $expires  When the voucher expires
     */
    public $expires;
    /**
     * @var string $expireDate  When the voucher expires
     */
    public $expireDate;
    /**
     * @var string $redeemed  When the voucher was redeemed
     */
    public $redeemed;
    /**
     * @var string $revokeDate  When the voucher was revoked
     */
    public $revokeDate;
    /**
     * @var string $period  The voucher period
     */
    public $period;
    /**
     * @var string $appName  The app name
     */
    public $appName;
    /**
     * @var string $termName  The term name
     */
    public $termName;
    /**
     * @var string $termType  The term type
     */
    public $termType;
    /**
     * @var string $termId  The term ID
     */
    public $termId;
    /**
     * @var string $resourceName  The resource name
     */
    public $resourceName;
    /**
     * @var string $price  The voucher price
     */
    public $price;
    /**
     * @var string $transactionId  The transaction ID
     */
    public $transactionId;
    /**
     * @var bool $isRevocable  Whether the voucher is revocable
     */
    public $isRevocable;
    /**
     * @var bool $isRefundable  Whether the voucher payment is refundable
     */
    public $isRefundable;
    /**
     * @var bool $isResendable  Whether the voucher can be resent
     */
    public $isResendable;
    /**
     * @var string $refundAmount  The voucher refund amount
     */
    public $refundAmount;
    /**
     * @var bool $refundAmountRecalculated  Refund amount was recalculated before
     */
    public $refundAmountRecalculated;
    /**
     * @var TPPublisherUserAddress $userAddress  The user address entity
     */
    public $userAddress;

}
