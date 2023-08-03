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
 * The TPPublisherTernChangeConfirmationDto model.
 */
class TPPublisherTernChangeConfirmationDto {

    public static $dataTypes = array(
        "fromTermName" => "string",
        "toTermName" => "string",
        "endDate" => "string",
        "accessStartDate" => "string",
        "fromResourceName" => "string",
        "toResourceName" => "string",
        "fromBillingPlan" => "string",
        "toBillingPlan" => "string",
        "nextBillDate" => "string",
        "prorateRefundAmount" => "string",
        "prorateAmount" => "double",
        "prorateAmountDisplay" => "string",
        "prorateAmountWithTaxes" => "string",
        "paymentMethod" => "string",
        "userAddress" => "TPPublisherUserAddressDto",
        "immediateAccess" => "bool",
        "immediateBilling" => "bool",
        "toTermAmount" => "double",
        "toTermAmountDisplay" => "string",
        "toTermAmountWithTaxes" => "string",
        "upiExpirationMonth" => "int",
        "upiExpirationYear" => "int",
        "sharedAccountLimit" => "int",
        "sharedAccountCount" => "int",
        "prorateAccess" => "bool",
        "prorateUnusedAmount" => "string",
    );
    /**
     * @var string $fromTermName  The name of the \"From\" term
     */
    public $fromTermName;
    /**
     * @var string $toTermName  The name of the \"To\" term
     */
    public $toTermName;
    /**
     * @var string $endDate  The subscription end date
     */
    public $endDate;
    /**
     * @var string $accessStartDate  The access start date (unix)
     */
    public $accessStartDate;
    /**
     * @var string $fromResourceName  The name of the \"From\" resource
     */
    public $fromResourceName;
    /**
     * @var string $toResourceName  The name of the \"To\" resource
     */
    public $toResourceName;
    /**
     * @var string $fromBillingPlan  The \"From\" billing plan
     */
    public $fromBillingPlan;
    /**
     * @var string $toBillingPlan  The \"To\" billing plan
     */
    public $toBillingPlan;
    /**
     * @var string $nextBillDate  Date of next bill
     */
    public $nextBillDate;
    /**
     * @var string $prorateRefundAmount  The refund amount in case of term downgrade
     */
    public $prorateRefundAmount;
    /**
     * @var double $prorateAmount  The actual upgrade cost excluding taxes: the unused money of the FROM term deducted from the TO term price
     */
    public $prorateAmount;
    /**
     * @var string $prorateAmountDisplay  Term change prorate amount text
     */
    public $prorateAmountDisplay;
    /**
     * @var string $prorateAmountWithTaxes  Term change prorate amount with taxes
     */
    public $prorateAmountWithTaxes;
    /**
     * @var string $paymentMethod  The payment method of the subscription
     */
    public $paymentMethod;
    /**
     * @var TPPublisherUserAddressDto $userAddress  The user address entity
     */
    public $userAddress;
    /**
     * @var bool $immediateAccess  Whether the access should be given immediately. Irrelevant if the \"billing_timing\" is 0.
     */
    public $immediateAccess;
    /**
     * @var bool $immediateBilling  Whether the billing should be executed immediately.
     */
    public $immediateBilling;
    /**
     * @var double $toTermAmount  Full amount of term upgrade
     */
    public $toTermAmount;
    /**
     * @var string $toTermAmountDisplay  Full price of term upgrade
     */
    public $toTermAmountDisplay;
    /**
     * @var string $toTermAmountWithTaxes  Price with taxes of term upgrade
     */
    public $toTermAmountWithTaxes;
    /**
     * @var int $upiExpirationMonth  The expiration month of the card
     */
    public $upiExpirationMonth;
    /**
     * @var int $upiExpirationYear  The expiration year of the card
     */
    public $upiExpirationYear;
    /**
     * @var int $sharedAccountLimit  The shared account limit
     */
    public $sharedAccountLimit;
    /**
     * @var int $sharedAccountCount  Shared accounts count
     */
    public $sharedAccountCount;
    /**
     * @var bool $prorateAccess  Whether the <a href=\"https://docs.piano.io/upgrades/?paragraphId=b27954ef84407e4#prorate-billing-amount\">Prorate billing amount</a> function is enabled
     */
    public $prorateAccess;
    /**
     * @var string $prorateUnusedAmount  Prorate unused amount
     */
    public $prorateUnusedAmount;

}
