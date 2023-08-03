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
 * The TPPublisherLicensingNotificationRuleApi class.
 */
class TPPublisherLicensingNotificationRuleApi  extends TPAPIBase {

    /**
     * @return archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function archiveLicenseeNotificationRuleRequest(){

        return new archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi($this->apiClient);
    }
    /**
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function createLicenseeNotificationRuleRequest(){

        return new createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi($this->apiClient);
    }
    /**
     * @return getNotificationRulesListRequestTPPublisherLicensingNotificationRuleApi
     */
    public function getNotificationRulesListRequest(){

        return new getNotificationRulesListRequestTPPublisherLicensingNotificationRuleApi($this->apiClient);
    }
    /**
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function updateLicenseeNotificationRuleRequest(){

        return new updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi($this->apiClient);
    }

}

/**
 * Archive notification rule
 */
class archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the licensee
     * @param string $licenseeId
     * @return archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    /**
     * The notification rule ID
     * @param string $notificationRuleId
     * @return archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleId($notificationRuleId){
        $this->request['notificationRuleId'] = $notificationRuleId;
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
        if (isset($this->request['licenseeId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->request['licenseeId'];
        }
        if (isset($this->request['notificationRuleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleId' ) ] = $this->request['notificationRuleId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/notificationRule/archive', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Create notification rule for licensee
 */
class createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the licensee
     * @param string $licenseeId
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    /**
     * Whether the notification rule works for all contracts
     * @param bool $isForAllContracts
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function isForAllContracts($isForAllContracts){
        $this->request['isForAllContracts'] = $isForAllContracts;
        return $this;
    }
    /**
     * The notification rule parameter
     * @param string $parameter
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function parameter($parameter){
        $this->request['parameter'] = $parameter;
        return $this;
    }
    /**
     * condition
     * @param string $condition
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function condition($condition){
        $this->request['condition'] = $condition;
        return $this;
    }
    /**
     * A JSON with the public IDs of the contracts
     * @param string $contractIdList
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function contractIdList($contractIdList){
        $this->request['contractIdList'] = $contractIdList;
        return $this;
    }
    /**
     * The value of the notification rule condition
     * @param int $conditionValue
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function conditionValue($conditionValue){
        $this->request['conditionValue'] = $conditionValue;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherLicenseeNotificationRule
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['licenseeId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->request['licenseeId'];
        }
        if (isset($this->request['contractIdList'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractIdList' ) ] = $this->request['contractIdList'];
        }
        if (isset($this->request['isForAllContracts'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'isForAllContracts' ) ] = $this->request['isForAllContracts'];
        }
        if (isset($this->request['parameter'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'parameter' ) ] = $this->request['parameter'];
        }
        if (isset($this->request['condition'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'condition' ) ] = $this->request['condition'];
        }
        if (isset($this->request['conditionValue'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'conditionValue' ) ] = $this->request['conditionValue'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/notificationRule/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherLicenseeNotificationRule');
    }
}
/**
 * Get notification rules by licensee ID
 */
class getNotificationRulesListRequestTPPublisherLicensingNotificationRuleApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getNotificationRulesListRequestTPPublisherLicensingNotificationRuleApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the licensee
     * @param string $licenseeId
     * @return getNotificationRulesListRequestTPPublisherLicensingNotificationRuleApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherLicenseeNotificationRule[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['licenseeId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->request['licenseeId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/notificationRule/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherLicenseeNotificationRule', 'array');
    }
}
/**
 * Update notification rule for licensee
 */
class updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The public ID of the licensee
     * @param string $licenseeId
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    /**
     * The notification rule ID
     * @param string $notificationRuleId
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleId($notificationRuleId){
        $this->request['notificationRuleId'] = $notificationRuleId;
        return $this;
    }
    /**
     * Whether the notification rule works for all contracts
     * @param bool $isForAllContracts
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function isForAllContracts($isForAllContracts){
        $this->request['isForAllContracts'] = $isForAllContracts;
        return $this;
    }
    /**
     * The notification rule parameter
     * @param string $parameter
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function parameter($parameter){
        $this->request['parameter'] = $parameter;
        return $this;
    }
    /**
     * condition
     * @param string $condition
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function condition($condition){
        $this->request['condition'] = $condition;
        return $this;
    }
    /**
     * A JSON with the public IDs of the contracts
     * @param string $contractIdList
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function contractIdList($contractIdList){
        $this->request['contractIdList'] = $contractIdList;
        return $this;
    }
    /**
     * The value of the notification rule condition
     * @param int $conditionValue
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function conditionValue($conditionValue){
        $this->request['conditionValue'] = $conditionValue;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherLicenseeNotificationRule
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['licenseeId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->request['licenseeId'];
        }
        if (isset($this->request['contractIdList'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractIdList' ) ] = $this->request['contractIdList'];
        }
        if (isset($this->request['notificationRuleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleId' ) ] = $this->request['notificationRuleId'];
        }
        if (isset($this->request['isForAllContracts'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'isForAllContracts' ) ] = $this->request['isForAllContracts'];
        }
        if (isset($this->request['parameter'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'parameter' ) ] = $this->request['parameter'];
        }
        if (isset($this->request['condition'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'condition' ) ] = $this->request['condition'];
        }
        if (isset($this->request['conditionValue'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'conditionValue' ) ] = $this->request['conditionValue'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/notificationRule/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherLicenseeNotificationRule');
    }
}
