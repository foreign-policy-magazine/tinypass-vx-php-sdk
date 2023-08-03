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
 * The TPIdTokenResponse model.
 */
class TPIdTokenResponse {

    public static $dataTypes = array(
        "accessToken" => "string",
        "tokenType" => "string",
        "refreshToken" => "string",
        "code" => "string",
        "error" => "string",
        "errorDescription" => "string",
        "expiresIn" => "int",
        "preauthToken" => "string",
        "socialLinkingResponse" => "TPIdSocialLinkingResponse",
        "registration" => "bool",
        "siteCookieDomain" => "string",
        "emailConfirmationRequired" => "bool",
        "loginTokenId" => "string",
        "extendExpiredAccessEnabled" => "bool",
        "directionUrl" => "string",
        "passwordlessToken" => "string",
        "pubId" => "string",
        "authorizedBySso" => "bool",
        "message" => "string",
        "ssoConfirmation" => "bool",
        "twoFactorAuthRequired" => "bool",
    );
    /**
     * @var string $accessToken  
     */
    public $accessToken;
    /**
     * @var string $tokenType  
     */
    public $tokenType;
    /**
     * @var string $refreshToken  
     */
    public $refreshToken;
    /**
     * @var string $code  
     */
    public $code;
    /**
     * @var string $error  
     */
    public $error;
    /**
     * @var string $errorDescription  
     */
    public $errorDescription;
    /**
     * @var int $expiresIn  
     */
    public $expiresIn;
    /**
     * @var string $preauthToken  
     */
    public $preauthToken;
    /**
     * @var TPIdSocialLinkingResponse $socialLinkingResponse  
     */
    public $socialLinkingResponse;
    /**
     * @var bool $registration  
     */
    public $registration;
    /**
     * @var string $siteCookieDomain  
     */
    public $siteCookieDomain;
    /**
     * @var bool $emailConfirmationRequired  
     */
    public $emailConfirmationRequired;
    /**
     * @var string $loginTokenId  
     */
    public $loginTokenId;
    /**
     * @var bool $extendExpiredAccessEnabled  
     */
    public $extendExpiredAccessEnabled;
    /**
     * @var string $directionUrl  
     */
    public $directionUrl;
    /**
     * @var string $passwordlessToken  
     */
    public $passwordlessToken;
    /**
     * @var string $pubId  
     */
    public $pubId;
    /**
     * @var bool $authorizedBySso  
     */
    public $authorizedBySso;
    /**
     * @var string $message  
     */
    public $message;
    /**
     * @var bool $ssoConfirmation  
     */
    public $ssoConfirmation;
    /**
     * @var bool $twoFactorAuthRequired  
     */
    public $twoFactorAuthRequired;

}
