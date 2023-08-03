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
 * The TPPublisherEraseUserPaymentInfo model.
 */
class TPPublisherEraseUserPaymentInfo {

    public static $dataTypes = array(
        "userPaymentInfoId" => "string",
        "billingZipCode" => "string",
        "residenceCountry" => "string",
        "providerFields" => "string",
        "upiNickname" => "string",
        "upiPostalCode" => "string",
        "fundingSource" => "string",
        "pinCode" => "string",
        "accountNumber" => "string",
        "externalTransactionId" => "string",
        "upiExtCustomerId" => "string",
    );
    /**
     * @var string $userPaymentInfoId  The user payment info ID
     */
    public $userPaymentInfoId;
    /**
     * @var string $billingZipCode  The transaction billing zip code
     */
    public $billingZipCode;
    /**
     * @var string $residenceCountry  The transaction residence country
     */
    public $residenceCountry;
    /**
     * @var string $providerFields  Transaction provider stored fields
     */
    public $providerFields;
    /**
     * @var string $upiNickname  The card nickname
     */
    public $upiNickname;
    /**
     * @var string $upiPostalCode  The postal code of the card
     */
    public $upiPostalCode;
    /**
     * @var string $fundingSource  Transaction funding source
     */
    public $fundingSource;
    /**
     * @var string $pinCode  Transaction pin code
     */
    public $pinCode;
    /**
     * @var string $accountNumber  Transaction account number
     */
    public $accountNumber;
    /**
     * @var string $externalTransactionId  The external transaction ID for the payment method (user payment info)
     */
    public $externalTransactionId;
    /**
     * @var string $upiExtCustomerId  The external customer ID of the payment method (user payment info)
     */
    public $upiExtCustomerId;

}
