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
 * The TPPublisherUserNoteApi class.
 */
class TPPublisherUserNoteApi  extends TPAPIBase {

    /**
     * @return createRequestTPPublisherUserNoteApi
     */
    public function createRequest(){

        return new createRequestTPPublisherUserNoteApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherUserNoteApi
     */
    public function getRequest(){

        return new getRequestTPPublisherUserNoteApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherUserNoteApi
     */
    public function listRequest(){

        return new listRequestTPPublisherUserNoteApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherUserNoteApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherUserNoteApi($this->apiClient);
    }

}

/**
 * Create user note
 */
class createRequestTPPublisherUserNoteApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createRequestTPPublisherUserNoteApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return createRequestTPPublisherUserNoteApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The note content
     * @param string $content
     * @return createRequestTPPublisherUserNoteApi
     */
    public function content($content){
        $this->request['content'] = $content;
        return $this;
    }
    /**
     * Prevent editing or deleting
     * @param bool $readonly
     * @return createRequestTPPublisherUserNoteApi
     */
    public function readonly($readonly){
        $this->request['readonly'] = $readonly;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserNote
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
        if (isset($this->request['content'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'content' ) ] = $this->request['content'];
        }
        if (isset($this->request['readonly'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'readonly' ) ] = $this->request['readonly'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/note/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserNote');
    }
}
/**
 * Get user note
 */
class getRequestTPPublisherUserNoteApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getRequestTPPublisherUserNoteApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The note ID
     * @param string $userNoteId
     * @return getRequestTPPublisherUserNoteApi
     */
    public function userNoteId($userNoteId){
        $this->request['userNoteId'] = $userNoteId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserNote
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['userNoteId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userNoteId' ) ] = $this->request['userNoteId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/note/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserNote');
    }
}
/**
 * List user notes in app
 */
class listRequestTPPublisherUserNoteApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPPublisherUserNoteApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherUserNoteApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherUserNoteApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return listRequestTPPublisherUserNoteApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherUserNoteApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherUserNoteApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherUserNoteApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserNote[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->request['q'];
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
        $response = $this->apiClient->callAPI('/publisher/user/note/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserNote', 'array');
    }
}
/**
 * Update user note
 */
class updateRequestTPPublisherUserNoteApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateRequestTPPublisherUserNoteApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The note ID
     * @param string $userNoteId
     * @return updateRequestTPPublisherUserNoteApi
     */
    public function userNoteId($userNoteId){
        $this->request['userNoteId'] = $userNoteId;
        return $this;
    }
    /**
     * The note content
     * @param string $content
     * @return updateRequestTPPublisherUserNoteApi
     */
    public function content($content){
        $this->request['content'] = $content;
        return $this;
    }
    /**
     * Prevent editing or deleting
     * @param bool $readonly
     * @return updateRequestTPPublisherUserNoteApi
     */
    public function readonly($readonly){
        $this->request['readonly'] = $readonly;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserNote
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['userNoteId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userNoteId' ) ] = $this->request['userNoteId'];
        }
        if (isset($this->request['content'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'content' ) ] = $this->request['content'];
        }
        if (isset($this->request['readonly'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'readonly' ) ] = $this->request['readonly'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/note/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserNote');
    }
}
