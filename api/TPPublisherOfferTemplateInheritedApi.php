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
 * The TPPublisherOfferTemplateInheritedApi class.
 */
class TPPublisherOfferTemplateInheritedApi  extends TPAPIBase {

    /**
     * @return countInheritedTemplatesRequestTPPublisherOfferTemplateInheritedApi
     */
    public function countInheritedTemplatesRequest(){

        return new countInheritedTemplatesRequestTPPublisherOfferTemplateInheritedApi($this->apiClient);
    }
    /**
     * @return updateInheritedTemplateRequestTPPublisherOfferTemplateInheritedApi
     */
    public function updateInheritedTemplateRequest(){

        return new updateInheritedTemplateRequestTPPublisherOfferTemplateInheritedApi($this->apiClient);
    }

}

/**
 * Count inherited templates for global template
 */
class countInheritedTemplatesRequestTPPublisherOfferTemplateInheritedApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return countInheritedTemplatesRequestTPPublisherOfferTemplateInheritedApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The template ID
     * @param string $offerTemplateId
     * @return countInheritedTemplatesRequestTPPublisherOfferTemplateInheritedApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
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
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->request['offerTemplateId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/inherited/count', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'int');
    }
}
/**
 * Modify content fields in inherited template
 */
class updateInheritedTemplateRequestTPPublisherOfferTemplateInheritedApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateInheritedTemplateRequestTPPublisherOfferTemplateInheritedApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The template ID
     * @param string $offerTemplateId
     * @return updateInheritedTemplateRequestTPPublisherOfferTemplateInheritedApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    /**
     * A list of the content fields in the JSON format. Example: [{\&quot;contentFieldId\&quot;:\&quot;id\&quot;,\&quot;name\&quot;:\&quot;name\&quot;,\&quot;description\&quot;:\&quot;description\&quot;,\&quot;value\&quot;:\&quot;value\&quot;,\&quot;deleted\&quot;:false}]
     * @param string $contentFieldList
     * @return updateInheritedTemplateRequestTPPublisherOfferTemplateInheritedApi
     */
    public function contentFieldList($contentFieldList){
        $this->request['contentFieldList'] = $contentFieldList;
        return $this;
    }
    /**
     * The template history comment
     * @param string $historyComment
     * @return updateInheritedTemplateRequestTPPublisherOfferTemplateInheritedApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
        return $this;
    }
    /**
     * Whether to perform a check before saving
     * @param bool $isValidate
     * @return updateInheritedTemplateRequestTPPublisherOfferTemplateInheritedApi
     */
    public function isValidate($isValidate){
        $this->request['isValidate'] = $isValidate;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVersion
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
        $response = $this->apiClient->callAPI('/publisher/offer/template/inherited/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
    }
}
