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
 * The TPPublisherActionDTO model.
 */
class TPPublisherActionDTO {

    public static $dataTypes = array(
        "actionId" => "string",
        "type" => "string",
        "numberOfItems" => "int",
        "status" => "string",
        "scheduleTime" => "string",
        "changeSubscriptionTermStep" => "TPPublisherActionStepDTO",
        "upgradeSubscriptionStep" => "TPPublisherActionStepDTO",
        "readonly" => "bool",
        "sendEmailStep" => "TPPublisherActionStepDTO",
        "progress" => "int",
    );
    /**
     * @var string $actionId  The action id
     */
    public $actionId;
    /**
     * @var string $type  Action type
     */
    public $type;
    /**
     * @var int $numberOfItems  Number of handled/handling items
     */
    public $numberOfItems;
    /**
     * @var string $status  Action status
     */
    public $status;
    /**
     * @var string $scheduleTime  Schedule time
     */
    public $scheduleTime;
    /**
     * @var TPPublisherActionStepDTO $changeSubscriptionTermStep  Change subscription term step
     */
    public $changeSubscriptionTermStep;
    /**
     * @var TPPublisherActionStepDTO $upgradeSubscriptionStep  Upgrade subscription step
     */
    public $upgradeSubscriptionStep;
    /**
     * @var bool $readonly  Action readonly
     */
    public $readonly;
    /**
     * @var TPPublisherActionStepDTO $sendEmailStep  Send email step
     */
    public $sendEmailStep;
    /**
     * @var int $progress  Progress
     */
    public $progress;

}
