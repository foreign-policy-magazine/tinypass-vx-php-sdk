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
 * The TPPublisherTermApi class.
 */
class TPPublisherTermApi  extends TPAPIBase {

    /**
     * @return applicableRequestTPPublisherTermApi
     */
    public function applicableRequest(){

        return new applicableRequestTPPublisherTermApi($this->apiClient);
    }
    /**
     * @return countRequestTPPublisherTermApi
     */
    public function countRequest(){

        return new countRequestTPPublisherTermApi($this->apiClient);
    }
    /**
     * @return deleteRequestTPPublisherTermApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherTermApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherTermApi
     */
    public function getRequest(){

        return new getRequestTPPublisherTermApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherTermApi
     */
    public function listRequest(){

        return new listRequestTPPublisherTermApi($this->apiClient);
    }

}

/**
 * List terms applicable to promotion
 */
class applicableRequestTPPublisherTermApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return applicableRequestTPPublisherTermApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The promotion ID
     * @param string $promotionId
     * @return applicableRequestTPPublisherTermApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return applicableRequestTPPublisherTermApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Field to order by: term_name, resource_type, resource_name
     * @param string $orderBy
     * @return applicableRequestTPPublisherTermApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return applicableRequestTPPublisherTermApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTerm[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->request['promotionId'];
        }
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->request['q'];
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
        $response = $this->apiClient->callAPI('/publisher/term/applicable', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm', 'array');
    }
}
/**
 * Count terms in app
 */
class countRequestTPPublisherTermApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return countRequestTPPublisherTermApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Type of terms to include into the list
     * @param string[] $includeType
     * @return countRequestTPPublisherTermApi
     */
    public function includeType($includeType){
        $this->request['includeType'] = $includeType;
        return $this;
    }
    /**
     * Type of terms to exclude from the list
     * @param string[] $excludeType
     * @return countRequestTPPublisherTermApi
     */
    public function excludeType($excludeType){
        $this->request['excludeType'] = $excludeType;
        return $this;
    }
    /**
     * Term id to list
     * @param string $termId
     * @return countRequestTPPublisherTermApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * Type of resource
     * @param string $resourceType
     * @return countRequestTPPublisherTermApi
     */
    public function resourceType($resourceType){
        $this->request['resourceType'] = $resourceType;
        return $this;
    }
    /**
     * Type of external API source
     * @param string[] $source
     * @return countRequestTPPublisherTermApi
     */
    public function source($source){
        $this->request['source'] = $source;
        return $this;
    }
    /**
     * Type of term to list
     * @param string $type
     * @return countRequestTPPublisherTermApi
     */
    public function type($type){
        $this->request['type'] = $type;
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
        if (isset($this->request['includeType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includeType' ) ] = $this->request['includeType'];
        }
        if (isset($this->request['excludeType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'excludeType' ) ] = $this->request['excludeType'];
        }
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['resourceType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resourceType' ) ] = $this->request['resourceType'];
        }
        if (isset($this->request['source'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'source' ) ] = $this->request['source'];
        }
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->request['type'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/count', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'int');
    }
}
/**
 * Delete term
 */
class deleteRequestTPPublisherTermApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The term ID
     * @param string $termId
     * @return deleteRequestTPPublisherTermApi
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
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Get term
 */
class getRequestTPPublisherTermApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The term ID
     * @param string $termId
     * @return getRequestTPPublisherTermApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTerm
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
/**
 * List terms in app
 */
class listRequestTPPublisherTermApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPPublisherTermApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherTermApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherTermApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return listRequestTPPublisherTermApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * Type of terms to include into the list
     * @param string[] $includeType
     * @return listRequestTPPublisherTermApi
     */
    public function includeType($includeType){
        $this->request['includeType'] = $includeType;
        return $this;
    }
    /**
     * Type of terms to exclude from the list
     * @param string[] $excludeType
     * @return listRequestTPPublisherTermApi
     */
    public function excludeType($excludeType){
        $this->request['excludeType'] = $excludeType;
        return $this;
    }
    /**
     * Term id to list
     * @param string $termId
     * @return listRequestTPPublisherTermApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * Type of resource
     * @param string $resourceType
     * @return listRequestTPPublisherTermApi
     */
    public function resourceType($resourceType){
        $this->request['resourceType'] = $resourceType;
        return $this;
    }
    /**
     * Type of external API source
     * @param string[] $source
     * @return listRequestTPPublisherTermApi
     */
    public function source($source){
        $this->request['source'] = $source;
        return $this;
    }
    /**
     * Type of term to list
     * @param string $type
     * @return listRequestTPPublisherTermApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    /**
     * Field to order by: term_name, resource_type, resource_name
     * @param string $orderBy
     * @return listRequestTPPublisherTermApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherTermApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherTermApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTerm[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['includeType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includeType' ) ] = $this->request['includeType'];
        }
        if (isset($this->request['excludeType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'excludeType' ) ] = $this->request['excludeType'];
        }
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['resourceType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resourceType' ) ] = $this->request['resourceType'];
        }
        if (isset($this->request['source'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'source' ) ] = $this->request['source'];
        }
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->request['type'];
        }
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
        }
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->request['q'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm', 'array');
    }
}
