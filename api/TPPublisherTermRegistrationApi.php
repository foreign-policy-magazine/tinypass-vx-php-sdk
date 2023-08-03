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
 * The TPPublisherTermRegistrationApi class.
 */
class TPPublisherTermRegistrationApi  extends TPAPIBase {

    /**
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function createRegistrationTermRequest(){

        return new createRegistrationTermRequestTPPublisherTermRegistrationApi($this->apiClient);
    }
    /**
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function updateRegistrationTermRequest(){

        return new updateRegistrationTermRequestTPPublisherTermRegistrationApi($this->apiClient);
    }

}

/**
 * Create registration term
 */
class createRegistrationTermRequestTPPublisherTermRegistrationApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The term name
     * @param string $name
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The description of the term
     * @param string $description
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * The access duration (in seconds) for the registration term
     * @param int $registrationAccessPeriod
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function registrationAccessPeriod($registrationAccessPeriod){
        $this->request['registrationAccessPeriod'] = $registrationAccessPeriod;
        return $this;
    }
    /**
     * How long (in seconds) after registration users can get access to the term
     * @param int $registrationGracePeriod
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function registrationGracePeriod($registrationGracePeriod){
        $this->request['registrationGracePeriod'] = $registrationGracePeriod;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTerm
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
        if (isset($this->request['registrationAccessPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'registrationAccessPeriod' ) ] = $this->request['registrationAccessPeriod'];
        }
        if (isset($this->request['registrationGracePeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'registrationGracePeriod' ) ] = $this->request['registrationGracePeriod'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/registration/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
/**
 * Update registration term
 */
class updateRegistrationTermRequestTPPublisherTermRegistrationApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The term ID
     * @param string $termId
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * The resource ID
     * @param string $rid
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    /**
     * The term name
     * @param string $name
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The description of the term
     * @param string $description
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    /**
     * The access duration (in seconds) for the registration term
     * @param int $registrationAccessPeriod
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function registrationAccessPeriod($registrationAccessPeriod){
        $this->request['registrationAccessPeriod'] = $registrationAccessPeriod;
        return $this;
    }
    /**
     * How long (in seconds) after registration users can get access to the term
     * @param int $registrationGracePeriod
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function registrationGracePeriod($registrationGracePeriod){
        $this->request['registrationGracePeriod'] = $registrationGracePeriod;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherTerm
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
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
        if (isset($this->request['registrationAccessPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'registrationAccessPeriod' ) ] = $this->request['registrationAccessPeriod'];
        }
        if (isset($this->request['registrationGracePeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'registrationGracePeriod' ) ] = $this->request['registrationGracePeriod'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/registration/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
    }
}
