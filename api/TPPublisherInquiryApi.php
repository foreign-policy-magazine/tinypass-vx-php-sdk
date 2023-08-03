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
 * The TPPublisherInquiryApi class.
 */
class TPPublisherInquiryApi  extends TPAPIBase {

    /**
     * @return addCommentRequestTPPublisherInquiryApi
     */
    public function addCommentRequest(){

        return new addCommentRequestTPPublisherInquiryApi($this->apiClient);
    }
    /**
     * @return commentsRequestTPPublisherInquiryApi
     */
    public function commentsRequest(){

        return new commentsRequestTPPublisherInquiryApi($this->apiClient);
    }
    /**
     * @return detailsRequestTPPublisherInquiryApi
     */
    public function detailsRequest(){

        return new detailsRequestTPPublisherInquiryApi($this->apiClient);
    }
    /**
     * @return getInquiryActionsRequestTPPublisherInquiryApi
     */
    public function getInquiryActionsRequest(){

        return new getInquiryActionsRequestTPPublisherInquiryApi($this->apiClient);
    }
    /**
     * @return lastCommentRequestTPPublisherInquiryApi
     */
    public function lastCommentRequest(){

        return new lastCommentRequestTPPublisherInquiryApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherInquiryApi
     */
    public function listRequest(){

        return new listRequestTPPublisherInquiryApi($this->apiClient);
    }
    /**
     * @return unresolvedCountRequestTPPublisherInquiryApi
     */
    public function unresolvedCountRequest(){

        return new unresolvedCountRequestTPPublisherInquiryApi($this->apiClient);
    }

}

/**
 * Perform action with inquiry
 */
class addCommentRequestTPPublisherInquiryApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return addCommentRequestTPPublisherInquiryApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the inquiry (not only about payments)
     * @param string $paymentInquiryId
     * @return addCommentRequestTPPublisherInquiryApi
     */
    public function paymentInquiryId($paymentInquiryId){
        $this->request['paymentInquiryId'] = $paymentInquiryId;
        return $this;
    }
    /**
     * &lt;a href&#x3D;\&quot;https://docs.piano.io/customer-service/#customerservicetasks\&quot;&gt;The action&lt;/a&gt;
     * @param string[] $action
     * @return addCommentRequestTPPublisherInquiryApi
     */
    public function action($action){
        $this->request['action'] = $action;
        return $this;
    }
    /**
     * The inquiry comment
     * @param string $comment
     * @return addCommentRequestTPPublisherInquiryApi
     */
    public function comment($comment){
        $this->request['comment'] = $comment;
        return $this;
    }
    /**
     * The internal comment
     * @param bool $internal
     * @return addCommentRequestTPPublisherInquiryApi
     */
    public function internal($internal){
        $this->request['internal'] = $internal;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPaymentInquiry
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['paymentInquiryId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'paymentInquiryId' ) ] = $this->request['paymentInquiryId'];
        }
        if (isset($this->request['action'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'action' ) ] = $this->request['action'];
        }
        if (isset($this->request['comment'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'comment' ) ] = $this->request['comment'];
        }
        if (isset($this->request['internal'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'internal' ) ] = $this->request['internal'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/inquiry/add', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPaymentInquiry');
    }
}
/**
 * List inquiry comments
 */
class commentsRequestTPPublisherInquiryApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return commentsRequestTPPublisherInquiryApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the inquiry (not only about payments)
     * @param string $paymentInquiryId
     * @return commentsRequestTPPublisherInquiryApi
     */
    public function paymentInquiryId($paymentInquiryId){
        $this->request['paymentInquiryId'] = $paymentInquiryId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherInquiryComment[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['paymentInquiryId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'paymentInquiryId' ) ] = $this->request['paymentInquiryId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/inquiry/comments', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherInquiryComment', 'array');
    }
}
/**
 * Get inqiury
 */
class detailsRequestTPPublisherInquiryApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return detailsRequestTPPublisherInquiryApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the inquiry (not only about payments)
     * @param string $paymentInquiryId
     * @return detailsRequestTPPublisherInquiryApi
     */
    public function paymentInquiryId($paymentInquiryId){
        $this->request['paymentInquiryId'] = $paymentInquiryId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPaymentInquiry
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['paymentInquiryId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'paymentInquiryId' ) ] = $this->request['paymentInquiryId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/inquiry/details', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPaymentInquiry');
    }
}
/**
 * List possible actions for inquiry
 */
class getInquiryActionsRequestTPPublisherInquiryApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getInquiryActionsRequestTPPublisherInquiryApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the inquiry (not only about payments)
     * @param string $paymentInquiryId
     * @return getInquiryActionsRequestTPPublisherInquiryApi
     */
    public function paymentInquiryId($paymentInquiryId){
        $this->request['paymentInquiryId'] = $paymentInquiryId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherCommentAction[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['paymentInquiryId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'paymentInquiryId' ) ] = $this->request['paymentInquiryId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/inquiry/inquiryActions', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherCommentAction', 'array');
    }
}
/**
 * Get last inquiry comment for user
 */
class lastCommentRequestTPPublisherInquiryApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return lastCommentRequestTPPublisherInquiryApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return lastCommentRequestTPPublisherInquiryApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPaymentInquiry
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/inquiry/lastComment', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPaymentInquiry');
    }
}
/**
 * List inquiries
 */
class listRequestTPPublisherInquiryApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPPublisherInquiryApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return listRequestTPPublisherInquiryApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherInquiryApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherInquiryApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPaymentInquiry[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
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
        $response = $this->apiClient->callAPI('/publisher/inquiry/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPaymentInquiry', 'array');
    }
}
/**
 * Count unresolved inquiries
 */
class unresolvedCountRequestTPPublisherInquiryApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return unresolvedCountRequestTPPublisherInquiryApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return unresolvedCountRequestTPPublisherInquiryApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
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
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/inquiry/unresolvedCount', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'int');
    }
}
