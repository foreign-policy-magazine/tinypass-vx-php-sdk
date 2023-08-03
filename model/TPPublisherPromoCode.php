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
 * The TPPublisherPromoCode model.
 */
class TPPublisherPromoCode {

    public static $dataTypes = array(
        "promoCodeId" => "string",
        "promotionId" => "string",
        "code" => "string",
        "assignedEmail" => "string",
        "reserveDate" => "string",
        "state" => "string",
        "stateValue" => "string",
        "claimedUser" => "TPPublisherUser",
        "claimedDate" => "string",
        "createDate" => "string",
        "createBy" => "string",
        "updateDate" => "string",
        "updateBy" => "string",
        "deleted" => "bool",
        "lastOriginalPrice" => "string",
    );
    /**
     * @var string $promoCodeId  The promo code ID
     */
    public $promoCodeId;
    /**
     * @var string $promotionId  The promotion ID
     */
    public $promotionId;
    /**
     * @var string $code  The promo code itself
     */
    public $code;
    /**
     * @var string $assignedEmail  The assigned email
     */
    public $assignedEmail;
    /**
     * @var string $reserveDate  The promo code reserve_date
     */
    public $reserveDate;
    /**
     * @var string $state  The promo code state
     */
    public $state;
    /**
     * @var string $stateValue  The promo code state value
     */
    public $stateValue;
    /**
     * @var TPPublisherUser $claimedUser  The user who claimed the promo code
     */
    public $claimedUser;
    /**
     * @var string $claimedDate  The date when the promotion was claimed
     */
    public $claimedDate;
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
     * @var string $lastOriginalPrice  The promo code last original price
     */
    public $lastOriginalPrice;

}
