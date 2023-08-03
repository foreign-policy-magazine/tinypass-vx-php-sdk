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
 * The TPPublisherLoginSocialApi class.
 */
class TPPublisherLoginSocialApi  extends TPAPIBase {

    /**
     * @return getSocialAuthResponseRequestTPPublisherLoginSocialApi
     */
    public function getSocialAuthResponseRequest(){

        return new getSocialAuthResponseRequestTPPublisherLoginSocialApi($this->apiClient);
    }

}

/**
 * Exchanges a responseId from redirect url to an auth token
 */
class getSocialAuthResponseRequestTPPublisherLoginSocialApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return getSocialAuthResponseRequestTPPublisherLoginSocialApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Application api token
     * @param string $apiToken
     * @return getSocialAuthResponseRequestTPPublisherLoginSocialApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
        return $this;
    }
    /**
     * ResponseId from redirect url
     * @param string $responseId
     * @return getSocialAuthResponseRequestTPPublisherLoginSocialApi
     */
    public function responseId($responseId){
        $this->request['responseId'] = $responseId;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->request['apiToken'];
        }
        if (isset($this->request['responseId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'responseId' ) ] = $this->request['responseId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/login/social/code', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
