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
 * The TPPublisherBill model.
 */
class TPPublisherBill {

    public static $dataTypes = array(
        "billId" => "string",
        "type" => "string",
        "creationDate" => "string",
        "status" => "string",
        "url" => "string",
        "rid" => "string",
        "resourceName" => "string",
        "resourceImageUrl" => "string",
        "name" => "string",
        "paymentBillingPlan" => "string",
        "cancelable" => "string",
    );
    /**
     * @var string $billId  The public ID for the bill
     */
    public $billId;
    /**
     * @var string $type  The bill type
     */
    public $type;
    /**
     * @var string $creationDate  Creation date of a bill
     */
    public $creationDate;
    /**
     * @var string $status  Status of a bill
     */
    public $status;
    /**
     * @var string $url  URL of a bill
     */
    public $url;
    /**
     * @var string $rid  The resource ID
     */
    public $rid;
    /**
     * @var string $resourceName  The name of the resource
     */
    public $resourceName;
    /**
     * @var string $resourceImageUrl  The URL of the resource image
     */
    public $resourceImageUrl;
    /**
     * @var string $name  The term name
     */
    public $name;
    /**
     * @var string $paymentBillingPlan  The billing plan for the term
     */
    public $paymentBillingPlan;
    /**
     * @var string $cancelable  Is bill cancelable
     */
    public $cancelable;

}
