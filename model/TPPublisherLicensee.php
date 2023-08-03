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
 * The TPPublisherLicensee model.
 */
class TPPublisherLicensee {

    public static $dataTypes = array(
        "aid" => "string",
        "licenseeId" => "string",
        "name" => "string",
        "description" => "string",
        "logoUrl" => "string",
        "representatives" => "TPPublisherLicenseeRepresentative[]",
        "managers" => "TPPublisherLicenseeManager[]",
    );
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var string $licenseeId  The public ID of the licensee
     */
    public $licenseeId;
    /**
     * @var string $name  The name of the licensee
     */
    public $name;
    /**
     * @var string $description  The description of the licensee
     */
    public $description;
    /**
     * @var string $logoUrl  A relative URL of the licensee's logo
     */
    public $logoUrl;
    /**
     * @var TPPublisherLicenseeRepresentative[] $representatives  
     */
    public $representatives;
    /**
     * @var TPPublisherLicenseeManager[] $managers  
     */
    public $managers;

}
