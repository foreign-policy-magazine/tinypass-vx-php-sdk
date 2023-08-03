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
 * The TPConversionApi class.
 */
class TPConversionApi  extends TPAPIBase {

    /**
     * @return listRequestTPConversionApi
     */
    public function listRequest(){

        return new listRequestTPConversionApi($this->apiClient);
    }
    /**
     * @return logConversionRequestTPConversionApi
     */
    public function logConversionRequest(){

        return new logConversionRequestTPConversionApi($this->apiClient);
    }
    /**
     * @return logFunnelStepRequestTPConversionApi
     */
    public function logFunnelStepRequest(){

        return new logFunnelStepRequestTPConversionApi($this->apiClient);
    }
    /**
     * @return logMicroConversionRequestTPConversionApi
     */
    public function logMicroConversionRequest(){

        return new logMicroConversionRequestTPConversionApi($this->apiClient);
    }

}

/**
 * List conversions (anon)
 */
class listRequestTPConversionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPConversionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPConversionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * The user token
     * @param string $userToken
     * @return listRequestTPConversionApi
     */
    public function userToken($userToken){
        $this->request['userToken'] = $userToken;
        return $this;
    }
    /**
     * The user token provider
     * @param string $userProvider
     * @return listRequestTPConversionApi
     */
    public function userProvider($userProvider){
        $this->request['userProvider'] = $userProvider;
        return $this;
    }
    /**
     * The encrypted user reference
     * @param string $userRef
     * @return listRequestTPConversionApi
     */
    public function userRef($userRef){
        $this->request['userRef'] = $userRef;
        return $this;
    }
    /**
     * Execute request
     * @return TPAnonTermConversion[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['userToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userToken' ) ] = $this->request['userToken'];
        }
        if (isset($this->request['userProvider'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userProvider' ) ] = $this->request['userProvider'];
        }
        if (isset($this->request['userRef'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userRef' ) ] = $this->request['userRef'];
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
        $response = $this->apiClient->callAPI('/conversion/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPAnonTermConversion', 'array');
    }
}
/**
 * Log third-party conversion (anon)
 */
class logConversionRequestTPConversionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The conversion ID to track in external systems
     * @param string $trackingId
     * @return logConversionRequestTPConversionApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    /**
     * The term ID
     * @param string $termId
     * @return logConversionRequestTPConversionApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The term name
     * @param string $termName
     * @return logConversionRequestTPConversionApi
     */
    public function termName($termName){
        $this->request['termName'] = $termName;
        return $this;
    }
    /**
     * The step of the external checkout as defined by the client
     * @param int $stepNumber
     * @return logConversionRequestTPConversionApi
     */
    public function stepNumber($stepNumber){
        $this->request['stepNumber'] = $stepNumber;
        return $this;
    }
    /**
     * The conversion category
     * @param string $conversionCategory
     * @return logConversionRequestTPConversionApi
     */
    public function conversionCategory($conversionCategory){
        $this->request['conversionCategory'] = $conversionCategory;
        return $this;
    }
    /**
     * The conversion amount
     * @param float $amount
     * @return logConversionRequestTPConversionApi
     */
    public function amount($amount){
        $this->request['amount'] = $amount;
        return $this;
    }
    /**
     * The conversion currency under the ISO 4217 standard
     * @param string $currency
     * @return logConversionRequestTPConversionApi
     */
    public function currency($currency){
        $this->request['currency'] = $currency;
        return $this;
    }
    /**
     * The custom parameters (any key-value pairs) to save; the value should be a valid JSON object)
     * @param string $customParams
     * @return logConversionRequestTPConversionApi
     */
    public function customParams($customParams){
        $this->request['customParams'] = $customParams;
        return $this;
    }
    /**
     * The unique browser ID
     * @param string $browserId
     * @return logConversionRequestTPConversionApi
     */
    public function browserId($browserId){
        $this->request['browserId'] = $browserId;
        return $this;
    }
    /**
     * Page title
     * @param string $pageTitle
     * @return logConversionRequestTPConversionApi
     */
    public function pageTitle($pageTitle){
        $this->request['pageTitle'] = $pageTitle;
        return $this;
    }
    /**
     * The URL of the page
     * @param string $url
     * @return logConversionRequestTPConversionApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    /**
     * The page referer
     * @param string $referer
     * @return logConversionRequestTPConversionApi
     */
    public function referer($referer){
        $this->request['referer'] = $referer;
        return $this;
    }
    /**
     * The author of the content
     * @param string $contentAuthor
     * @return logConversionRequestTPConversionApi
     */
    public function contentAuthor($contentAuthor){
        $this->request['contentAuthor'] = $contentAuthor;
        return $this;
    }
    /**
     * When the content was published
     * @param string $contentCreated
     * @return logConversionRequestTPConversionApi
     */
    public function contentCreated($contentCreated){
        $this->request['contentCreated'] = $contentCreated;
        return $this;
    }
    /**
     * The section for the content
     * @param string $contentSection
     * @return logConversionRequestTPConversionApi
     */
    public function contentSection($contentSection){
        $this->request['contentSection'] = $contentSection;
        return $this;
    }
    /**
     * The tags of the page
     * @param string[] $tags
     * @return logConversionRequestTPConversionApi
     */
    public function tags($tags){
        $this->request['tags'] = $tags;
        return $this;
    }
    /**
     * The conversion consents in JSON format
     * @param string $cookieConsents
     * @return logConversionRequestTPConversionApi
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
        $response = $this->apiClient->callAPI('/conversion/log', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Log funnel stage
 */
class logFunnelStepRequestTPConversionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The conversion ID to track in external systems
     * @param string $trackingId
     * @return logFunnelStepRequestTPConversionApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    /**
     * The step of the external checkout as defined by the client
     * @param int $stepNumber
     * @return logFunnelStepRequestTPConversionApi
     */
    public function stepNumber($stepNumber){
        $this->request['stepNumber'] = $stepNumber;
        return $this;
    }
    /**
     * The name of the checkout step
     * @param string $stepName
     * @return logFunnelStepRequestTPConversionApi
     */
    public function stepName($stepName){
        $this->request['stepName'] = $stepName;
        return $this;
    }
    /**
     * The custom parameters (any key-value pairs) to save; the value should be a valid JSON object)
     * @param string $customParams
     * @return logFunnelStepRequestTPConversionApi
     */
    public function customParams($customParams){
        $this->request['customParams'] = $customParams;
        return $this;
    }
    /**
     * The unique browser ID
     * @param string $browserId
     * @return logFunnelStepRequestTPConversionApi
     */
    public function browserId($browserId){
        $this->request['browserId'] = $browserId;
        return $this;
    }
    /**
     * Page title
     * @param string $pageTitle
     * @return logFunnelStepRequestTPConversionApi
     */
    public function pageTitle($pageTitle){
        $this->request['pageTitle'] = $pageTitle;
        return $this;
    }
    /**
     * The URL of the page
     * @param string $url
     * @return logFunnelStepRequestTPConversionApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    /**
     * The page referer
     * @param string $referer
     * @return logFunnelStepRequestTPConversionApi
     */
    public function referer($referer){
        $this->request['referer'] = $referer;
        return $this;
    }
    /**
     * The author of the content
     * @param string $contentAuthor
     * @return logFunnelStepRequestTPConversionApi
     */
    public function contentAuthor($contentAuthor){
        $this->request['contentAuthor'] = $contentAuthor;
        return $this;
    }
    /**
     * When the content was published
     * @param string $contentCreated
     * @return logFunnelStepRequestTPConversionApi
     */
    public function contentCreated($contentCreated){
        $this->request['contentCreated'] = $contentCreated;
        return $this;
    }
    /**
     * The section for the content
     * @param string $contentSection
     * @return logFunnelStepRequestTPConversionApi
     */
    public function contentSection($contentSection){
        $this->request['contentSection'] = $contentSection;
        return $this;
    }
    /**
     * The tags of the page
     * @param string[] $tags
     * @return logFunnelStepRequestTPConversionApi
     */
    public function tags($tags){
        $this->request['tags'] = $tags;
        return $this;
    }
    /**
     * The conversion consents in JSON format
     * @param string $cookieConsents
     * @return logFunnelStepRequestTPConversionApi
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
        if (isset($this->request['stepNumber'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'stepNumber' ) ] = $this->request['stepNumber'];
        }
        if (isset($this->request['stepName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'stepName' ) ] = $this->request['stepName'];
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
        $response = $this->apiClient->callAPI('/conversion/logFunnelStep', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Log micro conversion
 */
class logMicroConversionRequestTPConversionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The conversion ID to track in external systems
     * @param string $trackingId
     * @return logMicroConversionRequestTPConversionApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    /**
     * The conversion event group ID
     * @param string $eventGroupId
     * @return logMicroConversionRequestTPConversionApi
     */
    public function eventGroupId($eventGroupId){
        $this->request['eventGroupId'] = $eventGroupId;
        return $this;
    }
    /**
     * The custom parameters (any key-value pairs) to save; the value should be a valid JSON object)
     * @param string $customParams
     * @return logMicroConversionRequestTPConversionApi
     */
    public function customParams($customParams){
        $this->request['customParams'] = $customParams;
        return $this;
    }
    /**
     * The unique browser ID
     * @param string $browserId
     * @return logMicroConversionRequestTPConversionApi
     */
    public function browserId($browserId){
        $this->request['browserId'] = $browserId;
        return $this;
    }
    /**
     * Page title
     * @param string $pageTitle
     * @return logMicroConversionRequestTPConversionApi
     */
    public function pageTitle($pageTitle){
        $this->request['pageTitle'] = $pageTitle;
        return $this;
    }
    /**
     * The URL of the page
     * @param string $url
     * @return logMicroConversionRequestTPConversionApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    /**
     * The page referer
     * @param string $referer
     * @return logMicroConversionRequestTPConversionApi
     */
    public function referer($referer){
        $this->request['referer'] = $referer;
        return $this;
    }
    /**
     * The author of the content
     * @param string $contentAuthor
     * @return logMicroConversionRequestTPConversionApi
     */
    public function contentAuthor($contentAuthor){
        $this->request['contentAuthor'] = $contentAuthor;
        return $this;
    }
    /**
     * When the content was published
     * @param string $contentCreated
     * @return logMicroConversionRequestTPConversionApi
     */
    public function contentCreated($contentCreated){
        $this->request['contentCreated'] = $contentCreated;
        return $this;
    }
    /**
     * The section for the content
     * @param string $contentSection
     * @return logMicroConversionRequestTPConversionApi
     */
    public function contentSection($contentSection){
        $this->request['contentSection'] = $contentSection;
        return $this;
    }
    /**
     * The tags of the page
     * @param string[] $tags
     * @return logMicroConversionRequestTPConversionApi
     */
    public function tags($tags){
        $this->request['tags'] = $tags;
        return $this;
    }
    /**
     * The conversion consents in JSON format
     * @param string $cookieConsents
     * @return logMicroConversionRequestTPConversionApi
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
        if (isset($this->request['eventGroupId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'eventGroupId' ) ] = $this->request['eventGroupId'];
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
        $response = $this->apiClient->callAPI('/conversion/logMicroConversion', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
