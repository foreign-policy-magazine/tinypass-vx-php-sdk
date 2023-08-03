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
 * The TPPublisherWebhookEvent model.
 */
class TPPublisherWebhookEvent {

    public static $dataTypes = array(
        "webhookId" => "string",
        "status" => "string",
        "statusLocalized" => "string",
        "retried" => "string",
        "createDate" => "string",
        "updateDate" => "string",
        "lastWebhookResponse" => "TPPublisherWebhookResponse",
        "user" => "TPPublisherUser",
        "type" => "string",
        "typeLocalized" => "string",
        "event" => "string",
        "eventLocalized" => "string",
        "eventType" => "string",
        "responsesCount" => "int",
    );
    /**
     * @var string $webhookId  The webhook ID
     */
    public $webhookId;
    /**
     * @var string $status  The status
     */
    public $status;
    /**
     * @var string $statusLocalized  The status localized
     */
    public $statusLocalized;
    /**
     * @var string $retried  The number of extra attempts to send the webhook
     */
    public $retried;
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    /**
     * @var TPPublisherWebhookResponse $lastWebhookResponse  
     */
    public $lastWebhookResponse;
    /**
     * @var TPPublisherUser $user  
     */
    public $user;
    /**
     * @var string $type  The webhook type
     */
    public $type;
    /**
     * @var string $typeLocalized  The localized webhook type
     */
    public $typeLocalized;
    /**
     * @var string $event  The webhook event
     */
    public $event;
    /**
     * @var string $eventLocalized  The localized webhook event
     */
    public $eventLocalized;
    /**
     * @var string $eventType  The webhook event type
     */
    public $eventType;
    /**
     * @var int $responsesCount  The number of webhook responses
     */
    public $responsesCount;

}
