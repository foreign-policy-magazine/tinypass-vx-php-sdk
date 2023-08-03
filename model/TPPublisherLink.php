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
 * The TPPublisherLink model.
 */
class TPPublisherLink {

    public static $dataTypes = array(
        "termId" => "string",
        "name" => "string",
        "type" => "string",
        "paymentBillingPlanDescription" => "string",
        "rid" => "string",
        "resourceName" => "string",
        "periods" => "TPPublisherPeriodLink[]",
    );
    /**
     * @var string $termId  The term ID
     */
    public $termId;
    /**
     * @var string $name  The term name
     */
    public $name;
    /**
     * @var string $type  The term type
     */
    public $type;
    /**
     * @var string $paymentBillingPlanDescription  The description of the term billing plan
     */
    public $paymentBillingPlanDescription;
    /**
     * @var string $rid  The resource ID
     */
    public $rid;
    /**
     * @var string $resourceName  The name of resource
     */
    public $resourceName;
    /**
     * @var TPPublisherPeriodLink[] $periods  
     */
    public $periods;

}
