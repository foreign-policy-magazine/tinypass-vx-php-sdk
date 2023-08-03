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
 * The TPPublisherUserPaymentDTO model.
 */
class TPPublisherUserPaymentDTO {

    public static $dataTypes = array(
        "userPaymentId" => "string",
        "createDate" => "string",
        "userPaymentState" => "string",
        "renewal" => "bool",
        "amount" => "double",
        "price" => "string",
        "currency" => "string",
        "refundable" => "bool",
        "subscription" => "TPPublisherTermConversionSubscription",
        "term" => "TPPublisherTerm",
        "tax" => "double",
        "taxBillingPlan" => "string",
        "paymentMethod" => "string",
        "upiExtCustomerId" => "string",
        "upiExtCustomerIdLabel" => "string",
        "externalTransactionId" => "string",
        "trackingId" => "string",
        "originalPrice" => "string",
    );
    /**
     * @var string $userPaymentId  The user payment ID
     */
    public $userPaymentId;
    /**
     * @var string $createDate  The creation date of the user payment (the ISO 8601 format)
     */
    public $createDate;
    /**
     * @var string $userPaymentState  The transactions state (\"completed\", \"disputed\" ,\"refunded\", \"verified\", \"canceled\" or \"pending\")
     */
    public $userPaymentState;
    /**
     * @var bool $renewal  User payment renewal
     */
    public $renewal;
    /**
     * @var double $amount  The user payment amount
     */
    public $amount;
    /**
     * @var string $price  Formatted user payment price include/plus tax
     */
    public $price;
    /**
     * @var string $currency  The user payment currency
     */
    public $currency;
    /**
     * @var bool $refundable  Whether the user payment is refundable
     */
    public $refundable;
    /**
     * @var TPPublisherTermConversionSubscription $subscription  
     */
    public $subscription;
    /**
     * @var TPPublisherTerm $term  
     */
    public $term;
    /**
     * @var double $tax  The user payment tax
     */
    public $tax;
    /**
     * @var string $taxBillingPlan  The tax billing plan
     */
    public $taxBillingPlan;
    /**
     * @var string $paymentMethod  The payment method of the user payment
     */
    public $paymentMethod;
    /**
     * @var string $upiExtCustomerId  The external customer ID of the payment method (user payment info)
     */
    public $upiExtCustomerId;
    /**
     * @var string $upiExtCustomerIdLabel  The label of the external customer ID for the payment method (user payment info)
     */
    public $upiExtCustomerIdLabel;
    /**
     * @var string $externalTransactionId  The external transaction ID for the payment method (user payment info)
     */
    public $externalTransactionId;
    /**
     * @var string $trackingId  Tracking ID for the payment method (user payment info)
     */
    public $trackingId;
    /**
     * @var string $originalPrice  The original price of the user payment
     */
    public $originalPrice;

}
