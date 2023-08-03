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
 * The TPPublisherUserAccessApi class.
 */
class TPPublisherUserAccessApi  extends TPAPIBase {

    /**
     * @return checkAccessRequestTPPublisherUserAccessApi
     */
    public function checkAccessRequest(){

        return new checkAccessRequestTPPublisherUserAccessApi($this->apiClient);
    }
    /**
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function grantAccessRequest(){

        return new grantAccessRequestTPPublisherUserAccessApi($this->apiClient);
    }
    /**
     * @return grantAccessToUsersRequestTPPublisherUserAccessApi
     */
    public function grantAccessToUsersRequest(){

        return new grantAccessToUsersRequestTPPublisherUserAccessApi($this->apiClient);
    }
    /**
     * @return listAccessRequestTPPublisherUserAccessApi
     */
    public function listAccessRequest(){

        return new listAccessRequestTPPublisherUserAccessApi($this->apiClient);
    }
    /**
     * @return revokeAccessRequestTPPublisherUserAccessApi
     */
    public function revokeAccessRequest(){

        return new revokeAccessRequestTPPublisherUserAccessApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherUserAccessApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherUserAccessApi($this->apiClient);
    }

}

/**
 * Check user access to resource
 */
class checkAccessRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return checkAccessRequestTPPublisherUserAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return checkAccessRequestTPPublisherUserAccessApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return checkAccessRequestTPPublisherUserAccessApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * Whether to include cross application access for the resource
     * @param bool $crossApp
     * @return checkAccessRequestTPPublisherUserAccessApi
     */
    public function crossApp($crossApp){
        $this->request['crossApp'] = $crossApp;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherAccessDTO
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['crossApp'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'crossApp' ) ] = $this->request['crossApp'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/check', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAccessDTO');
    }
}
/**
 * Grant access to one user
 */
class grantAccessRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * Whether to send an email
     * @param bool $sendEmail
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function sendEmail($sendEmail){
        $this->request['sendEmail'] = $sendEmail;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The user&#39;s email addresses (may be multiple)
     * @param string $emails
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function emails($emails){
        $this->request['emails'] = $emails;
        return $this;
    }
    /**
     * The expire date of the access item; null means unlimited
     * @param int $expireDate
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function expireDate($expireDate){
        $this->request['expireDate'] = $expireDate;
        return $this;
    }
    /**
     * The URL of the page
     * @param string $url
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    /**
     * The message
     * @param string $message
     * @return grantAccessRequestTPPublisherUserAccessApi
     */
    public function message($message){
        $this->request['message'] = $message;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherAccess[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['emails'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'emails' ) ] = $this->request['emails'];
        }
        if (isset($this->request['expireDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expireDate' ) ] = $this->request['expireDate'];
        }
        if (isset($this->request['sendEmail'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'sendEmail' ) ] = $this->request['sendEmail'];
        }
        if (isset($this->request['url'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'url' ) ] = $this->request['url'];
        }
        if (isset($this->request['message'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'message' ) ] = $this->request['message'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/grant', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAccess', 'array');
    }
}
/**
 * Grant access to multiple users
 */
class grantAccessToUsersRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return grantAccessToUsersRequestTPPublisherUserAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string[] $rid
     * @return grantAccessToUsersRequestTPPublisherUserAccessApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * Whether to send an email
     * @param bool $sendEmail
     * @return grantAccessToUsersRequestTPPublisherUserAccessApi
     */
    public function sendEmail($sendEmail){
        $this->request['sendEmail'] = $sendEmail;
        return $this;
    }
    /**
     * The user&#39;s email addresses (may be multiple)
     * @param string[] $emails
     * @return grantAccessToUsersRequestTPPublisherUserAccessApi
     */
    public function emails($emails){
        $this->request['emails'] = $emails;
        return $this;
    }
    /**
     * The file ID
     * @param string $fileId
     * @return grantAccessToUsersRequestTPPublisherUserAccessApi
     */
    public function fileId($fileId){
        $this->request['fileId'] = $fileId;
        return $this;
    }
    /**
     * The expire date of the access item; null means unlimited
     * @param string $expireDate
     * @return grantAccessToUsersRequestTPPublisherUserAccessApi
     */
    public function expireDate($expireDate){
        $this->request['expireDate'] = $expireDate;
        return $this;
    }
    /**
     * The message
     * @param string $message
     * @return grantAccessToUsersRequestTPPublisherUserAccessApi
     */
    public function message($message){
        $this->request['message'] = $message;
        return $this;
    }
    /**
     * Execute request
     * @return int
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['emails'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'emails' ) ] = $this->request['emails'];
        }
        if (isset($this->request['fileId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'fileId' ) ] = $this->request['fileId'];
        }
        if (isset($this->request['expireDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expireDate' ) ] = $this->request['expireDate'];
        }
        if (isset($this->request['sendEmail'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'sendEmail' ) ] = $this->request['sendEmail'];
        }
        if (isset($this->request['message'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'message' ) ] = $this->request['message'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/grantToUsers', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'int');
    }
}
/**
 * Lists a user&#39;s access
 */
class listAccessRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listAccessRequestTPPublisherUserAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return listAccessRequestTPPublisherUserAccessApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listAccessRequestTPPublisherUserAccessApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listAccessRequestTPPublisherUserAccessApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Whether to expand bundled accesses in the response
     * @param bool $expandBundled
     * @return listAccessRequestTPPublisherUserAccessApi
     */
    public function expandBundled($expandBundled){
        $this->request['expandBundled'] = $expandBundled;
        return $this;
    }
    /**
     * Whether to include cross application access for the resource
     * @param bool $crossApp
     * @return listAccessRequestTPPublisherUserAccessApi
     */
    public function crossApp($crossApp){
        $this->request['crossApp'] = $crossApp;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherAccessDTO[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['expandBundled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expandBundled' ) ] = $this->request['expandBundled'];
        }
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
        }
        if (isset($this->request['crossApp'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'crossApp' ) ] = $this->request['crossApp'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAccessDTO', 'array');
    }
}
/**
 * Revoke user access
 */
class revokeAccessRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The access ID
     * @param string $accessId
     * @return revokeAccessRequestTPPublisherUserAccessApi
     */
    public function accessId($accessId){
        $this->request['accessId'] = $accessId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherAccess
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['accessId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessId' ) ] = $this->request['accessId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/revoke', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAccess');
    }
}
/**
 * Update user access
 */
class updateRequestTPPublisherUserAccessApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The access ID
     * @param string $accessId
     * @return updateRequestTPPublisherUserAccessApi
     */
    public function accessId($accessId){
        $this->request['accessId'] = $accessId;
        return $this;
    }
    /**
     * The new expire date
     * @param string $expireDate
     * @return updateRequestTPPublisherUserAccessApi
     */
    public function expireDate($expireDate){
        $this->request['expireDate'] = $expireDate;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherAccess
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['accessId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'accessId' ) ] = $this->request['accessId'];
        }
        if (isset($this->request['expireDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'expireDate' ) ] = $this->request['expireDate'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/access/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAccess');
    }
}
