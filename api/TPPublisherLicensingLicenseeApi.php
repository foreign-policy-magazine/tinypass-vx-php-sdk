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
 * The TPPublisherLicensingLicenseeApi class.
 */
class TPPublisherLicensingLicenseeApi  extends TPAPIBase {

    /**
     * @return archiveLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function archiveLicenseeRequest(){

        return new archiveLicenseeRequestTPPublisherLicensingLicenseeApi($this->apiClient);
    }
    /**
     * @return createLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function createLicenseeRequest(){

        return new createLicenseeRequestTPPublisherLicensingLicenseeApi($this->apiClient);
    }
    /**
     * @return getLicenseeCountRequestTPPublisherLicensingLicenseeApi
     */
    public function getLicenseeCountRequest(){

        return new getLicenseeCountRequestTPPublisherLicensingLicenseeApi($this->apiClient);
    }
    /**
     * @return getLicenseeListRequestTPPublisherLicensingLicenseeApi
     */
    public function getLicenseeListRequest(){

        return new getLicenseeListRequestTPPublisherLicensingLicenseeApi($this->apiClient);
    }
    /**
     * @return getLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function getLicenseeRequest(){

        return new getLicenseeRequestTPPublisherLicensingLicenseeApi($this->apiClient);
    }
    /**
     * @return updateLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function updateLicenseeRequest(){

        return new updateLicenseeRequestTPPublisherLicensingLicenseeApi($this->apiClient);
    }

}

/**
 * Delete licensee
 */
class archiveLicenseeRequestTPPublisherLicensingLicenseeApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return archiveLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the licensee
     * @param string $licenseeId
     * @return archiveLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
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
        if (isset($this->request['licenseeId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->request['licenseeId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/licensee/archive', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Create licensee
 */
class createLicenseeRequestTPPublisherLicensingLicenseeApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The UIDs of the licensee&#39;s managers
     * @param string[] $managerUids
     * @return createLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function managerUids($managerUids){
        $this->request['managerUids'] = $managerUids;
        return $this;
    }
    /**
     * The name of the licensee
     * @param string $name
     * @return createLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The description of the licensee
     * @param string $description
     * @return createLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * A JSON array with the licensee&#39;s representatives
     * @param string $representatives
     * @return createLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function representatives($representatives){
        $this->request['representatives'] = $representatives;
        return $this;
    }
    /**
     * A relative URL of the licensee&#39;s logo
     * @param string $logoUrl
     * @return createLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function logoUrl($logoUrl){
        $this->request['logoUrl'] = $logoUrl;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherLicensee
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['managerUids'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'managerUids' ) ] = $this->request['managerUids'];
        }
        if (isset($this->request['representatives'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'representatives' ) ] = $this->request['representatives'];
        }
        if (isset($this->request['logoUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'logoUrl' ) ] = $this->request['logoUrl'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/licensee/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherLicensee');
    }
}
/**
 * Count licensees in app
 */
class getLicenseeCountRequestTPPublisherLicensingLicenseeApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getLicenseeCountRequestTPPublisherLicensingLicenseeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
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
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/licensee/count', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'int');
    }
}
/**
 * List licensees
 */
class getLicenseeListRequestTPPublisherLicensingLicenseeApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getLicenseeListRequestTPPublisherLicensingLicenseeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return getLicenseeListRequestTPPublisherLicensingLicenseeApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return getLicenseeListRequestTPPublisherLicensingLicenseeApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return getLicenseeListRequestTPPublisherLicensingLicenseeApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherLicensee[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
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
        $response = $this->apiClient->callAPI('/publisher/licensing/licensee/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherLicensee', 'array');
    }
}
/**
 * Get licensee by ID
 */
class getLicenseeRequestTPPublisherLicensingLicenseeApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the licensee
     * @param string $licenseeId
     * @return getLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherLicensee
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['licenseeId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->request['licenseeId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/licensee/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherLicensee');
    }
}
/**
 * Update licensee
 */
class updateLicenseeRequestTPPublisherLicensingLicenseeApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the licensee
     * @param string $licenseeId
     * @return updateLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    /**
     * manager_uids
     * @param string[] $managerUids
     * @return updateLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function managerUids($managerUids){
        $this->request['managerUids'] = $managerUids;
        return $this;
    }
    /**
     * The name of the licensee
     * @param string $name
     * @return updateLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The description of the licensee
     * @param string $description
     * @return updateLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * A JSON array with the licensee&#39;s representatives
     * @param string $representatives
     * @return updateLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function representatives($representatives){
        $this->request['representatives'] = $representatives;
        return $this;
    }
    /**
     * A relative URL of the licensee&#39;s logo
     * @param string $logoUrl
     * @return updateLicenseeRequestTPPublisherLicensingLicenseeApi
     */
    public function logoUrl($logoUrl){
        $this->request['logoUrl'] = $logoUrl;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherLicensee
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['licenseeId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->request['licenseeId'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['managerUids'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'managerUids' ) ] = $this->request['managerUids'];
        }
        if (isset($this->request['representatives'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'representatives' ) ] = $this->request['representatives'];
        }
        if (isset($this->request['logoUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'logoUrl' ) ] = $this->request['logoUrl'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/licensee/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherLicensee');
    }
}
