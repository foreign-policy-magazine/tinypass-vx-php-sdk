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
 * The TPPublisherUserApi class.
 */
class TPPublisherUserApi  extends TPAPIBase {

    /**
     * @return createRequestTPPublisherUserApi
     */
    public function createRequest(){

        return new createRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return disableRequestTPPublisherUserApi
     */
    public function disableRequest(){

        return new disableRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherUserApi
     */
    public function getRequest(){

        return new getRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherUserApi
     */
    public function listRequest(){

        return new listRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return registerRequestTPPublisherUserApi
     */
    public function registerRequest(){

        return new registerRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return searchRequestTPPublisherUserApi
     */
    public function searchRequest(){

        return new searchRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherUserApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherUserApi($this->apiClient);
    }

}

/**
 * Create user
 */
class createRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return createRequestTPPublisherUserApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The user&#39;s email address (single)
     * @param string $email
     * @return createRequestTPPublisherUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * The user&#39;s first name
     * @param string $firstName
     * @return createRequestTPPublisherUserApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    /**
     * The user&#39;s last name
     * @param string $lastName
     * @return createRequestTPPublisherUserApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    /**
     * Create the user from an external source
     * @param bool $createFromExternal
     * @return createRequestTPPublisherUserApi
     */
    public function createFromExternal($createFromExternal){
        $this->request['createFromExternal'] = $createFromExternal;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUser
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
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['firstName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->request['firstName'];
        }
        if (isset($this->request['lastName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->request['lastName'];
        }
        if (isset($this->request['createFromExternal'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'createFromExternal' ) ] = $this->request['createFromExternal'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUser');
    }
}
/**
 * Disable user
 */
class disableRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return disableRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return disableRequestTPPublisherUserApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
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
        if (isset($this->request['uid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->request['uid'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/disable', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Get user
 */
class getRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return getRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return getRequestTPPublisherUserApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Whether the object is disabled
     * @param bool $disabled
     * @return getRequestTPPublisherUserApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUser
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
        if (isset($this->request['disabled'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'disabled' ) ] = $this->request['disabled'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/get', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUser');
    }
}
/**
 * Quick search of app’s users
 */
class listRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results. For 10,001 users of more, leave offset empty and use search_after instead.
     * @param int $offset
     * @return listRequestTPPublisherUserApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherUserApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Whether the object is disabled
     * @param bool $disabled
     * @return listRequestTPPublisherUserApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherUserApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Last uid from previous request, empty for first request. Recommended in case of 10,001 users or more.
     * @param string $searchAfter
     * @return listRequestTPPublisherUserApi
     */
    public function searchAfter($searchAfter){
        $this->request['searchAfter'] = $searchAfter;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUser[]
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['disabled'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'disabled' ) ] = $this->request['disabled'];
        }
        if (isset($this->request['q'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->request['q'];
        }
        if (isset($this->request['offset'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['limit'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
        }
        if (isset($this->request['searchAfter'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'searchAfter' ) ] = $this->request['searchAfter'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/list', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUser', 'array');
    }
}
/**
 * Register user
 */
class registerRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return registerRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user&#39;s email address (single)
     * @param string $email
     * @return registerRequestTPPublisherUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * The user&#39;s first name
     * @param string $firstName
     * @return registerRequestTPPublisherUserApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    /**
     * The user&#39;s last name
     * @param string $lastName
     * @return registerRequestTPPublisherUserApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUser
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['firstName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->request['firstName'];
        }
        if (isset($this->request['lastName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->request['lastName'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/register', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUser');
    }
}
/**
 * Advanced search of app’s users
 */
class searchRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return searchRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results. For 10,001 users of more, leave offset empty and use search_after instead.
     * @param int $offset
     * @return searchRequestTPPublisherUserApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return searchRequestTPPublisherUserApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return searchRequestTPPublisherUserApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * Whether to exclude custom fields metadata
     * @param bool $excludeCfMetadata
     * @return searchRequestTPPublisherUserApi
     */
    public function excludeCfMetadata($excludeCfMetadata){
        $this->request['excludeCfMetadata'] = $excludeCfMetadata;
        return $this;
    }
    /**
     * Finds users whose names start with this keyword.
     * @param string $name
     * @return searchRequestTPPublisherUserApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * Finds users who contain this keyword in their emails.
     * @param string $email
     * @return searchRequestTPPublisherUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * Find users which was registered from selected date
     * @param string $registeredFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function registeredFrom($registeredFrom){
        $this->request['registeredFrom'] = $registeredFrom;
        return $this;
    }
    /**
     * Find users which was registered until selected date
     * @param string $registeredUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function registeredUntil($registeredUntil){
        $this->request['registeredUntil'] = $registeredUntil;
        return $this;
    }
    /**
     * Find users who have access to select resources. Resource IDs (RIDs) are accepted values.
     * @param string[] $accessToResources
     * @return searchRequestTPPublisherUserApi
     */
    public function accessToResources($accessToResources){
        $this->request['accessToResources'] = $accessToResources;
        return $this;
    }
    /**
     * Find users who have converted on select terms. Term IDs are accepted values.
     * @param string[] $convertedTerms
     * @return searchRequestTPPublisherUserApi
     */
    public function convertedTerms($convertedTerms){
        $this->request['convertedTerms'] = $convertedTerms;
        return $this;
    }
    /**
     * Find users who have any ACTIVE access from this date. The date format is a unix timestamp.
     * @param string $accessFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function accessFrom($accessFrom){
        $this->request['accessFrom'] = $accessFrom;
        return $this;
    }
    /**
     * Find users who have any access until this date. The date format is a unix timestamp.
     * @param string $accessUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function accessUntil($accessUntil){
        $this->request['accessUntil'] = $accessUntil;
        return $this;
    }
    /**
     * Find users who have converted on any term from this date. The date format is a unix timestamp.
     * @param string $convertedTermFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function convertedTermFrom($convertedTermFrom){
        $this->request['convertedTermFrom'] = $convertedTermFrom;
        return $this;
    }
    /**
     * Find users who have converted on any term until this date. The date format is a unix timestamp.
     * @param string $convertedTermUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function convertedTermUntil($convertedTermUntil){
        $this->request['convertedTermUntil'] = $convertedTermUntil;
        return $this;
    }
    /**
     * Find users who have converted on any term and have specific sharing type.
     * @param string $convertedTermSharingType
     * @return searchRequestTPPublisherUserApi
     */
    public function convertedTermSharingType($convertedTermSharingType){
        $this->request['convertedTermSharingType'] = $convertedTermSharingType;
        return $this;
    }
    /**
     * Find users who have redeemed select promotions. Promotion public IDs are accepted values. Promotion public IDs can be obtained by visiting Manage→Promotions from the Piano Dashboard.
     * @param string[] $redeemedPromotions
     * @return searchRequestTPPublisherUserApi
     */
    public function redeemedPromotions($redeemedPromotions){
        $this->request['redeemedPromotions'] = $redeemedPromotions;
        return $this;
    }
    /**
     * Find users who have redeemed on any promotion on or after this date. The date format is a unix timestamp.
     * @param string $redeemedPromotionFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function redeemedPromotionFrom($redeemedPromotionFrom){
        $this->request['redeemedPromotionFrom'] = $redeemedPromotionFrom;
        return $this;
    }
    /**
     * Find users who have redeemed on any promotion on or before this date. The date format is a unix timestamp.
     * @param string $redeemedPromotionUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function redeemedPromotionUntil($redeemedPromotionUntil){
        $this->request['redeemedPromotionUntil'] = $redeemedPromotionUntil;
        return $this;
    }
    /**
     * Find users who have any trial subscription at the present time.
     * @param bool $trialPeriodIsActive
     * @return searchRequestTPPublisherUserApi
     */
    public function trialPeriodIsActive($trialPeriodIsActive){
        $this->request['trialPeriodIsActive'] = $trialPeriodIsActive;
        return $this;
    }
    /**
     * If user has ever used trial period
     * @param bool $hasTrialPeriod
     * @return searchRequestTPPublisherUserApi
     */
    public function hasTrialPeriod($hasTrialPeriod){
        $this->request['hasTrialPeriod'] = $hasTrialPeriod;
        return $this;
    }
    /**
     * Find users who have any type of access (access that is not expired or will never expire).
     * @param bool $hasAccess
     * @return searchRequestTPPublisherUserApi
     */
    public function hasAccess($hasAccess){
        $this->request['hasAccess'] = $hasAccess;
        return $this;
    }
    /**
     * Find users who have converted on any term.
     * @param bool $hasConversionTerm
     * @return searchRequestTPPublisherUserApi
     */
    public function hasConversionTerm($hasConversionTerm){
        $this->request['hasConversionTerm'] = $hasConversionTerm;
        return $this;
    }
    /**
     * If user has ever used promo code
     * @param bool $hasRedeemedPromotion
     * @return searchRequestTPPublisherUserApi
     */
    public function hasRedeemedPromotion($hasRedeemedPromotion){
        $this->request['hasRedeemedPromotion'] = $hasRedeemedPromotion;
        return $this;
    }
    /**
     * Find users who redeemed a promotion, including those redeemed when signing up for a free trial. In these cases, the promotion had not been applied during the period of your search but were applied as soon as the trial period ended.
     * @param bool $includeTrialRedemptions
     * @return searchRequestTPPublisherUserApi
     */
    public function includeTrialRedemptions($includeTrialRedemptions){
        $this->request['includeTrialRedemptions'] = $includeTrialRedemptions;
        return $this;
    }
    /**
     * Find users who have converted on particular types of terms. The accepted value of each type of term is a number: 0 (N/A), 1 (payment), 2 (ad view), 3 (registration), 4 (newsletter), 5 (external), 6 (custom), 7 (access granted), and 8 (gift).
     * @param string[] $convertedTermTypes
     * @return searchRequestTPPublisherUserApi
     */
    public function convertedTermTypes($convertedTermTypes){
        $this->request['convertedTermTypes'] = $convertedTermTypes;
        return $this;
    }
    /**
     * Find users which have conversion terms for selected term types
     * @param bool $hasConversionTermType
     * @return searchRequestTPPublisherUserApi
     */
    public function hasConversionTermType($hasConversionTermType){
        $this->request['hasConversionTermType'] = $hasConversionTermType;
        return $this;
    }
    /**
     * Select the currency of the payments to take into account. Format is ISO 4217 (Ex: USD).
     * @param string $spentMoneyCurrency
     * @return searchRequestTPPublisherUserApi
     */
    public function spentMoneyCurrency($spentMoneyCurrency){
        $this->request['spentMoneyCurrency'] = $spentMoneyCurrency;
        return $this;
    }
    /**
     * Find users who spent above a specified monetary value across all of their purchases and conversions. This value is formatted as a decimal. (Example: 10.03. to represent $10.03 or £10.03 or €10.03).
     * @param float $spentMoneyFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function spentMoneyFrom($spentMoneyFrom){
        $this->request['spentMoneyFrom'] = $spentMoneyFrom;
        return $this;
    }
    /**
     * Find users who spent below a specified monetary value across all of their purchases and conversions. This value is formatted as a decimal. (Ex: 10.03. to represent $10.03 or £10.03 or €10.03).
     * @param float $spentMoneyUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function spentMoneyUntil($spentMoneyUntil){
        $this->request['spentMoneyUntil'] = $spentMoneyUntil;
        return $this;
    }
    /**
     * Find users who bought something on or after this date. The date format is a unix timestamp.
     * @param string $spentFromDate
     * @return searchRequestTPPublisherUserApi
     */
    public function spentFromDate($spentFromDate){
        $this->request['spentFromDate'] = $spentFromDate;
        return $this;
    }
    /**
     * Find users who bought something on or before this date. The date format is a unix timestamp.
     * @param string $spentUntilDate
     * @return searchRequestTPPublisherUserApi
     */
    public function spentUntilDate($spentUntilDate){
        $this->request['spentUntilDate'] = $spentUntilDate;
        return $this;
    }
    /**
     * Find users who have used specific payment methods.The accepted values for each type of payment method: 1 (PayPal), 4 (BrainTree), 6 (TinyPass), 8 (AmazonMWS), 11 (PayPalBT), 12 (WorldPay_HPP), 13 (WorldPay_PayPal), 14 (WorldPay_Ideal), 15 (WorldPay_ELV), 16 (Spreedly_CC), 17 (Spreedly_Stripe_CC), 18 (Spreedly_Beanstream), 19 (EdgilPayway), 20 (WorldPay_CC_Token), 21 (Spreedly_PayU_Latam).
     * @param int[] $paymentMethods
     * @return searchRequestTPPublisherUserApi
     */
    public function paymentMethods($paymentMethods){
        $this->request['paymentMethods'] = $paymentMethods;
        return $this;
    }
    /**
     * Find users who had problems with auto-renewal of any subscription on or after this date. The date format is a unix timestamp.
     * @param string $billingFailureFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function billingFailureFrom($billingFailureFrom){
        $this->request['billingFailureFrom'] = $billingFailureFrom;
        return $this;
    }
    /**
     * Find users who had problems with auto-renewal of any subscription on or before this date. The date format is a unix timestamp.
     * @param string $billingFailureUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function billingFailureUntil($billingFailureUntil){
        $this->request['billingFailureUntil'] = $billingFailureUntil;
        return $this;
    }
    /**
     * Finds users who had any problems with billing.
     * @param bool $hadBillingFailure
     * @return searchRequestTPPublisherUserApi
     */
    public function hadBillingFailure($hadBillingFailure){
        $this->request['hadBillingFailure'] = $hadBillingFailure;
        return $this;
    }
    /**
     * Finds users who have made any payment. Refunded payments are not taken into account. So if user had a payment and refunded it, he will not presented in the result list.
     * @param bool $hasPayment
     * @return searchRequestTPPublisherUserApi
     */
    public function hasPayment($hasPayment){
        $this->request['hasPayment'] = $hasPayment;
        return $this;
    }
    /**
     * Find users which have given external customer id
     * @param string $upiExtCustomerId
     * @return searchRequestTPPublisherUserApi
     */
    public function upiExtCustomerId($upiExtCustomerId){
        $this->request['upiExtCustomerId'] = $upiExtCustomerId;
        return $this;
    }
    /**
     * Find users whose cards will expire in selected dates
     * @param string $creditCardWillExpire
     * @return searchRequestTPPublisherUserApi
     */
    public function creditCardWillExpire($creditCardWillExpire){
        $this->request['creditCardWillExpire'] = $creditCardWillExpire;
        return $this;
    }
    /**
     * Find users who have active subscriptions to specified resources. Resource IDs (RIDs) are accepted values.
     * @param string[] $activeSubscriptionToResources
     * @return searchRequestTPPublisherUserApi
     */
    public function activeSubscriptionToResources($activeSubscriptionToResources){
        $this->request['activeSubscriptionToResources'] = $activeSubscriptionToResources;
        return $this;
    }
    /**
     * Finds users who have any active subscription. Set field to true in order to get only active users.
     * @param bool $hasActiveSubscription
     * @return searchRequestTPPublisherUserApi
     */
    public function hasActiveSubscription($hasActiveSubscription){
        $this->request['hasActiveSubscription'] = $hasActiveSubscription;
        return $this;
    }
    /**
     * Finds users who have any subscription starting on or after this date. This parameter depends on the has_subscription_starts parameter returning True. The date format is a unix timestamp.
     * @param string $subscriptionStartFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionStartFrom($subscriptionStartFrom){
        $this->request['subscriptionStartFrom'] = $subscriptionStartFrom;
        return $this;
    }
    /**
     * Finds users who have any subscription that started on or before this date. This parameter depends on the has_subscription_starts parameter returning True. The date format is a unix timestamp.
     * @param string $subscriptionStartUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionStartUntil($subscriptionStartUntil){
        $this->request['subscriptionStartUntil'] = $subscriptionStartUntil;
        return $this;
    }
    /**
     * Finds users who have any subscription renewing on or after this date. This parameter depends on the has_subscription_will_renew parameter. The date format is a unix timestamp.
     * @param string $subscriptionRenewFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionRenewFrom($subscriptionRenewFrom){
        $this->request['subscriptionRenewFrom'] = $subscriptionRenewFrom;
        return $this;
    }
    /**
     * Finds users who have any subscription renewing on or before this date. This parameter depends on the has_subscription_will_renew parameter. The date format is a unix timestamp.
     * @param string $subscriptionRenewUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionRenewUntil($subscriptionRenewUntil){
        $this->request['subscriptionRenewUntil'] = $subscriptionRenewUntil;
        return $this;
    }
    /**
     * Finds users who have any subscription expiring on or after this date. This parameter depends on the has_subscription_will_expire parameter. The date format is a unix timestamp.
     * @param string $subscriptionExpireFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionExpireFrom($subscriptionExpireFrom){
        $this->request['subscriptionExpireFrom'] = $subscriptionExpireFrom;
        return $this;
    }
    /**
     * Finds users who have any subscription expiring on or before this date. This parameter depends on the has_subscription_will_expire parameter. The date format is a unix timestamp.
     * @param string $subscriptionExpireUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionExpireUntil($subscriptionExpireUntil){
        $this->request['subscriptionExpireUntil'] = $subscriptionExpireUntil;
        return $this;
    }
    /**
     * Finds users who have any trial subscription expiring on or after this date. The date format is a unix timestamp.
     * @param string $trialExpireFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function trialExpireFrom($trialExpireFrom){
        $this->request['trialExpireFrom'] = $trialExpireFrom;
        return $this;
    }
    /**
     * Finds users who have any trial subscription expiring on or after this date. The date format is a unix timestamp.
     * @param string $trialExpireUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function trialExpireUntil($trialExpireUntil){
        $this->request['trialExpireUntil'] = $trialExpireUntil;
        return $this;
    }
    /**
     * Finds users with any subscriptions, including expired and canceled subscriptions.
     * @param bool $hasAnySubscriptions
     * @return searchRequestTPPublisherUserApi
     */
    public function hasAnySubscriptions($hasAnySubscriptions){
        $this->request['hasAnySubscriptions'] = $hasAnySubscriptions;
        return $this;
    }
    /**
     * Finds users who have any subscription with enabled auto-renew.
     * @param bool $hasSubscriptionWillRenew
     * @return searchRequestTPPublisherUserApi
     */
    public function hasSubscriptionWillRenew($hasSubscriptionWillRenew){
        $this->request['hasSubscriptionWillRenew'] = $hasSubscriptionWillRenew;
        return $this;
    }
    /**
     * Finds users who have any subscription which will expire.
     * @param bool $hasSubscriptionWillExpire
     * @return searchRequestTPPublisherUserApi
     */
    public function hasSubscriptionWillExpire($hasSubscriptionWillExpire){
        $this->request['hasSubscriptionWillExpire'] = $hasSubscriptionWillExpire;
        return $this;
    }
    /**
     * Finds users which have started subscription.
     * @param bool $hasSubscriptionStarts
     * @return searchRequestTPPublisherUserApi
     */
    public function hasSubscriptionStarts($hasSubscriptionStarts){
        $this->request['hasSubscriptionStarts'] = $hasSubscriptionStarts;
        return $this;
    }
    /**
     * Finds users who have any unresolved inquiry.
     * @param bool $hasUnresolvedInquiry
     * @return searchRequestTPPublisherUserApi
     */
    public function hasUnresolvedInquiry($hasUnresolvedInquiry){
        $this->request['hasUnresolvedInquiry'] = $hasUnresolvedInquiry;
        return $this;
    }
    /**
     * Finds users who have any submitted inquiry on or after this date. The date format is a unix timestamp.
     * @param string $submittedInquiryFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function submittedInquiryFrom($submittedInquiryFrom){
        $this->request['submittedInquiryFrom'] = $submittedInquiryFrom;
        return $this;
    }
    /**
     * Finds users who have any submitted inquiry on or before this date. The date format is a unix timestamp.
     * @param string $submittedInquiryUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function submittedInquiryUntil($submittedInquiryUntil){
        $this->request['submittedInquiryUntil'] = $submittedInquiryUntil;
        return $this;
    }
    /**
     * Finds users who received any inquiry response on or after this date. The date format is a unix timestamp.
     * @param string $receivedResponseFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function receivedResponseFrom($receivedResponseFrom){
        $this->request['receivedResponseFrom'] = $receivedResponseFrom;
        return $this;
    }
    /**
     * Finds users who received any inquiry response on or before this date. The date format is a unix timestamp.
     * @param string $receivedResponseUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function receivedResponseUntil($receivedResponseUntil){
        $this->request['receivedResponseUntil'] = $receivedResponseUntil;
        return $this;
    }
    /**
     * Finds users who have any resolved inquiry on or after this date. The date format is a unix timestamp.
     * @param string $resolvedInquiryFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function resolvedInquiryFrom($resolvedInquiryFrom){
        $this->request['resolvedInquiryFrom'] = $resolvedInquiryFrom;
        return $this;
    }
    /**
     * Finds users who have any resolved inquiry on or before this date. The date format is a unix timestamp.
     * @param string $resolvedInquiryUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function resolvedInquiryUntil($resolvedInquiryUntil){
        $this->request['resolvedInquiryUntil'] = $resolvedInquiryUntil;
        return $this;
    }
    /**
     * Finds users with submitted inquiries.
     * @param bool $hasSubmittedInquiry
     * @return searchRequestTPPublisherUserApi
     */
    public function hasSubmittedInquiry($hasSubmittedInquiry){
        $this->request['hasSubmittedInquiry'] = $hasSubmittedInquiry;
        return $this;
    }
    /**
     * Finds users with any inquiries that have been responded to.
     * @param bool $hasReceivedResponseInquiry
     * @return searchRequestTPPublisherUserApi
     */
    public function hasReceivedResponseInquiry($hasReceivedResponseInquiry){
        $this->request['hasReceivedResponseInquiry'] = $hasReceivedResponseInquiry;
        return $this;
    }
    /**
     * Finds users with any resolved inquiry.
     * @param bool $hasResolvedInquiry
     * @return searchRequestTPPublisherUserApi
     */
    public function hasResolvedInquiry($hasResolvedInquiry){
        $this->request['hasResolvedInquiry'] = $hasResolvedInquiry;
        return $this;
    }
    /**
     * Finds users who redeemed any licensing contract.
     * @param bool $hasLicensingContractRedemptions
     * @return searchRequestTPPublisherUserApi
     */
    public function hasLicensingContractRedemptions($hasLicensingContractRedemptions){
        $this->request['hasLicensingContractRedemptions'] = $hasLicensingContractRedemptions;
        return $this;
    }
    /**
     * Finds users who redeemed licensing contract with selected licensees.  Licensee IDs are accepted values.
     * @param string[] $selectedLicensees
     * @return searchRequestTPPublisherUserApi
     */
    public function selectedLicensees($selectedLicensees){
        $this->request['selectedLicensees'] = $selectedLicensees;
        return $this;
    }
    /**
     * Finds users who redeemed licensing contract with selected contracts.  Term IDs are accepted values.
     * @param string[] $selectedContracts
     * @return searchRequestTPPublisherUserApi
     */
    public function selectedContracts($selectedContracts){
        $this->request['selectedContracts'] = $selectedContracts;
        return $this;
    }
    /**
     * Finds users who redeemed licensing contract on or after this date. The date format is a unix timestamp.
     * @param string $licensingContractRedeemedFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function licensingContractRedeemedFrom($licensingContractRedeemedFrom){
        $this->request['licensingContractRedeemedFrom'] = $licensingContractRedeemedFrom;
        return $this;
    }
    /**
     * Finds users who redeemed licensing contract on or before this date. The date format is a unix timestamp.
     * @param string $licensingContractRedeemedUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function licensingContractRedeemedUntil($licensingContractRedeemedUntil){
        $this->request['licensingContractRedeemedUntil'] = $licensingContractRedeemedUntil;
        return $this;
    }
    /**
     * Defines searching field
     * @param string[] $dataType
     * @return searchRequestTPPublisherUserApi
     */
    public function dataType($dataType){
        $this->request['dataType'] = $dataType;
        return $this;
    }
    /**
     * Defines search data
     * @param string $data
     * @return searchRequestTPPublisherUserApi
     */
    public function data($data){
        $this->request['data'] = $data;
        return $this;
    }
    /**
     * Find users with any data
     * @param bool $hasData
     * @return searchRequestTPPublisherUserApi
     */
    public function hasData($hasData){
        $this->request['hasData'] = $hasData;
        return $this;
    }
    /**
     * Finds users who have last access time.
     * @param bool $hasLastAccessTime
     * @return searchRequestTPPublisherUserApi
     */
    public function hasLastAccessTime($hasLastAccessTime){
        $this->request['hasLastAccessTime'] = $hasLastAccessTime;
        return $this;
    }
    /**
     * Find users which have last access time from selected date
     * @param string $lastAccessTimeFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function lastAccessTimeFrom($lastAccessTimeFrom){
        $this->request['lastAccessTimeFrom'] = $lastAccessTimeFrom;
        return $this;
    }
    /**
     * Find users which have last access time until selected date
     * @param string $lastAccessTimeUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function lastAccessTimeUntil($lastAccessTimeUntil){
        $this->request['lastAccessTimeUntil'] = $lastAccessTimeUntil;
        return $this;
    }
    /**
     * Consent public IDs are accepted values. Specified values will be used along with consent_checked parameter.
     * @param string[] $selectedConsentsMap
     * @return searchRequestTPPublisherUserApi
     */
    public function selectedConsentsMap($selectedConsentsMap){
        $this->request['selectedConsentsMap'] = $selectedConsentsMap;
        return $this;
    }
    /**
     * Finds users who have checked consents. Accepted values: true/false.
     * @param bool $consentChecked
     * @return searchRequestTPPublisherUserApi
     */
    public function consentChecked($consentChecked){
        $this->request['consentChecked'] = $consentChecked;
        return $this;
    }
    /**
     * Finds user with following custom fields
     * @param string $customFields
     * @return searchRequestTPPublisherUserApi
     */
    public function customFields($customFields){
        $this->request['customFields'] = $customFields;
        return $this;
    }
    /**
     * Data source for user searching: VX or CF (id custom fields)
     * @param string $source
     * @return searchRequestTPPublisherUserApi
     */
    public function source($source){
        $this->request['source'] = $source;
        return $this;
    }
    /**
     * Find users whose cards will expire in selected dates
     * @param bool $invertCreditCardWillExpire
     * @return searchRequestTPPublisherUserApi
     */
    public function invertCreditCardWillExpire($invertCreditCardWillExpire){
        $this->request['invertCreditCardWillExpire'] = $invertCreditCardWillExpire;
        return $this;
    }
    /**
     * Find users who either validated or not their email.
     * @param bool $hasEmailConfirmationRequired
     * @return searchRequestTPPublisherUserApi
     */
    public function hasEmailConfirmationRequired($hasEmailConfirmationRequired){
        $this->request['hasEmailConfirmationRequired'] = $hasEmailConfirmationRequired;
        return $this;
    }
    /**
     * Finds users who accepted any consent. Accepted values: true/false. If this parameter is false, selected_consents_map and consent_has_data are ignored.
     * @param bool $consentHasData
     * @return searchRequestTPPublisherUserApi
     */
    public function consentHasData($consentHasData){
        $this->request['consentHasData'] = $consentHasData;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return searchRequestTPPublisherUserApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return searchRequestTPPublisherUserApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return searchRequestTPPublisherUserApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Last uid from previous request, empty for first request. Recommended in case of 10,001 users or more.
     * @param string $searchAfter
     * @return searchRequestTPPublisherUserApi
     */
    public function searchAfter($searchAfter){
        $this->request['searchAfter'] = $searchAfter;
        return $this;
    }
    /**
     * esdebug
     * @param bool $esdebug
     * @return searchRequestTPPublisherUserApi
     */
    public function esdebug($esdebug){
        $this->request['esdebug'] = $esdebug;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUser[]
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
        if (isset($this->request['excludeCfMetadata'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'excludeCfMetadata' ) ] = $this->request['excludeCfMetadata'];
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
        if (isset($this->request['orderBy'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        if (isset($this->request['q'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->request['q'];
        }
        if (isset($this->request['offset'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->request['offset'];
        }
        if (isset($this->request['limit'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->request['limit'];
        }
        if (isset($this->request['searchAfter'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'searchAfter' ) ] = $this->request['searchAfter'];
        }
        if (isset($this->request['esdebug'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'esdebug' ) ] = $this->request['esdebug'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/search', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUser', 'array');
    }
}
/**
 * Update user
 */
class updateRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return updateRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user ID
     * @param string $uid
     * @return updateRequestTPPublisherUserApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    /**
     * The user&#39;s email address (single)
     * @param string $email
     * @return updateRequestTPPublisherUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * The user&#39;s first name
     * @param string $firstName
     * @return updateRequestTPPublisherUserApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    /**
     * The user&#39;s last name
     * @param string $lastName
     * @return updateRequestTPPublisherUserApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    /**
     * The user’s values from custom fields {     \&quot;field_id_boolean\&quot;: true,     \&quot;field_id_multiselect\&quot;: \&quot;[\\\&quot;United States\\\&quot;,\\\&quot;Afghanistan\\\&quot;]\&quot;,     \&quot;field_id_singleselect\&quot;: \&quot;[\\\&quot;Alaska\\\&quot;]\&quot;,     \&quot;field_id_text\&quot;: \&quot;text\&quot; }
     * @param object $customFields
     * @return updateRequestTPPublisherUserApi
     */
    public function customFields($customFields){
        $this->request['customFields'] = $customFields;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherUser
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
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        if (isset($this->request['firstName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->request['firstName'];
        }
        if (isset($this->request['lastName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->request['lastName'];
        }
        if (isset($this->request['customFields'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'customFields' ) ] = json_encode($this->request['customFields']);
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherUser');
    }
}
