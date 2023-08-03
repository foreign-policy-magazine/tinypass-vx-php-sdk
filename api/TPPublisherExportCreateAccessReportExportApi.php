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
 * The TPPublisherExportCreateAccessReportExportApi class.
 */
class TPPublisherExportCreateAccessReportExportApi  extends TPAPIBase {

    /**
     * @return createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi
     */
    public function createAccessReportExportTZRequest(){

        return new createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi($this->apiClient);
    }

}

/**
 * Create task to generate access report (dates in report indicate app&#39;s time)
 */
class createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * Date from
     * @param string $dateFrom
     * @return createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    /**
     * Date to
     * @param string $dateTo
     * @return createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    /**
     * Access status
     * @param string $accessStatus
     * @return createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi
     */
    public function accessStatus($accessStatus){
        $this->request['accessStatus'] = $accessStatus;
        return $this;
    }
    /**
     * Term type
     * @param string[] $termType
     * @return createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    /**
     * Term ID
     * @param string[] $termId
     * @return createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * Next billing date
     * @param string $nextBillingDate
     * @return createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi
     */
    public function nextBillingDate($nextBillingDate){
        $this->request['nextBillingDate'] = $nextBillingDate;
        return $this;
    }
    /**
     * Last payment status
     * @param string $lastPaymentStatus
     * @return createAccessReportExportTZRequestTPPublisherExportCreateAccessReportExportApi
     */
    public function lastPaymentStatus($lastPaymentStatus){
        $this->request['lastPaymentStatus'] = $lastPaymentStatus;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherExport
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['exportName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'exportName' ) ] = $this->request['exportName'];
        }
        if (isset($this->request['accessStatus'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessStatus' ) ] = $this->request['accessStatus'];
        }
        if (isset($this->request['termType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termType' ) ] = $this->request['termType'];
        }
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->request['termId'];
        }
        if (isset($this->request['nextBillingDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'nextBillingDate' ) ] = $this->request['nextBillingDate'];
        }
        if (isset($this->request['lastPaymentStatus'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'lastPaymentStatus' ) ] = $this->request['lastPaymentStatus'];
        }
        if (isset($this->request['dateFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'dateFrom' ) ] = $this->request['dateFrom'];
        }
        if (isset($this->request['dateTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'dateTo' ) ] = $this->request['dateTo'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/accessReportExport/v2', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
