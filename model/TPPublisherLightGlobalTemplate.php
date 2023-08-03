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
 * The TPPublisherLightGlobalTemplate model.
 */
class TPPublisherLightGlobalTemplate {

    public static $dataTypes = array(
        "offerTemplateId" => "string",
        "aid" => "string",
        "name" => "string",
        "offerTemplateName" => "string",
        "description" => "string",
        "createDate" => "string",
        "createBy" => "TPPublisherUser",
        "updateDate" => "string",
        "updateBy" => "TPPublisherUser",
        "publishDate" => "string",
        "version" => "int",
        "thumbnailImageUrl" => "string",
        "liveThumbnailImageUrl" => "string",
        "isPublished" => "bool",
        "countVariants" => "int",
        "countContentFields" => "int",
        "deploymentId" => "string",
        "status" => "string",
    );
    /**
     * @var string $offerTemplateId  The template ID
     */
    public $offerTemplateId;
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var string $name  The application name
     */
    public $name;
    /**
     * @var string $offerTemplateName  The template name
     */
    public $offerTemplateName;
    /**
     * @var string $description  The description
     */
    public $description;
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    /**
     * @var TPPublisherUser $createBy  
     */
    public $createBy;
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    /**
     * @var TPPublisherUser $updateBy  
     */
    public $updateBy;
    /**
     * @var string $publishDate  publish_date
     */
    public $publishDate;
    /**
     * @var int $version  The version
     */
    public $version;
    /**
     * @var string $thumbnailImageUrl  The URL of the thumbnail image
     */
    public $thumbnailImageUrl;
    /**
     * @var string $liveThumbnailImageUrl  The URL of the live thumbnail image
     */
    public $liveThumbnailImageUrl;
    /**
     * @var bool $isPublished  Published or not
     */
    public $isPublished;
    /**
     * @var int $countVariants  The number of the template variants
     */
    public $countVariants;
    /**
     * @var int $countContentFields  The number of the content fields in the template
     */
    public $countContentFields;
    /**
     * @var string $deploymentId  The global template deployment ID
     */
    public $deploymentId;
    /**
     * @var string $status  The template status(\"active\" or \"archived\")
     */
    public $status;

}
