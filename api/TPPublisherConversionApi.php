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
 * The TPPublisherConversionApi class.
 */
class TPPublisherConversionApi  extends TPAPIBase {

    /**
     * @return countRequestTPPublisherConversionApi
     */
    public function countRequest(){

        return new countRequestTPPublisherConversionApi($this->apiClient);
    }
    /**
     * @return getLastRequestTPPublisherConversionApi
     */
    public function getLastRequest(){

        return new getLastRequestTPPublisherConversionApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherConversionApi
     */
    public function getRequest(){

        return new getRequestTPPublisherConversionApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherConversionApi
     */
    public function listRequest(){

        return new listRequestTPPublisherConversionApi($this->apiClient);
    }
    /**
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function logConversionRequest(){

        return new logConversionRequestTPPublisherConversionApi($this->apiClient);
    }

}

/**
 * Count conversions
 */
class countRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return countRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Term id to list
     * @param string $termId
     * @return countRequestTPPublisherConversionApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
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
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/count', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'int');
    }
}
/**
 * Last conversion
 */
class getLastRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getLastRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return getLastRequestTPPublisherConversionApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return getLastRequestTPPublisherConversionApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The user subscription ID
     * @param string $subscriptionId
     * @return getLastRequestTPPublisherConversionApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTermConversion
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->request['rid'];
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['subscriptionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->request['subscriptionId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/lastAccess', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
    }
}
/**
 * Get conversion
 */
class getRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The term conversion ID
     * @param string $termConversionId
     * @return getRequestTPPublisherConversionApi
     */
    public function termConversionId($termConversionId){
        $this->request['termConversionId'] = $termConversionId;
        return $this;
    }
    /**
     * The access ID
     * @param string $accessId
     * @return getRequestTPPublisherConversionApi
     */
    public function accessId($accessId){
        $this->request['accessId'] = $accessId;
        return $this;
    }
    /**
     * Whether this term conversion is the latest
     * @param bool $isLastTermConversion
     * @return getRequestTPPublisherConversionApi
     */
    public function isLastTermConversion($isLastTermConversion){
        $this->request['isLastTermConversion'] = $isLastTermConversion;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTermConversion
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['termConversionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termConversionId' ) ] = $this->request['termConversionId'];
        }
        if (isset($this->request['accessId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessId' ) ] = $this->request['accessId'];
        }
        if (isset($this->request['isLastTermConversion'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'isLastTermConversion' ) ] = $this->request['isLastTermConversion'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
    }
}
/**
 * List conversions in app
 */
class listRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherConversionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherConversionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return listRequestTPPublisherConversionApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTermConversionDTO[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
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
        $response = $this->apiClient->callAPI('/publisher/conversion/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTermConversionDTO', 'array');
    }
}
/**
 * Log third-party conversion
 */
class logConversionRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The conversion ID to track in external systems
     * @param string $trackingId
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    /**
     * The term ID
     * @param string $termId
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The term name
     * @param string $termName
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function termName($termName){
        $this->request['termName'] = $termName;
        return $this;
    }
    /**
     * The step of the external checkout as defined by the client
     * @param int $stepNumber
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function stepNumber($stepNumber){
        $this->request['stepNumber'] = $stepNumber;
        return $this;
    }
    /**
     * The conversion category
     * @param string $conversionCategory
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function conversionCategory($conversionCategory){
        $this->request['conversionCategory'] = $conversionCategory;
        return $this;
    }
    /**
     * The conversion amount
     * @param float $amount
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function amount($amount){
        $this->request['amount'] = $amount;
        return $this;
    }
    /**
     * The conversion currency under the ISO 4217 standard
     * @param string $currency
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function currency($currency){
        $this->request['currency'] = $currency;
        return $this;
    }
    /**
     * The custom parameters (any key-value pairs) to save; the value should be a valid JSON object)
     * @param string $customParams
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function customParams($customParams){
        $this->request['customParams'] = $customParams;
        return $this;
    }
    /**
     * The unique browser ID
     * @param string $browserId
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function browserId($browserId){
        $this->request['browserId'] = $browserId;
        return $this;
    }
    /**
     * Page title
     * @param string $pageTitle
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function pageTitle($pageTitle){
        $this->request['pageTitle'] = $pageTitle;
        return $this;
    }
    /**
     * The URL of the page
     * @param string $url
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    /**
     * The page referer
     * @param string $referer
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function referer($referer){
        $this->request['referer'] = $referer;
        return $this;
    }
    /**
     * The author of the content
     * @param string $contentAuthor
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function contentAuthor($contentAuthor){
        $this->request['contentAuthor'] = $contentAuthor;
        return $this;
    }
    /**
     * When the content was published
     * @param string $contentCreated
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function contentCreated($contentCreated){
        $this->request['contentCreated'] = $contentCreated;
        return $this;
    }
    /**
     * The section for the content
     * @param string $contentSection
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function contentSection($contentSection){
        $this->request['contentSection'] = $contentSection;
        return $this;
    }
    /**
     * The tags of the page
     * @param string[] $tags
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function tags($tags){
        $this->request['tags'] = $tags;
        return $this;
    }
    /**
     * The conversion consents in JSON format
     * @param string $cookieConsents
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function cookieConsents($cookieConsents){
        $this->request['cookieConsents'] = $cookieConsents;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['trackingId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'trackingId' ) ] = $this->request['trackingId'];
        }
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['termName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termName' ) ] = $this->request['termName'];
        }
        if (isset($this->request['stepNumber'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'stepNumber' ) ] = $this->request['stepNumber'];
        }
        if (isset($this->request['conversionCategory'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'conversionCategory' ) ] = $this->request['conversionCategory'];
        }
        if (isset($this->request['amount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'amount' ) ] = $this->request['amount'];
        }
        if (isset($this->request['currency'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'currency' ) ] = $this->request['currency'];
        }
        if (isset($this->request['customParams'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'customParams' ) ] = $this->request['customParams'];
        }
        if (isset($this->request['browserId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'browserId' ) ] = $this->request['browserId'];
        }
        if (isset($this->request['pageTitle'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'pageTitle' ) ] = $this->request['pageTitle'];
        }
        if (isset($this->request['url'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'url' ) ] = $this->request['url'];
        }
        if (isset($this->request['referer'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'referer' ) ] = $this->request['referer'];
        }
        if (isset($this->request['contentAuthor'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentAuthor' ) ] = $this->request['contentAuthor'];
        }
        if (isset($this->request['contentCreated'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentCreated' ) ] = $this->request['contentCreated'];
        }
        if (isset($this->request['contentSection'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentSection' ) ] = $this->request['contentSection'];
        }
        if (isset($this->request['tags'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'tags' ) ] = $this->request['tags'];
        }
        if (isset($this->request['cookieConsents'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'cookieConsents' ) ] = $this->request['cookieConsents'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/log', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
