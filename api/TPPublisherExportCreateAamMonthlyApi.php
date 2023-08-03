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
 * The TPPublisherExportCreateAamMonthlyApi class.
 */
class TPPublisherExportCreateAamMonthlyApi  extends TPAPIBase {

    /**
     * @return createAAMMonthlyReportV2RequestTPPublisherExportCreateAamMonthlyApi
     */
    public function createAAMMonthlyReportV2Request(){

        return new createAAMMonthlyReportV2RequestTPPublisherExportCreateAamMonthlyApi($this->apiClient);
    }

}

/**
 * Create task to generate AAM monthly report (YYYY-MM-DD)
 */
class createAAMMonthlyReportV2RequestTPPublisherExportCreateAamMonthlyApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createAAMMonthlyReportV2RequestTPPublisherExportCreateAamMonthlyApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createAAMMonthlyReportV2RequestTPPublisherExportCreateAamMonthlyApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * Date in the YYYY-MM-DD format
     * @param string $dateFrom
     * @return createAAMMonthlyReportV2RequestTPPublisherExportCreateAamMonthlyApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    /**
     * Date in the YYYY-MM-DD format
     * @param string $dateTo
     * @return createAAMMonthlyReportV2RequestTPPublisherExportCreateAamMonthlyApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    /**
     * Enable snowflake
     * @param bool $snowflake
     * @return createAAMMonthlyReportV2RequestTPPublisherExportCreateAamMonthlyApi
     */
    public function snowflake($snowflake){
        $this->request['snowflake'] = $snowflake;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherExport
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['exportName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'exportName' ) ] = $this->request['exportName'];
        }
        if (isset($this->request['dateFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'dateFrom' ) ] = $this->request['dateFrom'];
        }
        if (isset($this->request['dateTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'dateTo' ) ] = $this->request['dateTo'];
        }
        if (isset($this->request['snowflake'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'snowflake' ) ] = $this->request['snowflake'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/aam/monthly/v2', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
