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
 * The TPPublisherImportCustomFieldsApi class.
 */
class TPPublisherImportCustomFieldsApi  extends TPAPIBase {

    /**
     * @return importCFRequestTPPublisherImportCustomFieldsApi
     */
    public function importCFRequest(){

        return new importCFRequestTPPublisherImportCustomFieldsApi($this->apiClient);
    }

}

/**
 * Import custom field values with date.
 */
class importCFRequestTPPublisherImportCustomFieldsApi  extends TPAPIBase {
    protected $request = array();
    /**
     * 
     * @param string $authorization
     * @return importCFRequestTPPublisherImportCustomFieldsApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * 
     * @param string $aid
     * @return importCFRequestTPPublisherImportCustomFieldsApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * 
     * @param int $headerSize
     * @return importCFRequestTPPublisherImportCustomFieldsApi
     */
    public function headerSize($headerSize){
        $this->request['headerSize'] = $headerSize;
        return $this;
    }
    /**
     * 
     * @param \SplFileObject $body
     * @return importCFRequestTPPublisherImportCustomFieldsApi
     */
    public function body($body){
        $this->request['body'] = $body;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdImportCFResult
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['headerSize'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'headerSize' ) ] = $this->request['headerSize'];
        }
        $formParams = array();
        if (isset($this->request['body'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'body' ) ] = json_encode($this->request['body']);
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/import/customFields/history', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdImportCFResult');
    }
}
