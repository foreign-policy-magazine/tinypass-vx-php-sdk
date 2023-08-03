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
 * The TPPublisherUserAccessDto model.
 */
class TPPublisherUserAccessDto {

    public static $dataTypes = array(
        "termName" => "string",
        "paymentBillingPlan" => "string",
        "billingPlan" => "string",
        "imageUrl" => "string",
        "resourceName" => "string",
        "type" => "string",
        "typeLabel" => "string",
        "rid" => "string",
        "termId" => "string",
        "createDate" => "string",
        "expireDate" => "string",
        "status" => "string",
        "statusLocalized" => "string",
        "accessId" => "string",
    );
    /**
     * @var string $termName  The subscription term name
     */
    public $termName;
    /**
     * @var string $paymentBillingPlan  The billing plan for the term
     */
    public $paymentBillingPlan;
    /**
     * @var string $billingPlan  The billing plan of the subscription
     */
    public $billingPlan;
    /**
     * @var string $imageUrl  The billing plan for the term
     */
    public $imageUrl;
    /**
     * @var string $resourceName  The subscription resource name
     */
    public $resourceName;
    /**
     * @var string $type  The type of the resource (-1: Undefined, 0: Standard, 1: Video, 2: Paywall, 3: Download, 4: Bundle)
     */
    public $type;
    /**
     * @var string $typeLabel  The resource type label (\"Undefined\", \"Standard\", \"Video\", \"Paywall\", \"Download\", or \"Bundle\")
     */
    public $typeLabel;
    /**
     * @var string $rid  The resource ID
     */
    public $rid;
    /**
     * @var string $termId  The term ID
     */
    public $termId;
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    /**
     * @var string $expireDate  The new expire date
     */
    public $expireDate;
    /**
     * @var string $status  The status
     */
    public $status;
    /**
     * @var string $statusLocalized  The status localized
     */
    public $statusLocalized;
    /**
     * @var string $accessId  The access ID
     */
    public $accessId;

}
