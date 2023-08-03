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
 * The TPPublisherVoucherApi class.
 */
class TPPublisherVoucherApi  extends TPAPIBase {

    /**
     * @return getRequestTPPublisherVoucherApi
     */
    public function getRequest(){

        return new getRequestTPPublisherVoucherApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherVoucherApi
     */
    public function listRequest(){

        return new listRequestTPPublisherVoucherApi($this->apiClient);
    }
    /**
     * @return resendRequestTPPublisherVoucherApi
     */
    public function resendRequest(){

        return new resendRequestTPPublisherVoucherApi($this->apiClient);
    }

}

/**
 * Get voucher
 */
class getRequestTPPublisherVoucherApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getRequestTPPublisherVoucherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the voucher
     * @param string $pubId
     * @return getRequestTPPublisherVoucherApi
     */
    public function pubId($pubId){
        $this->request['pubId'] = $pubId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherVoucher
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['pubId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'pubId' ) ] = $this->request['pubId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/voucher/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherVoucher');
    }
}
/**
 * List vouchers of gifter
 */
class listRequestTPPublisherVoucherApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPPublisherVoucherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return listRequestTPPublisherVoucherApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherVoucherApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherVoucherApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherVoucher[]
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
        $response = $this->apiClient->callAPI('/publisher/voucher/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherVoucher', 'array');
    }
}
/**
 * Resend voucher with new redemption code
 */
class resendRequestTPPublisherVoucherApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return resendRequestTPPublisherVoucherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the voucher
     * @param string $pubId
     * @return resendRequestTPPublisherVoucherApi
     */
    public function pubId($pubId){
        $this->request['pubId'] = $pubId;
        return $this;
    }
    /**
     * 
     * @param string $sendDate
     * @return resendRequestTPPublisherVoucherApi
     */
    public function sendDate($sendDate){
        $this->request['sendDate'] = $sendDate;
        return $this;
    }
    /**
     * 
     * @param string $recipientMail
     * @return resendRequestTPPublisherVoucherApi
     */
    public function recipientMail($recipientMail){
        $this->request['recipientMail'] = $recipientMail;
        return $this;
    }
    /**
     * 
     * @param string $recipientName
     * @return resendRequestTPPublisherVoucherApi
     */
    public function recipientName($recipientName){
        $this->request['recipientName'] = $recipientName;
        return $this;
    }
    /**
     * 
     * @param string $message
     * @return resendRequestTPPublisherVoucherApi
     */
    public function message($message){
        $this->request['message'] = $message;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherVoucher
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['pubId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'pubId' ) ] = $this->request['pubId'];
        }
        if (isset($this->request['sendDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sendDate' ) ] = $this->request['sendDate'];
        }
        if (isset($this->request['recipientName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'recipientName' ) ] = $this->request['recipientName'];
        }
        if (isset($this->request['recipientMail'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'recipientMail' ) ] = $this->request['recipientMail'];
        }
        if (isset($this->request['message'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'message' ) ] = $this->request['message'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/voucher/resend', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherVoucher');
    }
}
