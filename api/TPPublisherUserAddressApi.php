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
 * The TPPublisherUserAddressApi class.
 */
class TPPublisherUserAddressApi  extends TPAPIBase {

    /**
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function createUserAddressRequest(){

        return new createUserAddressRequestTPPublisherUserAddressApi($this->apiClient);
    }
    /**
     * @return deleteUserAddressRequestTPPublisherUserAddressApi
     */
    public function deleteUserAddressRequest(){

        return new deleteUserAddressRequestTPPublisherUserAddressApi($this->apiClient);
    }
    /**
     * @return listUserAddressHistoryRequestTPPublisherUserAddressApi
     */
    public function listUserAddressHistoryRequest(){

        return new listUserAddressHistoryRequestTPPublisherUserAddressApi($this->apiClient);
    }
    /**
     * @return listUserAddressRequestTPPublisherUserAddressApi
     */
    public function listUserAddressRequest(){

        return new listUserAddressRequestTPPublisherUserAddressApi($this->apiClient);
    }
    /**
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function updateUserAddressRequest(){

        return new updateUserAddressRequestTPPublisherUserAddressApi($this->apiClient);
    }

}

/**
 * Create user address
 */
class createUserAddressRequestTPPublisherUserAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The country ID
     * @param string $countryId
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function countryId($countryId){
        $this->request['countryId'] = $countryId;
        return $this;
    }
    /**
     * The name of the city
     * @param string $city
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function city($city){
        $this->request['city'] = $city;
        return $this;
    }
    /**
     * The user&#39;s postal code
     * @param string $postalCode
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function postalCode($postalCode){
        $this->request['postalCode'] = $postalCode;
        return $this;
    }
    /**
     * The user&#39;s first address
     * @param string $address1
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function address1($address1){
        $this->request['address1'] = $address1;
        return $this;
    }
    /**
     * The ID of the country region
     * @param string $regionId
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function regionId($regionId){
        $this->request['regionId'] = $regionId;
        return $this;
    }
    /**
     * The company name
     * @param string $companyName
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function companyName($companyName){
        $this->request['companyName'] = $companyName;
        return $this;
    }
    /**
     * The user&#39;s first name
     * @param string $firstName
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    /**
     * The user&#39;s last name
     * @param string $lastName
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    /**
     * The user&#39;s second address
     * @param string $address2
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function address2($address2){
        $this->request['address2'] = $address2;
        return $this;
    }
    /**
     * The user&#39;s phone
     * @param string $phone
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function phone($phone){
        $this->request['phone'] = $phone;
        return $this;
    }
    /**
     * region_name
     * @param string $regionName
     * @return createUserAddressRequestTPPublisherUserAddressApi
     */
    public function regionName($regionName){
        $this->request['regionName'] = $regionName;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserAddress
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
        if (isset($this->request['regionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'regionId' ) ] = $this->request['regionId'];
        }
        if (isset($this->request['countryId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'countryId' ) ] = $this->request['countryId'];
        }
        if (isset($this->request['city'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'city' ) ] = $this->request['city'];
        }
        if (isset($this->request['postalCode'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'postalCode' ) ] = $this->request['postalCode'];
        }
        if (isset($this->request['companyName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'companyName' ) ] = $this->request['companyName'];
        }
        if (isset($this->request['firstName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->request['firstName'];
        }
        if (isset($this->request['lastName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->request['lastName'];
        }
        if (isset($this->request['address1'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'address1' ) ] = $this->request['address1'];
        }
        if (isset($this->request['address2'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'address2' ) ] = $this->request['address2'];
        }
        if (isset($this->request['phone'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'phone' ) ] = $this->request['phone'];
        }
        if (isset($this->request['regionName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'regionName' ) ] = $this->request['regionName'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/address/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserAddress');
    }
}
/**
 * Delete user address
 */
class deleteUserAddressRequestTPPublisherUserAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return deleteUserAddressRequestTPPublisherUserAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return deleteUserAddressRequestTPPublisherUserAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The public ID of the user address
     * @param string $userAddressId
     * @return deleteUserAddressRequestTPPublisherUserAddressApi
     */
    public function userAddressId($userAddressId){
        $this->request['userAddressId'] = $userAddressId;
        return $this;
    }
    /**
     * Execute request
     * @return bool
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
        if (isset($this->request['userAddressId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userAddressId' ) ] = $this->request['userAddressId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/address/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Get history of address changes
 */
class listUserAddressHistoryRequestTPPublisherUserAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listUserAddressHistoryRequestTPPublisherUserAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listUserAddressHistoryRequestTPPublisherUserAddressApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listUserAddressHistoryRequestTPPublisherUserAddressApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Date from
     * @param string $dateFrom
     * @return listUserAddressHistoryRequestTPPublisherUserAddressApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    /**
     * Date to
     * @param string $dateTo
     * @return listUserAddressHistoryRequestTPPublisherUserAddressApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserAddressHistory[]
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['dateFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'dateFrom' ) ] = $this->request['dateFrom'];
        }
        if (isset($this->request['dateTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'dateTo' ) ] = $this->request['dateTo'];
        }
        if (isset($this->request['offset'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['limit'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/address/history', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserAddressHistory', 'array');
    }
}
/**
 * Get user addresses
 */
class listUserAddressRequestTPPublisherUserAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listUserAddressRequestTPPublisherUserAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return listUserAddressRequestTPPublisherUserAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listUserAddressRequestTPPublisherUserAddressApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listUserAddressRequestTPPublisherUserAddressApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserAddress[]
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
        $response = $this->apiClient->callAPI('/publisher/user/address/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserAddress', 'array');
    }
}
/**
 * Update user address
 */
class updateUserAddressRequestTPPublisherUserAddressApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The public ID of the user address
     * @param string $userAddressId
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function userAddressId($userAddressId){
        $this->request['userAddressId'] = $userAddressId;
        return $this;
    }
    /**
     * The country ID
     * @param string $countryId
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function countryId($countryId){
        $this->request['countryId'] = $countryId;
        return $this;
    }
    /**
     * The name of the city
     * @param string $city
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function city($city){
        $this->request['city'] = $city;
        return $this;
    }
    /**
     * The user&#39;s postal code
     * @param string $postalCode
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function postalCode($postalCode){
        $this->request['postalCode'] = $postalCode;
        return $this;
    }
    /**
     * The user&#39;s first address
     * @param string $address1
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function address1($address1){
        $this->request['address1'] = $address1;
        return $this;
    }
    /**
     * The ID of the country region
     * @param string $regionId
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function regionId($regionId){
        $this->request['regionId'] = $regionId;
        return $this;
    }
    /**
     * The company name
     * @param string $companyName
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function companyName($companyName){
        $this->request['companyName'] = $companyName;
        return $this;
    }
    /**
     * The user&#39;s first name
     * @param string $firstName
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    /**
     * The user&#39;s last name
     * @param string $lastName
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    /**
     * The user&#39;s second address
     * @param string $address2
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function address2($address2){
        $this->request['address2'] = $address2;
        return $this;
    }
    /**
     * The user&#39;s phone
     * @param string $phone
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function phone($phone){
        $this->request['phone'] = $phone;
        return $this;
    }
    /**
     * The name of the country region
     * @param string $regionName
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function regionName($regionName){
        $this->request['regionName'] = $regionName;
        return $this;
    }
    /**
     * The additional address fields (json)
     * @param string $additionalFields
     * @return updateUserAddressRequestTPPublisherUserAddressApi
     */
    public function additionalFields($additionalFields){
        $this->request['additionalFields'] = $additionalFields;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUserAddress
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
        if (isset($this->request['userAddressId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userAddressId' ) ] = $this->request['userAddressId'];
        }
        if (isset($this->request['regionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'regionId' ) ] = $this->request['regionId'];
        }
        if (isset($this->request['countryId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'countryId' ) ] = $this->request['countryId'];
        }
        if (isset($this->request['city'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'city' ) ] = $this->request['city'];
        }
        if (isset($this->request['postalCode'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'postalCode' ) ] = $this->request['postalCode'];
        }
        if (isset($this->request['companyName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'companyName' ) ] = $this->request['companyName'];
        }
        if (isset($this->request['firstName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->request['firstName'];
        }
        if (isset($this->request['lastName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->request['lastName'];
        }
        if (isset($this->request['address1'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'address1' ) ] = $this->request['address1'];
        }
        if (isset($this->request['address2'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'address2' ) ] = $this->request['address2'];
        }
        if (isset($this->request['phone'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'phone' ) ] = $this->request['phone'];
        }
        if (isset($this->request['regionName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'regionName' ) ] = $this->request['regionName'];
        }
        if (isset($this->request['additionalFields'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'additionalFields' ) ] = $this->request['additionalFields'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/address/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUserAddress');
    }
}
