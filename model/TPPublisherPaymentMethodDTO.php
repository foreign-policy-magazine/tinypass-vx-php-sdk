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
 * The TPPublisherPaymentMethodDTO model.
 */
class TPPublisherPaymentMethodDTO {

    public static $dataTypes = array(
        "userPaymentInfoId" => "string",
        "description" => "string",
        "upiIdentifier" => "string",
        "upiNickname" => "string",
        "upiCardholder" => "string",
        "upiFirstName" => "string",
        "upiLastName" => "string",
        "upiNumber" => "string",
        "state" => "string",
        "upiExpirationMonth" => "int",
        "upiExpirationYear" => "int",
        "upiPostalCode" => "string",
        "upiEmail" => "string",
        "upiCardCountryCode" => "string",
        "upiCardZipCode" => "string",
        "upiCountryState" => "string",
        "upiCity" => "string",
        "upiStreet" => "string",
        "currency" => "string",
        "nextBillDate" => "string",
        "readonly" => "bool",
        "canBeEdited" => "bool",
        "canBeDeleted" => "bool",
        "canBeSetDefault" => "bool",
        "sourceId" => "string",
        "sourceName" => "string",
        "upiExtCustomerId" => "string",
        "upiExtCustomerIdLabel" => "string",
        "upiExtPaymentId" => "string",
        "taxResidenceCountryCode" => "string",
        "taxBillingCountryCode" => "string",
        "taxBillingZipCode" => "string",
        "userBillingAddress" => "TPPublisherUserBillingAddress",
        "storedFields" => "string",
    );
    /**
     * @var string $userPaymentInfoId  The user payment info ID
     */
    public $userPaymentInfoId;
    /**
     * @var string $description  The description of the user payment info
     */
    public $description;
    /**
     * @var string $upiIdentifier  The payment method ID
     */
    public $upiIdentifier;
    /**
     * @var string $upiNickname  The card nickname
     */
    public $upiNickname;
    /**
     * @var string $upiCardholder  The cardholder
     */
    public $upiCardholder;
    /**
     * @var string $upiFirstName  The cardholder's first name
     */
    public $upiFirstName;
    /**
     * @var string $upiLastName  The cardholder's last name
     */
    public $upiLastName;
    /**
     * @var string $upiNumber  The card number
     */
    public $upiNumber;
    /**
     * @var string $state  The user payment method state
     */
    public $state;
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
     * @var string $upiEmail  The email for the user payment info
     */
    public $upiEmail;
    /**
     * @var string $upiCardCountryCode  Code of the country
     */
    public $upiCardCountryCode;
    /**
     * @var string $upiCardZipCode  Card postal code
     */
    public $upiCardZipCode;
    /**
     * @var string $upiCountryState  State in the country
     */
    public $upiCountryState;
    /**
     * @var string $upiCity  City of the address
     */
    public $upiCity;
    /**
     * @var string $upiStreet  Street of the address
     */
    public $upiStreet;
    /**
     * @var string $currency  The user payment currency
     */
    public $currency;
    /**
     * @var string $nextBillDate  Date of next bill
     */
    public $nextBillDate;
    /**
     * @var bool $readonly  Whether the object is readonly
     */
    public $readonly;
    /**
     * @var bool $canBeEdited  Indicates if this payment method can be edited
     */
    public $canBeEdited;
    /**
     * @var bool $canBeDeleted  Indicates if this payment method can be deleted
     */
    public $canBeDeleted;
    /**
     * @var bool $canBeSetDefault  Indicates if this payment method can be set default
     */
    public $canBeSetDefault;
    /**
     * @var string $sourceId  The payment provider source ID
     */
    public $sourceId;
    /**
     * @var string $sourceName  The payment provider name
     */
    public $sourceName;
    /**
     * @var string $upiExtCustomerId  The external customer ID of the payment method (user payment info)
     */
    public $upiExtCustomerId;
    /**
     * @var string $upiExtCustomerIdLabel  The label of the external customer ID for the payment method (user payment info)
     */
    public $upiExtCustomerIdLabel;
    /**
     * @var string $upiExtPaymentId  The external payment ID for the payment method (user payment info)
     */
    public $upiExtPaymentId;
    /**
     * @var string $taxResidenceCountryCode  The code of the residence country
     */
    public $taxResidenceCountryCode;
    /**
     * @var string $taxBillingCountryCode  The code of the billing country
     */
    public $taxBillingCountryCode;
    /**
     * @var string $taxBillingZipCode  The billing zip code
     */
    public $taxBillingZipCode;
    /**
     * @var TPPublisherUserBillingAddress $userBillingAddress  User billing address
     */
    public $userBillingAddress;
    /**
     * @var string $storedFields  The stored fields
     */
    public $storedFields;

}
