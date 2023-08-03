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
 * The TPPublisherExperience model.
 */
class TPPublisherExperience {

    public static $dataTypes = array(
        "experienceId" => "string",
        "aid" => "string",
        "type" => "string",
        "coverImageUrl" => "string",
        "title" => "string",
        "description" => "string",
        "model" => "string",
        "draft" => "string",
        "draftDate" => "string",
        "draftBaseVersion" => "int",
        "createDate" => "string",
        "createBy" => "string",
        "updateDate" => "string",
        "updateBy" => "string",
        "version" => "int",
        "schedule" => "string",
        "status" => "string",
        "hierarchyType" => "string",
        "parentId" => "string",
    );
    /**
     * @var string $experienceId  Experience identifier
     */
    public $experienceId;
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var string $type  Experience type (\"site\" or \"mobile\")
     */
    public $type;
    /**
     * @var string $coverImageUrl  URL to the image that covers the experience
     */
    public $coverImageUrl;
    /**
     * @var string $title  Experience title
     */
    public $title;
    /**
     * @var string $description  Experience description
     */
    public $description;
    /**
     * @var string $model  Experience model in JSON format
     */
    public $model;
    /**
     * @var string $draft  Experience model saved draft in JSON format
     */
    public $draft;
    /**
     * @var string $draftDate  Date when experience model saved draft in JSON format
     */
    public $draftDate;
    /**
     * @var int $draftBaseVersion  Draft based on which version
     */
    public $draftBaseVersion;
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    /**
     * @var string $createBy  The user who created the object
     */
    public $createBy;
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    /**
     * @var string $updateBy  The last user to update the object
     */
    public $updateBy;
    /**
     * @var int $version  The version
     */
    public $version;
    /**
     * @var string $schedule  Experience schedule in JSON format
     */
    public $schedule;
    /**
     * @var string $status  Experience status
     */
    public $status;
    /**
     * @var string $hierarchyType  Experience hierarchy type
     */
    public $hierarchyType;
    /**
     * @var string $parentId  Global experience public id using which was created current experience
     */
    public $parentId;

}
