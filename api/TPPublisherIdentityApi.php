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
 * The TPPublisherIdentityApi class.
 */
class TPPublisherIdentityApi  extends TPAPIBase {

    /**
     * @return createPasswordRequestTPPublisherIdentityApi
     */
    public function createPasswordRequest(){

        return new createPasswordRequestTPPublisherIdentityApi($this->apiClient);
    }
    /**
     * @return loginRequestTPPublisherIdentityApi
     */
    public function loginRequest(){

        return new loginRequestTPPublisherIdentityApi($this->apiClient);
    }
    /**
     * @return registerRequestTPPublisherIdentityApi
     */
    public function registerRequest(){

        return new registerRequestTPPublisherIdentityApi($this->apiClient);
    }

}

/**
 * Create password for user without password.
 */
class createPasswordRequestTPPublisherIdentityApi  extends TPAPIBase {
    protected $request = array();
    /**
     * 
     * @param string $authorization
     * @return createPasswordRequestTPPublisherIdentityApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * 
     * @param \\Model\TPIdPublisherPasswordRequest $body
     * @return createPasswordRequestTPPublisherIdentityApi
     */
    public function body($body){
        $this->request['body'] = $body;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['body'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'body' ) ] = json_encode($this->request['body']);
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/identity/password', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Logs in a user by password
 */
class loginRequestTPPublisherIdentityApi  extends TPAPIBase {
    protected $request = array();
    /**
     * 
     * @param string $authorization
     * @return loginRequestTPPublisherIdentityApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * 
     * @param \\Model\TPIdPublisherLoginRequest $body
     * @return loginRequestTPPublisherIdentityApi
     */
    public function body($body){
        $this->request['body'] = $body;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdTokenResponse
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['body'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'body' ) ] = json_encode($this->request['body']);
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/identity/login', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdTokenResponse');
    }
}
/**
 * Registers the user. The response should contain the user token.
 */
class registerRequestTPPublisherIdentityApi  extends TPAPIBase {
    protected $request = array();
    /**
     * 
     * @param string $authorization
     * @return registerRequestTPPublisherIdentityApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * 
     * @param \\Model\TPIdPublisherRegisterRequest $body
     * @return registerRequestTPPublisherIdentityApi
     */
    public function body($body){
        $this->request['body'] = $body;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdTokenResponse
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['body'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'body' ) ] = json_encode($this->request['body']);
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/identity/register', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdTokenResponse');
    }
}
