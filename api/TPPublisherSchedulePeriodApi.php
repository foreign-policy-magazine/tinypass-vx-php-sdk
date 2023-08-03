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
 * The TPPublisherSchedulePeriodApi class.
 */
class TPPublisherSchedulePeriodApi  extends TPAPIBase {

    /**
     * @return addPeriodRequestTPPublisherSchedulePeriodApi
     */
    public function addPeriodRequest(){

        return new addPeriodRequestTPPublisherSchedulePeriodApi($this->apiClient);
    }
    /**
     * @return deletePeriodRequestTPPublisherSchedulePeriodApi
     */
    public function deletePeriodRequest(){

        return new deletePeriodRequestTPPublisherSchedulePeriodApi($this->apiClient);
    }
    /**
     * @return updatePeriodRequestTPPublisherSchedulePeriodApi
     */
    public function updatePeriodRequest(){

        return new updatePeriodRequestTPPublisherSchedulePeriodApi($this->apiClient);
    }

}

/**
 * Add period to schedule
 */
class addPeriodRequestTPPublisherSchedulePeriodApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The schedule ID
     * @param string $scheduleId
     * @return addPeriodRequestTPPublisherSchedulePeriodApi
     */
    public function scheduleId($scheduleId){
        $this->request['scheduleId'] = $scheduleId;
        return $this;
    }
    /**
     * The period name
     * @param string $name
     * @return addPeriodRequestTPPublisherSchedulePeriodApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The sell date of the period
     * @param string $sellDate
     * @return addPeriodRequestTPPublisherSchedulePeriodApi
     */
    public function sellDate($sellDate){
        $this->request['sellDate'] = $sellDate;
        return $this;
    }
    /**
     * The date when the period begins
     * @param string $beginDate
     * @return addPeriodRequestTPPublisherSchedulePeriodApi
     */
    public function beginDate($beginDate){
        $this->request['beginDate'] = $beginDate;
        return $this;
    }
    /**
     * The date when the period ends
     * @param string $endDate
     * @return addPeriodRequestTPPublisherSchedulePeriodApi
     */
    public function endDate($endDate){
        $this->request['endDate'] = $endDate;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPeriod
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['scheduleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleId' ) ] = $this->request['scheduleId'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['sellDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sellDate' ) ] = $this->request['sellDate'];
        }
        if (isset($this->request['beginDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'beginDate' ) ] = $this->request['beginDate'];
        }
        if (isset($this->request['endDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'endDate' ) ] = $this->request['endDate'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/schedule/period/add', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPeriod');
    }
}
/**
 * Delete period
 */
class deletePeriodRequestTPPublisherSchedulePeriodApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The period ID
     * @param string $periodId
     * @return deletePeriodRequestTPPublisherSchedulePeriodApi
     */
    public function periodId($periodId){
        $this->request['periodId'] = $periodId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherResult
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['periodId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'periodId' ) ] = $this->request['periodId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/schedule/period/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherResult');
    }
}
/**
 * Update period in schedule
 */
class updatePeriodRequestTPPublisherSchedulePeriodApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The schedule ID
     * @param string $scheduleId
     * @return updatePeriodRequestTPPublisherSchedulePeriodApi
     */
    public function scheduleId($scheduleId){
        $this->request['scheduleId'] = $scheduleId;
        return $this;
    }
    /**
     * The period ID
     * @param string $periodId
     * @return updatePeriodRequestTPPublisherSchedulePeriodApi
     */
    public function periodId($periodId){
        $this->request['periodId'] = $periodId;
        return $this;
    }
    /**
     * The period name
     * @param string $name
     * @return updatePeriodRequestTPPublisherSchedulePeriodApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The sell date of the period
     * @param string $sellDate
     * @return updatePeriodRequestTPPublisherSchedulePeriodApi
     */
    public function sellDate($sellDate){
        $this->request['sellDate'] = $sellDate;
        return $this;
    }
    /**
     * The date when the period begins
     * @param string $beginDate
     * @return updatePeriodRequestTPPublisherSchedulePeriodApi
     */
    public function beginDate($beginDate){
        $this->request['beginDate'] = $beginDate;
        return $this;
    }
    /**
     * The date when the period ends
     * @param string $endDate
     * @return updatePeriodRequestTPPublisherSchedulePeriodApi
     */
    public function endDate($endDate){
        $this->request['endDate'] = $endDate;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPeriod[]
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['scheduleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleId' ) ] = $this->request['scheduleId'];
        }
        if (isset($this->request['periodId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'periodId' ) ] = $this->request['periodId'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['sellDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sellDate' ) ] = $this->request['sellDate'];
        }
        if (isset($this->request['beginDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'beginDate' ) ] = $this->request['beginDate'];
        }
        if (isset($this->request['endDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'endDate' ) ] = $this->request['endDate'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/schedule/period/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPeriod', 'array');
    }
}
