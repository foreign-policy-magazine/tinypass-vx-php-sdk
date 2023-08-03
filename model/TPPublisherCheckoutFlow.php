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
 * The TPPublisherCheckoutFlow model.
 */
class TPPublisherCheckoutFlow {

    public static $dataTypes = array(
        "checkoutFlowId" => "string",
        "name" => "string",
        "checkoutFlowType" => "string",
        "description" => "string",
        "createDate" => "string",
        "createBy" => "TPPublisherUser",
        "updateDate" => "string",
        "updateBy" => "TPPublisherUser",
        "isPasswordless" => "bool",
        "isSingleStepEnabled" => "bool",
        "isAutoDetectEmail" => "bool",
        "isCustomCheckoutModulesEnabled" => "bool",
        "deleted" => "bool",
        "paySources" => "TPPublisherPaySourceDTO[]",
        "inlineCheckoutModules" => "array[]",
        "modalCheckoutModules" => "array[]",
    );
    /**
     * @var string $checkoutFlowId  The checkout flow ID
     */
    public $checkoutFlowId;
    /**
     * @var string $name  The name
     */
    public $name;
    /**
     * @var string $checkoutFlowType  The checkout flow type (\"PURCHASE\" or \"UPGRADE\")
     */
    public $checkoutFlowType;
    /**
     * @var string $description  The description
     */
    public $description;
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    /**
     * @var TPPublisherUser $createBy  
     */
    public $createBy;
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    /**
     * @var TPPublisherUser $updateBy  
     */
    public $updateBy;
    /**
     * @var bool $isPasswordless  Whether the checkout flow is passwordless
     */
    public $isPasswordless;
    /**
     * @var bool $isSingleStepEnabled  Whether Single Step is enabled
     */
    public $isSingleStepEnabled;
    /**
     * @var bool $isAutoDetectEmail  Whether Auto Detect is email
     */
    public $isAutoDetectEmail;
    /**
     * @var bool $isCustomCheckoutModulesEnabled  Whether checkout JS modules are configured
     */
    public $isCustomCheckoutModulesEnabled;
    /**
     * @var bool $deleted  Whether the object is deleted
     */
    public $deleted;
    /**
     * @var TPPublisherPaySourceDTO[] $paySources  
     */
    public $paySources;
    /**
     * @var array[] $inlineCheckoutModules  
     */
    public $inlineCheckoutModules;
    /**
     * @var array[] $modalCheckoutModules  
     */
    public $modalCheckoutModules;

}
