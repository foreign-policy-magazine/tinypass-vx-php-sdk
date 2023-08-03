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
 * The TPPublisherPeriodLinkCandidate model.
 */
class TPPublisherPeriodLinkCandidate {

    public static $dataTypes = array(
        "accessPeriodId" => "string",
        "name" => "string",
        "type" => "string",
        "paymentBillingPlanDescription" => "string",
        "currentLogicId" => "string",
        "currentLogicName" => "string",
        "removed" => "bool",
    );
    /**
     * @var string $accessPeriodId  The ID of the access period in dynamic term billing configuration
     */
    public $accessPeriodId;
    /**
     * @var string $name  Access period name
     */
    public $name;
    /**
     * @var string $type  Access period type
     */
    public $type;
    /**
     * @var string $paymentBillingPlanDescription  The description of the term billing plan
     */
    public $paymentBillingPlanDescription;
    /**
     * @var string $currentLogicId  The current logic id
     */
    public $currentLogicId;
    /**
     * @var string $currentLogicName  The current logic name
     */
    public $currentLogicName;
    /**
     * @var bool $removed  Whether the access period is removed
     */
    public $removed;

}