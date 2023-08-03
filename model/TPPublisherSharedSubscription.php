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
 * The TPPublisherSharedSubscription model.
 */
class TPPublisherSharedSubscription {

    public static $dataTypes = array(
        "subscriptionId" => "string",
        "termId" => "string",
        "uid" => "string",
        "totalTokens" => "int",
        "unusedTokens" => "int",
        "redeemedTokens" => "int",
        "sharedAccounts" => "TPPublisherUserSubscriptionAccount[]",
    );
    /**
     * @var string $subscriptionId  Subscription id
     */
    public $subscriptionId;
    /**
     * @var string $termId  The term ID
     */
    public $termId;
    /**
     * @var string $uid  The user's ID
     */
    public $uid;
    /**
     * @var int $totalTokens  total tokens
     */
    public $totalTokens;
    /**
     * @var int $unusedTokens  The number of unused tokens
     */
    public $unusedTokens;
    /**
     * @var int $redeemedTokens  The number of redeemed tokens
     */
    public $redeemedTokens;
    /**
     * @var TPPublisherUserSubscriptionAccount[] $sharedAccounts  
     */
    public $sharedAccounts;

}
