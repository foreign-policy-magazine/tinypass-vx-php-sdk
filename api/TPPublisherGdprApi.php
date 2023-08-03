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
 * The TPPublisherGdprApi class.
 */
class TPPublisherGdprApi  extends TPAPIBase {

    /**
     * @return eraseUsersRequestTPPublisherGdprApi
     */
    public function eraseUsersRequest(){

        return new eraseUsersRequestTPPublisherGdprApi($this->apiClient);
    }
    /**
     * @return exportUserRequestTPPublisherGdprApi
     */
    public function exportUserRequest(){

        return new exportUserRequestTPPublisherGdprApi($this->apiClient);
    }

}

/**
 * Delete personal data
 */
class eraseUsersRequestTPPublisherGdprApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return eraseUsersRequestTPPublisherGdprApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return eraseUsersRequestTPPublisherGdprApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The scope of the erase-user data (&lt;a href&#x3D;\&quot;https://docs.piano.io/data-security-faqs/#q1\&quot;&gt;\&quot;PII\&quot;&lt;/a&gt;, \&quot;ALL\&quot;)
     * @param string $scope
     * @return eraseUsersRequestTPPublisherGdprApi
     */
    public function scope($scope){
        $this->request['scope'] = $scope;
        return $this;
    }
    /**
     * Execute request

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
        if (isset($this->request['scope'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scope' ) ] = $this->request['scope'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/gdpr/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Get personal data
 */
class exportUserRequestTPPublisherGdprApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return exportUserRequestTPPublisherGdprApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return exportUserRequestTPPublisherGdprApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The scope of the erase-user data (&lt;a href&#x3D;\&quot;https://docs.piano.io/data-security-faqs/#q1\&quot;&gt;\&quot;PII\&quot;&lt;/a&gt;, \&quot;ALL\&quot;)
     * @param string $scope
     * @return exportUserRequestTPPublisherGdprApi
     */
    public function scope($scope){
        $this->request['scope'] = $scope;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherEraseUserResponse
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
        if (isset($this->request['scope'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scope' ) ] = $this->request['scope'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/gdpr/export', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherEraseUserResponse');
    }
}
