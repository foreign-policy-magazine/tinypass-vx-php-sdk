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
 * The TPUserResourceDto model.
 */
class TPUserResourceDto {

    public static $dataTypes = array(
        "rid" => "string",
        "aid" => "string",
        "publishDate" => "string",
        "name" => "string",
        "description" => "string",
        "imageUrl" => "string",
        "purchaseUrl" => "string",
    );
    /**
     * @var string $rid  The resource ID
     */
    public $rid;
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var string $publishDate  The publish date
     */
    public $publishDate;
    /**
     * @var string $name  The name
     */
    public $name;
    /**
     * @var string $description  The resource description
     */
    public $description;
    /**
     * @var string $imageUrl  The URL of the resource image
     */
    public $imageUrl;
    /**
     * @var string $purchaseUrl  The URL of the purchase page
     */
    public $purchaseUrl;

}