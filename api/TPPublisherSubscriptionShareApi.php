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
 * The TPPublisherSubscriptionShareApi class.
 */
class TPPublisherSubscriptionShareApi  extends TPAPIBase {

    /**
     * @return inviteRequestTPPublisherSubscriptionShareApi
     */
    public function inviteRequest(){

        return new inviteRequestTPPublisherSubscriptionShareApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherSubscriptionShareApi
     */
    public function listRequest(){

        return new listRequestTPPublisherSubscriptionShareApi($this->apiClient);
    }
    /**
     * @return resendRequestTPPublisherSubscriptionShareApi
     */
    public function resendRequest(){

        return new resendRequestTPPublisherSubscriptionShareApi($this->apiClient);
    }
    /**
     * @return revokeRequestTPPublisherSubscriptionShareApi
     */
    public function revokeRequest(){

        return new revokeRequestTPPublisherSubscriptionShareApi($this->apiClient);
    }
    /**
     * @return startRequestTPPublisherSubscriptionShareApi
     */
    public function startRequest(){

        return new startRequestTPPublisherSubscriptionShareApi($this->apiClient);
    }
    /**
     * @return stopRequestTPPublisherSubscriptionShareApi
     */
    public function stopRequest(){

        return new stopRequestTPPublisherSubscriptionShareApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherSubscriptionShareApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherSubscriptionShareApi($this->apiClient);
    }
    /**
     * @return validateRequestTPPublisherSubscriptionShareApi
     */
    public function validateRequest(){

        return new validateRequestTPPublisherSubscriptionShareApi($this->apiClient);
    }

}

/**
 * Invite new accounts to shared subscription
 */
class inviteRequestTPPublisherSubscriptionShareApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return inviteRequestTPPublisherSubscriptionShareApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user subscription ID
     * @param string $subscriptionId
     * @return inviteRequestTPPublisherSubscriptionShareApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    /**
     * A JSON value representing the shared account
     * @param string $sharedAccount
     * @return inviteRequestTPPublisherSubscriptionShareApi
     */
    public function sharedAccount($sharedAccount){
        $this->request['sharedAccount'] = $sharedAccount;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->request['subscriptionId'];
        }
        if (isset($this->request['sharedAccount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccount' ) ] = $this->request['sharedAccount'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/share/invite', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * List app&#39;s shared subscriptions and their children accounts
 */
class listRequestTPPublisherSubscriptionShareApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPPublisherSubscriptionShareApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The offset of the first item in the response. Default: 0.
     * @param int $offset
     * @return listRequestTPPublisherSubscriptionShareApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * The maximum number of objects to return
     * @param int $limit
     * @return listRequestTPPublisherSubscriptionShareApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * The term ID
     * @param string $termId
     * @return listRequestTPPublisherSubscriptionShareApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * Get subscriptions with unused accesses only
     * @param bool $unusedAccessesOnly
     * @return listRequestTPPublisherSubscriptionShareApi
     */
    public function unusedAccessesOnly($unusedAccessesOnly){
        $this->request['unusedAccessesOnly'] = $unusedAccessesOnly;
        return $this;
    }
    /**
     * Subscription status
     * @param string $status
     * @return listRequestTPPublisherSubscriptionShareApi
     */
    public function status($status){
        $this->request['status'] = $status;
        return $this;
    }
    /**
     * The start date. If you use a date-range filter without the \&quot;select_by\&quot; parameter, the method will return a result filtered by \&quot;update date\&quot;.To specify the filter field, use \&quot;select_by\&quot;.
     * @param string $startDate
     * @return listRequestTPPublisherSubscriptionShareApi
     */
    public function startDate($startDate){
        $this->request['startDate'] = $startDate;
        return $this;
    }
    /**
     * The end date. If you use a date-range filter without \&quot;select_by\&quot; parameter, the method will return a result filtered by \&quot;update date\&quot;.To specify the filter field, use \&quot;select_by\&quot;.
     * @param string $endDate
     * @return listRequestTPPublisherSubscriptionShareApi
     */
    public function endDate($endDate){
        $this->request['endDate'] = $endDate;
        return $this;
    }
    /**
     * Filter subscription date field
     * @param string $selectBy
     * @return listRequestTPPublisherSubscriptionShareApi
     */
    public function selectBy($selectBy){
        $this->request['selectBy'] = $selectBy;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherSharedSubscription[]
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['offset'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['limit'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
        }
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['unusedAccessesOnly'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'unusedAccessesOnly' ) ] = $this->request['unusedAccessesOnly'];
        }
        if (isset($this->request['status'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'status' ) ] = $this->request['status'];
        }
        if (isset($this->request['startDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'startDate' ) ] = $this->request['startDate'];
        }
        if (isset($this->request['endDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'endDate' ) ] = $this->request['endDate'];
        }
        if (isset($this->request['selectBy'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'selectBy' ) ] = $this->request['selectBy'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/share/list', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherSharedSubscription', 'array');
    }
}
/**
 * Resend email to unredeemed shared account
 */
class resendRequestTPPublisherSubscriptionShareApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return resendRequestTPPublisherSubscriptionShareApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user subscription ID
     * @param string $subscriptionId
     * @return resendRequestTPPublisherSubscriptionShareApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    /**
     * The ID of the shared subscription account
     * @param string $accountId
     * @return resendRequestTPPublisherSubscriptionShareApi
     */
    public function accountId($accountId){
        $this->request['accountId'] = $accountId;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->request['subscriptionId'];
        }
        if (isset($this->request['accountId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'accountId' ) ] = $this->request['accountId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/share/resend', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Remove account from shared subscription (basing on shared account ID)
 */
class revokeRequestTPPublisherSubscriptionShareApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return revokeRequestTPPublisherSubscriptionShareApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user subscription ID
     * @param string $subscriptionId
     * @return revokeRequestTPPublisherSubscriptionShareApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    /**
     * The ID of the shared subscription account
     * @param string $accountId
     * @return revokeRequestTPPublisherSubscriptionShareApi
     */
    public function accountId($accountId){
        $this->request['accountId'] = $accountId;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->request['subscriptionId'];
        }
        if (isset($this->request['accountId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'accountId' ) ] = $this->request['accountId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/share/revoke', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Start sharing subscription
 */
class startRequestTPPublisherSubscriptionShareApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return startRequestTPPublisherSubscriptionShareApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user subscription ID
     * @param string $subscriptionId
     * @return startRequestTPPublisherSubscriptionShareApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    /**
     * A JSON value representing a list of the shared accounts
     * @param string $sharedAccounts
     * @return startRequestTPPublisherSubscriptionShareApi
     */
    public function sharedAccounts($sharedAccounts){
        $this->request['sharedAccounts'] = $sharedAccounts;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->request['subscriptionId'];
        }
        if (isset($this->request['sharedAccounts'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccounts' ) ] = $this->request['sharedAccounts'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/share/start', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Stop sharing subscription
 */
class stopRequestTPPublisherSubscriptionShareApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return stopRequestTPPublisherSubscriptionShareApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user subscription ID
     * @param string $subscriptionId
     * @return stopRequestTPPublisherSubscriptionShareApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->request['subscriptionId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/share/stop', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Update list of shared accounts
 */
class updateRequestTPPublisherSubscriptionShareApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateRequestTPPublisherSubscriptionShareApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user subscription ID
     * @param string $subscriptionId
     * @return updateRequestTPPublisherSubscriptionShareApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    /**
     * A JSON value representing a list of the shared accounts
     * @param string $sharedAccounts
     * @return updateRequestTPPublisherSubscriptionShareApi
     */
    public function sharedAccounts($sharedAccounts){
        $this->request['sharedAccounts'] = $sharedAccounts;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->request['subscriptionId'];
        }
        if (isset($this->request['sharedAccounts'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccounts' ) ] = $this->request['sharedAccounts'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/share/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Check existing user
 */
class validateRequestTPPublisherSubscriptionShareApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return validateRequestTPPublisherSubscriptionShareApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return validateRequestTPPublisherSubscriptionShareApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The shared subscription user&#39;s email
     * @param string $email
     * @return validateRequestTPPublisherSubscriptionShareApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * Execute request
     * @return string
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/share/validate', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'string');
    }
}
