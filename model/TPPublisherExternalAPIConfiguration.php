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
 * The TPPublisherExternalAPIConfiguration model.
 */
class TPPublisherExternalAPIConfiguration {

    public static $dataTypes = array(
        "externalApiId" => "string",
        "name" => "string",
        "app" => "TPPublisherApp",
        "formFields" => "TPPublisherExternalAPIField[]",
        "properties" => "TPPublisherExternalAPIProviderProperty[]",
        "provider" => "string",
        "description" => "string",
        "terms" => "TPPublisherTerm[]",
        "enforceUniqueness" => "bool",
        "canUpdateFields" => "bool",
        "forceGracePeriod" => "int",
        "externalApiSourceId" => "int",
        "defaultVerificationPeriod" => "int",
    );
    /**
     * @var string $externalApiId  The ID of the external API configuration
     */
    public $externalApiId;
    /**
     * @var string $name  The name
     */
    public $name;
    /**
     * @var TPPublisherApp $app  The application ref
     */
    public $app;
    /**
     * @var TPPublisherExternalAPIField[] $formFields  
     */
    public $formFields;
    /**
     * @var TPPublisherExternalAPIProviderProperty[] $properties  
     */
    public $properties;
    /**
     * @var string $provider  The name of the external API provider
     */
    public $provider;
    /**
     * @var string $description  The description of the external API configuration
     */
    public $description;
    /**
     * @var TPPublisherTerm[] $terms  
     */
    public $terms;
    /**
     * @var bool $enforceUniqueness  Enforce uniqueness
     */
    public $enforceUniqueness;
    /**
     * @var bool $canUpdateFields  Whether the external API has rights to update firlds
     */
    public $canUpdateFields;
    /**
     * @var int $forceGracePeriod  The external API force grace period
     */
    public $forceGracePeriod;
    /**
     * @var int $externalApiSourceId  The ID of the external API source
     */
    public $externalApiSourceId;
    /**
     * @var int $defaultVerificationPeriod  The default verification period of the external API
     */
    public $defaultVerificationPeriod;

}
