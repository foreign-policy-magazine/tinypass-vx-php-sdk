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
 * The TPUserAccessDTO model.
 */
class TPUserAccessDTO {

    public static $dataTypes = array(
        "accessId" => "string",
        "parentAccessId" => "string",
        "granted" => "bool",
        "user" => "TPUserUserDto",
        "resource" => "TPUserResourceDto",
        "expireDate" => "string",
        "startDate" => "string",
        "canRevokeAccess" => "bool",
        "customData" => "string",
    );
    /**
     * @var string $accessId  The access ID
     */
    public $accessId;
    /**
     * @var string $parentAccessId  The parent access ID (for accesses to bundled resources)
     */
    public $parentAccessId;
    /**
     * @var bool $granted  Granted == true if the user has access
     */
    public $granted;
    /**
     * @var TPUserUserDto $user  The user
     */
    public $user;
    /**
     * @var TPUserResourceDto $resource  The resource
     */
    public $resource;
    /**
     * @var string $expireDate  The expire date of the access item; null means unlimited
     */
    public $expireDate;
    /**
     * @var string $startDate  The start date.
     */
    public $startDate;
    /**
     * @var bool $canRevokeAccess  Whether the access can be revoked (\"true\" or \"false\")
     */
    public $canRevokeAccess;
    /**
     * @var string $customData  Custom data
     */
    public $customData;

}
