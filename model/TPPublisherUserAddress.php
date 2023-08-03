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
 * The TPPublisherUserAddress model.
 */
class TPPublisherUserAddress {

    public static $dataTypes = array(
        "userAddressId" => "string",
        "region" => "TPPublisherRegion",
        "country" => "TPPublisherCountry",
        "city" => "string",
        "postalCode" => "string",
        "companyName" => "string",
        "firstName" => "string",
        "lastName" => "string",
        "personalName" => "string",
        "address1" => "string",
        "address2" => "string",
        "phone" => "string",
        "additionalFields" => "string",
    );
    /**
     * @var string $userAddressId  The public ID of the user address
     */
    public $userAddressId;
    /**
     * @var TPPublisherRegion $region  
     */
    public $region;
    /**
     * @var TPPublisherCountry $country  
     */
    public $country;
    /**
     * @var string $city  The name of the city
     */
    public $city;
    /**
     * @var string $postalCode  The user's postal code
     */
    public $postalCode;
    /**
     * @var string $companyName  company_name
     */
    public $companyName;
    /**
     * @var string $firstName  The user's first name
     */
    public $firstName;
    /**
     * @var string $lastName  The user's last name
     */
    public $lastName;
    /**
     * @var string $personalName  The user's personal name. Name and surname ordered as per locale
     */
    public $personalName;
    /**
     * @var string $address1  The user's first address
     */
    public $address1;
    /**
     * @var string $address2  The user's second address
     */
    public $address2;
    /**
     * @var string $phone  The user's phone
     */
    public $phone;
    /**
     * @var string $additionalFields  The additional address fields (json)
     */
    public $additionalFields;

}
