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
 * The TPPublisherMailOptionsVerificationResult model.
 */
class TPPublisherMailOptionsVerificationResult {

    public static $dataTypes = array(
        "dkim" => "bool",
        "dkimTokens" => "array[]",
        "spf" => "bool",
        "spfRecord" => "string",
        "txt" => "bool",
        "txtToken" => "string",
        "emailVerifyStatus" => "string",
        "verifiedEmail" => "string",
        "emailProvider" => "string",
        "emailDomainVerified" => "bool",
    );
    /**
     * @var bool $dkim  DKIM record validity
     */
    public $dkim;
    /**
     * @var array[] $dkimTokens  
     */
    public $dkimTokens;
    /**
     * @var bool $spf  SPF record validity
     */
    public $spf;
    /**
     * @var string $spfRecord  SPF record value
     */
    public $spfRecord;
    /**
     * @var bool $txt  TXT record validity
     */
    public $txt;
    /**
     * @var string $txtToken  TXT record
     */
    public $txtToken;
    /**
     * @var string $emailVerifyStatus  SENT if verification email was sent, ALREADY_VERIFIED if already verified, otherwise NA
     */
    public $emailVerifyStatus;
    /**
     * @var string $verifiedEmail  Email address, to which has been sent verification email
     */
    public $verifiedEmail;
    /**
     * @var string $emailProvider  Email provider name (MANDRILL, AMAZON_SES)
     */
    public $emailProvider;
    /**
     * @var bool $emailDomainVerified  Email domain is verified
     */
    public $emailDomainVerified;

}
