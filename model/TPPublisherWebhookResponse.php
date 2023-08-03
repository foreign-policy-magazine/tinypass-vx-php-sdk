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
 * The TPPublisherWebhookResponse model.
 */
class TPPublisherWebhookResponse {

    public static $dataTypes = array(
        "status" => "string",
        "statusLocalized" => "string",
        "responseHeaders" => "string",
        "responseBody" => "string",
        "createDate" => "string",
        "requestUrl" => "string",
        "requestData" => "string",
    );
    /**
     * @var string $status  Webhook response status
     */
    public $status;
    /**
     * @var string $statusLocalized  The webhook response status localized
     */
    public $statusLocalized;
    /**
     * @var string $responseHeaders  The webhook response headers
     */
    public $responseHeaders;
    /**
     * @var string $responseBody  The webhook response body
     */
    public $responseBody;
    /**
     * @var string $createDate  The date of the webhook response
     */
    public $createDate;
    /**
     * @var string $requestUrl  The webhook request URL
     */
    public $requestUrl;
    /**
     * @var string $requestData  The webhook request data
     */
    public $requestData;

}
