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
 * The TPAnonPasswordlessPurchaseCompleteResult model.
 */
class TPAnonPasswordlessPurchaseCompleteResult {

    public static $dataTypes = array(
        "oid" => "string",
        "url" => "string",
        "resource" => "TPAnonResource",
        "showOfferParams" => "string",
        "type" => "string",
        "processId" => "string",
        "pollingEnabled" => "bool",
        "pollingTimeouts" => "array[]",
    );
    /**
     * @var string $oid  The order ID
     */
    public $oid;
    /**
     * @var string $url  The URL of the page
     */
    public $url;
    /**
     * @var TPAnonResource $resource  The resource
     */
    public $resource;
    /**
     * @var string $showOfferParams  Parameters to show offer for continue payment flow after confirmation
     */
    public $showOfferParams;
    /**
     * @var string $type  The term type
     */
    public $type;
    /**
     * @var string $processId  Process ID
     */
    public $processId;
    /**
     * @var bool $pollingEnabled  Is polling enabled
     */
    public $pollingEnabled;
    /**
     * @var array[] $pollingTimeouts  
     */
    public $pollingTimeouts;

}
