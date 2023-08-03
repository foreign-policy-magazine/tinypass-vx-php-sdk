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
 * The TPPublisherBraintreeConfiguration model.
 */
class TPPublisherBraintreeConfiguration {

    public static $dataTypes = array(
        "configurationId" => "string",
        "app" => "TPPublisherApp",
        "sourceName" => "string",
        "title" => "string",
        "braintreeMerchantId" => "string",
        "braintreeClientKey" => "string",
        "braintreeMerchantAccounts" => "TPPublisherBraintreeMerchantAccountIdEntry[]",
        "braintreePublicKey" => "string",
        "braintreePrivateKey" => "string",
        "isDisabled" => "bool",
        "isEditable" => "bool",
        "isPaypalEnabled" => "bool",
        "isApplePayEnabled" => "bool",
        "braintreeDescriptor" => "string",
        "braintreeTrialDescriptor" => "string",
        "braintreeAppNameCustomField" => "string",
        "payeeSettings" => "TPPublisherPayeeSettingsEntry[]",
        "isVisible" => "bool",
        "version" => "string",
        "versionTitle" => "string",
        "useMoto" => "bool",
    );
    /**
     * @var string $configurationId  The ID of the payment provider configuration
     */
    public $configurationId;
    /**
     * @var TPPublisherApp $app  The application ref
     */
    public $app;
    /**
     * @var string $sourceName  The payment provider name
     */
    public $sourceName;
    /**
     * @var string $title  The title
     */
    public $title;
    /**
     * @var string $braintreeMerchantId  The merchant ID provided by Braintree
     */
    public $braintreeMerchantId;
    /**
     * @var string $braintreeClientKey  The client Key provided by Braintree
     */
    public $braintreeClientKey;
    /**
     * @var TPPublisherBraintreeMerchantAccountIdEntry[] $braintreeMerchantAccounts  
     */
    public $braintreeMerchantAccounts;
    /**
     * @var string $braintreePublicKey  The public key provided by Braintree
     */
    public $braintreePublicKey;
    /**
     * @var string $braintreePrivateKey  The private Key provided by Braintree
     */
    public $braintreePrivateKey;
    /**
     * @var bool $isDisabled  Is configuration disabled for further using
     */
    public $isDisabled;
    /**
     * @var bool $isEditable  Is configuration properties can be still edit
     */
    public $isEditable;
    /**
     * @var bool $isPaypalEnabled  Is PayPal enabled for this Braintree configuration
     */
    public $isPaypalEnabled;
    /**
     * @var bool $isApplePayEnabled  Is Apple Pay enabled for this Braintree configuration
     */
    public $isApplePayEnabled;
    /**
     * @var string $braintreeDescriptor  Transaction descriptor
     */
    public $braintreeDescriptor;
    /**
     * @var string $braintreeTrialDescriptor  Trial transaction descriptor
     */
    public $braintreeTrialDescriptor;
    /**
     * @var string $braintreeAppNameCustomField  The custom field to stores the name field that containing the name of the application
     */
    public $braintreeAppNameCustomField;
    /**
     * @var TPPublisherPayeeSettingsEntry[] $payeeSettings  
     */
    public $payeeSettings;
    /**
     * @var bool $isVisible  Is configuration visible on checkout
     */
    public $isVisible;
    /**
     * @var string $version  Version of the integration
     */
    public $version;
    /**
     * @var string $versionTitle  Version's title of the integration
     */
    public $versionTitle;
    /**
     * @var bool $useMoto  Use MOTO transaction
     */
    public $useMoto;

}
