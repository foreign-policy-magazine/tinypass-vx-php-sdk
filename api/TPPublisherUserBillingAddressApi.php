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
 * The TPPublisherUserBillingAddressApi class.
 */
class TPPublisherUserBillingAddressApi  extends TPAPIBase {

    /**
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function createRequest(){

        return new createRequestTPPublisherUserBillingAddressApi($this->apiClient);
    }
    /**
     * @return deleteRequestTPPublisherUserBillingAddressApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherUserBillingAddressApi($this->apiClient);
    }
    /**
     * @return getByPaymentInfoRequestTPPublisherUserBillingAddressApi
     */
    public function getByPaymentInfoRequest(){

        return new getByPaymentInfoRequestTPPublisherUserBillingAddressApi($this->apiClient);
    }
    /**
     * @return getByPaymentRequestTPPublisherUserBillingAddressApi
     */
    public function getByPaymentRequest(){

        return new getByPaymentRequestTPPublisherUserBillingAddressApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherUserBillingAddressApi
     */
    public function getRequest(){

        return new getRequestTPPublisherUserBillingAddressApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherUserBillingAddressApi
     */
    public function listRequest(){

        return new listRequestTPPublisherUserBillingAddressApi($this->apiClient);
    }

}

/**
 * Create user&#39;s billing address
 */
class createRequestTPPublisherUserBillingAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The country from the user&#39;s billing address, an object
     * @param string $country
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function country($country){
        $this->request['country'] = $country;
        return $this;
    }
    /**
     * The region from the user&#39;s billing address, an object
     * @param string $region
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function region($region){
        $this->request['region'] = $region;
        return $this;
    }
    /**
     * The zip code from the user&#39;s billing address
     * @param string $postalCode
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function postalCode($postalCode){
        $this->request['postalCode'] = $postalCode;
        return $this;
    }
    /**
     * The user address provider type: Experian (1), Avalare (2)
     * @param int $type
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    /**
     * The city from the user&#39;s billing address
     * @param string $city
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function city($city){
        $this->request['city'] = $city;
        return $this;
    }
    /**
     * Line one from the user&#39;s billing address
     * @param string $addressLine1
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function addressLine1($addressLine1){
        $this->request['addressLine1'] = $addressLine1;
        return $this;
    }
    /**
     * Line two from the user&#39;s billing address
     * @param string $addressLine2
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function addressLine2($addressLine2){
        $this->request['addressLine2'] = $addressLine2;
        return $this;
    }
    /**
     * line three from the user&#39;s billing address
     * @param string $addressLine3
     * @return createRequestTPPublisherUserBillingAddressApi
     */
    public function addressLine3($addressLine3){
        $this->request['addressLine3'] = $addressLine3;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserBillingAddress
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
        if (isset($this->request['country'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'country' ) ] = $this->request['country'];
        }
        if (isset($this->request['region'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'region' ) ] = $this->request['region'];
        }
        if (isset($this->request['city'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'city' ) ] = $this->request['city'];
        }
        if (isset($this->request['postalCode'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'postalCode' ) ] = $this->request['postalCode'];
        }
        if (isset($this->request['addressLine1'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'addressLine1' ) ] = $this->request['addressLine1'];
        }
        if (isset($this->request['addressLine2'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'addressLine2' ) ] = $this->request['addressLine2'];
        }
        if (isset($this->request['addressLine3'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'addressLine3' ) ] = $this->request['addressLine3'];
        }
        if (isset($this->request['type'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->request['type'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/billingAddress/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserBillingAddress');
    }
}
/**
 * Delete billing address
 */
class deleteRequestTPPublisherUserBillingAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return deleteRequestTPPublisherUserBillingAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return deleteRequestTPPublisherUserBillingAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The public ID of the address
     * @param string $addressPubId
     * @return deleteRequestTPPublisherUserBillingAddressApi
     */
    public function addressPubId($addressPubId){
        $this->request['addressPubId'] = $addressPubId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserBillingAddress
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
        if (isset($this->request['addressPubId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'addressPubId' ) ] = $this->request['addressPubId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/billingAddress/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserBillingAddress');
    }
}
/**
 * Get billing address for user payment info
 */
class getByPaymentInfoRequestTPPublisherUserBillingAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getByPaymentInfoRequestTPPublisherUserBillingAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user payment info ID
     * @param string $userPaymentInfoId
     * @return getByPaymentInfoRequestTPPublisherUserBillingAddressApi
     */
    public function userPaymentInfoId($userPaymentInfoId){
        $this->request['userPaymentInfoId'] = $userPaymentInfoId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserBillingAddress
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['userPaymentInfoId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userPaymentInfoId' ) ] = $this->request['userPaymentInfoId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/billingAddress/getByPaymentInfo', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserBillingAddress');
    }
}
/**
 * Get billing address for user payment
 */
class getByPaymentRequestTPPublisherUserBillingAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getByPaymentRequestTPPublisherUserBillingAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user payment ID
     * @param string $userPaymentId
     * @return getByPaymentRequestTPPublisherUserBillingAddressApi
     */
    public function userPaymentId($userPaymentId){
        $this->request['userPaymentId'] = $userPaymentId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserBillingAddress
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['userPaymentId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userPaymentId' ) ] = $this->request['userPaymentId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/billingAddress/getByPayment', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserBillingAddress');
    }
}
/**
 * Get billing address
 */
class getRequestTPPublisherUserBillingAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getRequestTPPublisherUserBillingAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return getRequestTPPublisherUserBillingAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The public ID of the address
     * @param string $addressPubId
     * @return getRequestTPPublisherUserBillingAddressApi
     */
    public function addressPubId($addressPubId){
        $this->request['addressPubId'] = $addressPubId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserBillingAddress
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
        if (isset($this->request['addressPubId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'addressPubId' ) ] = $this->request['addressPubId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/billingAddress/get', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserBillingAddress');
    }
}
/**
 * List user&#39;s billing addresses
 */
class listRequestTPPublisherUserBillingAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPPublisherUserBillingAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return listRequestTPPublisherUserBillingAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserBillingAddress[]
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
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/billingAddress/list', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserBillingAddress', 'array');
    }
}
