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
 * The TPAnonUserSubscription model.
 */
class TPAnonUserSubscription {

    public static $dataTypes = array(
        "subscriptionId" => "string",
        "term" => "TPAnonTerm",
        "autoRenew" => "bool",
        "gracePeriodStartDate" => "string",
        "nextBillDate" => "string",
        "startDate" => "string",
        "status" => "string",
        "cancelable" => "bool",
        "cancelableAndRefundadle" => "bool",
        "paymentBillingPlanDescription" => "string",
    );
    /**
     * @var string $subscriptionId  The user subscription ID
     */
    public $subscriptionId;
    /**
     * @var TPAnonTerm $term  
     */
    public $term;
    /**
     * @var bool $autoRenew  Whether auto renewal is enabled for the subscription
     */
    public $autoRenew;
    /**
     * @var string $gracePeriodStartDate  The grace period start date
     */
    public $gracePeriodStartDate;
    /**
     * @var string $nextBillDate  The next bill date of the subscription
     */
    public $nextBillDate;
    /**
     * @var string $startDate  The start date.
     */
    public $startDate;
    /**
     * @var string $status  The subscription status
     */
    public $status;
    /**
     * @var bool $cancelable  Whether this subscription can be cancelled; cancelling means thatthe access will not be prolonged and the current access will be revoked
     */
    public $cancelable;
    /**
     * @var bool $cancelableAndRefundadle  Whether the subscription can be cancelled with the payment for the last period refunded. Cancelling means that the access will not be prolonged and the current access will be revoked
     */
    public $cancelableAndRefundadle;
    /**
     * @var string $paymentBillingPlanDescription  The description of the term billing plan
     */
    public $paymentBillingPlanDescription;

}
