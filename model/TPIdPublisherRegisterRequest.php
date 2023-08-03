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
 * The TPIdPublisherRegisterRequest model.
 */
class TPIdPublisherRegisterRequest {

    public static $dataTypes = array(
        "aid" => "string",
        "email" => "string",
        "firstName" => "string",
        "lastName" => "string",
        "password" => "string",
        "consents" => "string",
        "customFields" => "string",
        "formId" => "string",
        "passwordless" => "bool",
        "magicLinkSent" => "bool",
    );
    /**
     * @var string $aid  
     */
    public $aid;
    /**
     * @var string $email  
     */
    public $email;
    /**
     * @var string $firstName  
     */
    public $firstName;
    /**
     * @var string $lastName  
     */
    public $lastName;
    /**
     * @var string $password  
     */
    public $password;
    /**
     * @var string $consents  
     */
    public $consents;
    /**
     * @var string $customFields  
     */
    public $customFields;
    /**
     * @var string $formId  
     */
    public $formId;
    /**
     * @var bool $passwordless  
     */
    public $passwordless;
    /**
     * @var bool $magicLinkSent  
     */
    public $magicLinkSent;

}
