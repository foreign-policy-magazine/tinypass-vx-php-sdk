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
 * The TPPublisherTermChangeOption model.
 */
class TPPublisherTermChangeOption {

    public static $dataTypes = array(
        "termChangeOptionId" => "string",
        "fromTermId" => "string",
        "fromTermName" => "string",
        "fromResourceId" => "string",
        "fromResourceName" => "string",
        "fromBillingPlan" => "string",
        "toTermId" => "string",
        "toTermName" => "string",
        "toResourceId" => "string",
        "toResourceName" => "string",
        "toBillingPlan" => "string",
        "billingTiming" => "string",
        "immediateAccess" => "bool",
        "prorateAccess" => "bool",
        "description" => "string",
        "includeTrial" => "bool",
        "toScheduled" => "bool",
        "fromScheduled" => "bool",
        "sharedAccountCount" => "int",
        "collectAddress" => "bool",
    );
    /**
     * @var string $termChangeOptionId  The ID of the term change option
     */
    public $termChangeOptionId;
    /**
     * @var string $fromTermId  The ID of the \"From\" term
     */
    public $fromTermId;
    /**
     * @var string $fromTermName  The name of the \"From\" term
     */
    public $fromTermName;
    /**
     * @var string $fromResourceId  The ID of the \"From\" resource
     */
    public $fromResourceId;
    /**
     * @var string $fromResourceName  The name of the \"From\" resource
     */
    public $fromResourceName;
    /**
     * @var string $fromBillingPlan  The \"From\" billing plan
     */
    public $fromBillingPlan;
    /**
     * @var string $toTermId  The ID of the \"To\" term
     */
    public $toTermId;
    /**
     * @var string $toTermName  The name of the \"To\" term
     */
    public $toTermName;
    /**
     * @var string $toResourceId  The ID of the \"To\" resource
     */
    public $toResourceId;
    /**
     * @var string $toResourceName  The name of the \"To\" resource
     */
    public $toResourceName;
    /**
     * @var string $toBillingPlan  The \"To\" billing plan
     */
    public $toBillingPlan;
    /**
     * @var string $billingTiming  The billing timing(0: immediate term change;1: term change at the end of the current cycle;2: term change on the next sell date;3: term change at the end of the current period)
     */
    public $billingTiming;
    /**
     * @var bool $immediateAccess  Whether the access begins immediately
     */
    public $immediateAccess;
    /**
     * @var bool $prorateAccess  Whether the <a href=\"https://docs.piano.io/upgrades/?paragraphId=b27954ef84407e4#prorate-billing-amount\">Prorate billing amount</a> function is enabled
     */
    public $prorateAccess;
    /**
     * @var string $description  A description of the term change option; provided by the client
     */
    public $description;
    /**
     * @var bool $includeTrial  Whether trial is enabled (not in use, always \"FALSE\")
     */
    public $includeTrial;
    /**
     * @var bool $toScheduled  Whether the subscription is upgraded to a scheduled term
     */
    public $toScheduled;
    /**
     * @var bool $fromScheduled  Whether the subscription is upgraded from a scheduled term
     */
    public $fromScheduled;
    /**
     * @var int $sharedAccountCount  The count of allowed shared-subscription accounts
     */
    public $sharedAccountCount;
    /**
     * @var bool $collectAddress  Whether to collect an address for this term
     */
    public $collectAddress;

}
