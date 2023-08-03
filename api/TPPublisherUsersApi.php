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
 * The TPPublisherUsersApi class.
 */
class TPPublisherUsersApi  extends TPAPIBase {

    /**
     * @return userProfileRequestTPPublisherUsersApi
     */
    public function userProfileRequest(){

        return new userProfileRequestTPPublisherUsersApi($this->apiClient);
    }

}

/**
 * Get User profile by Uid or Email
 */
class userProfileRequestTPPublisherUsersApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return userProfileRequestTPPublisherUsersApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * User&#39;s uid
     * @param string $uid
     * @return userProfileRequestTPPublisherUsersApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * User&#39;s email
     * @param string $email
     * @return userProfileRequestTPPublisherUsersApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * 
     * @param string $apiToken
     * @return userProfileRequestTPPublisherUsersApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
        return $this;
    }
    /**
     * 
     * @param string $authorization
     * @return userProfileRequestTPPublisherUsersApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdPublisherUserProfileResponse
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->request['apiToken'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/users/get', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdPublisherUserProfileResponse');
    }
}
