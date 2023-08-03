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
 * The TPConversionRegistrationApi class.
 */
class TPConversionRegistrationApi  extends TPAPIBase {

    /**
     * @return createRegistrationConversionRequestTPConversionRegistrationApi
     */
    public function createRegistrationConversionRequest(){

        return new createRegistrationConversionRequestTPConversionRegistrationApi($this->apiClient);
    }

}

/**
 * Create registration term conversion
 */
class createRegistrationConversionRequestTPConversionRegistrationApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createRegistrationConversionRequestTPConversionRegistrationApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The term ID
     * @param string $termId
     * @return createRegistrationConversionRequestTPConversionRegistrationApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The user token
     * @param string $userToken
     * @return createRegistrationConversionRequestTPConversionRegistrationApi
     */
    public function userToken($userToken){
        $this->request['userToken'] = $userToken;
        return $this;
    }
    /**
     * The user token provider
     * @param string $userProvider
     * @return createRegistrationConversionRequestTPConversionRegistrationApi
     */
    public function userProvider($userProvider){
        $this->request['userProvider'] = $userProvider;
        return $this;
    }
    /**
     * The encrypted user reference
     * @param string $userRef
     * @return createRegistrationConversionRequestTPConversionRegistrationApi
     */
    public function userRef($userRef){
        $this->request['userRef'] = $userRef;
        return $this;
    }
    /**
     * Piano&#39;s browser cookie containing the browser ID which can also be retrieved through JS SDK
     * @param string $tbc
     * @return createRegistrationConversionRequestTPConversionRegistrationApi
     */
    public function tbc($tbc){
        $this->request['tbc'] = $tbc;
        return $this;
    }
    /**
     * The pageview ID, can be retrieved from cookies through JS SDK
     * @param string $pageviewId
     * @return createRegistrationConversionRequestTPConversionRegistrationApi
     */
    public function pageviewId($pageviewId){
        $this->request['pageviewId'] = $pageviewId;
        return $this;
    }
    /**
     * Execute request
     * @return TPAnonTermConversion
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['userToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userToken' ) ] = $this->request['userToken'];
        }
        if (isset($this->request['userProvider'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userProvider' ) ] = $this->request['userProvider'];
        }
        if (isset($this->request['userRef'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userRef' ) ] = $this->request['userRef'];
        }
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['tbc'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'tbc' ) ] = $this->request['tbc'];
        }
        if (isset($this->request['pageviewId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'pageviewId' ) ] = $this->request['pageviewId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/conversion/registration/create', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPAnonTermConversion');
    }
}
