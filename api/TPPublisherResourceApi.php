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
 * The TPPublisherResourceApi class.
 */
class TPPublisherResourceApi  extends TPAPIBase {

    /**
     * @return attachResourceToFixedBundleRequestTPPublisherResourceApi
     */
    public function attachResourceToFixedBundleRequest(){

        return new attachResourceToFixedBundleRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return countRequestTPPublisherResourceApi
     */
    public function countRequest(){

        return new countRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function createResourceRequest(){

        return new createResourceRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return deleteResourceRequestTPPublisherResourceApi
     */
    public function deleteResourceRequest(){

        return new deleteResourceRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return detachResourceFromFixedBundleRequestTPPublisherResourceApi
     */
    public function detachResourceFromFixedBundleRequest(){

        return new detachResourceFromFixedBundleRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return getResourceRequestTPPublisherResourceApi
     */
    public function getResourceRequest(){

        return new getResourceRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function listBundlesRequest(){

        return new listBundlesRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function listResourcesRequest(){

        return new listResourcesRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function updateResourceRequest(){

        return new updateResourceRequestTPPublisherResourceApi($this->apiClient);
    }

}

/**
 * Attach resource(s) to fixed bundle
 */
class attachResourceToFixedBundleRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return attachResourceToFixedBundleRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The RIDs of the fixed bundles containing this resource. Please specify relevant bundles even if you don&#39;t want to update them. To update, enter both existing and new bundles
     * @param string[] $includedRid
     * @return attachResourceToFixedBundleRequestTPPublisherResourceApi
     */
    public function includedRid($includedRid){
        $this->request['includedRid'] = $includedRid;
        return $this;
    }
    /**
     * The resource bundle ID
     * @param string $bundleRid
     * @return attachResourceToFixedBundleRequestTPPublisherResourceApi
     */
    public function bundleRid($bundleRid){
        $this->request['bundleRid'] = $bundleRid;
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
        if (isset($this->request['includedRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedRid' ) ] = $this->request['includedRid'];
        }
        if (isset($this->request['bundleRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'bundleRid' ) ] = $this->request['bundleRid'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/attach', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Count resources in app
 */
class countRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return countRequestTPPublisherResourceApi
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
        $response = $this->apiClient->callAPI('/publisher/resource/count', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'int');
    }
}
/**
 * Create resource
 */
class createResourceRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The name
     * @param string $name
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The resource description
     * @param string $description
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * The type of the resource (-1: Undefined, 0: Standard, 1: Video, 2: Paywall, 3: Download, 4: Bundle)
     * @param string $type
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    /**
     * The URL of the resource image
     * @param string $imageUrl
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function imageUrl($imageUrl){
        $this->request['imageUrl'] = $imageUrl;
        return $this;
    }
    /**
     * The resource bundle type
     * @param string $bundleType
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function bundleType($bundleType){
        $this->request['bundleType'] = $bundleType;
        return $this;
    }
    /**
     * The resource tag ID, can be obtained through publisher/resource/tag/list
     * @param string[] $resourceTagId
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function resourceTagId($resourceTagId){
        $this->request['resourceTagId'] = $resourceTagId;
        return $this;
    }
    /**
     * The publish date
     * @param string $publishDate
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function publishDate($publishDate){
        $this->request['publishDate'] = $publishDate;
        return $this;
    }
    /**
     * The URL of the resource
     * @param string $resourceUrl
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function resourceUrl($resourceUrl){
        $this->request['resourceUrl'] = $resourceUrl;
        return $this;
    }
    /**
     * The external ID; defined by the client
     * @param string $externalId
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function externalId($externalId){
        $this->request['externalId'] = $externalId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherResource
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['type'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->request['type'];
        }
        if (isset($this->request['imageUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'imageUrl' ) ] = $this->request['imageUrl'];
        }
        if (isset($this->request['bundleType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'bundleType' ) ] = $this->request['bundleType'];
        }
        if (isset($this->request['resourceTagId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'resourceTagId' ) ] = $this->request['resourceTagId'];
        }
        if (isset($this->request['publishDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'publishDate' ) ] = $this->request['publishDate'];
        }
        if (isset($this->request['resourceUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'resourceUrl' ) ] = $this->request['resourceUrl'];
        }
        if (isset($this->request['externalId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'externalId' ) ] = $this->request['externalId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherResource');
    }
}
/**
 * Delete resource
 */
class deleteResourceRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return deleteResourceRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return deleteResourceRequestTPPublisherResourceApi
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
        $response = $this->apiClient->callAPI('/publisher/resource/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Detach resource from fixed bundle
 */
class detachResourceFromFixedBundleRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return detachResourceFromFixedBundleRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return detachResourceFromFixedBundleRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The resource bundle ID
     * @param string $bundleRid
     * @return detachResourceFromFixedBundleRequestTPPublisherResourceApi
     */
    public function bundleRid($bundleRid){
        $this->request['bundleRid'] = $bundleRid;
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
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['bundleRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'bundleRid' ) ] = $this->request['bundleRid'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/detach', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Get resource
 */
class getResourceRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getResourceRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return getResourceRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherResource
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherResource');
    }
}
/**
 * List bundles containing resource
 */
class listBundlesRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Resource type
     * @param string $type
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Disabled flag
     * @param bool $disabled
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    /**
     * Bundle type
     * @param int $bundleType
     * @return listBundlesRequestTPPublisherResourceApi
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
        $response = $this->apiClient->callAPI('/publisher/resource/bundles', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherResource', 'array');
    }
}
/**
 * List resources
 */
class listResourcesRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Resource type
     * @param string $type
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    /**
     * The IDs of the included resources
     * @param string[] $includedTagId
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function includedTagId($includedTagId){
        $this->request['includedTagId'] = $includedTagId;
        return $this;
    }
    /**
     * The IDs of the excluded resources
     * @param string[] $excludedRid
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function excludedRid($excludedRid){
        $this->request['excludedRid'] = $excludedRid;
        return $this;
    }
    /**
     * The RIDs of the fixed bundles containing this resource. Please specify relevant bundles even if you don&#39;t want to update them. To update, enter both existing and new bundles
     * @param string[] $includedRid
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function includedRid($includedRid){
        $this->request['includedRid'] = $includedRid;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Disabled flag
     * @param bool $disabled
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    /**
     * Bundle type
     * @param int $bundleType
     * @return listResourcesRequestTPPublisherResourceApi
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
        if (isset($this->request['excludedRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'excludedRid' ) ] = $this->request['excludedRid'];
        }
        if (isset($this->request['includedRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedRid' ) ] = $this->request['includedRid'];
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
        $response = $this->apiClient->callAPI('/publisher/resource/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherResource', 'array');
    }
}
/**
 * Update resource
 */
class updateResourceRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The name
     * @param string $name
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The new resource ID
     * @param string $newRid
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function newRid($newRid){
        $this->request['newRid'] = $newRid;
        return $this;
    }
    /**
     * The URL of the resource image
     * @param string $imageUrl
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function imageUrl($imageUrl){
        $this->request['imageUrl'] = $imageUrl;
        return $this;
    }
    /**
     * The resource description
     * @param string $description
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * Whether the object is disabled
     * @param bool $disabled
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    /**
     * The publish date
     * @param string $publishDate
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function publishDate($publishDate){
        $this->request['publishDate'] = $publishDate;
        return $this;
    }
    /**
     * The RIDs of the fixed bundles containing this resource. Please specify relevant bundles even if you don&#39;t want to update them. To update, enter both existing and new bundles
     * @param string[] $includedRid
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function includedRid($includedRid){
        $this->request['includedRid'] = $includedRid;
        return $this;
    }
    /**
     * For fixed bundles. The RIDs of the resources included in this fixed-bundle resource. Please specify relevant resources even if you don&#39;t want to update them. To update, enter both existing and new resources
     * @param string[] $fixedBundleRid
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function fixedBundleRid($fixedBundleRid){
        $this->request['fixedBundleRid'] = $fixedBundleRid;
        return $this;
    }
    /**
     * The term IDs to add to
     * @param string[] $addTermId
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function addTermId($addTermId){
        $this->request['addTermId'] = $addTermId;
        return $this;
    }
    /**
     * The term IDs to delete from
     * @param string[] $delTermId
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function delTermId($delTermId){
        $this->request['delTermId'] = $delTermId;
        return $this;
    }
    /**
     * The IDs of the included resources
     * @param string[] $includedTagId
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function includedTagId($includedTagId){
        $this->request['includedTagId'] = $includedTagId;
        return $this;
    }
    /**
     * The names of the included tags
     * @param string[] $includedTagName
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function includedTagName($includedTagName){
        $this->request['includedTagName'] = $includedTagName;
        return $this;
    }
    /**
     * The URL of the resource
     * @param string $resourceUrl
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function resourceUrl($resourceUrl){
        $this->request['resourceUrl'] = $resourceUrl;
        return $this;
    }
    /**
     * The external ID; defined by the client
     * @param string $externalId
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function externalId($externalId){
        $this->request['externalId'] = $externalId;
        return $this;
    }
    /**
     * Enable the resource for Facebook Subscriptions in Instant Articles
     * @param bool $isFbiaResource
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function isFbiaResource($isFbiaResource){
        $this->request['isFbiaResource'] = $isFbiaResource;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherResource
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['newRid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'newRid' ) ] = $this->request['newRid'];
        }
        if (isset($this->request['imageUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'imageUrl' ) ] = $this->request['imageUrl'];
        }
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->request['description'];
        }
        if (isset($this->request['disabled'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'disabled' ) ] = $this->request['disabled'];
        }
        if (isset($this->request['publishDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'publishDate' ) ] = $this->request['publishDate'];
        }
        if (isset($this->request['includedRid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'includedRid' ) ] = $this->request['includedRid'];
        }
        if (isset($this->request['fixedBundleRid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'fixedBundleRid' ) ] = $this->request['fixedBundleRid'];
        }
        if (isset($this->request['addTermId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'addTermId' ) ] = $this->request['addTermId'];
        }
        if (isset($this->request['delTermId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'delTermId' ) ] = $this->request['delTermId'];
        }
        if (isset($this->request['includedTagId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'includedTagId' ) ] = $this->request['includedTagId'];
        }
        if (isset($this->request['includedTagName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'includedTagName' ) ] = $this->request['includedTagName'];
        }
        if (isset($this->request['resourceUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'resourceUrl' ) ] = $this->request['resourceUrl'];
        }
        if (isset($this->request['externalId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'externalId' ) ] = $this->request['externalId'];
        }
        if (isset($this->request['isFbiaResource'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'isFbiaResource' ) ] = $this->request['isFbiaResource'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherResource');
    }
}
