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
 * The TPPublisherPaypalExpressCheckoutConfiguration model.
 */
class TPPublisherPaypalExpressCheckoutConfiguration {

    public static $dataTypes = array(
        "configurationId" => "string",
        "app" => "TPPublisherApp",
        "sourceName" => "string",
        "sourceId" => "int",
        "title" => "string",
        "isEditable" => "bool",
        "isDisabled" => "bool",
        "properties" => "string",
        "isVisible" => "bool",
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
     * @var int $sourceId  The payment provider source ID
     */
    public $sourceId;
    /**
     * @var string $title  The title
     */
    public $title;
    /**
     * @var bool $isEditable  Is configuration properties can be still edit
     */
    public $isEditable;
    /**
     * @var bool $isDisabled  Is configuration disabled for further using
     */
    public $isDisabled;
    /**
     * @var string $properties  'Paypal Express Checkout' payment provider properties
     */
    public $properties;
    /**
     * @var bool $isVisible  Is configuration visible on checkout
     */
    public $isVisible;

}
