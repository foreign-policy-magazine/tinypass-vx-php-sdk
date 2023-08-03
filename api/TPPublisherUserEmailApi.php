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
 * The TPPublisherUserEmailApi class.
 */
class TPPublisherUserEmailApi  extends TPAPIBase {

    /**
     * @return getMailLogRequestTPPublisherUserEmailApi
     */
    public function getMailLogRequest(){

        return new getMailLogRequestTPPublisherUserEmailApi($this->apiClient);
    }
    /**
     * @return listMailLogRequestTPPublisherUserEmailApi
     */
    public function listMailLogRequest(){

        return new listMailLogRequestTPPublisherUserEmailApi($this->apiClient);
    }

}

/**
 * Get mail log
 */
class getMailLogRequestTPPublisherUserEmailApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getMailLogRequestTPPublisherUserEmailApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The mail log ID
     * @param string $mailLogId
     * @return getMailLogRequestTPPublisherUserEmailApi
     */
    public function mailLogId($mailLogId){
        $this->request['mailLogId'] = $mailLogId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherMailLog
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['mailLogId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'mailLogId' ) ] = $this->request['mailLogId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/email/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherMailLog');
    }
}
/**
 * List emails sent to user.
 */
class listMailLogRequestTPPublisherUserEmailApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listMailLogRequestTPPublisherUserEmailApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listMailLogRequestTPPublisherUserEmailApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listMailLogRequestTPPublisherUserEmailApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return listMailLogRequestTPPublisherUserEmailApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Whether to include the email body in the response
     * @param bool $includeEmailBody
     * @return listMailLogRequestTPPublisherUserEmailApi
     */
    public function includeEmailBody($includeEmailBody){
        $this->request['includeEmailBody'] = $includeEmailBody;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return listMailLogRequestTPPublisherUserEmailApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listMailLogRequestTPPublisherUserEmailApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherMailLog[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['includeEmailBody'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includeEmailBody' ) ] = $this->request['includeEmailBody'];
        }
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/email/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherMailLog', 'array');
    }
}
