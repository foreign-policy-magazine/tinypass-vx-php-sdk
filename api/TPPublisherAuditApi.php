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
 * The TPPublisherAuditApi class.
 */
class TPPublisherAuditApi  extends TPAPIBase {

    /**
     * @return getAuditRequestTPPublisherAuditApi
     */
    public function getAuditRequest(){

        return new getAuditRequestTPPublisherAuditApi($this->apiClient);
    }

}

/**
 * Get User audit.
 */
class getAuditRequestTPPublisherAuditApi  extends TPAPIBase {
    protected $request = array();
    /**
     * 
     * @param string $aid
     * @return getAuditRequestTPPublisherAuditApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * 
     * @param string $uid
     * @return getAuditRequestTPPublisherAuditApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * 
     * @param string $actionType
     * @return getAuditRequestTPPublisherAuditApi
     */
    public function actionType($actionType){
        $this->request['actionType'] = $actionType;
        return $this;
    }
    /**
     * 
     * @param string $from
     * @return getAuditRequestTPPublisherAuditApi
     */
    public function from($from){
        $this->request['from'] = $from;
        return $this;
    }
    /**
     * 
     * @param string $until
     * @return getAuditRequestTPPublisherAuditApi
     */
    public function until($until){
        $this->request['until'] = $until;
        return $this;
    }
    /**
     * 
     * @param int $limit
     * @return getAuditRequestTPPublisherAuditApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * 
     * @param int $offset
     * @return getAuditRequestTPPublisherAuditApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * 
     * @param string $apiToken
     * @return getAuditRequestTPPublisherAuditApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
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
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['actionType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'actionType' ) ] = $this->request['actionType'];
        }
        if (isset($this->request['from'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'from' ) ] = $this->request['from'];
        }
        if (isset($this->request['until'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'until' ) ] = $this->request['until'];
        }
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
        }
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->request['apiToken'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/audit/user', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
