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
 * The TPAccessApi class.
 */
class TPAccessApi  extends TPAPIBase {

    /**
     * @return checkRequestTPAccessApi
     */
    public function checkRequest(){

        return new checkRequestTPAccessApi($this->apiClient);
    }
    /**
     * @return listRequestTPAccessApi
     */
    public function listRequest(){

        return new listRequestTPAccessApi($this->apiClient);
    }

}

/**
 * Get access details for user and RID
 */
class checkRequestTPAccessApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The resource ID
     * @param string $rid
     * @return checkRequestTPAccessApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return checkRequestTPAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Piano&#39;s access token (v2)
     * @param string $tpAccessTokenV2
     * @return checkRequestTPAccessApi
     */
    public function tpAccessTokenV2($tpAccessTokenV2){
        $this->request['tpAccessTokenV2'] = $tpAccessTokenV2;
        return $this;
    }
    /**
     * Piano&#39;s user meter cookie (umc)
     * @param string $umc
     * @return checkRequestTPAccessApi
     */
    public function umc($umc){
        $this->request['umc'] = $umc;
        return $this;
    }
    /**
     * Whether to include cross application access for the resource
     * @param bool $crossApp
     * @return checkRequestTPAccessApi
     */
    public function crossApp($crossApp){
        $this->request['crossApp'] = $crossApp;
        return $this;
    }
    /**
     * The user token
     * @param string $userToken
     * @return checkRequestTPAccessApi
     */
    public function userToken($userToken){
        $this->request['userToken'] = $userToken;
        return $this;
    }
    /**
     * The user token provider
     * @param string $userProvider
     * @return checkRequestTPAccessApi
     */
    public function userProvider($userProvider){
        $this->request['userProvider'] = $userProvider;
        return $this;
    }
    /**
     * The encrypted user reference
     * @param string $userRef
     * @return checkRequestTPAccessApi
     */
    public function userRef($userRef){
        $this->request['userRef'] = $userRef;
        return $this;
    }
    /**
     * Execute request
     * @return TPAnonAccessDTO
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['tpAccessTokenV2'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'tpAccessTokenV2' ) ] = $this->request['tpAccessTokenV2'];
        }
        if (isset($this->request['umc'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'umc' ) ] = $this->request['umc'];
        }
        if (isset($this->request['crossApp'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'crossApp' ) ] = $this->request['crossApp'];
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
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/access/check', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPAnonAccessDTO');
    }
}
/**
 * List user&#39;s accesses (anon)
 */
class listRequestTPAccessApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPAccessApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPAccessApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Whether the object is active
     * @param bool $active
     * @return listRequestTPAccessApi
     */
    public function active($active){
        $this->request['active'] = $active;
        return $this;
    }
    /**
     * Whether to expand bundled accesses in the response
     * @param bool $expandBundled
     * @return listRequestTPAccessApi
     */
    public function expandBundled($expandBundled){
        $this->request['expandBundled'] = $expandBundled;
        return $this;
    }
    /**
     * Whether to include cross application access for the resource
     * @param bool $crossApp
     * @return listRequestTPAccessApi
     */
    public function crossApp($crossApp){
        $this->request['crossApp'] = $crossApp;
        return $this;
    }
    /**
     * The user token
     * @param string $userToken
     * @return listRequestTPAccessApi
     */
    public function userToken($userToken){
        $this->request['userToken'] = $userToken;
        return $this;
    }
    /**
     * The user token provider
     * @param string $userProvider
     * @return listRequestTPAccessApi
     */
    public function userProvider($userProvider){
        $this->request['userProvider'] = $userProvider;
        return $this;
    }
    /**
     * The encrypted user reference
     * @param string $userRef
     * @return listRequestTPAccessApi
     */
    public function userRef($userRef){
        $this->request['userRef'] = $userRef;
        return $this;
    }
    /**
     * Execute request
     * @return TPAnonAccessDTO[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['active'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'active' ) ] = $this->request['active'];
        }
        if (isset($this->request['expandBundled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expandBundled' ) ] = $this->request['expandBundled'];
        }
        if (isset($this->request['crossApp'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'crossApp' ) ] = $this->request['crossApp'];
        }
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
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
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/access/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPAnonAccessDTO', 'array');
    }
}
