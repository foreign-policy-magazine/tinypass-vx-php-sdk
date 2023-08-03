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
 * The TPPublisherTermChangeApi class.
 */
class TPPublisherTermChangeApi  extends TPAPIBase {

    /**
     * @return canChangeTermRequestTPPublisherTermChangeApi
     */
    public function canChangeTermRequest(){

        return new canChangeTermRequestTPPublisherTermChangeApi($this->apiClient);
    }
    /**
     * @return cancelRequestTPPublisherTermChangeApi
     */
    public function cancelRequest(){

        return new cancelRequestTPPublisherTermChangeApi($this->apiClient);
    }
    /**
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function changeRequest(){

        return new changeRequestTPPublisherTermChangeApi($this->apiClient);
    }
    /**
     * @return getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi
     */
    public function getSubscriptionUpgradeStatusRequest(){

        return new getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi($this->apiClient);
    }

}

/**
 * Check availability of upgrade
 */
class canChangeTermRequestTPPublisherTermChangeApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The user subscription ID
     * @param string $subscriptionId
     * @return canChangeTermRequestTPPublisherTermChangeApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->request['subscriptionId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/change/can', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Cancel pending upgrade of subscription
 */
class cancelRequestTPPublisherTermChangeApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return cancelRequestTPPublisherTermChangeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * A public ID of subscription from
     * @param string $subscriptionFrom
     * @return cancelRequestTPPublisherTermChangeApi
     */
    public function subscriptionFrom($subscriptionFrom){
        $this->request['subscriptionFrom'] = $subscriptionFrom;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['subscriptionFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionFrom' ) ] = $this->request['subscriptionFrom'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/change/cancel', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Upgrade subscription
 */
class changeRequestTPPublisherTermChangeApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * A public ID of subscription from
     * @param string $subscriptionFrom
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function subscriptionFrom($subscriptionFrom){
        $this->request['subscriptionFrom'] = $subscriptionFrom;
        return $this;
    }
    /**
     * The public ID of the term the subscription is being switched to.
     * @param string $termTo
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function termTo($termTo){
        $this->request['termTo'] = $termTo;
        return $this;
    }
    /**
     * The billing timing setting
     * @param string $billingTiming
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function billingTiming($billingTiming){
        $this->request['billingTiming'] = $billingTiming;
        return $this;
    }
    /**
     * Whether the access should be given immediately. Irrelevant if the \&quot;billing_timing\&quot; is 0.
     * @param bool $immediateAccess
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function immediateAccess($immediateAccess){
        $this->request['immediateAccess'] = $immediateAccess;
        return $this;
    }
    /**
     * Whether the &lt;a href&#x3D;\&quot;https://docs.piano.io/upgrades/?paragraphId&#x3D;b27954ef84407e4#prorate-billing-amount\&quot;&gt;Prorate billing amount&lt;/a&gt; function is enabled
     * @param bool $prorateAccess
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function prorateAccess($prorateAccess){
        $this->request['prorateAccess'] = $prorateAccess;
        return $this;
    }
    /**
     * A JSON value representing a list of the shared accounts
     * @param string $sharedAccounts
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function sharedAccounts($sharedAccounts){
        $this->request['sharedAccounts'] = $sharedAccounts;
        return $this;
    }
    /**
     * User address
     * @param string $userAddress
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function userAddress($userAddress){
        $this->request['userAddress'] = $userAddress;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['uid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['subscriptionFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionFrom' ) ] = $this->request['subscriptionFrom'];
        }
        if (isset($this->request['termTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termTo' ) ] = $this->request['termTo'];
        }
        if (isset($this->request['billingTiming'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingTiming' ) ] = $this->request['billingTiming'];
        }
        if (isset($this->request['immediateAccess'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'immediateAccess' ) ] = $this->request['immediateAccess'];
        }
        if (isset($this->request['prorateAccess'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'prorateAccess' ) ] = $this->request['prorateAccess'];
        }
        if (isset($this->request['sharedAccounts'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccounts' ) ] = $this->request['sharedAccounts'];
        }
        if (isset($this->request['userAddress'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userAddress' ) ] = $this->request['userAddress'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/change/do', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Get upgrade status of subscription
 */
class getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The user subscription ID
     * @param string $subscriptionId
     * @return getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherSubscriptionUpgradeStatus
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['uid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->request['subscriptionId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/change/getSubscriptionUpgradeStatus', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherSubscriptionUpgradeStatus');
    }
}
