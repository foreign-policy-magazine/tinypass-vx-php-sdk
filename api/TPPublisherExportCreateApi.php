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
 * The TPPublisherExportCreateApi class.
 */
class TPPublisherExportCreateApi  extends TPAPIBase {

    /**
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function createAccessReportExportRequest(){

        return new createAccessReportExportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function createDailyActivityReportExportRequest(){

        return new createDailyActivityReportExportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function createMonthlyActivityReportExportRequest(){

        return new createMonthlyActivityReportExportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function createSubscriptionDetailedReportRequest(){

        return new createSubscriptionDetailedReportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createSubscriptionSummaryReportRequestTPPublisherExportCreateApi
     */
    public function createSubscriptionSummaryReportRequest(){

        return new createSubscriptionSummaryReportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createTermChangeReportExportRequestTPPublisherExportCreateApi
     */
    public function createTermChangeReportExportRequest(){

        return new createTermChangeReportExportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createTransactionsReportRequestTPPublisherExportCreateApi
     */
    public function createTransactionsReportRequest(){

        return new createTransactionsReportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function createUserExportRequest(){

        return new createUserExportRequestTPPublisherExportCreateApi($this->apiClient);
    }

}

/**
 * Create task to generate access report
 */
class createAccessReportExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * Date from
     * @param string $dateFrom
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    /**
     * Date to
     * @param string $dateTo
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    /**
     * Access status
     * @param string $accessStatus
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function accessStatus($accessStatus){
        $this->request['accessStatus'] = $accessStatus;
        return $this;
    }
    /**
     * Term type
     * @param string[] $termType
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    /**
     * Term ID
     * @param string[] $termId
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    /**
     * Next billing date
     * @param string $nextBillingDate
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function nextBillingDate($nextBillingDate){
        $this->request['nextBillingDate'] = $nextBillingDate;
        return $this;
    }
    /**
     * Last payment status
     * @param string $lastPaymentStatus
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
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
        $response = $this->apiClient->callAPI('/publisher/export/create/accessReportExport', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
/**
 * Create task to generate daily activity report
 */
class createDailyActivityReportExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * Date
     * @param string $date
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function date($date){
        $this->request['date'] = $date;
        return $this;
    }
    /**
     * Term type
     * @param string[] $termType
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    /**
     * Currency
     * @param string $currency
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function currency($currency){
        $this->request['currency'] = $currency;
        return $this;
    }
    /**
     * Currency List
     * @param string[] $currencyList
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function currencyList($currencyList){
        $this->request['currencyList'] = $currencyList;
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
        if (isset($this->request['date'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'date' ) ] = $this->request['date'];
        }
        if (isset($this->request['termType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termType' ) ] = $this->request['termType'];
        }
        if (isset($this->request['currency'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currency' ) ] = $this->request['currency'];
        }
        if (isset($this->request['currencyList'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currencyList' ) ] = $this->request['currencyList'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/dailyActivityReportExport', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
/**
 * Create task to generate monthly activity report
 */
class createMonthlyActivityReportExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * Number of month
     * @param int $month
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function month($month){
        $this->request['month'] = $month;
        return $this;
    }
    /**
     * Year
     * @param int $year
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function year($year){
        $this->request['year'] = $year;
        return $this;
    }
    /**
     * Term type
     * @param string[] $termType
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    /**
     * Currency
     * @param string $currency
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function currency($currency){
        $this->request['currency'] = $currency;
        return $this;
    }
    /**
     * Currency list
     * @param string[] $currencyList
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function currencyList($currencyList){
        $this->request['currencyList'] = $currencyList;
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
        if (isset($this->request['month'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'month' ) ] = $this->request['month'];
        }
        if (isset($this->request['year'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'year' ) ] = $this->request['year'];
        }
        if (isset($this->request['termType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termType' ) ] = $this->request['termType'];
        }
        if (isset($this->request['currency'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currency' ) ] = $this->request['currency'];
        }
        if (isset($this->request['currencyList'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currencyList' ) ] = $this->request['currencyList'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/monthlyActivityReportExport', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
/**
 * Create task to generate subscription details report (UTC)
 */
class createSubscriptionDetailedReportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Search for new subscriptions
     * @param bool $searchNewSubscriptions
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchNewSubscriptions($searchNewSubscriptions){
        $this->request['searchNewSubscriptions'] = $searchNewSubscriptions;
        return $this;
    }
    /**
     * Date to be used in new subscriptions search, search_new_subscriptions should be \&quot;TRUE\&quot;
     * @param string $newSubscriptionsCreatedFrom
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function newSubscriptionsCreatedFrom($newSubscriptionsCreatedFrom){
        $this->request['newSubscriptionsCreatedFrom'] = $newSubscriptionsCreatedFrom;
        return $this;
    }
    /**
     * Date to be used in new subscriptions search, search_new_subscriptions should be \&quot;TRUE\&quot;
     * @param string $newSubscriptionsCreatedTo
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function newSubscriptionsCreatedTo($newSubscriptionsCreatedTo){
        $this->request['newSubscriptionsCreatedTo'] = $newSubscriptionsCreatedTo;
        return $this;
    }
    /**
     * Search for active subscriptions
     * @param bool $searchActiveNowSubscriptions
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchActiveNowSubscriptions($searchActiveNowSubscriptions){
        $this->request['searchActiveNowSubscriptions'] = $searchActiveNowSubscriptions;
        return $this;
    }
    /**
     * Statuses for new subscriptions search (active, failedAndRetry), required parameter search_active_now_subscriptions
     * @param string[] $activeNowSubscriptionsStatuses
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function activeNowSubscriptionsStatuses($activeNowSubscriptionsStatuses){
        $this->request['activeNowSubscriptionsStatuses'] = $activeNowSubscriptionsStatuses;
        return $this;
    }
    /**
     * Search for inactive subscriptions
     * @param bool $searchInactiveSubscriptions
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchInactiveSubscriptions($searchInactiveSubscriptions){
        $this->request['searchInactiveSubscriptions'] = $searchInactiveSubscriptions;
        return $this;
    }
    /**
     * Statuses for inactive subscriptions search (cancelled, paymentFailure, expired, completed, upgraded), required parameter search_inactive_subscriptions
     * @param string[] $inactiveSubscriptionsStatuses
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function inactiveSubscriptionsStatuses($inactiveSubscriptionsStatuses){
        $this->request['inactiveSubscriptionsStatuses'] = $inactiveSubscriptionsStatuses;
        return $this;
    }
    /**
     * Date to be used in inactive subscriptions search, search_inactive_subscriptions should be \&quot;TRUE\&quot;
     * @param string $subscriptionsInactiveFrom
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsInactiveFrom($subscriptionsInactiveFrom){
        $this->request['subscriptionsInactiveFrom'] = $subscriptionsInactiveFrom;
        return $this;
    }
    /**
     * Date to be used in inactive subscriptions search, search_inactive_subscriptions should be \&quot;TRUE\&quot;
     * @param string $subscriptionsInactiveTo
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsInactiveTo($subscriptionsInactiveTo){
        $this->request['subscriptionsInactiveTo'] = $subscriptionsInactiveTo;
        return $this;
    }
    /**
     * Search for updated subscriptions
     * @param bool $searchUpdatedSubscriptions
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchUpdatedSubscriptions($searchUpdatedSubscriptions){
        $this->request['searchUpdatedSubscriptions'] = $searchUpdatedSubscriptions;
        return $this;
    }
    /**
     * Status for updated subscriptions search (renewed), search_updated_subscriptions should be \&quot;TRUE\&quot;
     * @param string[] $updatedSubscriptionsStatuses
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function updatedSubscriptionsStatuses($updatedSubscriptionsStatuses){
        $this->request['updatedSubscriptionsStatuses'] = $updatedSubscriptionsStatuses;
        return $this;
    }
    /**
     * Date to be used in updated subscriptions search, search_updated_subscriptions should be \&quot;TRUE\&quot;
     * @param string $subscriptionsUpdatedFrom
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsUpdatedFrom($subscriptionsUpdatedFrom){
        $this->request['subscriptionsUpdatedFrom'] = $subscriptionsUpdatedFrom;
        return $this;
    }
    /**
     * Date to be used in updated subscriptions search, search_updated_subscriptions should be \&quot;TRUE\&quot;
     * @param string $subscriptionsUpdatedTo
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsUpdatedTo($subscriptionsUpdatedTo){
        $this->request['subscriptionsUpdatedTo'] = $subscriptionsUpdatedTo;
        return $this;
    }
    /**
     * Is filter by auto renewing subscriptions enabled
     * @param bool $searchAutoRenewingSubscriptions
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchAutoRenewingSubscriptions($searchAutoRenewingSubscriptions){
        $this->request['searchAutoRenewingSubscriptions'] = $searchAutoRenewingSubscriptions;
        return $this;
    }
    /**
     * Search for auto-renewing subscriptions, search_auto_renewing_subscriptions should be \&quot;TRUE\&quot;
     * @param bool $subscriptionsAutoRenewing
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsAutoRenewing($subscriptionsAutoRenewing){
        $this->request['subscriptionsAutoRenewing'] = $subscriptionsAutoRenewing;
        return $this;
    }
    /**
     * Is filter by next billing date enabled
     * @param bool $searchSubscriptionsByNextBillingDate
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchSubscriptionsByNextBillingDate($searchSubscriptionsByNextBillingDate){
        $this->request['searchSubscriptionsByNextBillingDate'] = $searchSubscriptionsByNextBillingDate;
        return $this;
    }
    /**
     * Date to be used in search for subscriptions by next billing date, required parameter search_subscriptions_by_next_billing_date
     * @param string $subscriptionsNextBillingDateFrom
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsNextBillingDateFrom($subscriptionsNextBillingDateFrom){
        $this->request['subscriptionsNextBillingDateFrom'] = $subscriptionsNextBillingDateFrom;
        return $this;
    }
    /**
     * Date to be used in search for subscriptions by next billing date, required parameter search_subscriptions_by_next_billing_date
     * @param string $subscriptionsNextBillingDateTo
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsNextBillingDateTo($subscriptionsNextBillingDateTo){
        $this->request['subscriptionsNextBillingDateTo'] = $subscriptionsNextBillingDateTo;
        return $this;
    }
    /**
     * Is filter by terms enabled
     * @param bool $searchSubscriptionsByTerms
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchSubscriptionsByTerms($searchSubscriptionsByTerms){
        $this->request['searchSubscriptionsByTerms'] = $searchSubscriptionsByTerms;
        return $this;
    }
    /**
     * Subscription term pubId list, search_subscriptions_by_terms should be \&quot;TRUE\&quot;
     * @param string[] $subscriptionsTerms
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsTerms($subscriptionsTerms){
        $this->request['subscriptionsTerms'] = $subscriptionsTerms;
        return $this;
    }
    /**
     * Subscription term type list (payment, external, gift), search_subscriptions_by_terms should be \&quot;TRUE\&quot;
     * @param string[] $subscriptionsTermTypes
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsTermTypes($subscriptionsTermTypes){
        $this->request['subscriptionsTermTypes'] = $subscriptionsTermTypes;
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
        if (isset($this->request['q'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->request['q'];
        }
        if (isset($this->request['searchNewSubscriptions'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'searchNewSubscriptions' ) ] = $this->request['searchNewSubscriptions'];
        }
        if (isset($this->request['newSubscriptionsCreatedFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'newSubscriptionsCreatedFrom' ) ] = $this->request['newSubscriptionsCreatedFrom'];
        }
        if (isset($this->request['newSubscriptionsCreatedTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'newSubscriptionsCreatedTo' ) ] = $this->request['newSubscriptionsCreatedTo'];
        }
        if (isset($this->request['searchActiveNowSubscriptions'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'searchActiveNowSubscriptions' ) ] = $this->request['searchActiveNowSubscriptions'];
        }
        if (isset($this->request['activeNowSubscriptionsStatuses'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'activeNowSubscriptionsStatuses' ) ] = $this->request['activeNowSubscriptionsStatuses'];
        }
        if (isset($this->request['searchInactiveSubscriptions'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'searchInactiveSubscriptions' ) ] = $this->request['searchInactiveSubscriptions'];
        }
        if (isset($this->request['inactiveSubscriptionsStatuses'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'inactiveSubscriptionsStatuses' ) ] = $this->request['inactiveSubscriptionsStatuses'];
        }
        if (isset($this->request['subscriptionsInactiveFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionsInactiveFrom' ) ] = $this->request['subscriptionsInactiveFrom'];
        }
        if (isset($this->request['subscriptionsInactiveTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionsInactiveTo' ) ] = $this->request['subscriptionsInactiveTo'];
        }
        if (isset($this->request['searchUpdatedSubscriptions'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'searchUpdatedSubscriptions' ) ] = $this->request['searchUpdatedSubscriptions'];
        }
        if (isset($this->request['updatedSubscriptionsStatuses'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'updatedSubscriptionsStatuses' ) ] = $this->request['updatedSubscriptionsStatuses'];
        }
        if (isset($this->request['subscriptionsUpdatedFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionsUpdatedFrom' ) ] = $this->request['subscriptionsUpdatedFrom'];
        }
        if (isset($this->request['subscriptionsUpdatedTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionsUpdatedTo' ) ] = $this->request['subscriptionsUpdatedTo'];
        }
        if (isset($this->request['searchAutoRenewingSubscriptions'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'searchAutoRenewingSubscriptions' ) ] = $this->request['searchAutoRenewingSubscriptions'];
        }
        if (isset($this->request['subscriptionsAutoRenewing'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionsAutoRenewing' ) ] = $this->request['subscriptionsAutoRenewing'];
        }
        if (isset($this->request['searchSubscriptionsByNextBillingDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'searchSubscriptionsByNextBillingDate' ) ] = $this->request['searchSubscriptionsByNextBillingDate'];
        }
        if (isset($this->request['subscriptionsNextBillingDateFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionsNextBillingDateFrom' ) ] = $this->request['subscriptionsNextBillingDateFrom'];
        }
        if (isset($this->request['subscriptionsNextBillingDateTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionsNextBillingDateTo' ) ] = $this->request['subscriptionsNextBillingDateTo'];
        }
        if (isset($this->request['searchSubscriptionsByTerms'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'searchSubscriptionsByTerms' ) ] = $this->request['searchSubscriptionsByTerms'];
        }
        if (isset($this->request['subscriptionsTerms'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionsTerms' ) ] = $this->request['subscriptionsTerms'];
        }
        if (isset($this->request['subscriptionsTermTypes'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionsTermTypes' ) ] = $this->request['subscriptionsTermTypes'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/subscriptionDetailsReport', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
/**
 * Create task to generate subscription summary report (UTC)
 */
class createSubscriptionSummaryReportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createSubscriptionSummaryReportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createSubscriptionSummaryReportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * The first date of the report range
     * @param string $dateFrom
     * @return createSubscriptionSummaryReportRequestTPPublisherExportCreateApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    /**
     * The last date of the report range
     * @param string $dateTo
     * @return createSubscriptionSummaryReportRequestTPPublisherExportCreateApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
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
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/subscriptionSummaryReport', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
/**
 * Create task to generate upgrade report
 */
class createTermChangeReportExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createTermChangeReportExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createTermChangeReportExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * Date from
     * @param string $dateFrom
     * @return createTermChangeReportExportRequestTPPublisherExportCreateApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    /**
     * Date to
     * @param string $dateTo
     * @return createTermChangeReportExportRequestTPPublisherExportCreateApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
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
        $response = $this->apiClient->callAPI('/publisher/export/create/termChangeReportExport', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
/**
 * Create task to generate transactions report (UTC)
 */
class createTransactionsReportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createTransactionsReportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createTransactionsReportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * The transactions type (\&quot;all\&quot;, \&quot;purchases\&quot;, or \&quot;refunds\&quot;)
     * @param string $transactionsType
     * @return createTransactionsReportRequestTPPublisherExportCreateApi
     */
    public function transactionsType($transactionsType){
        $this->request['transactionsType'] = $transactionsType;
        return $this;
    }
    /**
     * Field to order by. Possible values: payment_date
     * @param string $orderBy
     * @return createTransactionsReportRequestTPPublisherExportCreateApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction. Possible values: asc, desc
     * @param string $orderDirection
     * @return createTransactionsReportRequestTPPublisherExportCreateApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return createTransactionsReportRequestTPPublisherExportCreateApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Date from
     * @param string $dateFrom
     * @return createTransactionsReportRequestTPPublisherExportCreateApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    /**
     * Date to
     * @param string $dateTo
     * @return createTransactionsReportRequestTPPublisherExportCreateApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
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
        if (isset($this->request['transactionsType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'transactionsType' ) ] = $this->request['transactionsType'];
        }
        if (isset($this->request['orderBy'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        if (isset($this->request['q'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->request['q'];
        }
        if (isset($this->request['dateFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'dateFrom' ) ] = $this->request['dateFrom'];
        }
        if (isset($this->request['dateTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'dateTo' ) ] = $this->request['dateTo'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/transactionsReport', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
/**
 * Create task to generate user search report
 */
class createUserExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * List the names of the custom fields to include in the report
     * @param string[] $exportCustomFields
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function exportCustomFields($exportCustomFields){
        $this->request['exportCustomFields'] = $exportCustomFields;
        return $this;
    }
    /**
     * Export all the custom fields
     * @param bool $exportAllCustomFields
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function exportAllCustomFields($exportAllCustomFields){
        $this->request['exportAllCustomFields'] = $exportAllCustomFields;
        return $this;
    }
    /**
     * Whether to include notes about users in the report
     * @param bool $includeNotes
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function includeNotes($includeNotes){
        $this->request['includeNotes'] = $includeNotes;
        return $this;
    }
    /**
     * Finds users whose names start with this keyword.
     * @param string $name
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * Finds users who contain this keyword in their emails.
     * @param string $email
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * Find users which was registered from selected date
     * @param string $registeredFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function registeredFrom($registeredFrom){
        $this->request['registeredFrom'] = $registeredFrom;
        return $this;
    }
    /**
     * Find users which was registered until selected date
     * @param string $registeredUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function registeredUntil($registeredUntil){
        $this->request['registeredUntil'] = $registeredUntil;
        return $this;
    }
    /**
     * Find users who have access to select resources. Resource IDs (RIDs) are accepted values.
     * @param string[] $accessToResources
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function accessToResources($accessToResources){
        $this->request['accessToResources'] = $accessToResources;
        return $this;
    }
    /**
     * Find users who have converted on select terms. Term IDs are accepted values.
     * @param string[] $convertedTerms
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function convertedTerms($convertedTerms){
        $this->request['convertedTerms'] = $convertedTerms;
        return $this;
    }
    /**
     * Find users who have any ACTIVE access from this date. The date format is a unix timestamp.
     * @param string $accessFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function accessFrom($accessFrom){
        $this->request['accessFrom'] = $accessFrom;
        return $this;
    }
    /**
     * Find users who have any access until this date. The date format is a unix timestamp.
     * @param string $accessUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function accessUntil($accessUntil){
        $this->request['accessUntil'] = $accessUntil;
        return $this;
    }
    /**
     * Find users who have converted on any term from this date. The date format is a unix timestamp.
     * @param string $convertedTermFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function convertedTermFrom($convertedTermFrom){
        $this->request['convertedTermFrom'] = $convertedTermFrom;
        return $this;
    }
    /**
     * Find users who have converted on any term until this date. The date format is a unix timestamp.
     * @param string $convertedTermUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function convertedTermUntil($convertedTermUntil){
        $this->request['convertedTermUntil'] = $convertedTermUntil;
        return $this;
    }
    /**
     * Find users who have converted on any term and have specific sharing type.
     * @param string $convertedTermSharingType
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function convertedTermSharingType($convertedTermSharingType){
        $this->request['convertedTermSharingType'] = $convertedTermSharingType;
        return $this;
    }
    /**
     * Find users who have redeemed select promotions. Promotion public IDs are accepted values. Promotion public IDs can be obtained by visiting Manage→Promotions from the Piano Dashboard.
     * @param string[] $redeemedPromotions
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function redeemedPromotions($redeemedPromotions){
        $this->request['redeemedPromotions'] = $redeemedPromotions;
        return $this;
    }
    /**
     * Find users who have redeemed on any promotion on or after this date. The date format is a unix timestamp.
     * @param string $redeemedPromotionFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function redeemedPromotionFrom($redeemedPromotionFrom){
        $this->request['redeemedPromotionFrom'] = $redeemedPromotionFrom;
        return $this;
    }
    /**
     * Find users who have redeemed on any promotion on or before this date. The date format is a unix timestamp.
     * @param string $redeemedPromotionUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function redeemedPromotionUntil($redeemedPromotionUntil){
        $this->request['redeemedPromotionUntil'] = $redeemedPromotionUntil;
        return $this;
    }
    /**
     * Find users who have any trial subscription at the present time.
     * @param bool $trialPeriodIsActive
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function trialPeriodIsActive($trialPeriodIsActive){
        $this->request['trialPeriodIsActive'] = $trialPeriodIsActive;
        return $this;
    }
    /**
     * If user has ever used trial period
     * @param bool $hasTrialPeriod
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasTrialPeriod($hasTrialPeriod){
        $this->request['hasTrialPeriod'] = $hasTrialPeriod;
        return $this;
    }
    /**
     * Find users who have any type of access (access that is not expired or will never expire).
     * @param bool $hasAccess
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasAccess($hasAccess){
        $this->request['hasAccess'] = $hasAccess;
        return $this;
    }
    /**
     * Find users who have converted on any term.
     * @param bool $hasConversionTerm
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasConversionTerm($hasConversionTerm){
        $this->request['hasConversionTerm'] = $hasConversionTerm;
        return $this;
    }
    /**
     * If user has ever used promo code
     * @param bool $hasRedeemedPromotion
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasRedeemedPromotion($hasRedeemedPromotion){
        $this->request['hasRedeemedPromotion'] = $hasRedeemedPromotion;
        return $this;
    }
    /**
     * Find users who redeemed a promotion, including those redeemed when signing up for a free trial. In these cases, the promotion had not been applied during the period of your search but were applied as soon as the trial period ended.
     * @param bool $includeTrialRedemptions
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function includeTrialRedemptions($includeTrialRedemptions){
        $this->request['includeTrialRedemptions'] = $includeTrialRedemptions;
        return $this;
    }
    /**
     * Find users who have converted on particular types of terms. The accepted value of each type of term is a number: 0 (N/A), 1 (payment), 2 (ad view), 3 (registration), 4 (newsletter), 5 (external), 6 (custom), 7 (access granted), and 8 (gift).
     * @param string[] $convertedTermTypes
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function convertedTermTypes($convertedTermTypes){
        $this->request['convertedTermTypes'] = $convertedTermTypes;
        return $this;
    }
    /**
     * Find users which have conversion terms for selected term types
     * @param bool $hasConversionTermType
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasConversionTermType($hasConversionTermType){
        $this->request['hasConversionTermType'] = $hasConversionTermType;
        return $this;
    }
    /**
     * Select the currency of the payments to take into account. Format is ISO 4217 (Ex: USD).
     * @param string $spentMoneyCurrency
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function spentMoneyCurrency($spentMoneyCurrency){
        $this->request['spentMoneyCurrency'] = $spentMoneyCurrency;
        return $this;
    }
    /**
     * Find users who spent above a specified monetary value across all of their purchases and conversions. This value is formatted as a decimal. (Example: 10.03. to represent $10.03 or £10.03 or €10.03).
     * @param float $spentMoneyFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function spentMoneyFrom($spentMoneyFrom){
        $this->request['spentMoneyFrom'] = $spentMoneyFrom;
        return $this;
    }
    /**
     * Find users who spent below a specified monetary value across all of their purchases and conversions. This value is formatted as a decimal. (Ex: 10.03. to represent $10.03 or £10.03 or €10.03).
     * @param float $spentMoneyUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function spentMoneyUntil($spentMoneyUntil){
        $this->request['spentMoneyUntil'] = $spentMoneyUntil;
        return $this;
    }
    /**
     * Find users who bought something on or after this date. The date format is a unix timestamp.
     * @param string $spentFromDate
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function spentFromDate($spentFromDate){
        $this->request['spentFromDate'] = $spentFromDate;
        return $this;
    }
    /**
     * Find users who bought something on or before this date. The date format is a unix timestamp.
     * @param string $spentUntilDate
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function spentUntilDate($spentUntilDate){
        $this->request['spentUntilDate'] = $spentUntilDate;
        return $this;
    }
    /**
     * Find users who have used specific payment methods.The accepted values for each type of payment method: 1 (PayPal), 4 (BrainTree), 6 (TinyPass), 8 (AmazonMWS), 11 (PayPalBT), 12 (WorldPay_HPP), 13 (WorldPay_PayPal), 14 (WorldPay_Ideal), 15 (WorldPay_ELV), 16 (Spreedly_CC), 17 (Spreedly_Stripe_CC), 18 (Spreedly_Beanstream), 19 (EdgilPayway), 20 (WorldPay_CC_Token), 21 (Spreedly_PayU_Latam).
     * @param int[] $paymentMethods
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function paymentMethods($paymentMethods){
        $this->request['paymentMethods'] = $paymentMethods;
        return $this;
    }
    /**
     * Find users who had problems with auto-renewal of any subscription on or after this date. The date format is a unix timestamp.
     * @param string $billingFailureFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function billingFailureFrom($billingFailureFrom){
        $this->request['billingFailureFrom'] = $billingFailureFrom;
        return $this;
    }
    /**
     * Find users who had problems with auto-renewal of any subscription on or before this date. The date format is a unix timestamp.
     * @param string $billingFailureUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function billingFailureUntil($billingFailureUntil){
        $this->request['billingFailureUntil'] = $billingFailureUntil;
        return $this;
    }
    /**
     * Finds users who had any problems with billing.
     * @param bool $hadBillingFailure
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hadBillingFailure($hadBillingFailure){
        $this->request['hadBillingFailure'] = $hadBillingFailure;
        return $this;
    }
    /**
     * Finds users who have made any payment. Refunded payments are not taken into account. So if user had a payment and refunded it, he will not presented in the result list.
     * @param bool $hasPayment
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasPayment($hasPayment){
        $this->request['hasPayment'] = $hasPayment;
        return $this;
    }
    /**
     * Find users which have given external customer id
     * @param string $upiExtCustomerId
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function upiExtCustomerId($upiExtCustomerId){
        $this->request['upiExtCustomerId'] = $upiExtCustomerId;
        return $this;
    }
    /**
     * Find users whose cards will expire in selected dates
     * @param string $creditCardWillExpire
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function creditCardWillExpire($creditCardWillExpire){
        $this->request['creditCardWillExpire'] = $creditCardWillExpire;
        return $this;
    }
    /**
     * Find users who have active subscriptions to specified resources. Resource IDs (RIDs) are accepted values.
     * @param string[] $activeSubscriptionToResources
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function activeSubscriptionToResources($activeSubscriptionToResources){
        $this->request['activeSubscriptionToResources'] = $activeSubscriptionToResources;
        return $this;
    }
    /**
     * Finds users who have any active subscription. Set field to true in order to get only active users.
     * @param bool $hasActiveSubscription
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasActiveSubscription($hasActiveSubscription){
        $this->request['hasActiveSubscription'] = $hasActiveSubscription;
        return $this;
    }
    /**
     * Finds users who have any subscription starting on or after this date. This parameter depends on the has_subscription_starts parameter returning True. The date format is a unix timestamp.
     * @param string $subscriptionStartFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionStartFrom($subscriptionStartFrom){
        $this->request['subscriptionStartFrom'] = $subscriptionStartFrom;
        return $this;
    }
    /**
     * Finds users who have any subscription that started on or before this date. This parameter depends on the has_subscription_starts parameter returning True. The date format is a unix timestamp.
     * @param string $subscriptionStartUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionStartUntil($subscriptionStartUntil){
        $this->request['subscriptionStartUntil'] = $subscriptionStartUntil;
        return $this;
    }
    /**
     * Finds users who have any subscription renewing on or after this date. This parameter depends on the has_subscription_will_renew parameter. The date format is a unix timestamp.
     * @param string $subscriptionRenewFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionRenewFrom($subscriptionRenewFrom){
        $this->request['subscriptionRenewFrom'] = $subscriptionRenewFrom;
        return $this;
    }
    /**
     * Finds users who have any subscription renewing on or before this date. This parameter depends on the has_subscription_will_renew parameter. The date format is a unix timestamp.
     * @param string $subscriptionRenewUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionRenewUntil($subscriptionRenewUntil){
        $this->request['subscriptionRenewUntil'] = $subscriptionRenewUntil;
        return $this;
    }
    /**
     * Finds users who have any subscription expiring on or after this date. This parameter depends on the has_subscription_will_expire parameter. The date format is a unix timestamp.
     * @param string $subscriptionExpireFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionExpireFrom($subscriptionExpireFrom){
        $this->request['subscriptionExpireFrom'] = $subscriptionExpireFrom;
        return $this;
    }
    /**
     * Finds users who have any subscription expiring on or before this date. This parameter depends on the has_subscription_will_expire parameter. The date format is a unix timestamp.
     * @param string $subscriptionExpireUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionExpireUntil($subscriptionExpireUntil){
        $this->request['subscriptionExpireUntil'] = $subscriptionExpireUntil;
        return $this;
    }
    /**
     * Finds users who have any trial subscription expiring on or after this date. The date format is a unix timestamp.
     * @param string $trialExpireFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function trialExpireFrom($trialExpireFrom){
        $this->request['trialExpireFrom'] = $trialExpireFrom;
        return $this;
    }
    /**
     * Finds users who have any trial subscription expiring on or after this date. The date format is a unix timestamp.
     * @param string $trialExpireUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function trialExpireUntil($trialExpireUntil){
        $this->request['trialExpireUntil'] = $trialExpireUntil;
        return $this;
    }
    /**
     * Finds users with any subscriptions, including expired and canceled subscriptions.
     * @param bool $hasAnySubscriptions
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasAnySubscriptions($hasAnySubscriptions){
        $this->request['hasAnySubscriptions'] = $hasAnySubscriptions;
        return $this;
    }
    /**
     * Finds users who have any subscription with enabled auto-renew.
     * @param bool $hasSubscriptionWillRenew
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasSubscriptionWillRenew($hasSubscriptionWillRenew){
        $this->request['hasSubscriptionWillRenew'] = $hasSubscriptionWillRenew;
        return $this;
    }
    /**
     * Finds users who have any subscription which will expire.
     * @param bool $hasSubscriptionWillExpire
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasSubscriptionWillExpire($hasSubscriptionWillExpire){
        $this->request['hasSubscriptionWillExpire'] = $hasSubscriptionWillExpire;
        return $this;
    }
    /**
     * Finds users which have started subscription.
     * @param bool $hasSubscriptionStarts
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasSubscriptionStarts($hasSubscriptionStarts){
        $this->request['hasSubscriptionStarts'] = $hasSubscriptionStarts;
        return $this;
    }
    /**
     * Finds users who have any unresolved inquiry.
     * @param bool $hasUnresolvedInquiry
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasUnresolvedInquiry($hasUnresolvedInquiry){
        $this->request['hasUnresolvedInquiry'] = $hasUnresolvedInquiry;
        return $this;
    }
    /**
     * Finds users who have any submitted inquiry on or after this date. The date format is a unix timestamp.
     * @param string $submittedInquiryFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function submittedInquiryFrom($submittedInquiryFrom){
        $this->request['submittedInquiryFrom'] = $submittedInquiryFrom;
        return $this;
    }
    /**
     * Finds users who have any submitted inquiry on or before this date. The date format is a unix timestamp.
     * @param string $submittedInquiryUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function submittedInquiryUntil($submittedInquiryUntil){
        $this->request['submittedInquiryUntil'] = $submittedInquiryUntil;
        return $this;
    }
    /**
     * Finds users who received any inquiry response on or after this date. The date format is a unix timestamp.
     * @param string $receivedResponseFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function receivedResponseFrom($receivedResponseFrom){
        $this->request['receivedResponseFrom'] = $receivedResponseFrom;
        return $this;
    }
    /**
     * Finds users who received any inquiry response on or before this date. The date format is a unix timestamp.
     * @param string $receivedResponseUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function receivedResponseUntil($receivedResponseUntil){
        $this->request['receivedResponseUntil'] = $receivedResponseUntil;
        return $this;
    }
    /**
     * Finds users who have any resolved inquiry on or after this date. The date format is a unix timestamp.
     * @param string $resolvedInquiryFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function resolvedInquiryFrom($resolvedInquiryFrom){
        $this->request['resolvedInquiryFrom'] = $resolvedInquiryFrom;
        return $this;
    }
    /**
     * Finds users who have any resolved inquiry on or before this date. The date format is a unix timestamp.
     * @param string $resolvedInquiryUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function resolvedInquiryUntil($resolvedInquiryUntil){
        $this->request['resolvedInquiryUntil'] = $resolvedInquiryUntil;
        return $this;
    }
    /**
     * Finds users with submitted inquiries.
     * @param bool $hasSubmittedInquiry
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasSubmittedInquiry($hasSubmittedInquiry){
        $this->request['hasSubmittedInquiry'] = $hasSubmittedInquiry;
        return $this;
    }
    /**
     * Finds users with any inquiries that have been responded to.
     * @param bool $hasReceivedResponseInquiry
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasReceivedResponseInquiry($hasReceivedResponseInquiry){
        $this->request['hasReceivedResponseInquiry'] = $hasReceivedResponseInquiry;
        return $this;
    }
    /**
     * Finds users with any resolved inquiry.
     * @param bool $hasResolvedInquiry
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasResolvedInquiry($hasResolvedInquiry){
        $this->request['hasResolvedInquiry'] = $hasResolvedInquiry;
        return $this;
    }
    /**
     * Finds users who redeemed any licensing contract.
     * @param bool $hasLicensingContractRedemptions
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasLicensingContractRedemptions($hasLicensingContractRedemptions){
        $this->request['hasLicensingContractRedemptions'] = $hasLicensingContractRedemptions;
        return $this;
    }
    /**
     * Finds users who redeemed licensing contract with selected licensees.  Licensee IDs are accepted values.
     * @param string[] $selectedLicensees
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function selectedLicensees($selectedLicensees){
        $this->request['selectedLicensees'] = $selectedLicensees;
        return $this;
    }
    /**
     * Finds users who redeemed licensing contract with selected contracts.  Term IDs are accepted values.
     * @param string[] $selectedContracts
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function selectedContracts($selectedContracts){
        $this->request['selectedContracts'] = $selectedContracts;
        return $this;
    }
    /**
     * Finds users who redeemed licensing contract on or after this date. The date format is a unix timestamp.
     * @param string $licensingContractRedeemedFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function licensingContractRedeemedFrom($licensingContractRedeemedFrom){
        $this->request['licensingContractRedeemedFrom'] = $licensingContractRedeemedFrom;
        return $this;
    }
    /**
     * Finds users who redeemed licensing contract on or before this date. The date format is a unix timestamp.
     * @param string $licensingContractRedeemedUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function licensingContractRedeemedUntil($licensingContractRedeemedUntil){
        $this->request['licensingContractRedeemedUntil'] = $licensingContractRedeemedUntil;
        return $this;
    }
    /**
     * Defines searching field
     * @param string[] $dataType
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function dataType($dataType){
        $this->request['dataType'] = $dataType;
        return $this;
    }
    /**
     * Defines search data
     * @param string $data
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function data($data){
        $this->request['data'] = $data;
        return $this;
    }
    /**
     * Find users with any data
     * @param bool $hasData
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasData($hasData){
        $this->request['hasData'] = $hasData;
        return $this;
    }
    /**
     * Finds users who have last access time.
     * @param bool $hasLastAccessTime
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasLastAccessTime($hasLastAccessTime){
        $this->request['hasLastAccessTime'] = $hasLastAccessTime;
        return $this;
    }
    /**
     * Find users which have last access time from selected date
     * @param string $lastAccessTimeFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function lastAccessTimeFrom($lastAccessTimeFrom){
        $this->request['lastAccessTimeFrom'] = $lastAccessTimeFrom;
        return $this;
    }
    /**
     * Find users which have last access time until selected date
     * @param string $lastAccessTimeUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function lastAccessTimeUntil($lastAccessTimeUntil){
        $this->request['lastAccessTimeUntil'] = $lastAccessTimeUntil;
        return $this;
    }
    /**
     * Consent public IDs are accepted values. Specified values will be used along with consent_checked parameter.
     * @param string[] $selectedConsentsMap
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function selectedConsentsMap($selectedConsentsMap){
        $this->request['selectedConsentsMap'] = $selectedConsentsMap;
        return $this;
    }
    /**
     * Finds users who have checked consents. Accepted values: true/false.
     * @param bool $consentChecked
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function consentChecked($consentChecked){
        $this->request['consentChecked'] = $consentChecked;
        return $this;
    }
    /**
     * Finds user with following custom fields
     * @param string $customFields
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function customFields($customFields){
        $this->request['customFields'] = $customFields;
        return $this;
    }
    /**
     * Data source for user searching: VX or CF (id custom fields)
     * @param string $source
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function source($source){
        $this->request['source'] = $source;
        return $this;
    }
    /**
     * Find users whose cards will expire in selected dates
     * @param bool $invertCreditCardWillExpire
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function invertCreditCardWillExpire($invertCreditCardWillExpire){
        $this->request['invertCreditCardWillExpire'] = $invertCreditCardWillExpire;
        return $this;
    }
    /**
     * Find users who either validated or not their email.
     * @param bool $hasEmailConfirmationRequired
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasEmailConfirmationRequired($hasEmailConfirmationRequired){
        $this->request['hasEmailConfirmationRequired'] = $hasEmailConfirmationRequired;
        return $this;
    }
    /**
     * Finds users who accepted any consent. Accepted values: true/false. If this parameter is false, selected_consents_map and consent_has_data are ignored.
     * @param bool $consentHasData
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function consentHasData($consentHasData){
        $this->request['consentHasData'] = $consentHasData;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
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
        if (isset($this->request['exportCustomFields'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'exportCustomFields' ) ] = $this->request['exportCustomFields'];
        }
        if (isset($this->request['exportAllCustomFields'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'exportAllCustomFields' ) ] = $this->request['exportAllCustomFields'];
        }
        if (isset($this->request['includeNotes'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'includeNotes' ) ] = $this->request['includeNotes'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['registeredFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'registeredFrom' ) ] = $this->request['registeredFrom'];
        }
        if (isset($this->request['registeredUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'registeredUntil' ) ] = $this->request['registeredUntil'];
        }
        if (isset($this->request['accessToResources'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'accessToResources' ) ] = $this->request['accessToResources'];
        }
        if (isset($this->request['convertedTerms'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'convertedTerms' ) ] = $this->request['convertedTerms'];
        }
        if (isset($this->request['accessFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'accessFrom' ) ] = $this->request['accessFrom'];
        }
        if (isset($this->request['accessUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'accessUntil' ) ] = $this->request['accessUntil'];
        }
        if (isset($this->request['convertedTermFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'convertedTermFrom' ) ] = $this->request['convertedTermFrom'];
        }
        if (isset($this->request['convertedTermUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'convertedTermUntil' ) ] = $this->request['convertedTermUntil'];
        }
        if (isset($this->request['convertedTermSharingType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'convertedTermSharingType' ) ] = $this->request['convertedTermSharingType'];
        }
        if (isset($this->request['redeemedPromotions'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'redeemedPromotions' ) ] = $this->request['redeemedPromotions'];
        }
        if (isset($this->request['redeemedPromotionFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'redeemedPromotionFrom' ) ] = $this->request['redeemedPromotionFrom'];
        }
        if (isset($this->request['redeemedPromotionUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'redeemedPromotionUntil' ) ] = $this->request['redeemedPromotionUntil'];
        }
        if (isset($this->request['trialPeriodIsActive'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'trialPeriodIsActive' ) ] = $this->request['trialPeriodIsActive'];
        }
        if (isset($this->request['hasTrialPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasTrialPeriod' ) ] = $this->request['hasTrialPeriod'];
        }
        if (isset($this->request['hasAccess'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasAccess' ) ] = $this->request['hasAccess'];
        }
        if (isset($this->request['hasConversionTerm'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasConversionTerm' ) ] = $this->request['hasConversionTerm'];
        }
        if (isset($this->request['hasRedeemedPromotion'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasRedeemedPromotion' ) ] = $this->request['hasRedeemedPromotion'];
        }
        if (isset($this->request['includeTrialRedemptions'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'includeTrialRedemptions' ) ] = $this->request['includeTrialRedemptions'];
        }
        if (isset($this->request['convertedTermTypes'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'convertedTermTypes' ) ] = $this->request['convertedTermTypes'];
        }
        if (isset($this->request['hasConversionTermType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasConversionTermType' ) ] = $this->request['hasConversionTermType'];
        }
        if (isset($this->request['spentMoneyCurrency'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'spentMoneyCurrency' ) ] = $this->request['spentMoneyCurrency'];
        }
        if (isset($this->request['spentMoneyFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'spentMoneyFrom' ) ] = $this->request['spentMoneyFrom'];
        }
        if (isset($this->request['spentMoneyUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'spentMoneyUntil' ) ] = $this->request['spentMoneyUntil'];
        }
        if (isset($this->request['spentFromDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'spentFromDate' ) ] = $this->request['spentFromDate'];
        }
        if (isset($this->request['spentUntilDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'spentUntilDate' ) ] = $this->request['spentUntilDate'];
        }
        if (isset($this->request['paymentMethods'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentMethods' ) ] = $this->request['paymentMethods'];
        }
        if (isset($this->request['billingFailureFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingFailureFrom' ) ] = $this->request['billingFailureFrom'];
        }
        if (isset($this->request['billingFailureUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingFailureUntil' ) ] = $this->request['billingFailureUntil'];
        }
        if (isset($this->request['hadBillingFailure'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hadBillingFailure' ) ] = $this->request['hadBillingFailure'];
        }
        if (isset($this->request['hasPayment'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasPayment' ) ] = $this->request['hasPayment'];
        }
        if (isset($this->request['upiExtCustomerId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'upiExtCustomerId' ) ] = $this->request['upiExtCustomerId'];
        }
        if (isset($this->request['creditCardWillExpire'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'creditCardWillExpire' ) ] = $this->request['creditCardWillExpire'];
        }
        if (isset($this->request['activeSubscriptionToResources'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'activeSubscriptionToResources' ) ] = $this->request['activeSubscriptionToResources'];
        }
        if (isset($this->request['hasActiveSubscription'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasActiveSubscription' ) ] = $this->request['hasActiveSubscription'];
        }
        if (isset($this->request['subscriptionStartFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionStartFrom' ) ] = $this->request['subscriptionStartFrom'];
        }
        if (isset($this->request['subscriptionStartUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionStartUntil' ) ] = $this->request['subscriptionStartUntil'];
        }
        if (isset($this->request['subscriptionRenewFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionRenewFrom' ) ] = $this->request['subscriptionRenewFrom'];
        }
        if (isset($this->request['subscriptionRenewUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionRenewUntil' ) ] = $this->request['subscriptionRenewUntil'];
        }
        if (isset($this->request['subscriptionExpireFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionExpireFrom' ) ] = $this->request['subscriptionExpireFrom'];
        }
        if (isset($this->request['subscriptionExpireUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionExpireUntil' ) ] = $this->request['subscriptionExpireUntil'];
        }
        if (isset($this->request['trialExpireFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'trialExpireFrom' ) ] = $this->request['trialExpireFrom'];
        }
        if (isset($this->request['trialExpireUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'trialExpireUntil' ) ] = $this->request['trialExpireUntil'];
        }
        if (isset($this->request['hasAnySubscriptions'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasAnySubscriptions' ) ] = $this->request['hasAnySubscriptions'];
        }
        if (isset($this->request['hasSubscriptionWillRenew'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasSubscriptionWillRenew' ) ] = $this->request['hasSubscriptionWillRenew'];
        }
        if (isset($this->request['hasSubscriptionWillExpire'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasSubscriptionWillExpire' ) ] = $this->request['hasSubscriptionWillExpire'];
        }
        if (isset($this->request['hasSubscriptionStarts'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasSubscriptionStarts' ) ] = $this->request['hasSubscriptionStarts'];
        }
        if (isset($this->request['hasUnresolvedInquiry'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasUnresolvedInquiry' ) ] = $this->request['hasUnresolvedInquiry'];
        }
        if (isset($this->request['submittedInquiryFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'submittedInquiryFrom' ) ] = $this->request['submittedInquiryFrom'];
        }
        if (isset($this->request['submittedInquiryUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'submittedInquiryUntil' ) ] = $this->request['submittedInquiryUntil'];
        }
        if (isset($this->request['receivedResponseFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'receivedResponseFrom' ) ] = $this->request['receivedResponseFrom'];
        }
        if (isset($this->request['receivedResponseUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'receivedResponseUntil' ) ] = $this->request['receivedResponseUntil'];
        }
        if (isset($this->request['resolvedInquiryFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'resolvedInquiryFrom' ) ] = $this->request['resolvedInquiryFrom'];
        }
        if (isset($this->request['resolvedInquiryUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'resolvedInquiryUntil' ) ] = $this->request['resolvedInquiryUntil'];
        }
        if (isset($this->request['hasSubmittedInquiry'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasSubmittedInquiry' ) ] = $this->request['hasSubmittedInquiry'];
        }
        if (isset($this->request['hasReceivedResponseInquiry'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasReceivedResponseInquiry' ) ] = $this->request['hasReceivedResponseInquiry'];
        }
        if (isset($this->request['hasResolvedInquiry'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasResolvedInquiry' ) ] = $this->request['hasResolvedInquiry'];
        }
        if (isset($this->request['hasLicensingContractRedemptions'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasLicensingContractRedemptions' ) ] = $this->request['hasLicensingContractRedemptions'];
        }
        if (isset($this->request['selectedLicensees'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'selectedLicensees' ) ] = $this->request['selectedLicensees'];
        }
        if (isset($this->request['selectedContracts'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'selectedContracts' ) ] = $this->request['selectedContracts'];
        }
        if (isset($this->request['licensingContractRedeemedFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'licensingContractRedeemedFrom' ) ] = $this->request['licensingContractRedeemedFrom'];
        }
        if (isset($this->request['licensingContractRedeemedUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'licensingContractRedeemedUntil' ) ] = $this->request['licensingContractRedeemedUntil'];
        }
        if (isset($this->request['dataType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'dataType' ) ] = $this->request['dataType'];
        }
        if (isset($this->request['data'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'data' ) ] = $this->request['data'];
        }
        if (isset($this->request['hasData'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasData' ) ] = $this->request['hasData'];
        }
        if (isset($this->request['hasLastAccessTime'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasLastAccessTime' ) ] = $this->request['hasLastAccessTime'];
        }
        if (isset($this->request['lastAccessTimeFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastAccessTimeFrom' ) ] = $this->request['lastAccessTimeFrom'];
        }
        if (isset($this->request['lastAccessTimeUntil'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastAccessTimeUntil' ) ] = $this->request['lastAccessTimeUntil'];
        }
        if (isset($this->request['selectedConsentsMap'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'selectedConsentsMap' ) ] = $this->request['selectedConsentsMap'];
        }
        if (isset($this->request['consentChecked'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'consentChecked' ) ] = $this->request['consentChecked'];
        }
        if (isset($this->request['customFields'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'customFields' ) ] = $this->request['customFields'];
        }
        if (isset($this->request['source'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'source' ) ] = $this->request['source'];
        }
        if (isset($this->request['invertCreditCardWillExpire'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'invertCreditCardWillExpire' ) ] = $this->request['invertCreditCardWillExpire'];
        }
        if (isset($this->request['hasEmailConfirmationRequired'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'hasEmailConfirmationRequired' ) ] = $this->request['hasEmailConfirmationRequired'];
        }
        if (isset($this->request['consentHasData'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'consentHasData' ) ] = $this->request['consentHasData'];
        }
        if (isset($this->request['q'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->request['q'];
        }
        if (isset($this->request['orderBy'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/userExport', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
