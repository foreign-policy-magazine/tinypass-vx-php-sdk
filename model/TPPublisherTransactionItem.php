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
 * The TPPublisherTransactionItem model.
 */
class TPPublisherTransactionItem {

    public static $dataTypes = array(
        "userPaymentId" => "string",
        "name" => "string",
        "paymentBillingPlan" => "string",
        "amount" => "double",
        "refundAmount" => "double",
        "paymentMethod" => "string",
        "userPaymentInfoId" => "string",
        "paymentMethodType" => "string",
        "status" => "string",
        "statusValue" => "int",
        "resourceImageUrl" => "string",
        "resourceName" => "string",
        "rid" => "string",
        "currencyCode" => "string",
        "customer" => "string",
        "date" => "string",
        "externalId" => "string",
        "refundExternalTxId" => "string",
        "uid" => "string",
        "termId" => "string",
        "price" => "double",
        "priceDisplay" => "string",
        "currency" => "string",
        "expires" => "int",
        "taxedPrice" => "string",
        "upiExtCustomerId" => "string",
        "upiExtCustomerIdLabel" => "string",
        "transactionType" => "string",
        "currencySymbol" => "string",
    );
    /**
     * @var string $userPaymentId  The user payment ID
     */
    public $userPaymentId;
    /**
     * @var string $name  The term name
     */
    public $name;
    /**
     * @var string $paymentBillingPlan  The billing plan for the term
     */
    public $paymentBillingPlan;
    /**
     * @var double $amount  The user payment amount
     */
    public $amount;
    /**
     * @var double $refundAmount  The amount of the refund to the user
     */
    public $refundAmount;
    /**
     * @var string $paymentMethod  The payment method of the subscription
     */
    public $paymentMethod;
    /**
     * @var string $userPaymentInfoId  The user payment info ID
     */
    public $userPaymentInfoId;
    /**
     * @var string $paymentMethodType  Subscription payment method with CC type
     */
    public $paymentMethodType;
    /**
     * @var string $status  The user payment status
     */
    public $status;
    /**
     * @var int $statusValue  The user payment status value
     */
    public $statusValue;
    /**
     * @var string $resourceImageUrl  The URL of the resource image
     */
    public $resourceImageUrl;
    /**
     * @var string $resourceName  The name of the resource
     */
    public $resourceName;
    /**
     * @var string $rid  The resource ID
     */
    public $rid;
    /**
     * @var string $currencyCode  The currency code under ISO 4217
     */
    public $currencyCode;
    /**
     * @var string $customer  Customer
     */
    public $customer;
    /**
     * @var string $date  Date
     */
    public $date;
    /**
     * @var string $externalId  The external user payment ID
     */
    public $externalId;
    /**
     * @var string $refundExternalTxId  The ID of the external refund transaction
     */
    public $refundExternalTxId;
    /**
     * @var string $uid  The user ID
     */
    public $uid;
    /**
     * @var string $termId  The term ID
     */
    public $termId;
    /**
     * @var double $price  Formatted user payment price include/plus tax
     */
    public $price;
    /**
     * @var string $priceDisplay  Formatted user payment price display text
     */
    public $priceDisplay;
    /**
     * @var string $currency  Currency
     */
    public $currency;
    /**
     * @var int $expires  Expires
     */
    public $expires;
    /**
     * @var string $taxedPrice  Price with tax
     */
    public $taxedPrice;
    /**
     * @var string $upiExtCustomerId  The external customer ID of the payment method (user payment info)
     */
    public $upiExtCustomerId;
    /**
     * @var string $upiExtCustomerIdLabel  The label of the external customer ID for the payment method (user payment info)
     */
    public $upiExtCustomerIdLabel;
    /**
     * @var string $transactionType  Transaction Type
     */
    public $transactionType;
    /**
     * @var string $currencySymbol  The currency symbol
     */
    public $currencySymbol;

}
