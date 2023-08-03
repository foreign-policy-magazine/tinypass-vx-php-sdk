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
 * The TPPublisherWebhookResponseApi class.
 */
class TPPublisherWebhookResponseApi  extends TPAPIBase {

    /**
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function getResponsesRequest(){

        return new getResponsesRequestTPPublisherWebhookResponseApi($this->apiClient);
    }
    /**
     * @return resendRequestTPPublisherWebhookResponseApi
     */
    public function resendRequest(){

        return new resendRequestTPPublisherWebhookResponseApi($this->apiClient);
    }

}

/**
 * List responses for event
 */
class getResponsesRequestTPPublisherWebhookResponseApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The webhook ID
     * @param string $webhookId
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function webhookId($webhookId){
        $this->request['webhookId'] = $webhookId;
        return $this;
    }
    /**
     * The maximum number of objects to return
     * @param int $limit
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * The offset of the first item in the response. Default: 0.
     * @param int $offset
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * The field to order by
     * @param string $orderBy
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * The order direction (\&quot;asc\&quot; or \&quot;desc\&quot;)
     * @param string $orderDirection
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherWebhookResponse[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['webhookId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'webhookId' ) ] = $this->request['webhookId'];
        }
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
        }
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/webhook/response/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherWebhookResponse', 'array');
    }
}
/**
 * Resend webhook
 */
class resendRequestTPPublisherWebhookResponseApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The webhook ID
     * @param string $webhookId
     * @return resendRequestTPPublisherWebhookResponseApi
     */
    public function webhookId($webhookId){
        $this->request['webhookId'] = $webhookId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherWebhookResponse
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['webhookId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'webhookId' ) ] = $this->request['webhookId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/webhook/response/resend', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherWebhookResponse');
    }
}
