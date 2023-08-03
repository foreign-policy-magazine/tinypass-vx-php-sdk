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
 * The TPPublisherConversionExternalApi class.
 */
class TPPublisherConversionExternalApi  extends TPAPIBase {

    /**
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function externalVerificationCreateRequest(){

        return new externalVerificationCreateRequestTPPublisherConversionExternalApi($this->apiClient);
    }

}

/**
 * Create external conversion
 */
class externalVerificationCreateRequestTPPublisherConversionExternalApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The term ID
     * @param string $termId
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * A JSON object defining what fields have to be checked with the external API
     * @param string $fields
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function fields($fields){
        $this->request['fields'] = $fields;
        return $this;
    }
    /**
     * Whether to check the validity of the passed values (\&quot;TRUE\&quot;) or use them forcely (\&quot;FALSE\&quot;, not recommended, may result in unverified subscriptions)
     * @param bool $checkValidity
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function checkValidity($checkValidity){
        $this->request['checkValidity'] = $checkValidity;
        return $this;
    }
    /**
     * access_to
     * @param string $accessTo
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function accessTo($accessTo){
        $this->request['accessTo'] = $accessTo;
        return $this;
    }
    /**
     * The conversion ID to track in external systems
     * @param string $trackingId
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    /**
     * The custom parameters (any key-value pairs) to save; the value should be a valid JSON object)
     * @param string $customParams
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function customParams($customParams){
        $this->request['customParams'] = $customParams;
        return $this;
    }
    /**
     * The unique browser ID
     * @param string $browserId
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function browserId($browserId){
        $this->request['browserId'] = $browserId;
        return $this;
    }
    /**
     * Page title
     * @param string $pageTitle
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function pageTitle($pageTitle){
        $this->request['pageTitle'] = $pageTitle;
        return $this;
    }
    /**
     * The URL of the page
     * @param string $url
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    /**
     * The page referer
     * @param string $referer
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function referer($referer){
        $this->request['referer'] = $referer;
        return $this;
    }
    /**
     * The author of the content
     * @param string $contentAuthor
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function contentAuthor($contentAuthor){
        $this->request['contentAuthor'] = $contentAuthor;
        return $this;
    }
    /**
     * When the content was published
     * @param string $contentCreated
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function contentCreated($contentCreated){
        $this->request['contentCreated'] = $contentCreated;
        return $this;
    }
    /**
     * The section for the content
     * @param string $contentSection
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function contentSection($contentSection){
        $this->request['contentSection'] = $contentSection;
        return $this;
    }
    /**
     * The tags of the page
     * @param string[] $tags
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function tags($tags){
        $this->request['tags'] = $tags;
        return $this;
    }
    /**
     * The conversion consents in JSON format
     * @param string $cookieConsents
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
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
        if (isset($this->request['fields'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'fields' ) ] = $this->request['fields'];
        }
        if (isset($this->request['checkValidity'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'checkValidity' ) ] = $this->request['checkValidity'];
        }
        if (isset($this->request['accessTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'accessTo' ) ] = $this->request['accessTo'];
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
        $response = $this->apiClient->callAPI('/publisher/conversion/external/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
    }
}
