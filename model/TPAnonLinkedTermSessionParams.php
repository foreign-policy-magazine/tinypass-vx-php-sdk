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
 * The TPAnonLinkedTermSessionParams model.
 */
class TPAnonLinkedTermSessionParams {

    public static $dataTypes = array(
        "trackingId" => "string",
        "tbc" => "string",
        "pcid" => "string",
        "offerId" => "string",
        "offerTemplateId" => "string",
        "offerTemplateVersionId" => "string",
        "pageViewId" => "string",
        "pageViewContent" => "TPAnonLinkedTermPageViewContentParams",
        "consents" => "string",
    );
    /**
     * @var string $trackingId  The User's tracking id
     */
    public $trackingId;
    /**
     * @var string $tbc  The User's tbc
     */
    public $tbc;
    /**
     * @var string $pcid  The User's pcid
     */
    public $pcid;
    /**
     * @var string $offerId  The offer ID
     */
    public $offerId;
    /**
     * @var string $offerTemplateId  The template ID
     */
    public $offerTemplateId;
    /**
     * @var string $offerTemplateVersionId  The ID of the template version ID
     */
    public $offerTemplateVersionId;
    /**
     * @var string $pageViewId  The pageview ID, can be retrieved from cookies through JS SDK
     */
    public $pageViewId;
    /**
     * @var TPAnonLinkedTermPageViewContentParams $pageViewContent  PageView content parameters
     */
    public $pageViewContent;
    /**
     * @var string $consents  The conversion consents in JSON format
     */
    public $consents;

}
