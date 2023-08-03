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
 * The TPPublisherSubscriptionLogItem model.
 */
class TPPublisherSubscriptionLogItem {

    public static $dataTypes = array(
        "subscriptionId" => "string",
        "email" => "string",
        "uid" => "string",
        "rid" => "string",
        "term" => "TPPublisherTerm",
        "billingPlan" => "string",
        "startDate" => "string",
        "nextBillDate" => "string",
        "statusNameInReports" => "string",
        "childAccess" => "string",
    );
    /**
     * @var string $subscriptionId  The user subscription ID
     */
    public $subscriptionId;
    /**
     * @var string $email  The user's email address (single)
     */
    public $email;
    /**
     * @var string $uid  The user's ID
     */
    public $uid;
    /**
     * @var string $rid  The resource ID
     */
    public $rid;
    /**
     * @var TPPublisherTerm $term  
     */
    public $term;
    /**
     * @var string $billingPlan  The billing plan of the subscription
     */
    public $billingPlan;
    /**
     * @var string $startDate  The start date.
     */
    public $startDate;
    /**
     * @var string $nextBillDate  The next bill date of the subscription
     */
    public $nextBillDate;
    /**
     * @var string $statusNameInReports  The subscription status name in reports
     */
    public $statusNameInReports;
    /**
     * @var string $childAccess  The number of child accesses
     */
    public $childAccess;

}
