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
 * The TPPublisherOfferTemplateVariantApi class.
 */
class TPPublisherOfferTemplateVariantApi  extends TPAPIBase {

    /**
     * @return archiveRequestTPPublisherOfferTemplateVariantApi
     */
    public function archiveRequest(){

        return new archiveRequestTPPublisherOfferTemplateVariantApi($this->apiClient);
    }
    /**
     * @return createRequestTPPublisherOfferTemplateVariantApi
     */
    public function createRequest(){

        return new createRequestTPPublisherOfferTemplateVariantApi($this->apiClient);
    }
    /**
     * @return deleteRequestTPPublisherOfferTemplateVariantApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherOfferTemplateVariantApi($this->apiClient);
    }
    /**
     * @return getDuplicateRequestTPPublisherOfferTemplateVariantApi
     */
    public function getDuplicateRequest(){

        return new getDuplicateRequestTPPublisherOfferTemplateVariantApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherOfferTemplateVariantApi
     */
    public function getRequest(){

        return new getRequestTPPublisherOfferTemplateVariantApi($this->apiClient);
    }
    /**
     * @return restoreRequestTPPublisherOfferTemplateVariantApi
     */
    public function restoreRequest(){

        return new restoreRequestTPPublisherOfferTemplateVariantApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherOfferTemplateVariantApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherOfferTemplateVariantApi($this->apiClient);
    }

}

/**
 * Archive template variant
 */
class archiveRequestTPPublisherOfferTemplateVariantApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return archiveRequestTPPublisherOfferTemplateVariantApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The template variant ID
     * @param string $offerTemplateVariantId
     * @return archiveRequestTPPublisherOfferTemplateVariantApi
     */
    public function offerTemplateVariantId($offerTemplateVariantId){
        $this->request['offerTemplateVariantId'] = $offerTemplateVariantId;
        return $this;
    }
    /**
     * The template history comment
     * @param string $historyComment
     * @return archiveRequestTPPublisherOfferTemplateVariantApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['offerTemplateVariantId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateVariantId' ) ] = $this->request['offerTemplateVariantId'];
        }
        if (isset($this->request['historyComment'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->request['historyComment'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/variant/archive', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Create template variant
 */
class createRequestTPPublisherOfferTemplateVariantApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createRequestTPPublisherOfferTemplateVariantApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The template ID
     * @param string $offerTemplateId
     * @return createRequestTPPublisherOfferTemplateVariantApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    /**
     * The name
     * @param string $name
     * @return createRequestTPPublisherOfferTemplateVariantApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The description
     * @param string $description
     * @return createRequestTPPublisherOfferTemplateVariantApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * The template history comment
     * @param string $historyComment
     * @return createRequestTPPublisherOfferTemplateVariantApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVariant
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['offerTemplateId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->request['offerTemplateId'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['historyComment'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->request['historyComment'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/variant/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVariant');
    }
}
/**
 * Delete template variant
 */
class deleteRequestTPPublisherOfferTemplateVariantApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return deleteRequestTPPublisherOfferTemplateVariantApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The template variant ID
     * @param string $offerTemplateVariantId
     * @return deleteRequestTPPublisherOfferTemplateVariantApi
     */
    public function offerTemplateVariantId($offerTemplateVariantId){
        $this->request['offerTemplateVariantId'] = $offerTemplateVariantId;
        return $this;
    }
    /**
     * The template history comment
     * @param string $historyComment
     * @return deleteRequestTPPublisherOfferTemplateVariantApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
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
        if (isset($this->request['offerTemplateVariantId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offerTemplateVariantId' ) ] = $this->request['offerTemplateVariantId'];
        }
        if (isset($this->request['historyComment'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->request['historyComment'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/variant/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Duplicate template variant
 */
class getDuplicateRequestTPPublisherOfferTemplateVariantApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getDuplicateRequestTPPublisherOfferTemplateVariantApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The template variant ID
     * @param string $offerTemplateVariantId
     * @return getDuplicateRequestTPPublisherOfferTemplateVariantApi
     */
    public function offerTemplateVariantId($offerTemplateVariantId){
        $this->request['offerTemplateVariantId'] = $offerTemplateVariantId;
        return $this;
    }
    /**
     * The template history comment
     * @param string $historyComment
     * @return getDuplicateRequestTPPublisherOfferTemplateVariantApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVariant
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['offerTemplateVariantId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateVariantId' ) ] = $this->request['offerTemplateVariantId'];
        }
        if (isset($this->request['historyComment'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->request['historyComment'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/variant/duplicate', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVariant');
    }
}
/**
 * Get template variant
 */
class getRequestTPPublisherOfferTemplateVariantApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getRequestTPPublisherOfferTemplateVariantApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The template variant ID
     * @param string $offerTemplateVariantId
     * @return getRequestTPPublisherOfferTemplateVariantApi
     */
    public function offerTemplateVariantId($offerTemplateVariantId){
        $this->request['offerTemplateVariantId'] = $offerTemplateVariantId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVariant
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['offerTemplateVariantId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateVariantId' ) ] = $this->request['offerTemplateVariantId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/variant/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVariant');
    }
}
/**
 * Activate template variant
 */
