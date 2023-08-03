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
 * The TPPublisherLicensingContractUserApi class.
 */
class TPPublisherLicensingContractUserApi  extends TPAPIBase {

    /**
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function createContractUserRequest(){

        return new createContractUserRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function getContractUserListRequest(){

        return new getContractUserListRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return inviteContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function inviteContractUsersRequest(){

        return new inviteContractUsersRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return removeAndRevokeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function removeAndRevokeContractUserRequest(){

        return new removeAndRevokeContractUserRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return removeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function removeContractUserRequest(){

        return new removeContractUserRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return restoreContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function restoreContractUserRequest(){

        return new restoreContractUserRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return revokeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function revokeContractUserRequest(){

        return new revokeContractUserRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function updateContractUserRequest(){

        return new updateContractUserRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }

}

/**
 * Create contract user
 */
class createContractUserRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The user&#39;s email address (single)
     * @param string $email
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * The user&#39;s first name
     * @param string $firstName
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    /**
     * The user&#39;s last name
     * @param string $lastName
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    /**
     * The ID of the session where contract users are being changed; determined by the client
     * @param string $contractUserSessionId
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserSessionId($contractUserSessionId){
        $this->request['contractUserSessionId'] = $contractUserSessionId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherContractUser
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->request['contractId'];
        }
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['firstName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->request['firstName'];
        }
        if (isset($this->request['lastName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->request['lastName'];
        }
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->request['contractUserSessionId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherContractUser');
    }
}
/**
 * List contract user for contract
 */
class getContractUserListRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * A list of the contract user statuses (\&quot;INVALID\&quot;, \&quot;PENDING\&quot;, \&quot;ACTIVE\&quot;, \&quot;REVOKE\&quot;)
     * @param string[] $statusList
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function statusList($statusList){
        $this->request['statusList'] = $statusList;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherContractUser[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['contractId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->request['contractId'];
        }
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        if (isset($this->request['statusList'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'statusList' ) ] = $this->request['statusList'];
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
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherContractUser', 'array');
    }
}
/**
 * Invite all contract users in PENDING status
 */
class inviteContractUsersRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return inviteContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return inviteContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The ID of the session where contract users are being changed; determined by the client
     * @param string $contractUserSessionId
     * @return inviteContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserSessionId($contractUserSessionId){
        $this->request['contractUserSessionId'] = $contractUserSessionId;
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
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->request['contractId'];
        }
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->request['contractUserSessionId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/invite', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Revoke and delete contract user
 */
class removeAndRevokeContractUserRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return removeAndRevokeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return removeAndRevokeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The contract user&#39;s public ID
     * @param string $contractUserId
     * @return removeAndRevokeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserId($contractUserId){
        $this->request['contractUserId'] = $contractUserId;
        return $this;
    }
    /**
     * The ID of the session where contract users are being changed; determined by the client
     * @param string $contractUserSessionId
     * @return removeAndRevokeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserSessionId($contractUserSessionId){
        $this->request['contractUserSessionId'] = $contractUserSessionId;
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
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->request['contractId'];
        }
        if (isset($this->request['contractUserId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserId' ) ] = $this->request['contractUserId'];
        }
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->request['contractUserSessionId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/removeAndRevoke', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Remove contract user
 */
class removeContractUserRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return removeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return removeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The contract user&#39;s public ID
     * @param string $contractUserId
     * @return removeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserId($contractUserId){
        $this->request['contractUserId'] = $contractUserId;
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
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->request['contractId'];
        }
        if (isset($this->request['contractUserId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserId' ) ] = $this->request['contractUserId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/remove', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Restore contract user
 */
class restoreContractUserRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return restoreContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return restoreContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The contract user&#39;s public ID
     * @param string $contractUserId
     * @return restoreContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserId($contractUserId){
        $this->request['contractUserId'] = $contractUserId;
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
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->request['contractId'];
        }
        if (isset($this->request['contractUserId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserId' ) ] = $this->request['contractUserId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/restore', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Revoke contract user
 */
class revokeContractUserRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return revokeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return revokeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The contract user&#39;s public ID
     * @param string $contractUserId
     * @return revokeContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserId($contractUserId){
        $this->request['contractUserId'] = $contractUserId;
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
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->request['contractId'];
        }
        if (isset($this->request['contractUserId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserId' ) ] = $this->request['contractUserId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/revoke', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Update contract user
 */
class updateContractUserRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The contract user&#39;s public ID
     * @param string $contractUserId
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserId($contractUserId){
        $this->request['contractUserId'] = $contractUserId;
        return $this;
    }
    /**
     * The user&#39;s email address (single)
     * @param string $email
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * The user&#39;s first name
     * @param string $firstName
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    /**
     * The user&#39;s last name
     * @param string $lastName
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    /**
     * The ID of the session where contract users are being changed; determined by the client
     * @param string $contractUserSessionId
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserSessionId($contractUserSessionId){
        $this->request['contractUserSessionId'] = $contractUserSessionId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherContractUser
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->request['contractId'];
        }
        if (isset($this->request['contractUserId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserId' ) ] = $this->request['contractUserId'];
        }
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['firstName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->request['firstName'];
        }
        if (isset($this->request['lastName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->request['lastName'];
        }
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->request['contractUserSessionId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherContractUser');
    }
}
