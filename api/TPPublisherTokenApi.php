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
 * The TPPublisherTokenApi class.
 */
class TPPublisherTokenApi  extends TPAPIBase {

    /**
     * @return refreshTokenRequestTPPublisherTokenApi
     */
    public function refreshTokenRequest(){

        return new refreshTokenRequestTPPublisherTokenApi($this->apiClient);
    }
    /**
     * @return tokenVerifySessionRequestTPPublisherTokenApi
     */
    public function tokenVerifySessionRequest(){

        return new tokenVerifySessionRequestTPPublisherTokenApi($this->apiClient);
    }

}

/**
 * Refreshes piano ID user token that can be used as a cookie value.
 */
class refreshTokenRequestTPPublisherTokenApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return refreshTokenRequestTPPublisherTokenApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * User&#39;s refresh token
     * @param string $refreshToken
     * @return refreshTokenRequestTPPublisherTokenApi
     */
    public function refreshToken($refreshToken){
        $this->request['refreshToken'] = $refreshToken;
        return $this;
    }
    /**
     * 
     * @param string $authorization
     * @return refreshTokenRequestTPPublisherTokenApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdTokenResponse
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['refreshToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'refreshToken' ) ] = $this->request['refreshToken'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/token/refresh', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdTokenResponse');
    }
}
/**
 * Verify access token by publisher
 */
class tokenVerifySessionRequestTPPublisherTokenApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return tokenVerifySessionRequestTPPublisherTokenApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * User&#39;s JWT token
     * @param string $token
     * @return tokenVerifySessionRequestTPPublisherTokenApi
     */
    public function token($token){
        $this->request['token'] = $token;
        return $this;
    }
    /**
     * 
     * @param string $authorization
     * @return tokenVerifySessionRequestTPPublisherTokenApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdTokenResponse
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['token'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'token' ) ] = $this->request['token'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/token/verify', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdTokenResponse');
    }
}
