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
 * The TPConversionExternalApi class.
 */
class TPConversionExternalApi  extends TPAPIBase {

    /**
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function externalVerifiedCreateRequest(){

        return new externalVerifiedCreateRequestTPConversionExternalApi($this->apiClient);
    }

}

/**
 * Create external conversion (anon)
 */
class externalVerifiedCreateRequestTPConversionExternalApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The term ID
     * @param string $termId
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * A JSON object defining what fields have to be checked with the external API
     * @param string $fields
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function fields($fields){
        $this->request['fields'] = $fields;
        return $this;
    }
    /**
     * The user token
     * @param string $userToken
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function userToken($userToken){
        $this->request['userToken'] = $userToken;
        return $this;
    }
    /**
     * The user token provider
     * @param string $userProvider
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function userProvider($userProvider){
        $this->request['userProvider'] = $userProvider;
        return $this;
    }
    /**
     * The encrypted user reference
     * @param string $userRef
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function userRef($userRef){
        $this->request['userRef'] = $userRef;
        return $this;
    }
    /**
     * The conversion ID to track in external systems
     * @param string $trackingId
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    /**
     * The custom parameters (any key-value pairs) to save; the value should be a valid JSON object)
     * @param string $customParams
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function customParams($customParams){
        $this->request['customParams'] = $customParams;
        return $this;
    }
    /**
     * The unique browser ID
     * @param string $browserId
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function browserId($browserId){
        $this->request['browserId'] = $browserId;
        return $this;
    }
    /**
     * Page title
     * @param string $pageTitle
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function pageTitle($pageTitle){
        $this->request['pageTitle'] = $pageTitle;
        return $this;
    }
    /**
     * The URL of the page
     * @param string $url
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    /**
     * The page referer
     * @param string $referer
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function referer($referer){
        $this->request['referer'] = $referer;
        return $this;
    }
    /**
     * The author of the content
     * @param string $contentAuthor
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function contentAuthor($contentAuthor){
        $this->request['contentAuthor'] = $contentAuthor;
        return $this;
    }
    /**
     * When the content was published
     * @param string $contentCreated
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function contentCreated($contentCreated){
        $this->request['contentCreated'] = $contentCreated;
        return $this;
    }
    /**
     * The section for the content
     * @param string $contentSection
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function contentSection($contentSection){
        $this->request['contentSection'] = $contentSection;
        return $this;
    }
    /**
     * The tags of the page
     * @param string[] $tags
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function tags($tags){
        $this->request['tags'] = $tags;
        return $this;
    }
    /**
     * The conversion consents in JSON format
     * @param string $cookieConsents
     * @return externalVerifiedCreateRequestTPConversionExternalApi
     */
    public function cookieConsents($cookieConsents){
        $this->request['cookieConsents'] = $cookieConsents;
        return $this;
    }
    /**
     * Execute request
     * @return TPAnonTermConversion
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
        if (isset($this->request['fields'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'fields' ) ] = $this->request['fields'];
        }
        if (isset($this->request['userToken'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userToken' ) ] = $this->request['userToken'];
        }
        if (isset($this->request['userProvider'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userProvider' ) ] = $this->request['userProvider'];
        }
        if (isset($this->request['userRef'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userRef' ) ] = $this->request['userRef'];
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
        $response = $this->apiClient->callAPI('/conversion/external/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPAnonTermConversion');
    }
}
