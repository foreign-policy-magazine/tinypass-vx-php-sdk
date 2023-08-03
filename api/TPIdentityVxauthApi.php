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
 * The TPIdentityVxauthApi class.
 */
class TPIdentityVxauthApi  extends TPAPIBase {

    /**
     * @return authorizeRequestTPIdentityVxauthApi
     */
    public function authorizeRequest(){

        return new authorizeRequestTPIdentityVxauthApi($this->apiClient);
    }
    /**
     * @return createCookieWithAidAndTokenPostRequestTPIdentityVxauthApi
     */
    public function createCookieWithAidAndTokenPostRequest(){

        return new createCookieWithAidAndTokenPostRequestTPIdentityVxauthApi($this->apiClient);
    }
    /**
     * @return createCookieWithAidAndTokenRequestTPIdentityVxauthApi
     */
    public function createCookieWithAidAndTokenRequest(){

        return new createCookieWithAidAndTokenRequestTPIdentityVxauthApi($this->apiClient);
    }
    /**
     * @return refreshTokenOrExchangeCodeRequestTPIdentityVxauthApi
     */
    public function refreshTokenOrExchangeCodeRequest(){

        return new refreshTokenOrExchangeCodeRequestTPIdentityVxauthApi($this->apiClient);
    }

}

/**
 * Authorize in VX with redirect
 */
class authorizeRequestTPIdentityVxauthApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        $headerParams = array();
        ;
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/identity/vxauth/authorize', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * 
 */
class createCookieWithAidAndTokenPostRequestTPIdentityVxauthApi  extends TPAPIBase {
    protected $request = array();
    /**
     * 
     * @param string $authorization
     * @return createCookieWithAidAndTokenPostRequestTPIdentityVxauthApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * 
     * @param string $token
     * @return createCookieWithAidAndTokenPostRequestTPIdentityVxauthApi
     */
    public function token($token){
        $this->request['token'] = $token;
        return $this;
    }
    /**
     * 
     * @param string $clientId
     * @return createCookieWithAidAndTokenPostRequestTPIdentityVxauthApi
     */
    public function clientId($clientId){
        $this->request['clientId'] = $clientId;
        return $this;
    }
    /**
     * 
     * @param bool $sessionCookie
     * @return createCookieWithAidAndTokenPostRequestTPIdentityVxauthApi
     */
    public function sessionCookie($sessionCookie){
        $this->request['sessionCookie'] = $sessionCookie;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['token'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'token' ) ] = $this->request['token'];
        }
        if (isset($this->request['clientId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'clientId' ) ] = $this->request['clientId'];
        }
        if (isset($this->request['sessionCookie'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'sessionCookie' ) ] = $this->request['sessionCookie'];
        }
        $formParams = array();
        $headerParams = array();
        ;
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/identity/vxauth/cookie', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * 
 */
class createCookieWithAidAndTokenRequestTPIdentityVxauthApi  extends TPAPIBase {
    protected $request = array();
    /**
     * 
     * @param string $authorization
     * @return createCookieWithAidAndTokenRequestTPIdentityVxauthApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * 
     * @param string $token
     * @return createCookieWithAidAndTokenRequestTPIdentityVxauthApi
     */
    public function token($token){
        $this->request['token'] = $token;
        return $this;
    }
    /**
     * 
     * @param string $clientId
     * @return createCookieWithAidAndTokenRequestTPIdentityVxauthApi
     */
    public function clientId($clientId){
        $this->request['clientId'] = $clientId;
        return $this;
    }
    /**
     * 
     * @param bool $sessionCookie
     * @return createCookieWithAidAndTokenRequestTPIdentityVxauthApi
     */
    public function sessionCookie($sessionCookie){
        $this->request['sessionCookie'] = $sessionCookie;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['token'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'token' ) ] = $this->request['token'];
        }
        if (isset($this->request['clientId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'clientId' ) ] = $this->request['clientId'];
        }
        if (isset($this->request['sessionCookie'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'sessionCookie' ) ] = $this->request['sessionCookie'];
        }
        $formParams = array();
        $headerParams = array();
        ;
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/identity/vxauth/cookie', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Authorize in VX with token
 */
class refreshTokenOrExchangeCodeRequestTPIdentityVxauthApi  extends TPAPIBase {
    protected $request = array();
    /**
     * 
     * @param string $clientId
     * @return refreshTokenOrExchangeCodeRequestTPIdentityVxauthApi
     */
    public function clientId($clientId){
        $this->request['clientId'] = $clientId;
        return $this;
    }
    /**
     * 
     * @param string $refreshToken
     * @return refreshTokenOrExchangeCodeRequestTPIdentityVxauthApi
     */
    public function refreshToken($refreshToken){
        $this->request['refreshToken'] = $refreshToken;
        return $this;
    }
    /**
     * 
     * @param string $grantType
     * @return refreshTokenOrExchangeCodeRequestTPIdentityVxauthApi
     */
    public function grantType($grantType){
        $this->request['grantType'] = $grantType;
        return $this;
    }
    /**
     * 
     * @param string $code
     * @return refreshTokenOrExchangeCodeRequestTPIdentityVxauthApi
     */
    public function code($code){
        $this->request['code'] = $code;
        return $this;
    }
    /**
     * 
     * @param string $clientSecret
     * @return refreshTokenOrExchangeCodeRequestTPIdentityVxauthApi
     */
    public function clientSecret($clientSecret){
        $this->request['clientSecret'] = $clientSecret;
        return $this;
    }
    /**
     * 
     * @param string $redirectUri
     * @return refreshTokenOrExchangeCodeRequestTPIdentityVxauthApi
     */
    public function redirectUri($redirectUri){
        $this->request['redirectUri'] = $redirectUri;
        return $this;
    }
    /**
     * 
     * @param string $codeVerifier
     * @return refreshTokenOrExchangeCodeRequestTPIdentityVxauthApi
     */
    public function codeVerifier($codeVerifier){
        $this->request['codeVerifier'] = $codeVerifier;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdTokenResponseVxCompatible
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['clientId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'clientId' ) ] = $this->request['clientId'];
        }
        if (isset($this->request['refreshToken'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'refreshToken' ) ] = $this->request['refreshToken'];
        }
        if (isset($this->request['grantType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'grantType' ) ] = $this->request['grantType'];
        }
        if (isset($this->request['code'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'code' ) ] = $this->request['code'];
        }
        if (isset($this->request['clientSecret'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'clientSecret' ) ] = $this->request['clientSecret'];
        }
        if (isset($this->request['redirectUri'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'redirectUri' ) ] = $this->request['redirectUri'];
        }
        if (isset($this->request['codeVerifier'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'codeVerifier' ) ] = $this->request['codeVerifier'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/identity/vxauth/token', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdTokenResponseVxCompatible');
    }
}
