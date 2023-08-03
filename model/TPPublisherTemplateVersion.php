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
 * The TPPublisherTemplateVersion model.
 */
class TPPublisherTemplateVersion {

    public static $dataTypes = array(
        "templateVersionId" => "string",
        "templateId" => "string",
        "name" => "string",
        "comment" => "string",
        "subject" => "string",
        "body" => "string",
        "html" => "string",
        "css" => "string",
        "version" => "int",
        "lang" => "string",
        "published" => "bool",
        "createDate" => "string",
        "updateDate" => "string",
        "xdays" => "int",
    );
    /**
     * @var string $templateVersionId  The template version ID
     */
    public $templateVersionId;
    /**
     * @var string $templateId  The template ID
     */
    public $templateId;
    /**
     * @var string $name  The name of template version
     */
    public $name;
    /**
     * @var string $comment  The template comment
     */
    public $comment;
    /**
     * @var string $subject  The template subject
     */
    public $subject;
    /**
     * @var string $body  The template body
     */
    public $body;
    /**
     * @var string $html  The template HTML
     */
    public $html;
    /**
     * @var string $css  The template CSS
     */
    public $css;
    /**
     * @var int $version  The template version
     */
    public $version;
    /**
     * @var string $lang  The template language
     */
    public $lang;
    /**
     * @var bool $published  Whether the template is published
     */
    public $published;
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    /**
     * @var int $xdays  Email x days
     */
    public $xdays;

}
