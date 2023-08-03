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
 * The TPPublisherTermPaymentApi class.
 */
class TPPublisherTermPaymentApi  extends TPAPIBase {

    /**
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function createPaymentTermRequest(){

        return new createPaymentTermRequestTPPublisherTermPaymentApi($this->apiClient);
    }
    /**
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function updatePaymentTermRequest(){

        return new updatePaymentTermRequestTPPublisherTermPaymentApi($this->apiClient);
    }

}

/**
 * Create payment term
 */
class createPaymentTermRequestTPPublisherTermPaymentApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The term name
     * @param string $name
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The billing plan for the term
     * @param string $paymentBillingPlan
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentBillingPlan($paymentBillingPlan){
        $this->request['paymentBillingPlan'] = $paymentBillingPlan;
        return $this;
    }
    /**
     * How many days in advance users user can renew
     * @param int $paymentAllowRenewDays
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentAllowRenewDays($paymentAllowRenewDays){
        $this->request['paymentAllowRenewDays'] = $paymentAllowRenewDays;
        return $this;
    }
    /**
     * Prevents users from disabling autorenewal (always \&quot;TRUE\&quot; for dynamic terms)
     * @param bool $paymentForceAutoRenew
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentForceAutoRenew($paymentForceAutoRenew){
        $this->request['paymentForceAutoRenew'] = $paymentForceAutoRenew;
        return $this;
    }
    /**
     * Whether to show the term only to users having no dynamic or purchase conversions yet
     * @param bool $paymentNewCustomersOnly
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentNewCustomersOnly($paymentNewCustomersOnly){
        $this->request['paymentNewCustomersOnly'] = $paymentNewCustomersOnly;
        return $this;
    }
    /**
     * Whether to allow trial period only to users having no purchases yet
     * @param bool $paymentTrialNewCustomersOnly
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentTrialNewCustomersOnly($paymentTrialNewCustomersOnly){
        $this->request['paymentTrialNewCustomersOnly'] = $paymentTrialNewCustomersOnly;
        return $this;
    }
    /**
     * Whether to allow promo codes to be applied
     * @param bool $paymentAllowPromoCodes
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentAllowPromoCodes($paymentAllowPromoCodes){
        $this->request['paymentAllowPromoCodes'] = $paymentAllowPromoCodes;
        return $this;
    }
    /**
     * The number of days after expiration to still allow access to the resource
     * @param int $paymentRenewGracePeriod
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentRenewGracePeriod($paymentRenewGracePeriod){
        $this->request['paymentRenewGracePeriod'] = $paymentRenewGracePeriod;
        return $this;
    }
    /**
     * Whether the term can be gifted
     * @param bool $paymentAllowGift
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentAllowGift($paymentAllowGift){
        $this->request['paymentAllowGift'] = $paymentAllowGift;
        return $this;
    }
    /**
     * The description of the term
     * @param string $description
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * The product category
     * @param string $productCategory
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function productCategory($productCategory){
        $this->request['productCategory'] = $productCategory;
        return $this;
    }
    /**
     * Whether the term should be verified before renewal (if \&quot;FALSE\&quot;, this step is skipped)
     * @param bool $verifyOnRenewal
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function verifyOnRenewal($verifyOnRenewal){
        $this->request['verifyOnRenewal'] = $verifyOnRenewal;
        return $this;
    }
    /**
     * The &lt;a href &#x3D; \&quot;https://docs.piano.io/external-service-term/#externaltermverification\&quot;&gt;periodicity&lt;/a&gt; (in seconds) of checking the EVT subscription with the external service
     * @param int $evtVerificationPeriod
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function evtVerificationPeriod($evtVerificationPeriod){
        $this->request['evtVerificationPeriod'] = $evtVerificationPeriod;
        return $this;
    }
    /**
     * Whether to collect an address for this term
     * @param bool $collectAddress
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function collectAddress($collectAddress){
        $this->request['collectAddress'] = $collectAddress;
        return $this;
    }
    /**
     * A lsit of the delivery zones for this term
     * @param string[] $deliveryZone
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function deliveryZone($deliveryZone){
        $this->request['deliveryZone'] = $deliveryZone;
        return $this;
    }
    /**
     * The pre-selected country for users outside of delivery zones
     * @param string $defaultCountry
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function defaultCountry($defaultCountry){
        $this->request['defaultCountry'] = $defaultCountry;
        return $this;
    }
    /**
     * The schedule ID
     * @param string $scheduleId
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function scheduleId($scheduleId){
        $this->request['scheduleId'] = $scheduleId;
        return $this;
    }
    /**
     * The schedule billing model
     * @param string $scheduleBillingModel
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function scheduleBillingModel($scheduleBillingModel){
        $this->request['scheduleBillingModel'] = $scheduleBillingModel;
        return $this;
    }
    /**
     * The term billing descriptor
     * @param string $termBillingDescriptor
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function termBillingDescriptor($termBillingDescriptor){
        $this->request['termBillingDescriptor'] = $termBillingDescriptor;
        return $this;
    }
    /**
     * The count of allowed shared-subscription accounts
     * @param int $sharedAccountCount
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function sharedAccountCount($sharedAccountCount){
        $this->request['sharedAccountCount'] = $sharedAccountCount;
        return $this;
    }
    /**
     * The shared subscription redemption URL
     * @param string $sharedRedemptionUrl
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function sharedRedemptionUrl($sharedRedemptionUrl){
        $this->request['sharedRedemptionUrl'] = $sharedRedemptionUrl;
        return $this;
    }
    /**
     * The churn prevention logic id
     * @param string $churnPreventionLogicId
     * @return createPaymentTermRequestTPPublisherTermPaymentApi
     */
    public function churnPreventionLogicId($churnPreventionLogicId){
        $this->request['churnPreventionLogicId'] = $churnPreventionLogicId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTerm
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['paymentBillingPlan'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentBillingPlan' ) ] = $this->request['paymentBillingPlan'];
        }
        if (isset($this->request['paymentAllowRenewDays'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentAllowRenewDays' ) ] = $this->request['paymentAllowRenewDays'];
        }
        if (isset($this->request['paymentForceAutoRenew'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentForceAutoRenew' ) ] = $this->request['paymentForceAutoRenew'];
        }
        if (isset($this->request['paymentNewCustomersOnly'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentNewCustomersOnly' ) ] = $this->request['paymentNewCustomersOnly'];
        }
        if (isset($this->request['paymentTrialNewCustomersOnly'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentTrialNewCustomersOnly' ) ] = $this->request['paymentTrialNewCustomersOnly'];
        }
        if (isset($this->request['paymentAllowPromoCodes'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentAllowPromoCodes' ) ] = $this->request['paymentAllowPromoCodes'];
        }
        if (isset($this->request['paymentRenewGracePeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentRenewGracePeriod' ) ] = $this->request['paymentRenewGracePeriod'];
        }
        if (isset($this->request['paymentAllowGift'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentAllowGift' ) ] = $this->request['paymentAllowGift'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['productCategory'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'productCategory' ) ] = $this->request['productCategory'];
        }
        if (isset($this->request['verifyOnRenewal'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'verifyOnRenewal' ) ] = $this->request['verifyOnRenewal'];
        }
        if (isset($this->request['evtVerificationPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtVerificationPeriod' ) ] = $this->request['evtVerificationPeriod'];
        }
        if (isset($this->request['collectAddress'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'collectAddress' ) ] = $this->request['collectAddress'];
        }
        if (isset($this->request['deliveryZone'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'deliveryZone' ) ] = $this->request['deliveryZone'];
        }
        if (isset($this->request['defaultCountry'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'defaultCountry' ) ] = $this->request['defaultCountry'];
        }
        if (isset($this->request['scheduleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleId' ) ] = $this->request['scheduleId'];
        }
        if (isset($this->request['scheduleBillingModel'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleBillingModel' ) ] = $this->request['scheduleBillingModel'];
        }
        if (isset($this->request['termBillingDescriptor'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termBillingDescriptor' ) ] = $this->request['termBillingDescriptor'];
        }
        if (isset($this->request['sharedAccountCount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccountCount' ) ] = $this->request['sharedAccountCount'];
        }
        if (isset($this->request['sharedRedemptionUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedRedemptionUrl' ) ] = $this->request['sharedRedemptionUrl'];
        }
        if (isset($this->request['churnPreventionLogicId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'churnPreventionLogicId' ) ] = $this->request['churnPreventionLogicId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/payment/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
/**
 * Update payment term
 */
class updatePaymentTermRequestTPPublisherTermPaymentApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The term ID
     * @param string $termId
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The term name
     * @param string $name
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The billing plan for the term
     * @param string $paymentBillingPlan
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentBillingPlan($paymentBillingPlan){
        $this->request['paymentBillingPlan'] = $paymentBillingPlan;
        return $this;
    }
    /**
     * How many days in advance users user can renew
     * @param int $paymentAllowRenewDays
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentAllowRenewDays($paymentAllowRenewDays){
        $this->request['paymentAllowRenewDays'] = $paymentAllowRenewDays;
        return $this;
    }
    /**
     * Prevents users from disabling autorenewal (always \&quot;TRUE\&quot; for dynamic terms)
     * @param bool $paymentForceAutoRenew
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentForceAutoRenew($paymentForceAutoRenew){
        $this->request['paymentForceAutoRenew'] = $paymentForceAutoRenew;
        return $this;
    }
    /**
     * Whether to show the term only to users having no dynamic or purchase conversions yet
     * @param bool $paymentNewCustomersOnly
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentNewCustomersOnly($paymentNewCustomersOnly){
        $this->request['paymentNewCustomersOnly'] = $paymentNewCustomersOnly;
        return $this;
    }
    /**
     * Whether to allow trial period only to users having no purchases yet
     * @param bool $paymentTrialNewCustomersOnly
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentTrialNewCustomersOnly($paymentTrialNewCustomersOnly){
        $this->request['paymentTrialNewCustomersOnly'] = $paymentTrialNewCustomersOnly;
        return $this;
    }
    /**
     * Whether to allow promo codes to be applied
     * @param bool $paymentAllowPromoCodes
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentAllowPromoCodes($paymentAllowPromoCodes){
        $this->request['paymentAllowPromoCodes'] = $paymentAllowPromoCodes;
        return $this;
    }
    /**
     * The number of days after expiration to still allow access to the resource
     * @param int $paymentRenewGracePeriod
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentRenewGracePeriod($paymentRenewGracePeriod){
        $this->request['paymentRenewGracePeriod'] = $paymentRenewGracePeriod;
        return $this;
    }
    /**
     * Whether the term can be gifted
     * @param bool $paymentAllowGift
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function paymentAllowGift($paymentAllowGift){
        $this->request['paymentAllowGift'] = $paymentAllowGift;
        return $this;
    }
    /**
     * The description of the term
     * @param string $description
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * The product category
     * @param string $productCategory
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function productCategory($productCategory){
        $this->request['productCategory'] = $productCategory;
        return $this;
    }
    /**
     * Whether the term should be verified before renewal (if \&quot;FALSE\&quot;, this step is skipped)
     * @param bool $verifyOnRenewal
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function verifyOnRenewal($verifyOnRenewal){
        $this->request['verifyOnRenewal'] = $verifyOnRenewal;
        return $this;
    }
    /**
     * The &lt;a href &#x3D; \&quot;https://docs.piano.io/external-service-term/#externaltermverification\&quot;&gt;periodicity&lt;/a&gt; (in seconds) of checking the EVT subscription with the external service
     * @param int $evtVerificationPeriod
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function evtVerificationPeriod($evtVerificationPeriod){
        $this->request['evtVerificationPeriod'] = $evtVerificationPeriod;
        return $this;
    }
    /**
     * Whether to collect an address for this term
     * @param bool $collectAddress
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function collectAddress($collectAddress){
        $this->request['collectAddress'] = $collectAddress;
        return $this;
    }
    /**
     * A lsit of the delivery zones for this term
     * @param string[] $deliveryZone
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function deliveryZone($deliveryZone){
        $this->request['deliveryZone'] = $deliveryZone;
        return $this;
    }
    /**
     * The pre-selected country for users outside of delivery zones
     * @param string $defaultCountry
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function defaultCountry($defaultCountry){
        $this->request['defaultCountry'] = $defaultCountry;
        return $this;
    }
    /**
     * The schedule ID
     * @param string $scheduleId
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function scheduleId($scheduleId){
        $this->request['scheduleId'] = $scheduleId;
        return $this;
    }
    /**
     * The schedule billing model
     * @param string $scheduleBillingModel
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function scheduleBillingModel($scheduleBillingModel){
        $this->request['scheduleBillingModel'] = $scheduleBillingModel;
        return $this;
    }
    /**
     * A list of the change options associated with the term
     * @param string[] $changeOptions
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function changeOptions($changeOptions){
        $this->request['changeOptions'] = $changeOptions;
        return $this;
    }
    /**
     * The term billing descriptor
     * @param string $termBillingDescriptor
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function termBillingDescriptor($termBillingDescriptor){
        $this->request['termBillingDescriptor'] = $termBillingDescriptor;
        return $this;
    }
    /**
     * The ID of the external API configuration
     * @param string $externalApiId
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function externalApiId($externalApiId){
        $this->request['externalApiId'] = $externalApiId;
        return $this;
    }
    /**
     * The count of allowed shared-subscription accounts
     * @param int $sharedAccountCount
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function sharedAccountCount($sharedAccountCount){
        $this->request['sharedAccountCount'] = $sharedAccountCount;
        return $this;
    }
    /**
     * The shared subscription redemption URL
     * @param string $sharedRedemptionUrl
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function sharedRedemptionUrl($sharedRedemptionUrl){
        $this->request['sharedRedemptionUrl'] = $sharedRedemptionUrl;
        return $this;
    }
    /**
     * The churn prevention logic id
     * @param string $churnPreventionLogicId
     * @return updatePaymentTermRequestTPPublisherTermPaymentApi
     */
    public function churnPreventionLogicId($churnPreventionLogicId){
        $this->request['churnPreventionLogicId'] = $churnPreventionLogicId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTerm
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['paymentBillingPlan'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentBillingPlan' ) ] = $this->request['paymentBillingPlan'];
        }
        if (isset($this->request['paymentAllowRenewDays'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentAllowRenewDays' ) ] = $this->request['paymentAllowRenewDays'];
        }
        if (isset($this->request['paymentForceAutoRenew'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentForceAutoRenew' ) ] = $this->request['paymentForceAutoRenew'];
        }
        if (isset($this->request['paymentNewCustomersOnly'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentNewCustomersOnly' ) ] = $this->request['paymentNewCustomersOnly'];
        }
        if (isset($this->request['paymentTrialNewCustomersOnly'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentTrialNewCustomersOnly' ) ] = $this->request['paymentTrialNewCustomersOnly'];
        }
        if (isset($this->request['paymentAllowPromoCodes'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentAllowPromoCodes' ) ] = $this->request['paymentAllowPromoCodes'];
        }
        if (isset($this->request['paymentRenewGracePeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentRenewGracePeriod' ) ] = $this->request['paymentRenewGracePeriod'];
        }
        if (isset($this->request['paymentAllowGift'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentAllowGift' ) ] = $this->request['paymentAllowGift'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['productCategory'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'productCategory' ) ] = $this->request['productCategory'];
        }
        if (isset($this->request['verifyOnRenewal'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'verifyOnRenewal' ) ] = $this->request['verifyOnRenewal'];
        }
        if (isset($this->request['evtVerificationPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtVerificationPeriod' ) ] = $this->request['evtVerificationPeriod'];
        }
        if (isset($this->request['collectAddress'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'collectAddress' ) ] = $this->request['collectAddress'];
        }
        if (isset($this->request['deliveryZone'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'deliveryZone' ) ] = $this->request['deliveryZone'];
        }
        if (isset($this->request['defaultCountry'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'defaultCountry' ) ] = $this->request['defaultCountry'];
        }
        if (isset($this->request['scheduleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleId' ) ] = $this->request['scheduleId'];
        }
        if (isset($this->request['scheduleBillingModel'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleBillingModel' ) ] = $this->request['scheduleBillingModel'];
        }
        if (isset($this->request['changeOptions'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'changeOptions' ) ] = $this->request['changeOptions'];
        }
        if (isset($this->request['termBillingDescriptor'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termBillingDescriptor' ) ] = $this->request['termBillingDescriptor'];
        }
        if (isset($this->request['externalApiId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'externalApiId' ) ] = $this->request['externalApiId'];
        }
        if (isset($this->request['sharedAccountCount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccountCount' ) ] = $this->request['sharedAccountCount'];
        }
        if (isset($this->request['sharedRedemptionUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedRedemptionUrl' ) ] = $this->request['sharedRedemptionUrl'];
        }
        if (isset($this->request['churnPreventionLogicId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'churnPreventionLogicId' ) ] = $this->request['churnPreventionLogicId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/payment/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
