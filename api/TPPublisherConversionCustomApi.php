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
 * The TPPublisherConversionCustomApi class.
 */
class TPPublisherConversionCustomApi  extends TPAPIBase {

    /**
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function customCreateRequest(){

        return new customCreateRequestTPPublisherConversionCustomApi($this->apiClient);
    }

}

/**
 * Create custom conversion
 */
class customCreateRequestTPPublisherConversionCustomApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The term ID
     * @param string $termId
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The duration of the access being provided
     * @param int $accessPeriod
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function accessPeriod($accessPeriod){
        $this->request['accessPeriod'] = $accessPeriod;
        return $this;
    }
    /**
     * Whether to provide unlimited access
     * @param bool $unlimitedAccess
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function unlimitedAccess($unlimitedAccess){
        $this->request['unlimitedAccess'] = $unlimitedAccess;
        return $this;
    }
    /**
     * Whether to extend the existing access
     * @param bool $extendExisting
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function extendExisting($extendExisting){
        $this->request['extendExisting'] = $extendExisting;
        return $this;
    }
    /**
     * The conversion ID to track in external systems
     * @param string $trackingId
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    /**
     * The custom parameters (any key-value pairs) to save; the value should be a valid JSON object)
     * @param string $customParams
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function customParams($customParams){
        $this->request['customParams'] = $customParams;
        return $this;
    }
    /**
     * The unique browser ID
     * @param string $browserId
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function browserId($browserId){
        $this->request['browserId'] = $browserId;
        return $this;
    }
    /**
     * Page title
     * @param string $pageTitle
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function pageTitle($pageTitle){
        $this->request['pageTitle'] = $pageTitle;
        return $this;
    }
    /**
     * The URL of the page
     * @param string $url
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    /**
     * The page referer
     * @param string $referer
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function referer($referer){
        $this->request['referer'] = $referer;
        return $this;
    }
    /**
     * The author of the content
     * @param string $contentAuthor
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function contentAuthor($contentAuthor){
        $this->request['contentAuthor'] = $contentAuthor;
        return $this;
    }
    /**
     * When the content was published
     * @param string $contentCreated
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function contentCreated($contentCreated){
        $this->request['contentCreated'] = $contentCreated;
        return $this;
    }
    /**
     * The section for the content
     * @param string $contentSection
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function contentSection($contentSection){
        $this->request['contentSection'] = $contentSection;
        return $this;
    }
    /**
     * The tags of the page
     * @param string[] $tags
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function tags($tags){
        $this->request['tags'] = $tags;
        return $this;
    }
    /**
     * The conversion consents in JSON format
     * @param string $cookieConsents
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function cookieConsents($cookieConsents){
        $this->request['cookieConsents'] = $cookieConsents;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTermConversion
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['uid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['accessPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'accessPeriod' ) ] = $this->request['accessPeriod'];
        }
        if (isset($this->request['unlimitedAccess'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'unlimitedAccess' ) ] = $this->request['unlimitedAccess'];
        }
        if (isset($this->request['extendExisting'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'extendExisting' ) ] = $this->request['extendExisting'];
        }
        if (isset($this->request['trackingId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'trackingId' ) ] = $this->request['trackingId'];
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
        $response = $this->apiClient->callAPI('/publisher/conversion/custom/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
    }
}
