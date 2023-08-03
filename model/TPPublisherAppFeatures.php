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
 * The TPPublisherAppFeatures model.
 */
class TPPublisherAppFeatures {

    public static $dataTypes = array(
        "myAccount" => "TPPublisherMyAccount",
        "composer" => "TPPublisherComposer",
        "subscriptionRestrictions" => "TPPublisherSubscriptionRestrictions",
        "redemptionPage" => "TPPublisherRedemptionPage",
        "isPaymentMockEnabled" => "bool",
        "isPublisherDashboardLocalizationEnabled" => "bool",
        "isCheckoutAuthenticationInSeparateState" => "bool",
    );
    /**
     * @var TPPublisherMyAccount $myAccount  The MyAccount object
     */
    public $myAccount;
    /**
     * @var TPPublisherComposer $composer  The Composer object
     */
    public $composer;
    /**
     * @var TPPublisherSubscriptionRestrictions $subscriptionRestrictions  The restrictions applicable to the app
     */
    public $subscriptionRestrictions;
    /**
     * @var TPPublisherRedemptionPage $redemptionPage  Whether the app is allowed to use a system redemption page
     */
    public $redemptionPage;
    /**
     * @var bool $isPaymentMockEnabled  Whether a mock provider is enabled instead of real payment providers
     */
    public $isPaymentMockEnabled;
    /**
     * @var bool $isPublisherDashboardLocalizationEnabled  Whether publisher dashboard localization is enabled
     */
    public $isPublisherDashboardLocalizationEnabled;
    /**
     * @var bool $isCheckoutAuthenticationInSeparateState  Whether checkout authentication in separate state
     */
    public $isCheckoutAuthenticationInSeparateState;

}
