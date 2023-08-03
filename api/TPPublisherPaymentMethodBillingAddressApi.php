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
 * The TPPublisherPaymentMethodBillingAddressApi class.
 */
class TPPublisherPaymentMethodBillingAddressApi  extends TPAPIBase {

    /**
     * @return applyToAllRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function applyToAllRequest(){

        return new applyToAllRequestTPPublisherPaymentMethodBillingAddressApi($this->apiClient);
    }
    /**
     * @return attachRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function attachRequest(){

        return new attachRequestTPPublisherPaymentMethodBillingAddressApi($this->apiClient);
    }
    /**
     * @return detachRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function detachRequest(){

        return new detachRequestTPPublisherPaymentMethodBillingAddressApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function getRequest(){

        return new getRequestTPPublisherPaymentMethodBillingAddressApi($this->apiClient);
    }

}

/**
 * Apply billing address to all payment methods
 */
class applyToAllRequestTPPublisherPaymentMethodBillingAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return applyToAllRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return applyToAllRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The public ID of the address
     * @param string $addressPubId
     * @return applyToAllRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function addressPubId($addressPubId){
        $this->request['addressPubId'] = $addressPubId;
        return $this;
    }
    /**
     * Execute request

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
        $response = $this->apiClient->callAPI('/publisher/payment/method/billingAddress/applyToAll', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Attach billing address to user&#39;s payment method
 */
class attachRequestTPPublisherPaymentMethodBillingAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return attachRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The payment method ID
     * @param string $upiIdentifier
     * @return attachRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function upiIdentifier($upiIdentifier){
        $this->request['upiIdentifier'] = $upiIdentifier;
        return $this;
    }
    /**
     * The public ID of the address
     * @param string $addressPubId
     * @return attachRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function addressPubId($addressPubId){
        $this->request['addressPubId'] = $addressPubId;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return attachRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Execute request

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
        if (isset($this->request['upiIdentifier'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'upiIdentifier' ) ] = $this->request['upiIdentifier'];
        }
        if (isset($this->request['addressPubId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'addressPubId' ) ] = $this->request['addressPubId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/payment/method/billingAddress/attach', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Detach billing address from one of user&#39;s payment methods
 */
class detachRequestTPPublisherPaymentMethodBillingAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return detachRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The payment method ID
     * @param string $upiIdentifier
     * @return detachRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function upiIdentifier($upiIdentifier){
        $this->request['upiIdentifier'] = $upiIdentifier;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return detachRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Execute request

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
        if (isset($this->request['upiIdentifier'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'upiIdentifier' ) ] = $this->request['upiIdentifier'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/payment/method/billingAddress/detach', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Get billing address of user&#39;s payment method
 */
class getRequestTPPublisherPaymentMethodBillingAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The payment method ID
     * @param string $upiIdentifier
     * @return getRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function upiIdentifier($upiIdentifier){
        $this->request['upiIdentifier'] = $upiIdentifier;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return getRequestTPPublisherPaymentMethodBillingAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
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
        if (isset($this->request['upiIdentifier'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'upiIdentifier' ) ] = $this->request['upiIdentifier'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/payment/method/billingAddress/get', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserBillingAddress');
    }
}
