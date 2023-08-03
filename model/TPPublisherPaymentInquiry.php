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
 * The TPPublisherPaymentInquiry model.
 */
class TPPublisherPaymentInquiry {

    public static $dataTypes = array(
        "paymentInquiryId" => "string",
        "resource" => "TPPublisherResource",
        "app" => "TPPublisherApp",
        "state" => "int",
        "inquiryReason" => "string",
        "createDate" => "string",
        "inquiryComments" => "TPPublisherInquiryComment[]",
        "category" => "string",
        "updateStateBy" => "TPPublisherUser",
        "updateStateDate" => "string",
        "startDate" => "string",
        "expireDate" => "string",
        "transactionDate" => "string",
        "transactionId" => "string",
        "spentMoney" => "double",
        "spentMoneyDisplay" => "string",
        "source" => "string",
        "currency" => "string",
        "refundedDate" => "string",
        "isAccessExpired" => "bool",
        "isAccessRevoked" => "bool",
        "isAccessUnlimited" => "bool",
        "refundAmount" => "string",
        "refundAmountRecalculated" => "bool",
    );
    /**
     * @var string $paymentInquiryId  The public ID of the inquiry (not only about payments)
     */
    public $paymentInquiryId;
    /**
     * @var TPPublisherResource $resource  The resource
     */
    public $resource;
    /**
     * @var TPPublisherApp $app  The application ref
     */
    public $app;
    /**
     * @var int $state  The inquiry state
     */
    public $state;
    /**
     * @var string $inquiryReason  The inquiry reason
     */
    public $inquiryReason;
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    /**
     * @var TPPublisherInquiryComment[] $inquiryComments  
     */
    public $inquiryComments;
    /**
     * @var string $category  The inquiry category
     */
    public $category;
    /**
     * @var TPPublisherUser $updateStateBy  
     */
    public $updateStateBy;
    /**
     * @var string $updateStateDate  The date when the state was updated
     */
    public $updateStateDate;
    /**
     * @var string $startDate  The start date.
     */
    public $startDate;
    /**
     * @var string $expireDate  The new expire date
     */
    public $expireDate;
    /**
     * @var string $transactionDate  The transaction date
     */
    public $transactionDate;
    /**
     * @var string $transactionId  The transaction ID
     */
    public $transactionId;
    /**
     * @var double $spentMoney  The money spent
     */
    public $spentMoney;
    /**
     * @var string $spentMoneyDisplay  Spent money text
     */
    public $spentMoneyDisplay;
    /**
     * @var string $source  The source
     */
    public $source;
    /**
     * @var string $currency  The user payment currency
     */
    public $currency;
    /**
     * @var string $refundedDate  The refund date
     */
    public $refundedDate;
    /**
     * @var bool $isAccessExpired  Whether the access is expired
     */
    public $isAccessExpired;
    /**
     * @var bool $isAccessRevoked  Whether the access is revoked
     */
    public $isAccessRevoked;
    /**
     * @var bool $isAccessUnlimited  Whether the access is unlimited
     */
    public $isAccessUnlimited;
    /**
     * @var string $refundAmount  The user payment amount refunded, before tax
     */
    public $refundAmount;
    /**
     * @var bool $refundAmountRecalculated  Refund amount was recalculated before
     */
    public $refundAmountRecalculated;

}
