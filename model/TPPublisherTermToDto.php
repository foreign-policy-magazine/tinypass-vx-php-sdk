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
 * The TPPublisherTermToDto model.
 */
class TPPublisherTermToDto {

    public static $dataTypes = array(
        "toTermId" => "string",
        "toTermName" => "string",
        "toResourceId" => "string",
        "toResourceName" => "string",
        "toBillingPlan" => "string",
        "collectAddress" => "bool",
        "sharedAccountCount" => "int",
        "termChangeOption" => "TPPublisherTermChangeParams",
        "availableBillingTimings" => "TPPublisherBillingTimingOption[]",
        "changable" => "bool",
        "tooltip" => "string",
        "termChangeOptionId" => "string",
        "prorateRestricted" => "bool",
        "toTermAmount" => "double",
        "authorisationAmount" => "double",
        "toTermAmountDisplay" => "string",
        "toTermCurrency" => "string",
        "prorateAmount" => "double",
        "prorateAmountDisplay" => "string",
        "prorateRefundAmount" => "double",
    );
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
     * @var bool $collectAddress  Whether to collect an address for this term
     */
    public $collectAddress;
    /**
     * @var int $sharedAccountCount  The count of allowed shared-subscription accounts
     */
    public $sharedAccountCount;
    /**
     * @var TPPublisherTermChangeParams $termChangeOption  
     */
    public $termChangeOption;
    /**
     * @var TPPublisherBillingTimingOption[] $availableBillingTimings  
     */
    public $availableBillingTimings;
    /**
     * @var bool $changable  Whether this term can be changed to another
     */
    public $changable;
    /**
     * @var string $tooltip  Tooltip for unchangeable term
     */
    public $tooltip;
    /**
     * @var string $termChangeOptionId  The ID of the term change option
     */
    public $termChangeOptionId;
    /**
     * @var bool $prorateRestricted  Whether the prorate is restricted to first-time customers
     */
    public $prorateRestricted;
    /**
     * @var double $toTermAmount  Full amount of term upgrade
     */
    public $toTermAmount;
    /**
     * @var double $authorisationAmount  3DS authorisation amount for term upgrade
     */
    public $authorisationAmount;
    /**
     * @var string $toTermAmountDisplay  Full price of term upgrade
     */
    public $toTermAmountDisplay;
    /**
     * @var string $toTermCurrency  The currency of the upgraded term
     */
    public $toTermCurrency;
    /**
     * @var double $prorateAmount  The actual upgrade cost excluding taxes: the unused money of the FROM term deducted from the TO term price
     */
    public $prorateAmount;
    /**
     * @var string $prorateAmountDisplay  Term change prorate amount text
     */
    public $prorateAmountDisplay;
    /**
     * @var double $prorateRefundAmount  The refund amount in case of term downgrade
     */
    public $prorateRefundAmount;

}
