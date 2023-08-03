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
 * The TPPublisherDeploymentAppDetails model.
 */
class TPPublisherDeploymentAppDetails {

    public static $dataTypes = array(
        "itemId" => "string",
        "status" => "string",
        "aid" => "string",
        "name" => "string",
        "appLogo" => "string",
        "offerTemplateId" => "string",
        "offerTemplateName" => "string",
        "version" => "int",
        "updateDate" => "string",
        "updateBy" => "TPPublisherUser",
        "contentFieldList" => "TPPublisherDeploymentContentFields[]",
        "variantList" => "TPPublisherDeploymentVariantParamDto[]",
        "selected" => "string",
    );
    /**
     * @var string $itemId  The ID of the global template deployment item
     */
    public $itemId;
    /**
     * @var string $status  The global template deployment status (\"pending\", \"deploying\", \"error\", or \"success\")
     */
    public $status;
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var string $name  The name
     */
    public $name;
    /**
     * @var string $appLogo  The application logo
     */
    public $appLogo;
    /**
     * @var string $offerTemplateId  The template ID
     */
    public $offerTemplateId;
    /**
     * @var string $offerTemplateName  The template name
     */
    public $offerTemplateName;
    /**
     * @var int $version  The template version
     */
    public $version;
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    /**
     * @var TPPublisherUser $updateBy  
     */
    public $updateBy;
    /**
     * @var TPPublisherDeploymentContentFields[] $contentFieldList  
     */
    public $contentFieldList;
    /**
     * @var TPPublisherDeploymentVariantParamDto[] $variantList  
     */
    public $variantList;
    /**
     * @var string $selected  App select flag
     */
    public $selected;

}
