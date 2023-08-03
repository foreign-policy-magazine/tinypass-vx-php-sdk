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
 * The TPPublisherOfferTemplateRevision model.
 */
class TPPublisherOfferTemplateRevision {

    public static $dataTypes = array(
        "offerTemplateId" => "string",
        "tokenType" => "string",
        "aid" => "string",
        "name" => "string",
        "description" => "string",
        "deleted" => "bool",
        "createDate" => "string",
        "createBy" => "TPPublisherUser",
        "updateDate" => "string",
        "updateBy" => "TPPublisherUser",
        "publishDate" => "string",
        "version" => "int",
        "type" => "string",
        "typeId" => "string",
        "isPublished" => "bool",
        "contentLoaded" => "bool",
        "content1Type" => "string",
        "content2Type" => "string",
        "content1Value" => "string",
        "content2Value" => "string",
    );
    /**
     * @var string $offerTemplateId  The template ID
     */
    public $offerTemplateId;
    /**
     * @var string $tokenType  Is template token type
     */
    public $tokenType;
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var string $name  The name
     */
    public $name;
    /**
     * @var string $description  The description
     */
    public $description;
    /**
     * @var bool $deleted  Whether the object is deleted
     */
    public $deleted;
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
     * @var string $type  The type
     */
    public $type;
    /**
     * @var string $typeId  The type
     */
    public $typeId;
    /**
     * @var bool $isPublished  Published or not
     */
    public $isPublished;
    /**
     * @var bool $contentLoaded  Loaded conentent or not
     */
    public $contentLoaded;
    /**
     * @var string $content1Type  HTML
     */
    public $content1Type;
    /**
     * @var string $content2Type  CSS
     */
    public $content2Type;
    /**
     * @var string $content1Value  content1_value
     */
    public $content1Value;
    /**
     * @var string $content2Value  content2_value
     */
    public $content2Value;

}
