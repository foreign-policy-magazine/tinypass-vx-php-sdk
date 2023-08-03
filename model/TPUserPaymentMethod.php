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
 * The TPUserPaymentMethod model.
 */
class TPUserPaymentMethod {

    public static $dataTypes = array(
        "upiNickname" => "string",
        "upiColor" => "string",
        "upiNumber" => "string",
        "upiExpirationMonth" => "int",
        "upiExpirationYear" => "int",
        "upiPostalCode" => "string",
        "description" => "string",
        "userPaymentInfoId" => "string",
    );
    /**
     * @var string $upiNickname  The card nickname
     */
    public $upiNickname;
    /**
     * @var string $upiColor  The color of the card
     */
    public $upiColor;
    /**
     * @var string $upiNumber  The card number
     */
    public $upiNumber;
    /**
     * @var int $upiExpirationMonth  The expiration month of the card
     */
    public $upiExpirationMonth;
    /**
     * @var int $upiExpirationYear  The expiration year of the card
     */
    public $upiExpirationYear;
    /**
     * @var string $upiPostalCode  The postal code of the card
     */
    public $upiPostalCode;
    /**
     * @var string $description  The description of the user payment info
     */
    public $description;
    /**
     * @var string $userPaymentInfoId  The user payment info ID
     */
    public $userPaymentInfoId;

}
