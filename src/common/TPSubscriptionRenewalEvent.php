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
* The TPSubscriptionRenewalEvent model.
* \Model
*/
class TPSubscriptionRenewalEvent extends TPEvent {

    /**
    * @var string $aid  
    */
    public $aid;

    /**
    * @var string $uid  
    */
    public $uid;

    /**
    * @var string $rid  
    */
    public $rid;

    /**
    * @var string $subscriptionId  
    */
    public $subscriptionId;

    /**
    * @var string $status  
    */
    public $status;

    /**
    * @var string $billingPlan  
    */
    public $billingPlan;

    /**
    * @var int $startDate  
    */
    public $startDate;

    /**
    * @var int $nextBillDate  
    */
    public $nextBillDate;

    /**
    * @var string $termId  
    */
    public $termId;

    /**
    * @var string $termType  
    */
    public $termType;

    /**
    * @var string $accessId  
    */
    public $accessId;

    /**
    * @var string $userEmail  
    */
    public $userEmail;

    /**
    * @var string $upiId  
    */
    public $upiId;

    /**
    * @var bool $autoRenew  
    */
    public $autoRenew;

    /**
    * @var bool $isInGrace  
    */
    public $isInGrace;

    /**
    * @var int $gracePeriodStartDate  
    */
    public $gracePeriodStartDate;

    /**
    * @var int $gracePeriodLength  
    */
    public $gracePeriodLength;

    /**
    * @var int $failureCounter  
    */
    public $failureCounter;

    /**
    * @var string $passiveChurnLogicId  
    */
    public $passiveChurnLogicId;

    /**
    * @var string $declineReason  
    */
    public $declineReason;

    /**
    * @var string $paymentId  
    */
    public $paymentId;

    /**
    * @var string $renewedBy  
    */
    public $renewedBy;

}


