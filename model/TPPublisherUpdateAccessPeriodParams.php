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
 * The TPPublisherUpdateAccessPeriodParams model.
 */
class TPPublisherUpdateAccessPeriodParams {

    public static $dataTypes = array(
        "id" => "string",
        "name" => "string",
        "type" => "string",
        "accessEndDate" => "string",
        "totalIterations" => "int",
        "duration" => "TPPublisherDuration",
        "amount" => "float",
        "billingType" => "string",
        "billingDuration" => "TPPublisherDuration",
        "billingDay" => "int",
        "billingMonth" => "int",
    );
    /**
     * @var string $id  The ID
     */
    public $id;
    /**
     * @var string $name  Access period name
     */
    public $name;
    /**
     * @var string $type  Access period type
     */
    public $type;
    /**
     * @var string $accessEndDate  Date on which access will end. Should be set if 'type' parameter is 'endsOnDate'
     */
    public $accessEndDate;
    /**
     * @var int $totalIterations  Total iterations. Should be set if 'type' parameter is 'recurring'
     */
    public $totalIterations;
    /**
     * @var TPPublisherDuration $duration  Access period length. Should be set if 'type' parameter is 'recurring'
     */
    public $duration;
    /**
     * @var float $amount  Billing amount
     */
    public $amount;
    /**
     * @var string $billingType  Billing type
     */
    public $billingType;
    /**
     * @var TPPublisherDuration $billingDuration  Billing period duration. Should be set if 'billing_type' parameter is 'relative'
     */
    public $billingDuration;
    /**
     * @var int $billingDay  Billing day number. Should be set to week day number if 'billing_type' parameter is 'dayOfWeek' or month day number if 'dayOfMonth' or 'dayOfYear'
     */
    public $billingDay;
    /**
     * @var int $billingMonth  Billing month number. Should be set if 'billing_type' parameter is 'dayOfYear'
     */
    public $billingMonth;

}
