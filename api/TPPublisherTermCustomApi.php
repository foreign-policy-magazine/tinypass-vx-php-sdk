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
 * The TPPublisherTermCustomApi class.
 */
class TPPublisherTermCustomApi  extends TPAPIBase {

    /**
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function createCustomTermRequest(){

        return new createCustomTermRequestTPPublisherTermCustomApi($this->apiClient);
    }
    /**
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function updateCustomTermRequest(){

        return new updateCustomTermRequestTPPublisherTermCustomApi($this->apiClient);
    }

}

/**
 * Create custom term
 */
class createCustomTermRequestTPPublisherTermCustomApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The term name
     * @param string $name
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * Whether a valid user is required to complete the term
     * @param bool $customRequireUser
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function customRequireUser($customRequireUser){
        $this->request['customRequireUser'] = $customRequireUser;
        return $this;
    }
    /**
     * The default access period
     * @param int $customDefaultAccessPeriod
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function customDefaultAccessPeriod($customDefaultAccessPeriod){
        $this->request['customDefaultAccessPeriod'] = $customDefaultAccessPeriod;
        return $this;
    }
    /**
     * The description of the term
     * @param string $description
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTerm
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
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['customRequireUser'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'customRequireUser' ) ] = $this->request['customRequireUser'];
        }
        if (isset($this->request['customDefaultAccessPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'customDefaultAccessPeriod' ) ] = $this->request['customDefaultAccessPeriod'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/custom/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
/**
 * Update custom term
 */
class updateCustomTermRequestTPPublisherTermCustomApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The term ID
     * @param string $termId
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The term name
     * @param string $name
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * Whether a valid user is required to complete the term
     * @param bool $customRequireUser
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function customRequireUser($customRequireUser){
        $this->request['customRequireUser'] = $customRequireUser;
        return $this;
    }
    /**
     * The default access period
     * @param int $customDefaultAccessPeriod
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function customDefaultAccessPeriod($customDefaultAccessPeriod){
        $this->request['customDefaultAccessPeriod'] = $customDefaultAccessPeriod;
        return $this;
    }
    /**
     * The description of the term
     * @param string $description
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTerm
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['customRequireUser'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'customRequireUser' ) ] = $this->request['customRequireUser'];
        }
        if (isset($this->request['customDefaultAccessPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'customDefaultAccessPeriod' ) ] = $this->request['customDefaultAccessPeriod'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/custom/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
