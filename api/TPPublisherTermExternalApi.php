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
 * The TPPublisherTermExternalApi class.
 */
class TPPublisherTermExternalApi  extends TPAPIBase {

    /**
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function createExternalVerificationTermRequest(){

        return new createExternalVerificationTermRequestTPPublisherTermExternalApi($this->apiClient);
    }
    /**
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function updateExternalVerificationTermRequest(){

        return new updateExternalVerificationTermRequestTPPublisherTermExternalApi($this->apiClient);
    }

}

/**
 * Create external service term
 */
class createExternalVerificationTermRequestTPPublisherTermExternalApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The ID of the external API configuration
     * @param string $externalApiId
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function externalApiId($externalApiId){
        $this->request['externalApiId'] = $externalApiId;
        return $this;
    }
    /**
     * The term name
     * @param string $name
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The description of the term
     * @param string $description
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * The period to grant access for (in days)
     * @param int $evtFixedTimeAccessPeriod
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtFixedTimeAccessPeriod($evtFixedTimeAccessPeriod){
        $this->request['evtFixedTimeAccessPeriod'] = $evtFixedTimeAccessPeriod;
        return $this;
    }
    /**
     * The External API grace period
     * @param int $evtGracePeriod
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtGracePeriod($evtGracePeriod){
        $this->request['evtGracePeriod'] = $evtGracePeriod;
        return $this;
    }
    /**
     * The &lt;a href &#x3D; \&quot;https://docs.piano.io/external-service-term/#externaltermverification\&quot;&gt;periodicity&lt;/a&gt; (in seconds) of checking the EVT subscription with the external service
     * @param int $evtVerificationPeriod
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtVerificationPeriod($evtVerificationPeriod){
        $this->request['evtVerificationPeriod'] = $evtVerificationPeriod;
        return $this;
    }
    /**
     * iTunes&#39;s bundle ID
     * @param string $evtItunesBundleId
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtItunesBundleId($evtItunesBundleId){
        $this->request['evtItunesBundleId'] = $evtItunesBundleId;
        return $this;
    }
    /**
     * iTunes&#39;s product ID
     * @param string $evtItunesProductId
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtItunesProductId($evtItunesProductId){
        $this->request['evtItunesProductId'] = $evtItunesProductId;
        return $this;
    }
    /**
     * Google Play&#39;s product ID
     * @param string $evtGooglePlayProductId
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtGooglePlayProductId($evtGooglePlayProductId){
        $this->request['evtGooglePlayProductId'] = $evtGooglePlayProductId;
        return $this;
    }
    /**
     * The count of allowed shared-subscription accounts
     * @param int $sharedAccountCount
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function sharedAccountCount($sharedAccountCount){
        $this->request['sharedAccountCount'] = $sharedAccountCount;
        return $this;
    }
    /**
     * The shared subscription redemption URL
     * @param string $sharedRedemptionUrl
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
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
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['externalApiId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'externalApiId' ) ] = $this->request['externalApiId'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['evtFixedTimeAccessPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtFixedTimeAccessPeriod' ) ] = $this->request['evtFixedTimeAccessPeriod'];
        }
        if (isset($this->request['evtGracePeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtGracePeriod' ) ] = $this->request['evtGracePeriod'];
        }
        if (isset($this->request['evtVerificationPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtVerificationPeriod' ) ] = $this->request['evtVerificationPeriod'];
        }
        if (isset($this->request['evtItunesBundleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtItunesBundleId' ) ] = $this->request['evtItunesBundleId'];
        }
        if (isset($this->request['evtItunesProductId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtItunesProductId' ) ] = $this->request['evtItunesProductId'];
        }
        if (isset($this->request['evtGooglePlayProductId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtGooglePlayProductId' ) ] = $this->request['evtGooglePlayProductId'];
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
        $response = $this->apiClient->callAPI('/publisher/term/external/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
/**
 * Update external service term
 */
class updateExternalVerificationTermRequestTPPublisherTermExternalApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The term ID
     * @param string $termId
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The ID of the external API configuration
     * @param string $externalApiId
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function externalApiId($externalApiId){
        $this->request['externalApiId'] = $externalApiId;
        return $this;
    }
    /**
     * The term name
     * @param string $name
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The description of the term
     * @param string $description
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * The period to grant access for (in days)
     * @param int $evtFixedTimeAccessPeriod
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtFixedTimeAccessPeriod($evtFixedTimeAccessPeriod){
        $this->request['evtFixedTimeAccessPeriod'] = $evtFixedTimeAccessPeriod;
        return $this;
    }
    /**
     * The External API grace period
     * @param int $evtGracePeriod
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtGracePeriod($evtGracePeriod){
        $this->request['evtGracePeriod'] = $evtGracePeriod;
        return $this;
    }
    /**
     * The &lt;a href &#x3D; \&quot;https://docs.piano.io/external-service-term/#externaltermverification\&quot;&gt;periodicity&lt;/a&gt; (in seconds) of checking the EVT subscription with the external service
     * @param int $evtVerificationPeriod
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtVerificationPeriod($evtVerificationPeriod){
        $this->request['evtVerificationPeriod'] = $evtVerificationPeriod;
        return $this;
    }
    /**
     * iTunes&#39;s bundle ID
     * @param string $evtItunesBundleId
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtItunesBundleId($evtItunesBundleId){
        $this->request['evtItunesBundleId'] = $evtItunesBundleId;
        return $this;
    }
    /**
     * iTunes&#39;s product ID
     * @param string $evtItunesProductId
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtItunesProductId($evtItunesProductId){
        $this->request['evtItunesProductId'] = $evtItunesProductId;
        return $this;
    }
    /**
     * Google Play&#39;s product ID
     * @param string $evtGooglePlayProductId
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtGooglePlayProductId($evtGooglePlayProductId){
        $this->request['evtGooglePlayProductId'] = $evtGooglePlayProductId;
        return $this;
    }
    /**
     * The count of allowed shared-subscription accounts
     * @param int $sharedAccountCount
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function sharedAccountCount($sharedAccountCount){
        $this->request['sharedAccountCount'] = $sharedAccountCount;
        return $this;
    }
    /**
     * The shared subscription redemption URL
     * @param string $sharedRedemptionUrl
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
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
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['externalApiId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'externalApiId' ) ] = $this->request['externalApiId'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['evtFixedTimeAccessPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtFixedTimeAccessPeriod' ) ] = $this->request['evtFixedTimeAccessPeriod'];
        }
        if (isset($this->request['evtGracePeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtGracePeriod' ) ] = $this->request['evtGracePeriod'];
        }
        if (isset($this->request['evtVerificationPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtVerificationPeriod' ) ] = $this->request['evtVerificationPeriod'];
        }
        if (isset($this->request['evtItunesBundleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtItunesBundleId' ) ] = $this->request['evtItunesBundleId'];
        }
        if (isset($this->request['evtItunesProductId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtItunesProductId' ) ] = $this->request['evtItunesProductId'];
        }
        if (isset($this->request['evtGooglePlayProductId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'evtGooglePlayProductId' ) ] = $this->request['evtGooglePlayProductId'];
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
        $response = $this->apiClient->callAPI('/publisher/term/external/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
