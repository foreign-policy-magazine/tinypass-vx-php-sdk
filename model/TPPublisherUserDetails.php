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
 * The TPPublisherUserDetails model.
 */
class TPPublisherUserDetails {

    public static $dataTypes = array(
        "uid" => "string",
        "name" => "string",
        "personalName" => "string",
        "image1" => "string",
        "accessCount" => "int",
        "spentMoney" => "TPPublisherPriceDTO[]",
        "createDate" => "string",
        "email" => "string",
        "lastActiveDate" => "string",
    );
    /**
     * @var string $uid  The user ID
     */
    public $uid;
    /**
     * @var string $name  The user's name
     */
    public $name;
    /**
     * @var string $personalName  The user's personal name. Name and surname ordered as per locale
     */
    public $personalName;
    /**
     * @var string $image1  The user's profile image
     */
    public $image1;
    /**
     * @var int $accessCount  The count of user accesses
     */
    public $accessCount;
    /**
     * @var TPPublisherPriceDTO[] $spentMoney  
     */
    public $spentMoney;
    /**
     * @var string $createDate  The user creation date
     */
    public $createDate;
    /**
     * @var string $email  The user's email address (single)
     */
    public $email;
    /**
     * @var string $lastActiveDate  The last active date
     */
    public $lastActiveDate;

}
