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
 * The TPPublisherExportCreateSubscriptionDetailsReportApi class.
 */
class TPPublisherExportCreateSubscriptionDetailsReportApi  extends TPAPIBase {

    /**
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function createSubscriptionDetailedReportTZRequest(){

        return new createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi($this->apiClient);
    }

}

/**
 * Create task to generate subscription details report (dates in report indicate app&#39;s time)
 */
class createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The downloadable report name
     * @param string $exportName
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Search for new subscriptions
     * @param bool $searchNewSubscriptions
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function searchNewSubscriptions($searchNewSubscriptions){
        $this->request['searchNewSubscriptions'] = $searchNewSubscriptions;
        return $this;
    }
    /**
     * Date to be used in new subscriptions search, search_new_subscriptions should be \&quot;TRUE\&quot;
     * @param string $newSubscriptionsCreatedFrom
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function newSubscriptionsCreatedFrom($newSubscriptionsCreatedFrom){
        $this->request['newSubscriptionsCreatedFrom'] = $newSubscriptionsCreatedFrom;
        return $this;
    }
    /**
     * Date to be used in new subscriptions search, search_new_subscriptions should be \&quot;TRUE\&quot;
     * @param string $newSubscriptionsCreatedTo
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function newSubscriptionsCreatedTo($newSubscriptionsCreatedTo){
        $this->request['newSubscriptionsCreatedTo'] = $newSubscriptionsCreatedTo;
        return $this;
    }
    /**
     * Search for active subscriptions
     * @param bool $searchActiveNowSubscriptions
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function searchActiveNowSubscriptions($searchActiveNowSubscriptions){
        $this->request['searchActiveNowSubscriptions'] = $searchActiveNowSubscriptions;
        return $this;
    }
    /**
     * Statuses for new subscriptions search (active, failedAndRetry), required parameter search_active_now_subscriptions
     * @param string[] $activeNowSubscriptionsStatuses
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function activeNowSubscriptionsStatuses($activeNowSubscriptionsStatuses){
        $this->request['activeNowSubscriptionsStatuses'] = $activeNowSubscriptionsStatuses;
        return $this;
    }
    /**
     * Search for inactive subscriptions
     * @param bool $searchInactiveSubscriptions
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function searchInactiveSubscriptions($searchInactiveSubscriptions){
        $this->request['searchInactiveSubscriptions'] = $searchInactiveSubscriptions;
        return $this;
    }
    /**
     * Statuses for inactive subscriptions search (cancelled, paymentFailure, expired, completed, upgraded), required parameter search_inactive_subscriptions
     * @param string[] $inactiveSubscriptionsStatuses
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function inactiveSubscriptionsStatuses($inactiveSubscriptionsStatuses){
        $this->request['inactiveSubscriptionsStatuses'] = $inactiveSubscriptionsStatuses;
        return $this;
    }
    /**
     * Date to be used in inactive subscriptions search, search_inactive_subscriptions should be \&quot;TRUE\&quot;
     * @param string $subscriptionsInactiveFrom
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function subscriptionsInactiveFrom($subscriptionsInactiveFrom){
        $this->request['subscriptionsInactiveFrom'] = $subscriptionsInactiveFrom;
        return $this;
    }
    /**
     * Date to be used in inactive subscriptions search, search_inactive_subscriptions should be \&quot;TRUE\&quot;
     * @param string $subscriptionsInactiveTo
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function subscriptionsInactiveTo($subscriptionsInactiveTo){
        $this->request['subscriptionsInactiveTo'] = $subscriptionsInactiveTo;
        return $this;
    }
    /**
     * Search for updated subscriptions
     * @param bool $searchUpdatedSubscriptions
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function searchUpdatedSubscriptions($searchUpdatedSubscriptions){
        $this->request['searchUpdatedSubscriptions'] = $searchUpdatedSubscriptions;
        return $this;
    }
    /**
     * Status for updated subscriptions search (renewed), search_updated_subscriptions should be \&quot;TRUE\&quot;
     * @param string[] $updatedSubscriptionsStatuses
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function updatedSubscriptionsStatuses($updatedSubscriptionsStatuses){
        $this->request['updatedSubscriptionsStatuses'] = $updatedSubscriptionsStatuses;
        return $this;
    }
    /**
     * Date to be used in updated subscriptions search, search_updated_subscriptions should be \&quot;TRUE\&quot;
     * @param string $subscriptionsUpdatedFrom
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function subscriptionsUpdatedFrom($subscriptionsUpdatedFrom){
        $this->request['subscriptionsUpdatedFrom'] = $subscriptionsUpdatedFrom;
        return $this;
    }
    /**
     * Date to be used in updated subscriptions search, search_updated_subscriptions should be \&quot;TRUE\&quot;
     * @param string $subscriptionsUpdatedTo
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function subscriptionsUpdatedTo($subscriptionsUpdatedTo){
        $this->request['subscriptionsUpdatedTo'] = $subscriptionsUpdatedTo;
        return $this;
    }
    /**
     * Is filter by auto renewing subscriptions enabled
     * @param bool $searchAutoRenewingSubscriptions
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function searchAutoRenewingSubscriptions($searchAutoRenewingSubscriptions){
        $this->request['searchAutoRenewingSubscriptions'] = $searchAutoRenewingSubscriptions;
        return $this;
    }
    /**
     * Search for auto-renewing subscriptions, search_auto_renewing_subscriptions should be \&quot;TRUE\&quot;
     * @param bool $subscriptionsAutoRenewing
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function subscriptionsAutoRenewing($subscriptionsAutoRenewing){
        $this->request['subscriptionsAutoRenewing'] = $subscriptionsAutoRenewing;
        return $this;
    }
    /**
     * Is filter by next billing date enabled
     * @param bool $searchSubscriptionsByNextBillingDate
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function searchSubscriptionsByNextBillingDate($searchSubscriptionsByNextBillingDate){
        $this->request['searchSubscriptionsByNextBillingDate'] = $searchSubscriptionsByNextBillingDate;
        return $this;
    }
    /**
     * Date to be used in search for subscriptions by next billing date, required parameter search_subscriptions_by_next_billing_date
     * @param string $subscriptionsNextBillingDateFrom
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function subscriptionsNextBillingDateFrom($subscriptionsNextBillingDateFrom){
        $this->request['subscriptionsNextBillingDateFrom'] = $subscriptionsNextBillingDateFrom;
        return $this;
    }
    /**
     * Date to be used in search for subscriptions by next billing date, required parameter search_subscriptions_by_next_billing_date
     * @param string $subscriptionsNextBillingDateTo
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function subscriptionsNextBillingDateTo($subscriptionsNextBillingDateTo){
        $this->request['subscriptionsNextBillingDateTo'] = $subscriptionsNextBillingDateTo;
        return $this;
    }
    /**
     * Is filter by terms enabled
     * @param bool $searchSubscriptionsByTerms
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function searchSubscriptionsByTerms($searchSubscriptionsByTerms){
        $this->request['searchSubscriptionsByTerms'] = $searchSubscriptionsByTerms;
        return $this;
    }
    /**
     * Subscription term pubId list, search_subscriptions_by_terms should be \&quot;TRUE\&quot;
     * @param string[] $subscriptionsTerms
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
     */
    public function subscriptionsTerms($subscriptionsTerms){
        $this->request['subscriptionsTerms'] = $subscriptionsTerms;
        return $this;
    }
    /**
     * Subscription term type list (payment, external, gift), search_subscriptions_by_terms should be \&quot;TRUE\&quot;
     * @param string[] $subscriptionsTermTypes
     * @return createSubscriptionDetailedReportTZRequestTPPublisherExportCreateSubscriptionDetailsReportApi
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
        $response = $this->apiClient->callAPI('/publisher/export/create/subscriptionDetailsReport/v2', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherExport');
    }
}
