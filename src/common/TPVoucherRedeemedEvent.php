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
* The TPVoucherRedeemedEvent model.
* \Model
*/
class TPVoucherRedeemedEvent extends TPEvent {

    /**
    * @var string $aid  
    */
    public $aid;

    /**
    * @var string $voucherId  
    */
    public $voucherId;

    /**
    * @var int $voucherState  
    */
    public $voucherState;

    /**
    * @var int $voucherSendDateTimestamp  
    */
    public $voucherSendDateTimestamp;

    /**
    * @var string $voucherRecipientName  
    */
    public $voucherRecipientName;

    /**
    * @var string $voucherRecipientEmail  
    */
    public $voucherRecipientEmail;

    /**
    * @var string $voucherMessage  
    */
    public $voucherMessage;

    /**
    * @var string $voucherCode  
    */
    public $voucherCode;

    /**
    * @var int $voucherExpiresTimestamp  
    */
    public $voucherExpiresTimestamp;

    /**
    * @var string $voucherIssueTermConversionId  
    */
    public $voucherIssueTermConversionId;

    /**
    * @var string $voucherRedeemTermConversionId  
    */
    public $voucherRedeemTermConversionId;

    /**
    * @var string $termId  
    */
    public $termId;

    /**
    * @var string $addressId  
    */
    public $addressId;

}


