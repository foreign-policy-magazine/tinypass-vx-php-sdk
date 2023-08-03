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
 * The TPPublisherExportApi class.
 */
class TPPublisherExportApi  extends TPAPIBase {

    /**
     * @return deleteRequestTPPublisherExportApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherExportApi($this->apiClient);
    }
    /**
     * @return downloadRequestTPPublisherExportApi
     */
    public function downloadRequest(){

        return new downloadRequestTPPublisherExportApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherExportApi
     */
    public function getRequest(){

        return new getRequestTPPublisherExportApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherExportApi
     */
    public function listRequest(){

        return new listRequestTPPublisherExportApi($this->apiClient);
    }
    /**
     * @return runAgainRequestTPPublisherExportApi
     */
    public function runAgainRequest(){

        return new runAgainRequestTPPublisherExportApi($this->apiClient);
    }

}

/**
 * Delete report or report generation task
 */
class deleteRequestTPPublisherExportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return deleteRequestTPPublisherExportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The ID of the downloadable report (can be retrieved with &lt;a href&#x3D;\&quot;https://docs.piano.io/api?endpoint&#x3D;get~2F~2Fpublisher~2Fexport~2Flist\&quot;&gt;/publisher/export/list&lt;/a&gt;)
     * @param string $exportId
     * @return deleteRequestTPPublisherExportApi
     */
    public function exportId($exportId){
        $this->request['exportId'] = $exportId;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['exportId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'exportId' ) ] = $this->request['exportId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/delete', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Get URL to download report
 */
class downloadRequestTPPublisherExportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return downloadRequestTPPublisherExportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The ID of the downloadable report (can be retrieved with &lt;a href&#x3D;\&quot;https://docs.piano.io/api?endpoint&#x3D;get~2F~2Fpublisher~2Fexport~2Flist\&quot;&gt;/publisher/export/list&lt;/a&gt;)
     * @param string $exportId
     * @return downloadRequestTPPublisherExportApi
     */
    public function exportId($exportId){
        $this->request['exportId'] = $exportId;
        return $this;
    }
    /**
     * Execute request
     * @return string
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['exportId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'exportId' ) ] = $this->request['exportId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/download', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'string');
    }
}
/**
 * Get state of report generation task
 */
class getRequestTPPublisherExportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getRequestTPPublisherExportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The ID of the downloadable report (can be retrieved with &lt;a href&#x3D;\&quot;https://docs.piano.io/api?endpoint&#x3D;get~2F~2Fpublisher~2Fexport~2Flist\&quot;&gt;/publisher/export/list&lt;/a&gt;)
     * @param string $exportId
     * @return getRequestTPPublisherExportApi
     */
    public function exportId($exportId){
        $this->request['exportId'] = $exportId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherExport
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['exportId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'exportId' ) ] = $this->request['exportId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
/**
 * Search report generation tasks by app and name
 */
class listRequestTPPublisherExportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPPublisherExportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherExportApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherExportApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherExportApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherExportApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherExportApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherExport[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
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
        $response = $this->apiClient->callAPI('/publisher/export/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport', 'array');
    }
}
/**
 * Rerun report generation
 */
class runAgainRequestTPPublisherExportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return runAgainRequestTPPublisherExportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The ID of the downloadable report (can be retrieved with &lt;a href&#x3D;\&quot;https://docs.piano.io/api?endpoint&#x3D;get~2F~2Fpublisher~2Fexport~2Flist\&quot;&gt;/publisher/export/list&lt;/a&gt;)
     * @param string $exportId
     * @return runAgainRequestTPPublisherExportApi
     */
    public function exportId($exportId){
        $this->request['exportId'] = $exportId;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['exportId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'exportId' ) ] = $this->request['exportId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/run', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
