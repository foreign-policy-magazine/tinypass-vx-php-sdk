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
 * The TPPublisherConversionRegistrationApi class.
 */
class TPPublisherConversionRegistrationApi  extends TPAPIBase {

    /**
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function createRegistrationConversionRequest(){

        return new createRegistrationConversionRequestTPPublisherConversionRegistrationApi($this->apiClient);
    }

}

/**
 * Create registration conversion
 */
class createRegistrationConversionRequestTPPublisherConversionRegistrationApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The term ID
     * @param string $termId
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The user&#39;s email address (single)
     * @param string $email
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * The user&#39;s first name
     * @param string $firstName
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    /**
     * The user&#39;s last name
     * @param string $lastName
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    /**
     * The creation date
     * @param string $createDate
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function createDate($createDate){
        $this->request['createDate'] = $createDate;
        return $this;
    }
    /**
     * The access start date (unix)
     * @param string $accessStartDate
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function accessStartDate($accessStartDate){
        $this->request['accessStartDate'] = $accessStartDate;
        return $this;
    }
    /**
     * Piano&#39;s browser cookie containing the browser ID which can also be retrieved through JS SDK
     * @param string $tbc
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function tbc($tbc){
        $this->request['tbc'] = $tbc;
        return $this;
    }
    /**
     * The pageview ID, can be retrieved from cookies through JS SDK
     * @param string $pageviewId
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function pageviewId($pageviewId){
        $this->request['pageviewId'] = $pageviewId;
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
        if (isset($this->request['uid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['firstName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->request['firstName'];
        }
        if (isset($this->request['lastName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->request['lastName'];
        }
        if (isset($this->request['createDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'createDate' ) ] = $this->request['createDate'];
        }
        if (isset($this->request['accessStartDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'accessStartDate' ) ] = $this->request['accessStartDate'];
        }
        if (isset($this->request['tbc'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'tbc' ) ] = $this->request['tbc'];
        }
        if (isset($this->request['pageviewId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'pageviewId' ) ] = $this->request['pageviewId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/registration/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
    }
}
