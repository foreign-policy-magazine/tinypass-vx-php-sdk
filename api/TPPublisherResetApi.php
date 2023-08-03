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
 * The TPPublisherResetApi class.
 */
class TPPublisherResetApi  extends TPAPIBase {

    /**
     * @return resetPasswordRequestTPPublisherResetApi
     */
    public function resetPasswordRequest(){

        return new resetPasswordRequestTPPublisherResetApi($this->apiClient);
    }

}

/**
 * Reset password for user.
 */
class resetPasswordRequestTPPublisherResetApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return resetPasswordRequestTPPublisherResetApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * User&#39;s email address
     * @param string $email
     * @return resetPasswordRequestTPPublisherResetApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * 
     * @param string $authorization
     * @return resetPasswordRequestTPPublisherResetApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * Reset password url
     * @param string $resetPasswordUrl
     * @return resetPasswordRequestTPPublisherResetApi
     */
    public function resetPasswordUrl($resetPasswordUrl){
        $this->request['resetPasswordUrl'] = $resetPasswordUrl;
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
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['resetPasswordUrl'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resetPasswordUrl' ) ] = $this->request['resetPasswordUrl'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/reset/password', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
