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
 * The TPPublisherDynamicSubscriptionAccessPeriodInfo model.
 */
class TPPublisherDynamicSubscriptionAccessPeriodInfo {

    public static $dataTypes = array(
        "accessPeriodId" => "string",
        "name" => "string",
        "totalIterations" => "int",
        "startDate" => "string",
        "endDate" => "string",
        "converted" => "bool",
        "iteration" => "int",
        "paymentBillingPlan" => "string",
        "length" => "string",
        "virtual" => "bool",
        "id" => "string",
    );
    /**
     * @var string $accessPeriodId  The ID of the access period in dynamic term billing configuration
     */
    public $accessPeriodId;
    /**
     * @var string $name  Access period name
     */
    public $name;
    /**
     * @var int $totalIterations  Total iterations. Should be set if 'type' parameter is 'recurring'
     */
    public $totalIterations;
    /**
     * @var string $startDate  The start date.
     */
    public $startDate;
    /**
     * @var string $endDate  The end date
     */
    public $endDate;
    /**
     * @var bool $converted  Access period is converted from unlimited
     */
    public $converted;
    /**
     * @var int $iteration  Period iteration index
     */
    public $iteration;
    /**
     * @var string $paymentBillingPlan  The billing plan for the term
     */
    public $paymentBillingPlan;
    /**
     * @var string $length  Access period length
     */
    public $length;
    /**
     * @var bool $virtual  Access period for history is virtual and not persisted
     */
    public $virtual;
    /**
     * @var string $id  The ID
     */
    public $id;

}