class restoreRequestTPPublisherOfferTemplateVariantApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return restoreRequestTPPublisherOfferTemplateVariantApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The template variant ID
     * @param string $offerTemplateVariantId
     * @return restoreRequestTPPublisherOfferTemplateVariantApi
     */
    public function offerTemplateVariantId($offerTemplateVariantId){
        $this->request['offerTemplateVariantId'] = $offerTemplateVariantId;
        return $this;
    }
    /**
     * The template history comment
     * @param string $historyComment
     * @return restoreRequestTPPublisherOfferTemplateVariantApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['offerTemplateVariantId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateVariantId' ) ] = $this->request['offerTemplateVariantId'];
        }
        if (isset($this->request['historyComment'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->request['historyComment'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/variant/restore', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Update template variant
 */
class updateRequestTPPublisherOfferTemplateVariantApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateRequestTPPublisherOfferTemplateVariantApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The template variant ID
     * @param string $offerTemplateVariantId
     * @return updateRequestTPPublisherOfferTemplateVariantApi
     */
    public function offerTemplateVariantId($offerTemplateVariantId){
        $this->request['offerTemplateVariantId'] = $offerTemplateVariantId;
        return $this;
    }
    /**
     * The name
     * @param string $name
     * @return updateRequestTPPublisherOfferTemplateVariantApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The description
     * @param string $description
     * @return updateRequestTPPublisherOfferTemplateVariantApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * A list of the content fields in the JSON format. Example: [{\&quot;contentFieldId\&quot;:\&quot;id\&quot;,\&quot;name\&quot;:\&quot;name\&quot;,\&quot;description\&quot;:\&quot;description\&quot;,\&quot;value\&quot;:\&quot;value\&quot;,\&quot;deleted\&quot;:false}]
     * @param string $contentFieldList
     * @return updateRequestTPPublisherOfferTemplateVariantApi
     */
    public function contentFieldList($contentFieldList){
        $this->request['contentFieldList'] = $contentFieldList;
        return $this;
    }
    /**
     * The template history comment
     * @param string $historyComment
     * @return updateRequestTPPublisherOfferTemplateVariantApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
        return $this;
    }
    /**
     * Whether to perform a check before saving
     * @param bool $isValidate
     * @return updateRequestTPPublisherOfferTemplateVariantApi
     */
    public function isValidate($isValidate){
        $this->request['isValidate'] = $isValidate;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVariant
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['offerTemplateVariantId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offerTemplateVariantId' ) ] = $this->request['offerTemplateVariantId'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['contentFieldList'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentFieldList' ) ] = $this->request['contentFieldList'];
        }
        if (isset($this->request['historyComment'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->request['historyComment'];
        }
        if (isset($this->request['isValidate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'isValidate' ) ] = $this->request['isValidate'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/variant/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVariant');
    }
}
