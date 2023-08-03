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
 * The TPPublisherUserAudit model.
 */
class TPPublisherUserAudit {

    public static $dataTypes = array(
        "userAuditId" => "string",
        "uid" => "string",
        "sessionId" => "string",
        "countryName" => "string",
        "city" => "string",
        "userAgent" => "string",
        "visited" => "string",
        "ip" => "string",
        "actionType" => "string",
        "aid" => "string",
        "changedFields" => "TPPublisherAuditChangedFieldDto[]",
    );
    /**
     * @var string $userAuditId  Public id of specific user audit record
     */
    public $userAuditId;
    /**
     * @var string $uid  uid
     */
    public $uid;
    /**
     * @var string $sessionId  User web session id
     */
    public $sessionId;
    /**
     * @var string $countryName  The country name
     */
    public $countryName;
    /**
     * @var string $city  The name of the city
     */
    public $city;
    /**
     * @var string $userAgent  The user agent (3 chars: platform, os, browser)
     */
    public $userAgent;
    /**
     * @var string $visited  Timestamp of an action
     */
    public $visited;
    /**
     * @var string $ip  IP address of user's connection
     */
    public $ip;
    /**
     * @var string $actionType  An audit action type, such as: login, profile update, password reset
     */
    public $actionType;
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var TPPublisherAuditChangedFieldDto[] $changedFields  
     */
    public $changedFields;

}
