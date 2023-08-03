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
 * The TPPublisherEraseUserPayment model.
 */
class TPPublisherEraseUserPayment {

    public static $dataTypes = array(
        "userPaymentId" => "string",
        "tax" => "string",
        "billingRegion" => "string",
        "residenceRegion" => "string",
        "uiCaption" => "string",
        "name" => "string",
        "address" => "string",
        "geoLocation" => "string",
    );
    /**
     * @var string $userPaymentId  The user payment ID
     */
    public $userPaymentId;
    /**
     * @var string $tax  The user payment tax
     */
    public $tax;
    /**
     * @var string $billingRegion  The billing region
     */
    public $billingRegion;
    /**
     * @var string $residenceRegion  The residence region
     */
    public $residenceRegion;
    /**
     * @var string $uiCaption  The ui caption
     */
    public $uiCaption;
    /**
     * @var string $name  The user payment name
     */
    public $name;
    /**
     * @var string $address  address
     */
    public $address;
    /**
     * @var string $geoLocation  The geo location of the user who effected the payment
     */
    public $geoLocation;

}
