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
 * The TPPublisherUserBillingAddress model.
 */
class TPPublisherUserBillingAddress {

    public static $dataTypes = array(
        "addressLine1" => "string",
        "addressLine2" => "string",
        "addressLine3" => "string",
        "country" => "TPPublisherCountrySimpleModel",
        "region" => "TPPublisherRegionSimpleModel",
        "regionName" => "string",
        "city" => "string",
        "postalCode" => "string",
        "type" => "string",
        "verified" => "string",
        "addressPubId" => "string",
    );
    /**
     * @var string $addressLine1  Line one from the user's billing address
     */
    public $addressLine1;
    /**
     * @var string $addressLine2  Line two from the user's billing address
     */
    public $addressLine2;
    /**
     * @var string $addressLine3  line three from the user's billing address
     */
    public $addressLine3;
    /**
     * @var TPPublisherCountrySimpleModel $country  The country from the user's billing address, an object
     */
    public $country;
    /**
     * @var TPPublisherRegionSimpleModel $region  The region from the user's billing address, an object
     */
    public $region;
    /**
     * @var string $regionName  The region name from the user's billing address
     */
    public $regionName;
    /**
     * @var string $city  The city from the user's billing address
     */
    public $city;
    /**
     * @var string $postalCode  The zip code from the user's billing address
     */
    public $postalCode;
    /**
     * @var string $type  The user address provider type: Experian (1), Avalare (2)
     */
    public $type;
    /**
     * @var string $verified  Whether the user's billing address is verified
     */
    public $verified;
    /**
     * @var string $addressPubId  The public ID of the address
     */
    public $addressPubId;

}
