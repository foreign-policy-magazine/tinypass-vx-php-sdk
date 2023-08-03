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
 * The TPPublisherTerm model.
 */
class TPPublisherTerm {

    public static $dataTypes = array(
        "termId" => "string",
        "aid" => "string",
        "resource" => "TPPublisherResource",
        "type" => "string",
        "typeName" => "string",
        "name" => "string",
        "description" => "string",
        "productCategory" => "string",
        "verifyOnRenewal" => "bool",
        "createDate" => "string",
        "updateDate" => "string",
        "termBillingDescriptor" => "string",
        "paymentBillingPlan" => "string",
        "paymentBillingPlanDescription" => "string",
        "paymentBillingPlanTable" => "array[]",
        "paymentAllowRenewDays" => "int",
        "paymentForceAutoRenew" => "bool",
        "paymentIsCustomPriceAvailable" => "bool",
        "paymentIsSubscription" => "bool",
        "paymentHasFreeTrial" => "bool",
        "paymentNewCustomersOnly" => "bool",
        "paymentTrialNewCustomersOnly" => "bool",
        "paymentAllowPromoCodes" => "bool",
        "paymentRenewGracePeriod" => "int",
        "paymentAllowGift" => "bool",
        "paymentCurrency" => "string",
        "currencySymbol" => "string",
        "paymentFirstPrice" => "double",
        "schedule" => "TPPublisherSchedule",
        "scheduleBilling" => "string",
        "customRequireUser" => "bool",
        "customDefaultAccessPeriod" => "int",
        "adviewVastUrl" => "string",
        "adviewAccessPeriod" => "int",
        "registrationAccessPeriod" => "int",
        "registrationGracePeriod" => "int",
        "externalApiId" => "string",
        "externalApiName" => "string",
        "externalApiSource" => "int",
        "externalApiFormFields" => "TPPublisherExternalAPIField[]",
        "evtVerificationPeriod" => "int",
        "evtFixedTimeAccessPeriod" => "int",
        "evtGracePeriod" => "int",
        "evtItunesBundleId" => "string",
        "evtItunesProductId" => "string",
        "evtGooglePlayProductId" => "string",
        "evtCdsProductId" => "string",
        "evt" => "TPPublisherTerm",
        "collectAddress" => "bool",
        "deliveryZone" => "TPPublisherDeliveryZone[]",
        "defaultCountry" => "TPPublisherCountry",
        "voucheringPolicy" => "TPPublisherVoucheringPolicy",
        "billingConfig" => "string",
        "isAllowedToChangeSchedulePeriodInPast" => "bool",
        "collectShippingAddress" => "bool",
        "changeOptions" => "TPPublisherTermChangeOption[]",
        "sharedAccountCount" => "int",
        "sharedRedemptionUrl" => "string",
        "billingConfiguration" => "string",
        "showFullBillingPlan" => "bool",
        "externalTermId" => "string",
        "externalProductIds" => "string",
        "subscriptionManagementUrl" => "string",
        "customData" => "map[]",
    );
    /**
     * @var string $termId  The term ID
     */
    public $termId;
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var TPPublisherResource $resource  The resource
     */
    public $resource;
    /**
     * @var string $type  The term type
     */
    public $type;
    /**
     * @var string $typeName  The term type name
     */
    public $typeName;
    /**
     * @var string $name  The term name
     */
    public $name;
    /**
     * @var string $description  The description of the term
     */
    public $description;
    /**
     * @var string $productCategory  The product category
     */
    public $productCategory;
    /**
     * @var bool $verifyOnRenewal  Whether the term should be verified before renewal (if \"FALSE\", this step is skipped)
     */
    public $verifyOnRenewal;
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    /**
     * @var string $termBillingDescriptor  The term billing descriptor
     */
    public $termBillingDescriptor;
    /**
     * @var string $paymentBillingPlan  The billing plan for the term
     */
    public $paymentBillingPlan;
    /**
     * @var string $paymentBillingPlanDescription  The description of the term billing plan
     */
    public $paymentBillingPlanDescription;
    /**
     * @var array[] $paymentBillingPlanTable  
     */
    public $paymentBillingPlanTable;
    /**
     * @var int $paymentAllowRenewDays  How many days in advance users user can renew
     */
    public $paymentAllowRenewDays;
    /**
     * @var bool $paymentForceAutoRenew  Prevents users from disabling autorenewal (always \"TRUE\" for dynamic terms)
     */
    public $paymentForceAutoRenew;
    /**
     * @var bool $paymentIsCustomPriceAvailable  Whether users can pay more than term price
     */
    public $paymentIsCustomPriceAvailable;
    /**
     * @var bool $paymentIsSubscription  Whether this term (payment or dynamic) is a subscription (unlike one-off)
     */
    public $paymentIsSubscription;
    /**
     * @var bool $paymentHasFreeTrial  Whether payment includes a free trial
     */
    public $paymentHasFreeTrial;
    /**
     * @var bool $paymentNewCustomersOnly  Whether to show the term only to users having no dynamic or purchase conversions yet
     */
    public $paymentNewCustomersOnly;
    /**
     * @var bool $paymentTrialNewCustomersOnly  Whether to allow trial period only to users having no purchases yet
     */
    public $paymentTrialNewCustomersOnly;
    /**
     * @var bool $paymentAllowPromoCodes  Whether to allow promo codes to be applied
     */
    public $paymentAllowPromoCodes;
    /**
     * @var int $paymentRenewGracePeriod  The number of days after expiration to still allow access to the resource
     */
    public $paymentRenewGracePeriod;
    /**
     * @var bool $paymentAllowGift  Whether the term can be gifted
     */
    public $paymentAllowGift;
    /**
     * @var string $paymentCurrency  The currency of the term
     */
    public $paymentCurrency;
    /**
     * @var string $currencySymbol  The currency symbol
     */
    public $currencySymbol;
    /**
     * @var double $paymentFirstPrice  The first price of the term
     */
    public $paymentFirstPrice;
    /**
     * @var TPPublisherSchedule $schedule  
     */
    public $schedule;
    /**
     * @var string $scheduleBilling  The schedule billing
     */
    public $scheduleBilling;
    /**
     * @var bool $customRequireUser  Whether a valid user is required to complete the term
     */
    public $customRequireUser;
    /**
     * @var int $customDefaultAccessPeriod  The default access period
     */
    public $customDefaultAccessPeriod;
    /**
     * @var string $adviewVastUrl  The VAST URL for adview_access_period (deprecated).
     */
    public $adviewVastUrl;
    /**
     * @var int $adviewAccessPeriod  The access duration (deprecated)
     */
    public $adviewAccessPeriod;
    /**
     * @var int $registrationAccessPeriod  The access duration (in seconds) for the registration term
     */
    public $registrationAccessPeriod;
    /**
     * @var int $registrationGracePeriod  How long (in seconds) after registration users can get access to the term
     */
    public $registrationGracePeriod;
    /**
     * @var string $externalApiId  The ID of the external API configuration
     */
    public $externalApiId;
    /**
     * @var string $externalApiName  The name of the external API configuration
     */
    public $externalApiName;
    /**
     * @var int $externalApiSource  The source of the external API configuration
     */
    public $externalApiSource;
    /**
     * @var TPPublisherExternalAPIField[] $externalApiFormFields  
     */
    public $externalApiFormFields;
    /**
     * @var int $evtVerificationPeriod  The <a href = \"https://docs.piano.io/external-service-term/#externaltermverification\">periodicity</a> (in seconds) of checking the EVT subscription with the external service
     */
    public $evtVerificationPeriod;
    /**
     * @var int $evtFixedTimeAccessPeriod  The period to grant access for (in days)
     */
    public $evtFixedTimeAccessPeriod;
    /**
     * @var int $evtGracePeriod  The External API grace period
     */
    public $evtGracePeriod;
    /**
     * @var string $evtItunesBundleId  iTunes's bundle ID
     */
    public $evtItunesBundleId;
    /**
     * @var string $evtItunesProductId  iTunes's product ID
     */
    public $evtItunesProductId;
    /**
     * @var string $evtGooglePlayProductId  Google Play's product ID
     */
    public $evtGooglePlayProductId;
    /**
     * @var string $evtCdsProductId  The <a href=\"https://docs.piano.io/external-service-term/#externalcds\">CDS</a> product ID.
     */
    public $evtCdsProductId;
    /**
     * @var TPPublisherTerm $evt  The external verification term (similar to <a href=\"https://docs.piano.io/external-service-term/\">external service term</a>).
     */
    public $evt;
    /**
     * @var bool $collectAddress  Whether to collect an address for this term
     */
    public $collectAddress;
    /**
     * @var TPPublisherDeliveryZone[] $deliveryZone  
     */
    public $deliveryZone;
    /**
     * @var TPPublisherCountry $defaultCountry  
     */
    public $defaultCountry;
    /**
     * @var TPPublisherVoucheringPolicy $voucheringPolicy  The vouchering policy for the term (deprecated, replaced with Subscription <a href= \"https://docs.piano.io/creating-gifting-offer/\">gifting</a> flow)
     */
    public $voucheringPolicy;
    /**
     * @var string $billingConfig  The type of billing config
     */
    public $billingConfig;
    /**
     * @var bool $isAllowedToChangeSchedulePeriodInPast  Whether the term allows to change its schedule period created previously
     */
    public $isAllowedToChangeSchedulePeriodInPast;
    /**
     * @var bool $collectShippingAddress  Whether to collect a shipping address for this gift term
     */
    public $collectShippingAddress;
    /**
     * @var TPPublisherTermChangeOption[] $changeOptions  
     */
    public $changeOptions;
    /**
     * @var int $sharedAccountCount  The count of allowed shared-subscription accounts
     */
    public $sharedAccountCount;
    /**
     * @var string $sharedRedemptionUrl  The shared subscription redemption URL
     */
    public $sharedRedemptionUrl;
    /**
     * @var string $billingConfiguration  A JSON value representing a list of the access periods with billing configurations (replaced with \"payment_billing_plan(String)\")
     */
    public $billingConfiguration;
    /**
     * @var bool $showFullBillingPlan  Show full billing plan on checkout for the dynamic term
     */
    public $showFullBillingPlan;
    /**
     * @var string $externalTermId  External system's identifier for linked term
     */
    public $externalTermId;
    /**
     * @var string $externalProductIds  A unique combination of the product IDs from the external system (for <a href=\"https://docs.piano.io/external-service-term/\">external service terms</a>)
     */
    public $externalProductIds;
    /**
     * @var string $subscriptionManagementUrl  A link to the external system where the user can manage the subscription (<a href = \"https://docs.piano.io/external-service-term/\">for external service terms</a>)
     */
    public $subscriptionManagementUrl;
    /**
     * @var map[] $customData  Custom data
     */
    public $customData;

}
