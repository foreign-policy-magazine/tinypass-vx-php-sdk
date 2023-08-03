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
 * The TPOauthApi class.
 */
class TPOauthApi  extends TPAPIBase {

    /**
     * @return authTokenRequestTPOauthApi
     */
    public function authTokenRequest(){

        return new authTokenRequestTPOauthApi($this->apiClient);
    }

}

/**
 * Get access token for OAuth
 */
class authTokenRequestTPOauthApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The client ID of OAuth authorization
     * @param string $clientId
     * @return authTokenRequestTPOauthApi
     */
    public function clientId($clientId){
        $this->request['clientId'] = $clientId;
        return $this;
    }
    /**
     * The client secret of OAuth authorization
     * @param string $clientSecret
     * @return authTokenRequestTPOauthApi
     */
    public function clientSecret($clientSecret){
        $this->request['clientSecret'] = $clientSecret;
        return $this;
    }
    /**
     * The OAuth code of OAuth authorization
     * @param string $code
     * @return authTokenRequestTPOauthApi
     */
    public function code($code){
        $this->request['code'] = $code;
        return $this;
    }
    /**
     * The OAuth refresh token of OAuth authorization
     * @param string $refreshToken
     * @return authTokenRequestTPOauthApi
     */
    public function refreshToken($refreshToken){
        $this->request['refreshToken'] = $refreshToken;
        return $this;
    }
    /**
     * The grant type of OAuth authorization
     * @param string $grantType
     * @return authTokenRequestTPOauthApi
     */
    public function grantType($grantType){
        $this->request['grantType'] = $grantType;
        return $this;
    }
    /**
     * The redirect URI of OAuth authorization
     * @param string $redirectUri
     * @return authTokenRequestTPOauthApi
     */
    public function redirectUri($redirectUri){
        $this->request['redirectUri'] = $redirectUri;
        return $this;
    }
    /**
     * The OAuth username
     * @param string $username
     * @return authTokenRequestTPOauthApi
     */
    public function username($username){
        $this->request['username'] = $username;
        return $this;
    }
    /**
     * The OAuth password
     * @param string $password
     * @return authTokenRequestTPOauthApi
     */
    public function password($password){
        $this->request['password'] = $password;
        return $this;
    }
    /**
     * The OAuth state
     * @param string $state
     * @return authTokenRequestTPOauthApi
     */
    public function state($state){
        $this->request['state'] = $state;
        return $this;
    }
    /**
     * The device ID for OAuth
     * @param string $deviceId
     * @return authTokenRequestTPOauthApi
     */
    public function deviceId($deviceId){
        $this->request['deviceId'] = $deviceId;
        return $this;
    }
    /**
     * Execute request
     * @return TPAnonOAuthToken
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['clientId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'clientId' ) ] = $this->request['clientId'];
        }
        if (isset($this->request['clientSecret'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'clientSecret' ) ] = $this->request['clientSecret'];
        }
        if (isset($this->request['code'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'code' ) ] = $this->request['code'];
        }
        if (isset($this->request['refreshToken'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'refreshToken' ) ] = $this->request['refreshToken'];
        }
        if (isset($this->request['grantType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'grantType' ) ] = $this->request['grantType'];
        }
        if (isset($this->request['redirectUri'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'redirectUri' ) ] = $this->request['redirectUri'];
        }
        if (isset($this->request['username'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'username' ) ] = $this->request['username'];
        }
        if (isset($this->request['password'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'password' ) ] = $this->request['password'];
        }
        if (isset($this->request['state'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'state' ) ] = $this->request['state'];
        }
        if (isset($this->request['deviceId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'deviceId' ) ] = $this->request['deviceId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/oauth/authToken', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPAnonOAuthToken');
    }
}
