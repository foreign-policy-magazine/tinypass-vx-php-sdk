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
 * The TPPublisherOfferTermApi class.
 */
class TPPublisherOfferTermApi  extends TPAPIBase {

    /**
     * @return addTermsRequestTPPublisherOfferTermApi
     */
    public function addTermsRequest(){

        return new addTermsRequestTPPublisherOfferTermApi($this->apiClient);
    }
    /**
     * @return listTermsRequestTPPublisherOfferTermApi
     */
    public function listTermsRequest(){

        return new listTermsRequestTPPublisherOfferTermApi($this->apiClient);
    }
    /**
     * @return reorderTermsRequestTPPublisherOfferTermApi
     */
    public function reorderTermsRequest(){

        return new reorderTermsRequestTPPublisherOfferTermApi($this->apiClient);
    }
    /**
     * @return unlinkTermsRequestTPPublisherOfferTermApi
     */
    public function unlinkTermsRequest(){

        return new unlinkTermsRequestTPPublisherOfferTermApi($this->apiClient);
    }

}

/**
 * Add term to offer
 */
class addTermsRequestTPPublisherOfferTermApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The offer ID
     * @param string $offerId
     * @return addTermsRequestTPPublisherOfferTermApi
     */
    public function offerId($offerId){
        $this->request['offerId'] = $offerId;
        return $this;
    }
    /**
     * The term ID
     * @param string[] $termId
     * @return addTermsRequestTPPublisherOfferTermApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['offerId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offerId' ) ] = $this->request['offerId'];
        }
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/term/add', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * List terms in offer
 */
class listTermsRequestTPPublisherOfferTermApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The offer ID
     * @param string $offerId
     * @return listTermsRequestTPPublisherOfferTermApi
     */
    public function offerId($offerId){
        $this->request['offerId'] = $offerId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTerm[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['offerId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerId' ) ] = $this->request['offerId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/term/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm', 'array');
    }
}
/**
 * Reorder terms in offer
 */
class reorderTermsRequestTPPublisherOfferTermApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The offer ID
     * @param string $offerId
     * @return reorderTermsRequestTPPublisherOfferTermApi
     */
    public function offerId($offerId){
        $this->request['offerId'] = $offerId;
        return $this;
    }
    /**
     * The term ID
     * @param string[] $termId
     * @return reorderTermsRequestTPPublisherOfferTermApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['offerId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offerId' ) ] = $this->request['offerId'];
        }
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/term/reorder', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Remove term from offer
 */
class unlinkTermsRequestTPPublisherOfferTermApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The offer ID
     * @param string $offerId
     * @return unlinkTermsRequestTPPublisherOfferTermApi
     */
    public function offerId($offerId){
        $this->request['offerId'] = $offerId;
        return $this;
    }
    /**
     * The term ID
     * @param string[] $termId
     * @return unlinkTermsRequestTPPublisherOfferTermApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['offerId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offerId' ) ] = $this->request['offerId'];
        }
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/term/remove', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
