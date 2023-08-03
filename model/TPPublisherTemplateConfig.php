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
 * The TPPublisherTemplateConfig model.
 */
class TPPublisherTemplateConfig {

    public static $dataTypes = array(
        "name" => "string",
        "content1Type" => "string",
        "content2Type" => "string",
        "content3Type" => "string",
        "content1Value" => "string",
        "content2Value" => "string",
        "content3Value" => "string",
        "historyList" => "string",
        "templateType" => "string",
        "boilerplateType" => "string",
    );
    /**
     * @var string $name  The name
     */
    public $name;
    /**
     * @var string $content1Type  HTML
     */
    public $content1Type;
    /**
     * @var string $content2Type  CSS
     */
    public $content2Type;
    /**
     * @var string $content3Type  JSON
     */
    public $content3Type;
    /**
     * @var string $content1Value  The content1 value
     */
    public $content1Value;
    /**
     * @var string $content2Value  The content2 value
     */
    public $content2Value;
    /**
     * @var string $content3Value  The content3 value
     */
    public $content3Value;
    /**
     * @var string $historyList  The template documentation (if any)
     */
    public $historyList;
    /**
     * @var string $templateType  The offer template type
     */
    public $templateType;
    /**
     * @var string $boilerplateType  The boilerplate type
     */
    public $boilerplateType;

}
