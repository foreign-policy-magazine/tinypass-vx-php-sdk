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
 * The TPPublisherLinkedTermSubscriptionParams model.
 */
class TPPublisherLinkedTermSubscriptionParams {

    public static $dataTypes = array(
        "subscriptionId" => "string",
        "userToken" => "string",
        "userId" => "string",
        "externalTermId" => "string",
        "productIds" => "array[]",
        "state" => "string",
        "upgrade" => "TPPublisherLinkedTermUpgradeParams",
        "validTo" => "int",
        "autoRenew" => "bool",
        "purchase" => "TPPublisherLinkedTermPurchaseParams",
        "custom" => "string",
        "period" => "string",
    );
    /**
     * @var string $subscriptionId  The ID of the subscription to be created. It should be provided by external system.
     */
    public $subscriptionId;
    /**
     * @var string $userToken  The JWT token of the end-user the subscription belongs to.
     */
    public $userToken;
    /**
     * @var string $userId  The ID of the end-user the subscription belongs to. It should be UID of Piano system.
     */
    public $userId;
    /**
     * @var string $externalTermId  External system's identifier for linked term
     */
    public $externalTermId;
    /**
     * @var array[] $productIds  The IDs of the products the end-user is subscribed to. They should be provided by external system.
     */
    public $productIds;
    /**
     * @var string $state  The state of the subscription. Allowed values are 'Active' and 'Not active'
     */
    public $state;
    /**
     * @var TPPublisherLinkedTermUpgradeParams $upgrade  The upgrade data of the subscription if the end-user created it via upgrade from another subscription.
     */
    public $upgrade;
    /**
     * @var int $validTo  The Unix timestamp the subscription is valid to. If the subscription is unlimited, then it should be '0' (zero).
     */
    public $validTo;
    /**
     * @var bool $autoRenew  A value indicating whether auto renewal of the subscription is enabled or disabled.
     */
    public $autoRenew;
    /**
     * @var TPPublisherLinkedTermPurchaseParams $purchase  The purchase data of the subscription if the end-user purchased it.
     */
    public $purchase;
    /**
     * @var string $custom  The custom data that should be linked with the subscription. It should be provided by external system and can be any.
     */
    public $custom;
    /**
     * @var string $period  The billing (or renewal) period of the subscription.
     */
    public $period;

}
