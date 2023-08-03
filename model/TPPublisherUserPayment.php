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
 * The TPPublisherUserPayment model.
 */
class TPPublisherUserPayment {

    public static $dataTypes = array(
        "userPaymentId" => "string",
        "createDate" => "string",
        "renewal" => "bool",
        "refundAmount" => "double",
        "remainingAmount" => "double",
        "amount" => "double",
        "price" => "string",
        "refundCurrency" => "string",
        "currency" => "string",
        "refundable" => "bool",
        "subscription" => "TPPublisherUserSubscription",
        "term" => "TPPublisherTerm",
        "user" => "TPPublisherUser",
        "tax" => "double",
        "hstAmount" => "double",
        "qstAmount" => "double",
        "pstAmount" => "double",
        "gstAmount" => "double",
        "taxRate" => "double",
        "hstRate" => "double",
        "qstRate" => "double",
        "pstRate" => "double",
        "gstRate" => "double",
        "taxBillingCountryCode" => "string",
        "taxResidenceCountryCode" => "string",
        "zipCode" => "string",
        "taxBillingZipCode" => "string",
        "geoLocationCountry" => "string",
        "taxBillingPlan" => "string",
        "billingPlan" => "string",
        "userPaymentInfoId" => "string",
        "paymentMethod" => "string",
        "transactionDetails" => "object",
        "sourceId" => "int",
        "sourceName" => "string",
        "upiExtCustomerId" => "string",
        "upiExtCustomerIdLabel" => "string",
        "externalTransactionId" => "string",
        "trackingId" => "string",
        "originalPrice" => "string",
        "status" => "string",
        "statusValue" => "int",
        "refundedAmount" => "double",
        "refundAmountRecalculated" => "bool",
        "invoiceNumber" => "string",
        "storedFields" => "TPPublisherCreditGuardStoredFields",
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
     * @var bool $renewal  User payment renewal
     */
    public $renewal;
    /**
     * @var double $refundAmount  The user payment amount refunded, before tax
     */
    public $refundAmount;
    /**
     * @var double $remainingAmount  Remaining amount for current subscription
     */
    public $remainingAmount;
    /**
     * @var double $amount  The user payment amount
     */
    public $amount;
    /**
     * @var string $price  Formatted user payment price include/plus tax
     */
    public $price;
    /**
     * @var string $refundCurrency  User payment pre-tax currency
     */
    public $refundCurrency;
    /**
     * @var string $currency  The user payment currency
     */
    public $currency;
    /**
     * @var bool $refundable  Whether the user payment is refundable
     */
    public $refundable;
    /**
     * @var TPPublisherUserSubscription $subscription  
     */
    public $subscription;
    /**
     * @var TPPublisherTerm $term  
     */
    public $term;
    /**
     * @var TPPublisherUser $user  The user
     */
    public $user;
    /**
     * @var double $tax  The user payment tax
     */
    public $tax;
    /**
     * @var double $hstAmount  The HST amount of the Canadian tax
     */
    public $hstAmount;
    /**
     * @var double $qstAmount  The QST amount of the Canadian tax
     */
    public $qstAmount;
    /**
     * @var double $pstAmount  The PST amount of the Canadian tax
     */
    public $pstAmount;
    /**
     * @var double $gstAmount  The GST amount of the Canadian tax
     */
    public $gstAmount;
    /**
     * @var double $taxRate  The tax rate
     */
    public $taxRate;
    /**
     * @var double $hstRate  The HST rate of the Canadian tax
     */
    public $hstRate;
    /**
     * @var double $qstRate  The QST rate of the Canadian tax
     */
    public $qstRate;
    /**
     * @var double $pstRate  The PST rate of the Canadian tax
     */
    public $pstRate;
    /**
     * @var double $gstRate  The GST rate of the Canadian tax
     */
    public $gstRate;
    /**
     * @var string $taxBillingCountryCode  The code of the billing country
     */
    public $taxBillingCountryCode;
    /**
     * @var string $taxResidenceCountryCode  The code of the residence country
     */
    public $taxResidenceCountryCode;
    /**
     * @var string $zipCode  The zip code of the user who made the payment
     */
    public $zipCode;
    /**
     * @var string $taxBillingZipCode  The billing zip code
     */
    public $taxBillingZipCode;
    /**
     * @var string $geoLocationCountry  The geo location country of the user who made the payment
     */
    public $geoLocationCountry;
    /**
     * @var string $taxBillingPlan  The tax billing plan
     */
    public $taxBillingPlan;
    /**
     * @var string $billingPlan  The billing plan of the subscription
     */
    public $billingPlan;
    /**
     * @var string $userPaymentInfoId  The user payment info ID
     */
    public $userPaymentInfoId;
    /**
     * @var string $paymentMethod  The payment method of the user payment
     */
    public $paymentMethod;
    /**
     * @var object $transactionDetails  An object contiaining the payment provider (\"type\") and other transaction details (\"payment_method_country\" for Datatrans)
     */
    public $transactionDetails;
    /**
     * @var int $sourceId  The payment provider source ID
     */
    public $sourceId;
    /**
     * @var string $sourceName  The payment provider name
     */
    public $sourceName;
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
    /**
     * @var string $status  The user payment status
     */
    public $status;
    /**
     * @var int $statusValue  The user payment status value
     */
    public $statusValue;
    /**
     * @var double $refundedAmount  The user payment amount refunded, after tax
     */
    public $refundedAmount;
    /**
     * @var bool $refundAmountRecalculated  Refund amount was recalculated before
     */
    public $refundAmountRecalculated;
    /**
     * @var string $invoiceNumber  The invoice number
     */
    public $invoiceNumber;
    /**
     * @var TPPublisherCreditGuardStoredFields $storedFields  
     */
    public $storedFields;

}
