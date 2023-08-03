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
 * The TPPublisherApi class.
 */
class TPPublisherApi  extends TPAPIBase {

    /**
     * @return createOrUpdateCustomFieldsRequestTPPublisherApi
     */
    public function createOrUpdateCustomFieldsRequest(){

        return new createOrUpdateCustomFieldsRequestTPPublisherApi($this->apiClient);
    }
    /**
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function customFormSubmitRequest(){

        return new customFormSubmitRequestTPPublisherApi($this->apiClient);
    }
    /**
     * @return loginRequestTPPublisherApi
     */
    public function loginRequest(){

        return new loginRequestTPPublisherApi($this->apiClient);
    }
    /**
     * @return logoutRequestTPPublisherApi
     */
    public function logoutRequest(){

        return new logoutRequestTPPublisherApi($this->apiClient);
    }
    /**
     * @return registerRequestTPPublisherApi
     */
    public function registerRequest(){

        return new registerRequestTPPublisherApi($this->apiClient);
    }

}

/**
 * Create or update custom field(s) definition(s)
 */
class createOrUpdateCustomFieldsRequestTPPublisherApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return createOrUpdateCustomFieldsRequestTPPublisherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Application api token
     * @param string $apiToken
     * @return createOrUpdateCustomFieldsRequestTPPublisherApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
        return $this;
    }
    /**
     * Validate field name (Field ID) on GM level
     * @param bool $globalValidation
     * @return createOrUpdateCustomFieldsRequestTPPublisherApi
     */
    public function globalValidation($globalValidation){
        $this->request['globalValidation'] = $globalValidation;
        return $this;
    }
    /**
     * 
     * @param \\Model\TPIdCustomFieldDefinitionDto[] $body
     * @return createOrUpdateCustomFieldsRequestTPPublisherApi
     */
    public function body($body){
        $this->request['body'] = $body;
        return $this;
    }
    /**
     * 
     * @param string $authorization
     * @return createOrUpdateCustomFieldsRequestTPPublisherApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
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
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->request['apiToken'];
        }
        if (isset($this->request['globalValidation'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'globalValidation' ) ] = $this->request['globalValidation'];
        }
        $formParams = array();
        if (isset($this->request['body'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'body' ) ] = json_encode($this->request['body']);
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/customField', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Submits the custom form values.
 */
class customFormSubmitRequestTPPublisherApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * User&#39;s uid
     * @param string $uid
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * JSON dictionary of the custom field: id as keys and user selection as values. For multi-select lists, the value will be an array of strings.
     * @param string $customFields
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function customFields($customFields){
        $this->request['customFields'] = $customFields;
        return $this;
    }
    /**
     * Public form ID. This field is optional. If this field is set, the validators of the form will check the custom fields of that form. The custom fields of other forms will be saved without being checked by the validators.
     * @param string $formId
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function formId($formId){
        $this->request['formId'] = $formId;
        return $this;
    }
    /**
     * 
     * @param string $authorization
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
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
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        if (isset($this->request['customFields'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customFields' ) ] = $this->request['customFields'];
        }
        if (isset($this->request['formId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'formId' ) ] = $this->request['formId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/form', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Logs in a user by password
 */
class loginRequestTPPublisherApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return loginRequestTPPublisherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * User&#39;s email address
     * @param string $email
     * @return loginRequestTPPublisherApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * Application api token
     * @param string $apiToken
     * @return loginRequestTPPublisherApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
        return $this;
    }
    /**
     * User&#39;s password
     * @param string $password
     * @return loginRequestTPPublisherApi
     */
    public function password($password){
        $this->request['password'] = $password;
        return $this;
    }
    /**
     * 
     * @param string $authorization
     * @return loginRequestTPPublisherApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * User&#39;s rememberMe
     * @param bool $remember
     * @return loginRequestTPPublisherApi
     */
    public function remember($remember){
        $this->request['remember'] = $remember;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdTokenResponse
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['password'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'password' ) ] = $this->request['password'];
        }
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->request['apiToken'];
        }
        if (isset($this->request['remember'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'remember' ) ] = $this->request['remember'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/login', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdTokenResponse');
    }
}
/**
 * Invalidates the user token.
 */
class logoutRequestTPPublisherApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return logoutRequestTPPublisherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * User&#39;s JWT token
     * @param string $token
     * @return logoutRequestTPPublisherApi
     */
    public function token($token){
        $this->request['token'] = $token;
        return $this;
    }
    /**
     * 
     * @param string $authorization
     * @return logoutRequestTPPublisherApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdLogoutResponse
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['token'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'token' ) ] = $this->request['token'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/logout', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdLogoutResponse');
    }
}
/**
 * Registers a user
 */
class registerRequestTPPublisherApi  extends TPAPIBase {
    protected $request = array();
    /**
     * Application aid
     * @param string $aid
     * @return registerRequestTPPublisherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * User&#39;s email address
     * @param string $email
     * @return registerRequestTPPublisherApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * User&#39;s first name
     * @param string $firstName
     * @return registerRequestTPPublisherApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    /**
     * User&#39;s last name
     * @param string $lastName
     * @return registerRequestTPPublisherApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    /**
     * User&#39;s current password
     * @param string $password
     * @return registerRequestTPPublisherApi
     */
    public function password($password){
        $this->request['password'] = $password;
        return $this;
    }
    /**
     * User&#39;s consents
     * @param string $consents
     * @return registerRequestTPPublisherApi
     */
    public function consents($consents){
        $this->request['consents'] = $consents;
        return $this;
    }
    /**
     * JSON dictionary of the custom field: id as keys and user selection as values. For multi-select lists, the value will be an array of strings.
     * @param string $customFields
     * @return registerRequestTPPublisherApi
     */
    public function customFields($customFields){
        $this->request['customFields'] = $customFields;
        return $this;
    }
    /**
     * Passwordless user
     * @param bool $isPasswordless
     * @return registerRequestTPPublisherApi
     */
    public function isPasswordless($isPasswordless){
        $this->request['isPasswordless'] = $isPasswordless;
        return $this;
    }
    /**
     * Send email with link to user or not
     * @param bool $isMagicLinkSent
     * @return registerRequestTPPublisherApi
     */
    public function isMagicLinkSent($isMagicLinkSent){
        $this->request['isMagicLinkSent'] = $isMagicLinkSent;
        return $this;
    }
    /**
     * Public form ID. This field is optional. If this field is set, the validators of the form will check the custom fields of that form. The custom fields of other forms will be saved without being checked by the validators.
     * @param string $formId
     * @return registerRequestTPPublisherApi
     */
    public function formId($formId){
        $this->request['formId'] = $formId;
        return $this;
    }
    /**
     * Set confirmed email status during registration
     * @param bool $isConfirmedEmail
     * @return registerRequestTPPublisherApi
     */
    public function isConfirmedEmail($isConfirmedEmail){
        $this->request['isConfirmedEmail'] = $isConfirmedEmail;
        return $this;
    }
    /**
     * 
     * @param string $authorization
     * @return registerRequestTPPublisherApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    /**
     * Execute request
     * @return TPIdTokenResponse
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['firstName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->request['firstName'];
        }
        if (isset($this->request['lastName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->request['lastName'];
        }
        if (isset($this->request['password'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'password' ) ] = $this->request['password'];
        }
        if (isset($this->request['consents'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'consents' ) ] = $this->request['consents'];
        }
        if (isset($this->request['customFields'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customFields' ) ] = $this->request['customFields'];
        }
        if (isset($this->request['formId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'formId' ) ] = $this->request['formId'];
        }
        if (isset($this->request['isPasswordless'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'isPasswordless' ) ] = $this->request['isPasswordless'];
        }
        if (isset($this->request['isMagicLinkSent'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'isMagicLinkSent' ) ] = $this->request['isMagicLinkSent'];
        }
        if (isset($this->request['isConfirmedEmail'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'isConfirmedEmail' ) ] = $this->request['isConfirmedEmail'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        if ($this->request['authorization'] != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($this->request['authorization']);
        }
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/register', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPIdTokenResponse');
    }
}
