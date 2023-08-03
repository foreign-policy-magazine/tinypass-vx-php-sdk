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
 * The TPPublisherLicensingScheduleContractPeriodsApi class.
 */
class TPPublisherLicensingScheduleContractPeriodsApi  extends TPAPIBase {

    /**
     * @return activateContractsPeriodsByScheduleRequestTPPublisherLicensingScheduleContractPeriodsApi
     */
    public function activateContractsPeriodsByScheduleRequest(){

        return new activateContractsPeriodsByScheduleRequestTPPublisherLicensingScheduleContractPeriodsApi($this->apiClient);
    }

}

/**
 * Activate periods for all contracts by schedule
 */
class activateContractsPeriodsByScheduleRequestTPPublisherLicensingScheduleContractPeriodsApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return activateContractsPeriodsByScheduleRequestTPPublisherLicensingScheduleContractPeriodsApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The schedule ID
     * @param string $scheduleId
     * @return activateContractsPeriodsByScheduleRequestTPPublisherLicensingScheduleContractPeriodsApi
     */
    public function scheduleId($scheduleId){
        $this->request['scheduleId'] = $scheduleId;
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
        if (isset($this->request['scheduleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleId' ) ] = $this->request['scheduleId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/schedule/contract/periods/activate', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
