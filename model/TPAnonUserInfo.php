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
 * The TPAnonUserInfo model.
 */
class TPAnonUserInfo {

    public static $dataTypes = array(
        "userLang" => "string",
        "isNewCustomer" => "bool",
        "user" => "TPAnonUserModel",
        "countryCode" => "string",
        "postalCode" => "string",
        "taxSupport" => "string",
    );
    /**
     * @var string $userLang  The user's language
     */
    public $userLang;
    /**
     * @var bool $isNewCustomer  Whether the user is a new customer
     */
    public $isNewCustomer;
    /**
     * @var TPAnonUserModel $user  The user
     */
    public $user;
    /**
     * @var string $countryCode  The country code
     */
    public $countryCode;
    /**
     * @var string $postalCode  The user's postal code
     */
    public $postalCode;
    /**
     * @var string $taxSupport  Caption of tax support
     */
    public $taxSupport;

}
