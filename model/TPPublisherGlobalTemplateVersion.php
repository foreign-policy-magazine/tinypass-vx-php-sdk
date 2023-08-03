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
 * The TPPublisherGlobalTemplateVersion model.
 */
class TPPublisherGlobalTemplateVersion {

    public static $dataTypes = array(
        "offerTemplateId" => "string",
        "tokenType" => "string",
        "name" => "string",
        "description" => "string",
        "aid" => "string",
        "type" => "string",
        "typeId" => "string",
        "categoryId" => "string",
        "published" => "bool",
        "publishDate" => "string",
        "version" => "int",
        "createDate" => "string",
        "createBy" => "TPPublisherUser",
        "updateDate" => "string",
        "updateBy" => "TPPublisherUser",
        "status" => "string",
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
     * @var string $name  The name
     */
    public $name;
    /**
     * @var string $description  The description
     */
    public $description;
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var string $type  The type
     */
    public $type;
    /**
     * @var string $typeId  The template type ID
     */
    public $typeId;
    /**
     * @var string $categoryId  The category ID
     */
    public $categoryId;
    /**
     * @var bool $published  Whether the template is published
     */
    public $published;
    /**
     * @var string $publishDate  publish_date
     */
    public $publishDate;
    /**
     * @var int $version  The template version
     */
    public $version;
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
     * @var string $status  status
     */
    public $status;

}
