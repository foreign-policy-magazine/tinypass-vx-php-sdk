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
 * The TPPublisherUserSubscriptionDto model.
 */
class TPPublisherUserSubscriptionDto {

    public static $dataTypes = array(
        "termName" => "string",
        "termId" => "string",
        "type" => "string",
        "paymentBillingPlan" => "string",
        "billingPlan" => "string",
        "imageUrl" => "string",
        "resourceName" => "string",
        "rid" => "string",
        "nextBillDate" => "string",
        "subscriptionLastPayment" => "string",
        "status" => "string",
        "statusLabel" => "string",
        "creaditCardExpire" => "string",
        "creaditCardExpireSoon" => "bool",
        "subscriptionId" => "string",
        "paymentMethod" => "string",
        "accessExpired" => "bool",
        "inAppPayment" => "bool",
        "pscSubscriberNumber" => "string",
        "conversionResult" => "string",
        "externalApiName" => "string",
        "chargeCount" => "int",
        "statusDisplay" => "string",
        "autoRenew" => "bool",
        "userPaymentInfoId" => "string",
    );
    /**
     * @var string $termName  The subscription term name
     */
    public $termName;
    /**
     * @var string $termId  The subscription term ID
     */
    public $termId;
    /**
     * @var string $type  The term type
     */
    public $type;
    /**
     * @var string $paymentBillingPlan  The billing plan for the term
     */
    public $paymentBillingPlan;
    /**
     * @var string $billingPlan  The billing plan of the subscription
     */
    public $billingPlan;
    /**
     * @var string $imageUrl  The URL of the resource image
     */
    public $imageUrl;
    /**
     * @var string $resourceName  The subscription resource name
     */
    public $resourceName;
    /**
     * @var string $rid  The resource ID
     */
    public $rid;
    /**
     * @var string $nextBillDate  The next bill date of the subscription
     */
    public $nextBillDate;
    /**
     * @var string $subscriptionLastPayment  The date of the last payment for the subscription
     */
    public $subscriptionLastPayment;
    /**
     * @var string $status  The subscription status
     */
    public $status;
    /**
     * @var string $statusLabel  The label of the subscription status
     */
    public $statusLabel;
    /**
     * @var string $creaditCardExpire  When the credit card expires
     */
    public $creaditCardExpire;
    /**
     * @var bool $creaditCardExpireSoon  Whether the credit card expires soon
     */
    public $creaditCardExpireSoon;
    /**
     * @var string $subscriptionId  The user subscription ID
     */
    public $subscriptionId;
    /**
     * @var string $paymentMethod  The payment method of the subscription
     */
    public $paymentMethod;
    /**
     * @var bool $accessExpired  The access item expired
     */
    public $accessExpired;
    /**
     * @var bool $inAppPayment  Whether an in-app payment method is used
     */
    public $inAppPayment;
    /**
     * @var string $pscSubscriberNumber  The PSC subscriber number
     */
    public $pscSubscriberNumber;
    /**
     * @var string $conversionResult  The conversion result
     */
    public $conversionResult;
    /**
     * @var string $externalApiName  The name of the external API configuration
     */
    public $externalApiName;
    /**
     * @var int $chargeCount  The user subscription charge count
     */
    public $chargeCount;
    /**
     * @var string $statusDisplay  The displayed text of the subscription status
     */
    public $statusDisplay;
    /**
     * @var bool $autoRenew  Subscription auto renew
     */
    public $autoRenew;
    /**
     * @var string $userPaymentInfoId  The user payment info ID
     */
    public $userPaymentInfoId;

}
