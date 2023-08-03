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
 * The TPPublisherUserBulkImportApi class.
 */
class TPPublisherUserBulkImportApi  extends TPAPIBase {

    /**
     * @return deleteRequestTPPublisherUserBulkImportApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherUserBulkImportApi($this->apiClient);
    }
    /**
     * @return downloadRequestTPPublisherUserBulkImportApi
     */
    public function downloadRequest(){

        return new downloadRequestTPPublisherUserBulkImportApi($this->apiClient);
    }
    /**
     * @return listCompletedRequestTPPublisherUserBulkImportApi
     */
    public function listCompletedRequest(){

        return new listCompletedRequestTPPublisherUserBulkImportApi($this->apiClient);
    }
    /**
     * @return listProcessingRequestTPPublisherUserBulkImportApi
     */
    public function listProcessingRequest(){

        return new listProcessingRequestTPPublisherUserBulkImportApi($this->apiClient);
    }

}

/**
 * Delete user import
 */
class deleteRequestTPPublisherUserBulkImportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return deleteRequestTPPublisherUserBulkImportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The ID of the bulk user import
     * @param string $bulkUserImportId
     * @return deleteRequestTPPublisherUserBulkImportApi
     */
    public function bulkUserImportId($bulkUserImportId){
        $this->request['bulkUserImportId'] = $bulkUserImportId;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['bulkUserImportId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'bulkUserImportId' ) ] = $this->request['bulkUserImportId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/bulkImport/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Get URL to download user import
 */
class downloadRequestTPPublisherUserBulkImportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return downloadRequestTPPublisherUserBulkImportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The ID of the bulk user import
     * @param string $bulkUserImportId
     * @return downloadRequestTPPublisherUserBulkImportApi
     */
    public function bulkUserImportId($bulkUserImportId){
        $this->request['bulkUserImportId'] = $bulkUserImportId;
        return $this;
    }
    /**
     * Execute request
     * @return string
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['bulkUserImportId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'bulkUserImportId' ) ] = $this->request['bulkUserImportId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/bulkImport/download', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'string');
    }
}
/**
 * List all completed imports
 */
class listCompletedRequestTPPublisherUserBulkImportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listCompletedRequestTPPublisherUserBulkImportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listCompletedRequestTPPublisherUserBulkImportApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listCompletedRequestTPPublisherUserBulkImportApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return listCompletedRequestTPPublisherUserBulkImportApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listCompletedRequestTPPublisherUserBulkImportApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherBulkUserImport[]
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['orderBy'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        if (isset($this->request['offset'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['limit'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/bulkImport/listCompleted', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherBulkUserImport', 'array');
    }
}
/**
 * List all user imports in process
 */
class listProcessingRequestTPPublisherUserBulkImportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listProcessingRequestTPPublisherUserBulkImportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherBulkUserImportProcessingRequestDto[]
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/bulkImport/listProcessing', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherBulkUserImportProcessingRequestDto', 'array');
    }
}
