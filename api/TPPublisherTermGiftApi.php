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
 * The TPPublisherTermGiftApi class.
 */
class TPPublisherTermGiftApi  extends TPAPIBase {

    /**
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function createGiftTermRequest(){

        return new createGiftTermRequestTPPublisherTermGiftApi($this->apiClient);
    }
    /**
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function updateGiftTermRequest(){

        return new updateGiftTermRequestTPPublisherTermGiftApi($this->apiClient);
    }

}

/**
 * Create gift term
 */
class createGiftTermRequestTPPublisherTermGiftApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The term name
     * @param string $name
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The vouchering policy redemption URL
     * @param string $voucheringPolicyRedemptionUrl
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function voucheringPolicyRedemptionUrl($voucheringPolicyRedemptionUrl){
        $this->request['voucheringPolicyRedemptionUrl'] = $voucheringPolicyRedemptionUrl;
        return $this;
    }
    /**
     * Type of billing term
     * @param string $termType
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    /**
     * The description of the term
     * @param string $description
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * The product category
     * @param string $productCategory
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function productCategory($productCategory){
        $this->request['productCategory'] = $productCategory;
        return $this;
    }
    /**
     * The billing plan period
     * @param string $billingPlanPeriod
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanPeriod($billingPlanPeriod){
        $this->request['billingPlanPeriod'] = $billingPlanPeriod;
        return $this;
    }
    /**
     * The billing plan price
     * @param float $billingPlanPrice
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanPrice($billingPlanPrice){
        $this->request['billingPlanPrice'] = $billingPlanPrice;
        return $this;
    }
    /**
     * The billing plan currency
     * @param string $billingPlanCurrency
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanCurrency($billingPlanCurrency){
        $this->request['billingPlanCurrency'] = $billingPlanCurrency;
        return $this;
    }
    /**
     * Whether to allow promo codes to be applied
     * @param bool $paymentAllowPromoCodes
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function paymentAllowPromoCodes($paymentAllowPromoCodes){
        $this->request['paymentAllowPromoCodes'] = $paymentAllowPromoCodes;
        return $this;
    }
    /**
     * The schedule ID
     * @param string $scheduleId
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function scheduleId($scheduleId){
        $this->request['scheduleId'] = $scheduleId;
        return $this;
    }
    /**
     * The schedule billing model
     * @param string $scheduleBillingModel
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function scheduleBillingModel($scheduleBillingModel){
        $this->request['scheduleBillingModel'] = $scheduleBillingModel;
        return $this;
    }
    /**
     * The count of allowed shared-subscription accounts
     * @param int $sharedAccountCount
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function sharedAccountCount($sharedAccountCount){
        $this->request['sharedAccountCount'] = $sharedAccountCount;
        return $this;
    }
    /**
     * The shared subscription redemption URL
     * @param string $sharedRedemptionUrl
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function sharedRedemptionUrl($sharedRedemptionUrl){
        $this->request['sharedRedemptionUrl'] = $sharedRedemptionUrl;
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
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['productCategory'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'productCategory' ) ] = $this->request['productCategory'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['billingPlanPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanPeriod' ) ] = $this->request['billingPlanPeriod'];
        }
        if (isset($this->request['billingPlanPrice'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanPrice' ) ] = $this->request['billingPlanPrice'];
        }
        if (isset($this->request['billingPlanCurrency'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanCurrency' ) ] = $this->request['billingPlanCurrency'];
        }
        if (isset($this->request['paymentAllowPromoCodes'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentAllowPromoCodes' ) ] = $this->request['paymentAllowPromoCodes'];
        }
        if (isset($this->request['voucheringPolicyRedemptionUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'voucheringPolicyRedemptionUrl' ) ] = $this->request['voucheringPolicyRedemptionUrl'];
        }
        if (isset($this->request['scheduleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleId' ) ] = $this->request['scheduleId'];
        }
        if (isset($this->request['scheduleBillingModel'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleBillingModel' ) ] = $this->request['scheduleBillingModel'];
        }
        if (isset($this->request['termType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termType' ) ] = $this->request['termType'];
        }
        if (isset($this->request['sharedAccountCount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccountCount' ) ] = $this->request['sharedAccountCount'];
        }
        if (isset($this->request['sharedRedemptionUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedRedemptionUrl' ) ] = $this->request['sharedRedemptionUrl'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/gift/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
/**
 * Update gift term
 */
class updateGiftTermRequestTPPublisherTermGiftApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The term ID
     * @param string $termId
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The term name
     * @param string $name
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The vouchering policy redemption URL
     * @param string $voucheringPolicyRedemptionUrl
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function voucheringPolicyRedemptionUrl($voucheringPolicyRedemptionUrl){
        $this->request['voucheringPolicyRedemptionUrl'] = $voucheringPolicyRedemptionUrl;
        return $this;
    }
    /**
     * Type of billing term
     * @param string $termType
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    /**
     * The description of the term
     * @param string $description
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * The product category
     * @param string $productCategory
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function productCategory($productCategory){
        $this->request['productCategory'] = $productCategory;
        return $this;
    }
    /**
     * The billing plan period
     * @param string $billingPlanPeriod
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanPeriod($billingPlanPeriod){
        $this->request['billingPlanPeriod'] = $billingPlanPeriod;
        return $this;
    }
    /**
     * The billing plan price
     * @param float $billingPlanPrice
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanPrice($billingPlanPrice){
        $this->request['billingPlanPrice'] = $billingPlanPrice;
        return $this;
    }
    /**
     * The billing plan currency
     * @param string $billingPlanCurrency
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanCurrency($billingPlanCurrency){
        $this->request['billingPlanCurrency'] = $billingPlanCurrency;
        return $this;
    }
    /**
     * Whether to allow promo codes to be applied
     * @param bool $paymentAllowPromoCodes
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function paymentAllowPromoCodes($paymentAllowPromoCodes){
        $this->request['paymentAllowPromoCodes'] = $paymentAllowPromoCodes;
        return $this;
    }
    /**
     * The schedule ID
     * @param string $scheduleId
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function scheduleId($scheduleId){
        $this->request['scheduleId'] = $scheduleId;
        return $this;
    }
    /**
     * The schedule billing model
     * @param string $scheduleBillingModel
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function scheduleBillingModel($scheduleBillingModel){
        $this->request['scheduleBillingModel'] = $scheduleBillingModel;
        return $this;
    }
    /**
     * The count of allowed shared-subscription accounts
     * @param int $sharedAccountCount
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function sharedAccountCount($sharedAccountCount){
        $this->request['sharedAccountCount'] = $sharedAccountCount;
        return $this;
    }
    /**
     * The shared subscription redemption URL
     * @param string $sharedRedemptionUrl
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function sharedRedemptionUrl($sharedRedemptionUrl){
        $this->request['sharedRedemptionUrl'] = $sharedRedemptionUrl;
        return $this;
    }
    /**
     * Whether to collect an address for this term
     * @param bool $collectAddress
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function collectAddress($collectAddress){
        $this->request['collectAddress'] = $collectAddress;
        return $this;
    }
    /**
     * Whether to collect a shipping address for this gift term
     * @param bool $collectShippingAddress
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function collectShippingAddress($collectShippingAddress){
        $this->request['collectShippingAddress'] = $collectShippingAddress;
        return $this;
    }
    /**
     * A lsit of the delivery zones for this term
     * @param string[] $deliveryZone
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function deliveryZone($deliveryZone){
        $this->request['deliveryZone'] = $deliveryZone;
        return $this;
    }
    /**
     * The pre-selected country for users outside of delivery zones
     * @param string $defaultCountry
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function defaultCountry($defaultCountry){
        $this->request['defaultCountry'] = $defaultCountry;
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
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['productCategory'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'productCategory' ) ] = $this->request['productCategory'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['billingPlanPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanPeriod' ) ] = $this->request['billingPlanPeriod'];
        }
        if (isset($this->request['billingPlanPrice'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanPrice' ) ] = $this->request['billingPlanPrice'];
        }
        if (isset($this->request['billingPlanCurrency'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanCurrency' ) ] = $this->request['billingPlanCurrency'];
        }
        if (isset($this->request['paymentAllowPromoCodes'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentAllowPromoCodes' ) ] = $this->request['paymentAllowPromoCodes'];
        }
        if (isset($this->request['voucheringPolicyRedemptionUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'voucheringPolicyRedemptionUrl' ) ] = $this->request['voucheringPolicyRedemptionUrl'];
        }
        if (isset($this->request['scheduleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleId' ) ] = $this->request['scheduleId'];
        }
        if (isset($this->request['scheduleBillingModel'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleBillingModel' ) ] = $this->request['scheduleBillingModel'];
        }
        if (isset($this->request['termType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termType' ) ] = $this->request['termType'];
        }
        if (isset($this->request['sharedAccountCount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccountCount' ) ] = $this->request['sharedAccountCount'];
        }
        if (isset($this->request['sharedRedemptionUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedRedemptionUrl' ) ] = $this->request['sharedRedemptionUrl'];
        }
        if (isset($this->request['collectAddress'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'collectAddress' ) ] = $this->request['collectAddress'];
        }
        if (isset($this->request['collectShippingAddress'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'collectShippingAddress' ) ] = $this->request['collectShippingAddress'];
        }
        if (isset($this->request['deliveryZone'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'deliveryZone' ) ] = $this->request['deliveryZone'];
        }
        if (isset($this->request['defaultCountry'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'defaultCountry' ) ] = $this->request['defaultCountry'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/gift/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
