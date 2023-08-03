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
 * The TPPublisherLicensingContractDomainApi class.
 */
class TPPublisherLicensingContractDomainApi  extends TPAPIBase {

    /**
     * @return createContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function createContractDomainRequest(){

        return new createContractDomainRequestTPPublisherLicensingContractDomainApi($this->apiClient);
    }
    /**
     * @return getContractDomainListRequestTPPublisherLicensingContractDomainApi
     */
    public function getContractDomainListRequest(){

        return new getContractDomainListRequestTPPublisherLicensingContractDomainApi($this->apiClient);
    }
    /**
     * @return removeAndRevokeContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function removeAndRevokeContractDomainRequest(){

        return new removeAndRevokeContractDomainRequestTPPublisherLicensingContractDomainApi($this->apiClient);
    }
    /**
     * @return removeContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function removeContractDomainRequest(){

        return new removeContractDomainRequestTPPublisherLicensingContractDomainApi($this->apiClient);
    }
    /**
     * @return updateContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function updateContractDomainRequest(){

        return new updateContractDomainRequestTPPublisherLicensingContractDomainApi($this->apiClient);
    }

}

/**
 * Create contract domain for contract
 */
class createContractDomainRequestTPPublisherLicensingContractDomainApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return createContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The domain value for the contract domain
     * @param string $contractDomainValue
     * @return createContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function contractDomainValue($contractDomainValue){
        $this->request['contractDomainValue'] = $contractDomainValue;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherContractDomain
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
        if (isset($this->request['contractDomainValue'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractDomainValue' ) ] = $this->request['contractDomainValue'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractDomain/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherContractDomain');
    }
}
/**
 * List contract domains for contract
 */
class getContractDomainListRequestTPPublisherLicensingContractDomainApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getContractDomainListRequestTPPublisherLicensingContractDomainApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return getContractDomainListRequestTPPublisherLicensingContractDomainApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return getContractDomainListRequestTPPublisherLicensingContractDomainApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return getContractDomainListRequestTPPublisherLicensingContractDomainApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return getContractDomainListRequestTPPublisherLicensingContractDomainApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return getContractDomainListRequestTPPublisherLicensingContractDomainApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return getContractDomainListRequestTPPublisherLicensingContractDomainApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherContractDomain[]
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
        $response = $this->apiClient->callAPI('/publisher/licensing/contractDomain/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherContractDomain', 'array');
    }
}
/**
 * Remove and revoke email domain from contract
 */
class removeAndRevokeContractDomainRequestTPPublisherLicensingContractDomainApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return removeAndRevokeContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return removeAndRevokeContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The public ID of the contract domain
     * @param string $contractDomainId
     * @return removeAndRevokeContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function contractDomainId($contractDomainId){
        $this->request['contractDomainId'] = $contractDomainId;
        return $this;
    }
    /**
     * The ID of the session where contract users are being changed; determined by the client
     * @param string $contractUserSessionId
     * @return removeAndRevokeContractDomainRequestTPPublisherLicensingContractDomainApi
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
        if (isset($this->request['contractDomainId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractDomainId' ) ] = $this->request['contractDomainId'];
        }
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->request['contractUserSessionId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractDomain/removeAndRevoke', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Remove email domain from contract
 */
class removeContractDomainRequestTPPublisherLicensingContractDomainApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return removeContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return removeContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The public ID of the contract domain
     * @param string $contractDomainId
     * @return removeContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function contractDomainId($contractDomainId){
        $this->request['contractDomainId'] = $contractDomainId;
        return $this;
    }
    /**
     * The ID of the session where contract users are being changed; determined by the client
     * @param string $contractUserSessionId
     * @return removeContractDomainRequestTPPublisherLicensingContractDomainApi
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
        if (isset($this->request['contractDomainId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractDomainId' ) ] = $this->request['contractDomainId'];
        }
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->request['contractUserSessionId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractDomain/remove', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Update contract domain for contract
 */
class updateContractDomainRequestTPPublisherLicensingContractDomainApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return updateContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The public ID of the contract domain
     * @param string $contractDomainId
     * @return updateContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function contractDomainId($contractDomainId){
        $this->request['contractDomainId'] = $contractDomainId;
        return $this;
    }
    /**
     * The domain value for the contract domain
     * @param string $contractDomainValue
     * @return updateContractDomainRequestTPPublisherLicensingContractDomainApi
     */
    public function contractDomainValue($contractDomainValue){
        $this->request['contractDomainValue'] = $contractDomainValue;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherContractDomain
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
        if (isset($this->request['contractDomainId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractDomainId' ) ] = $this->request['contractDomainId'];
        }
        if (isset($this->request['contractDomainValue'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractDomainValue' ) ] = $this->request['contractDomainValue'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractDomain/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherContractDomain');
    }
}
