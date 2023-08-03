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
 * The TPPublisherTermChangeOptionApi class.
 */
class TPPublisherTermChangeOptionApi  extends TPAPIBase {

    /**
     * @return createRequestTPPublisherTermChangeOptionApi
     */
    public function createRequest(){

        return new createRequestTPPublisherTermChangeOptionApi($this->apiClient);
    }

}

/**
 * Create term change option for term
 */
class createRequestTPPublisherTermChangeOptionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createRequestTPPublisherTermChangeOptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The ID of the \&quot;From\&quot; term
     * @param string $fromTermId
     * @return createRequestTPPublisherTermChangeOptionApi
     */
    public function fromTermId($fromTermId){
        $this->request['fromTermId'] = $fromTermId;
        return $this;
    }
    /**
     * The ID of the \&quot;To\&quot; term
     * @param string $toTermId
     * @return createRequestTPPublisherTermChangeOptionApi
     */
    public function toTermId($toTermId){
        $this->request['toTermId'] = $toTermId;
        return $this;
    }
    /**
     * The billing timing(0: immediate term change;1: term change at the end of the current cycle;2: term change on the next sell date;3: term change at the end of the current period)
     * @param string $billingTiming
     * @return createRequestTPPublisherTermChangeOptionApi
     */
    public function billingTiming($billingTiming){
        $this->request['billingTiming'] = $billingTiming;
        return $this;
    }
    /**
     * Whether the access begins immediately
     * @param bool $immediateAccess
     * @return createRequestTPPublisherTermChangeOptionApi
     */
    public function immediateAccess($immediateAccess){
        $this->request['immediateAccess'] = $immediateAccess;
        return $this;
    }
    /**
     * Whether the &lt;a href&#x3D;\&quot;https://docs.piano.io/upgrades/?paragraphId&#x3D;b27954ef84407e4#prorate-billing-amount\&quot;&gt;Prorate billing amount&lt;/a&gt; function is enabled
     * @param bool $prorateAccess
     * @return createRequestTPPublisherTermChangeOptionApi
     */
    public function prorateAccess($prorateAccess){
        $this->request['prorateAccess'] = $prorateAccess;
        return $this;
    }
    /**
     * A description of the term change option; provided by the client
     * @param string $description
     * @return createRequestTPPublisherTermChangeOptionApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTermChangeOption
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['fromTermId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'fromTermId' ) ] = $this->request['fromTermId'];
        }
        if (isset($this->request['toTermId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'toTermId' ) ] = $this->request['toTermId'];
        }
        if (isset($this->request['billingTiming'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingTiming' ) ] = $this->request['billingTiming'];
        }
        if (isset($this->request['immediateAccess'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'immediateAccess' ) ] = $this->request['immediateAccess'];
        }
        if (isset($this->request['prorateAccess'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'prorateAccess' ) ] = $this->request['prorateAccess'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/change/option/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTermChangeOption');
    }
}
