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
 * The TPPublisherLoginApi class.
 */
class TPPublisherLoginApi  extends TPAPIBase {

    /**
     * @return socialLoginRequestTPPublisherLoginApi
     */
    public function socialLoginRequest(){

        return new socialLoginRequestTPPublisherLoginApi($this->apiClient);
    }

}

/**
 * Generates url for redirect to social network.
 */
class socialLoginRequestTPPublisherLoginApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return socialLoginRequestTPPublisherLoginApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Social media type; for example, FACEBOOK, GOOGLE, TWITTER, LINKEDIN, APPLE
     * @param string $socialType
     * @return socialLoginRequestTPPublisherLoginApi
     */
    public function socialType($socialType){
        $this->request['socialType'] = $socialType;
        return $this;
    }
    /**
     * Application api token
     * @param string $apiToken
     * @return socialLoginRequestTPPublisherLoginApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
        return $this;
    }
    /**
     * Landing url
     * @param string $redirectUri
     * @return socialLoginRequestTPPublisherLoginApi
     */
    public function redirectUri($redirectUri){
        $this->request['redirectUri'] = $redirectUri;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdSocialLinkResponse
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['socialType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'socialType' ) ] = $this->request['socialType'];
        }
        if (isset($this->request['redirectUri'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'redirectUri' ) ] = $this->request['redirectUri'];
        }
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->request['apiToken'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/login/social', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdSocialLinkResponse');
    }
}
