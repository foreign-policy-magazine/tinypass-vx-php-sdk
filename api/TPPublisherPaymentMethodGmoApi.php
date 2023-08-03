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
 * The TPPublisherPaymentMethodGmoApi class.
 */
class TPPublisherPaymentMethodGmoApi  extends TPAPIBase {

    /**
     * @return refreshGmoRequestTPPublisherPaymentMethodGmoApi
     */
    public function refreshGmoRequest(){

        return new refreshGmoRequestTPPublisherPaymentMethodGmoApi($this->apiClient);
    }

}

/**
 * Sync payment method to GMO
 */
class refreshGmoRequestTPPublisherPaymentMethodGmoApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return refreshGmoRequestTPPublisherPaymentMethodGmoApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return refreshGmoRequestTPPublisherPaymentMethodGmoApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The external payment ID for the payment method (user payment info)
     * @param string $upiExtPaymentId
     * @return refreshGmoRequestTPPublisherPaymentMethodGmoApi
     */
    public function upiExtPaymentId($upiExtPaymentId){
        $this->request['upiExtPaymentId'] = $upiExtPaymentId;
        return $this;
    }
    /**
     * The external customer ID of the payment method (user payment info)
     * @param string $upiExtCustomerId
     * @return refreshGmoRequestTPPublisherPaymentMethodGmoApi
     */
    public function upiExtCustomerId($upiExtCustomerId){
        $this->request['upiExtCustomerId'] = $upiExtCustomerId;
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
        if (isset($this->request['upiExtPaymentId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'upiExtPaymentId' ) ] = $this->request['upiExtPaymentId'];
        }
        if (isset($this->request['upiExtCustomerId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'upiExtCustomerId' ) ] = $this->request['upiExtCustomerId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/payment/method/gmo/refresh', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
