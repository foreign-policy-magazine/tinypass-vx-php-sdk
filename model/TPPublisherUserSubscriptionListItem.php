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
 * The TPPublisherUserSubscriptionListItem model.
 */
class TPPublisherUserSubscriptionListItem {

    public static $dataTypes = array(
        "subscriptionId" => "string",
        "autoRenew" => "bool",
        "nextBillDate" => "string",
        "nextVerificaitionDate" => "string",
        "paymentMethod" => "string",
        "billingPlan" => "string",
        "userPaymentInfoId" => "string",
        "status" => "string",
        "statusName" => "string",
        "statusNameInReports" => "string",
        "term" => "TPPublisherTerm",
        "resource" => "TPPublisherResource",
        "user" => "TPPublisherUser",
        "startDate" => "string",
        "cancelable" => "bool",
        "cancelableAndRefundadle" => "bool",
        "userAddress" => "TPPublisherUserAddress",
        "pscSubscriberNumber" => "string",
        "externalApiName" => "string",
        "conversionResult" => "string",
        "isInTrial" => "bool",
        "trialPeriodEndDate" => "string",
        "trialAmount" => "double",
        "trialCurrency" => "string",
        "endDate" => "string",
        "chargeCount" => "int",
        "upiExtCustomerId" => "string",
        "upiExtCustomerIdLabel" => "string",
        "sharedAccountLimit" => "int",
        "canManageSharedSubscription" => "bool",
        "sharedAccounts" => "TPPublisherUserSubscriptionAccount[]",
        "cdsAccountNumber" => "string",
    );
    /**
     * @var string $subscriptionId  The user subscription ID
     */
    public $subscriptionId;
    /**
     * @var bool $autoRenew  Whether auto renewal is enabled for the subscription
     */
    public $autoRenew;
    /**
     * @var string $nextBillDate  The next bill date of the subscription
     */
    public $nextBillDate;
    /**
     * @var string $nextVerificaitionDate  The next verfication date of the subscription
     */
    public $nextVerificaitionDate;
    /**
     * @var string $paymentMethod  The payment method of the subscription
     */
    public $paymentMethod;
    /**
     * @var string $billingPlan  The billing plan of the subscription
     */
    public $billingPlan;
    /**
     * @var string $userPaymentInfoId  The user payment info ID
     */
    public $userPaymentInfoId;
    /**
     * @var string $status  The subscription status
     */
    public $status;
    /**
     * @var string $statusName  The name of the subscription status
     */
    public $statusName;
    /**
     * @var string $statusNameInReports  The subscription status name in reports
     */
    public $statusNameInReports;
    /**
     * @var TPPublisherTerm $term  
     */
    public $term;
    /**
     * @var TPPublisherResource $resource  The resource
     */
    public $resource;
    /**
     * @var TPPublisherUser $user  The user
     */
    public $user;
    /**
     * @var string $startDate  The start date.
     */
    public $startDate;
    /**
     * @var bool $cancelable  Whether this subscription can be cancelled; cancelling means thatthe access will not be prolonged and the current access will be revoked
     */
    public $cancelable;
    /**
     * @var bool $cancelableAndRefundadle  Whether the subscription can be cancelled with the payment for the last period refunded. Cancelling means that the access will not be prolonged and the current access will be revoked
     */
    public $cancelableAndRefundadle;
    /**
     * @var TPPublisherUserAddress $userAddress  The user address entity
     */
    public $userAddress;
    /**
     * @var string $pscSubscriberNumber  The PSC subscriber number
     */
    public $pscSubscriberNumber;
    /**
     * @var string $externalApiName  The name of the external API configuration
     */
    public $externalApiName;
    /**
     * @var string $conversionResult  The conversion result
     */
    public $conversionResult;
    /**
     * @var bool $isInTrial  Whether the subscription is currently in trial period
     */
    public $isInTrial;
    /**
     * @var string $trialPeriodEndDate  The date when the trial period ends
     */
    public $trialPeriodEndDate;
    /**
     * @var double $trialAmount  The price of the trial period
     */
    public $trialAmount;
    /**
     * @var string $trialCurrency  The currency of the trial period
     */
    public $trialCurrency;
    /**
     * @var string $endDate  The subscription end date
     */
    public $endDate;
    /**
     * @var int $chargeCount  The user subscription charge count
     */
    public $chargeCount;
    /**
     * @var string $upiExtCustomerId  The external customer ID of the payment method (user payment info)
     */
    public $upiExtCustomerId;
    /**
     * @var string $upiExtCustomerIdLabel  The label of the external customer ID for the payment method (user payment info)
     */
    public $upiExtCustomerIdLabel;
    /**
     * @var int $sharedAccountLimit  The shared account limit
     */
    public $sharedAccountLimit;
    /**
     * @var bool $canManageSharedSubscription  Whether the shared subscription can be managed
     */
    public $canManageSharedSubscription;
    /**
     * @var TPPublisherUserSubscriptionAccount[] $sharedAccounts  
     */
    public $sharedAccounts;
    /**
     * @var string $cdsAccountNumber  CDS Account number
     */
    public $cdsAccountNumber;

}
