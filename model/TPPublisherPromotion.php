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
 * The TPPublisherPromotion model.
 */
class TPPublisherPromotion {

    public static $dataTypes = array(
        "promotionId" => "string",
        "aid" => "string",
        "name" => "string",
        "status" => "string",
        "fixedPromotionCode" => "string",
        "unlimitedUses" => "bool",
        "promotionCodePrefix" => "string",
        "newCustomersOnly" => "bool",
        "discountAmount" => "double",
        "discountCurrency" => "string",
        "discount" => "string",
        "percentageDiscount" => "double",
        "discountType" => "string",
        "usesAllowed" => "int",
        "uses" => "int",
        "neverAllowZero" => "bool",
        "termDependencyType" => "string",
        "startDate" => "string",
        "endDate" => "string",
        "createDate" => "string",
        "createBy" => "string",
        "updateDate" => "string",
        "updateBy" => "string",
        "deleted" => "bool",
        "fixedDiscountList" => "TPPublisherPromotionFixedDiscountt[]",
        "applyToAllBillingPeriods" => "bool",
        "canBeAppliedOnRenewal" => "bool",
        "billingPeriodLimit" => "int",
    );
    /**
     * @var string $promotionId  The promotion ID
     */
    public $promotionId;
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var string $name  The promotion name
     */
    public $name;
    /**
     * @var string $status  The promotion tatus
     */
    public $status;
    /**
     * @var string $fixedPromotionCode  The fixed value for all the promotion codes
     */
    public $fixedPromotionCode;
    /**
     * @var bool $unlimitedUses  Whether to allow unlimited uses
     */
    public $unlimitedUses;
    /**
     * @var string $promotionCodePrefix  The prefix for all the codes
     */
    public $promotionCodePrefix;
    /**
     * @var bool $newCustomersOnly  Whether the promotion allows new customers only
     */
    public $newCustomersOnly;
    /**
     * @var double $discountAmount  The promotion discount
     */
    public $discountAmount;
    /**
     * @var string $discountCurrency  The promotion discount currency
     */
    public $discountCurrency;
    /**
     * @var string $discount  The promotion discount, formatted
     */
    public $discount;
    /**
     * @var double $percentageDiscount  The promotion discount, percentage
     */
    public $percentageDiscount;
    /**
     * @var string $discountType  The promotion discount type
     */
    public $discountType;
    /**
     * @var int $usesAllowed  The number of uses allowed by the promotion
     */
    public $usesAllowed;
    /**
     * @var int $uses  How many times the promotion has been used
     */
    public $uses;
    /**
     * @var bool $neverAllowZero  Never allow the value of checkout to be zero
     */
    public $neverAllowZero;
    /**
     * @var string $termDependencyType  The type of dependency to terms
     */
    public $termDependencyType;
    /**
     * @var string $startDate  The start date.
     */
    public $startDate;
    /**
     * @var string $endDate  The end date
     */
    public $endDate;
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    /**
     * @var string $createBy  The user who created the object
     */
    public $createBy;
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    /**
     * @var string $updateBy  The last user to update the object
     */
    public $updateBy;
    /**
     * @var bool $deleted  Whether the object is deleted
     */
    public $deleted;
    /**
     * @var TPPublisherPromotionFixedDiscountt[] $fixedDiscountList  
     */
    public $fixedDiscountList;
    /**
     * @var bool $applyToAllBillingPeriods  Whether to apply the promotion discount to all billing periods (\"TRUE\")or the first billing period only (\"FALSE\")
     */
    public $applyToAllBillingPeriods;
    /**
     * @var bool $canBeAppliedOnRenewal  Whether the promotion can be applied on renewal
     */
    public $canBeAppliedOnRenewal;
    /**
     * @var int $billingPeriodLimit  Promotion discount applies to number of billing periods
     */
    public $billingPeriodLimit;

}
