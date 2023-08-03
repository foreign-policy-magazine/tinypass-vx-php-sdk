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
 * The TPPublisherLicensingContractDomainContractUserApi class.
 */
class TPPublisherLicensingContractDomainContractUserApi  extends TPAPIBase {

    /**
     * @return getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi
     */
    public function getContractUserListRequest(){

        return new getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi($this->apiClient);
    }

}

/**
 * List contract domain users
 */
class getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the contract
     * @param string $contractId
     * @return getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    /**
     * The public ID of the contract domain
     * @param string $contractDomainId
     * @return getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi
     */
    public function contractDomainId($contractDomainId){
        $this->request['contractDomainId'] = $contractDomainId;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * A list of the contract user statuses (\&quot;INVALID\&quot;, \&quot;PENDING\&quot;, \&quot;ACTIVE\&quot;, \&quot;REVOKE\&quot;)
     * @param string[] $statusList
     * @return getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi
     */
    public function statusList($statusList){
        $this->request['statusList'] = $statusList;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return getContractUserListRequestTPPublisherLicensingContractDomainContractUserApi
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
        if (isset($this->request['contractDomainId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'contractDomainId' ) ] = $this->request['contractDomainId'];
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
        $response = $this->apiClient->callAPI('/publisher/licensing/contractDomain/contractUser/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherContractUser', 'array');
    }
}
