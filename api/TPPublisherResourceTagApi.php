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
 * The TPPublisherResourceTagApi class.
 */
class TPPublisherResourceTagApi  extends TPAPIBase {

    /**
     * @return attachTagRequestTPPublisherResourceTagApi
     */
    public function attachTagRequest(){

        return new attachTagRequestTPPublisherResourceTagApi($this->apiClient);
    }
    /**
     * @return createTagRequestTPPublisherResourceTagApi
     */
    public function createTagRequest(){

        return new createTagRequestTPPublisherResourceTagApi($this->apiClient);
    }
    /**
     * @return deleteTagRequestTPPublisherResourceTagApi
     */
    public function deleteTagRequest(){

        return new deleteTagRequestTPPublisherResourceTagApi($this->apiClient);
    }
    /**
     * @return detachTagRequestTPPublisherResourceTagApi
     */
    public function detachTagRequest(){

        return new detachTagRequestTPPublisherResourceTagApi($this->apiClient);
    }
    /**
     * @return getTagRequestTPPublisherResourceTagApi
     */
    public function getTagRequest(){

        return new getTagRequestTPPublisherResourceTagApi($this->apiClient);
    }
    /**
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function listBundlesForTagsRequest(){

        return new listBundlesForTagsRequestTPPublisherResourceTagApi($this->apiClient);
    }
    /**
     * @return listTagsRequestTPPublisherResourceTagApi
     */
    public function listTagsRequest(){

        return new listTagsRequestTPPublisherResourceTagApi($this->apiClient);
    }

}

/**
 * Attach tag to resource
 */
class attachTagRequestTPPublisherResourceTagApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The resource tag ID, can be obtained through publisher/resource/tag/list
     * @param string $resourceTagId
     * @return attachTagRequestTPPublisherResourceTagApi
     */
    public function resourceTagId($resourceTagId){
        $this->request['resourceTagId'] = $resourceTagId;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return attachTagRequestTPPublisherResourceTagApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return attachTagRequestTPPublisherResourceTagApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['resourceTagId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'resourceTagId' ) ] = $this->request['resourceTagId'];
        }
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/tag/attach', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Create resource tag
 */
class createTagRequestTPPublisherResourceTagApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createTagRequestTPPublisherResourceTagApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return createTagRequestTPPublisherResourceTagApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The name
     * @param string $name
     * @return createTagRequestTPPublisherResourceTagApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The type
     * @param string $type
     * @return createTagRequestTPPublisherResourceTagApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherResourceTag
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->request['type'];
        }
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/tag/create', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherResourceTag');
    }
}
/**
 * Delete resource tag
 */
class deleteTagRequestTPPublisherResourceTagApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The resource tag ID, can be obtained through publisher/resource/tag/list
     * @param string $resourceTagId
     * @return deleteTagRequestTPPublisherResourceTagApi
     */
    public function resourceTagId($resourceTagId){
        $this->request['resourceTagId'] = $resourceTagId;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return deleteTagRequestTPPublisherResourceTagApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['resourceTagId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'resourceTagId' ) ] = $this->request['resourceTagId'];
        }
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/tag/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Detach tag from resource
 */
class detachTagRequestTPPublisherResourceTagApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The resource tag ID, can be obtained through publisher/resource/tag/list
     * @param string $resourceTagId
     * @return detachTagRequestTPPublisherResourceTagApi
     */
    public function resourceTagId($resourceTagId){
        $this->request['resourceTagId'] = $resourceTagId;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return detachTagRequestTPPublisherResourceTagApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return detachTagRequestTPPublisherResourceTagApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['resourceTagId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'resourceTagId' ) ] = $this->request['resourceTagId'];
        }
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/tag/detach', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Get resource tag
 */
class getTagRequestTPPublisherResourceTagApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The resource tag ID, can be obtained through publisher/resource/tag/list
     * @param string $resourceTagId
     * @return getTagRequestTPPublisherResourceTagApi
     */
    public function resourceTagId($resourceTagId){
        $this->request['resourceTagId'] = $resourceTagId;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return getTagRequestTPPublisherResourceTagApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherResourceTag
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['resourceTagId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resourceTagId' ) ] = $this->request['resourceTagId'];
        }
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/tag/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherResourceTag');
    }
}
/**
 * List bundles for tags
 */
class listBundlesForTagsRequestTPPublisherResourceTagApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The IDs of the included resources
     * @param string[] $includedTagId
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function includedTagId($includedTagId){
        $this->request['includedTagId'] = $includedTagId;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Resource type
     * @param string $type
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Disabled flag
     * @param bool $disabled
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    /**
     * Bundle type
     * @param int $bundleType
     * @return listBundlesForTagsRequestTPPublisherResourceTagApi
     */
    public function bundleType($bundleType){
        $this->request['bundleType'] = $bundleType;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherResource[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['includedTagId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedTagId' ) ] = $this->request['includedTagId'];
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
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        if (isset($this->request['disabled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'disabled' ) ] = $this->request['disabled'];
        }
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->request['type'];
        }
        if (isset($this->request['bundleType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'bundleType' ) ] = $this->request['bundleType'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/tag/bundles', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherResource', 'array');
    }
}
/**
 * List resource tags for app or resource
 */
class listTagsRequestTPPublisherResourceTagApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listTagsRequestTPPublisherResourceTagApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listTagsRequestTPPublisherResourceTagApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listTagsRequestTPPublisherResourceTagApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Resource tag type
     * @param int $tagType
     * @return listTagsRequestTPPublisherResourceTagApi
     */
    public function tagType($tagType){
        $this->request['tagType'] = $tagType;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return listTagsRequestTPPublisherResourceTagApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return listTagsRequestTPPublisherResourceTagApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return listTagsRequestTPPublisherResourceTagApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listTagsRequestTPPublisherResourceTagApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherResourceTag[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
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
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        if (isset($this->request['tagType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'tagType' ) ] = $this->request['tagType'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/tag/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherResourceTag', 'array');
    }
}
