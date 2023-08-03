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
 * The TPPublisherOfferTemplate model.
 */
class TPPublisherOfferTemplate {

    public static $dataTypes = array(
        "offerTemplateId" => "string",
        "tokenType" => "string",
        "aid" => "string",
        "appName" => "string",
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
        "boilerplateType" => "string",
        "boilerplateTypeId" => "string",
        "categoryId" => "string",
        "thumbnailImageUrl" => "string",
        "liveThumbnailImageUrl" => "string",
        "status" => "string",
        "isPublished" => "bool",
        "countVariants" => "int",
        "variantList" => "TPPublisherOfferTemplateVariant[]",
        "archivedDate" => "string",
        "archivedBy" => "TPPublisherUser",
        "contentFieldList" => "TPPublisherOfferTemplateContentField[]",
        "canBeGlobal" => "bool",
        "isGlobal" => "bool",
        "isInherited" => "bool",
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
     * @var string $appName  The application name
     */
    public $appName;
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
     * @var string $boilerplateType  The boilerplate type
     */
    public $boilerplateType;
    /**
     * @var string $boilerplateTypeId  The ID of the boilerplate type
     */
    public $boilerplateTypeId;
    /**
     * @var string $categoryId  The category ID
     */
    public $categoryId;
    /**
     * @var string $thumbnailImageUrl  The URL of the thumbnail image
     */
    public $thumbnailImageUrl;
    /**
     * @var string $liveThumbnailImageUrl  The URL of the live thumbnail image
     */
    public $liveThumbnailImageUrl;
    /**
     * @var string $status  The status
     */
    public $status;
    /**
     * @var bool $isPublished  Published or not
     */
    public $isPublished;
    /**
     * @var int $countVariants  The number of the template variants
     */
    public $countVariants;
    /**
     * @var TPPublisherOfferTemplateVariant[] $variantList  
     */
    public $variantList;
    /**
     * @var string $archivedDate  The archived date
     */
    public $archivedDate;
    /**
     * @var TPPublisherUser $archivedBy  
     */
    public $archivedBy;
    /**
     * @var TPPublisherOfferTemplateContentField[] $contentFieldList  
     */
    public $contentFieldList;
    /**
     * @var bool $canBeGlobal  Whether the object can be converted to global
     */
    public $canBeGlobal;
    /**
     * @var bool $isGlobal  Whether the object is a global template
     */
    public $isGlobal;
    /**
     * @var bool $isInherited  Whether the object is an inherited template
     */
    public $isInherited;

}
