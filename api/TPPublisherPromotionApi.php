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
 * The TPPublisherPromotionApi class.
 */
class TPPublisherPromotionApi  extends TPAPIBase {

    /**
     * @return codeExistsRequestTPPublisherPromotionApi
     */
    public function codeExistsRequest(){

        return new codeExistsRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return countRequestTPPublisherPromotionApi
     */
    public function countRequest(){

        return new countRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return createRequestTPPublisherPromotionApi
     */
    public function createRequest(){

        return new createRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return deleteRequestTPPublisherPromotionApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function generateCodesRequest(){

        return new generateCodesRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherPromotionApi
     */
    public function getRequest(){

        return new getRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherPromotionApi
     */
    public function listRequest(){

        return new listRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return totalSaleRequestTPPublisherPromotionApi
     */
    public function totalSaleRequest(){

        return new totalSaleRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherPromotionApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherPromotionApi($this->apiClient);
    }

}

/**
 * Confirm promo codes with email
 */
class codeExistsRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The promotion ID
     * @param string $promotionId
     * @return codeExistsRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return codeExistsRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The user&#39;s email address (single)
     * @param string $email
     * @return codeExistsRequestTPPublisherPromotionApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['promotionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->request['promotionId'];
        }
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->request['email'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/exists', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'bool');
    }
}
/**
 * Count promotions in app
 */
class countRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return countRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Whether the promotion is expired
     * @param string $expired
     * @return countRequestTPPublisherPromotionApi
     */
    public function expired($expired){
        $this->request['expired'] = $expired;
        return $this;
    }
    /**
     * Execute request
     * @return int
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['expired'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expired' ) ] = $this->request['expired'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/count', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'int');
    }
}
/**
 * Create promotion
 */
class createRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return createRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The promotion name
     * @param string $name
     * @return createRequestTPPublisherPromotionApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * Whether the promotion allows new customers only
     * @param bool $newCustomersOnly
     * @return createRequestTPPublisherPromotionApi
     */
    public function newCustomersOnly($newCustomersOnly){
        $this->request['newCustomersOnly'] = $newCustomersOnly;
        return $this;
    }
    /**
     * The start date.
     * @param string $startDate
     * @return createRequestTPPublisherPromotionApi
     */
    public function startDate($startDate){
        $this->request['startDate'] = $startDate;
        return $this;
    }
    /**
     * The end date
     * @param string $endDate
     * @return createRequestTPPublisherPromotionApi
     */
    public function endDate($endDate){
        $this->request['endDate'] = $endDate;
        return $this;
    }
    /**
     * The promotion discount type
     * @param string $discountType
     * @return createRequestTPPublisherPromotionApi
     */
    public function discountType($discountType){
        $this->request['discountType'] = $discountType;
        return $this;
    }
    /**
     * The promotion discount, percentage
     * @param float $percentageDiscount
     * @return createRequestTPPublisherPromotionApi
     */
    public function percentageDiscount($percentageDiscount){
        $this->request['percentageDiscount'] = $percentageDiscount;
        return $this;
    }
    /**
     * Whether to allow unlimited uses
     * @param bool $unlimitedUses
     * @return createRequestTPPublisherPromotionApi
     */
    public function unlimitedUses($unlimitedUses){
        $this->request['unlimitedUses'] = $unlimitedUses;
        return $this;
    }
    /**
     * The number of uses allowed by the promotion
     * @param int $usesAllowed
     * @return createRequestTPPublisherPromotionApi
     */
    public function usesAllowed($usesAllowed){
        $this->request['usesAllowed'] = $usesAllowed;
        return $this;
    }
    /**
     * Never allow the value of checkout to be zero
     * @param bool $neverAllowZero
     * @return createRequestTPPublisherPromotionApi
     */
    public function neverAllowZero($neverAllowZero){
        $this->request['neverAllowZero'] = $neverAllowZero;
        return $this;
    }
    /**
     * The fixed value for all the promotion codes
     * @param string $fixedPromotionCode
     * @return createRequestTPPublisherPromotionApi
     */
    public function fixedPromotionCode($fixedPromotionCode){
        $this->request['fixedPromotionCode'] = $fixedPromotionCode;
        return $this;
    }
    /**
     * The prefix for all the codes
     * @param string $promotionCodePrefix
     * @return createRequestTPPublisherPromotionApi
     */
    public function promotionCodePrefix($promotionCodePrefix){
        $this->request['promotionCodePrefix'] = $promotionCodePrefix;
        return $this;
    }
    /**
     * The type of dependency to terms
     * @param string $termDependencyType
     * @return createRequestTPPublisherPromotionApi
     */
    public function termDependencyType($termDependencyType){
        $this->request['termDependencyType'] = $termDependencyType;
        return $this;
    }
    /**
     * Whether to apply the promotion discount to all billing periods (\&quot;TRUE\&quot;)or the first billing period only (\&quot;FALSE\&quot;)
     * @param bool $applyToAllBillingPeriods
     * @return createRequestTPPublisherPromotionApi
     */
    public function applyToAllBillingPeriods($applyToAllBillingPeriods){
        $this->request['applyToAllBillingPeriods'] = $applyToAllBillingPeriods;
        return $this;
    }
    /**
     * Whether the promotion can be applied on renewal
     * @param bool $canBeAppliedOnRenewal
     * @return createRequestTPPublisherPromotionApi
     */
    public function canBeAppliedOnRenewal($canBeAppliedOnRenewal){
        $this->request['canBeAppliedOnRenewal'] = $canBeAppliedOnRenewal;
        return $this;
    }
    /**
     * Promotion discount applies to number of billing periods
     * @param int $billingPeriodLimit
     * @return createRequestTPPublisherPromotionApi
     */
    public function billingPeriodLimit($billingPeriodLimit){
        $this->request['billingPeriodLimit'] = $billingPeriodLimit;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPromotion
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['startDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'startDate' ) ] = $this->request['startDate'];
        }
        if (isset($this->request['endDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'endDate' ) ] = $this->request['endDate'];
        }
        if (isset($this->request['newCustomersOnly'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'newCustomersOnly' ) ] = $this->request['newCustomersOnly'];
        }
        if (isset($this->request['discountType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'discountType' ) ] = $this->request['discountType'];
        }
        if (isset($this->request['percentageDiscount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'percentageDiscount' ) ] = $this->request['percentageDiscount'];
        }
        if (isset($this->request['unlimitedUses'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'unlimitedUses' ) ] = $this->request['unlimitedUses'];
        }
        if (isset($this->request['usesAllowed'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'usesAllowed' ) ] = $this->request['usesAllowed'];
        }
        if (isset($this->request['neverAllowZero'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'neverAllowZero' ) ] = $this->request['neverAllowZero'];
        }
        if (isset($this->request['fixedPromotionCode'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'fixedPromotionCode' ) ] = $this->request['fixedPromotionCode'];
        }
        if (isset($this->request['promotionCodePrefix'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promotionCodePrefix' ) ] = $this->request['promotionCodePrefix'];
        }
        if (isset($this->request['termDependencyType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termDependencyType' ) ] = $this->request['termDependencyType'];
        }
        if (isset($this->request['applyToAllBillingPeriods'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'applyToAllBillingPeriods' ) ] = $this->request['applyToAllBillingPeriods'];
        }
        if (isset($this->request['canBeAppliedOnRenewal'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'canBeAppliedOnRenewal' ) ] = $this->request['canBeAppliedOnRenewal'];
        }
        if (isset($this->request['billingPeriodLimit'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPeriodLimit' ) ] = $this->request['billingPeriodLimit'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPromotion');
    }
}
/**
 * Delete promotion
 */
class deleteRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The promotion ID
     * @param string $promotionId
     * @return deleteRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return deleteRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['promotionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->request['promotionId'];
        }
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

    }
}
/**
 * Generate promo codes
 */
class generateCodesRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The promotion ID
     * @param string $promotionId
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The fixed value for all the promotion codes
     * @param string $fixedPromotionCode
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function fixedPromotionCode($fixedPromotionCode){
        $this->request['fixedPromotionCode'] = $fixedPromotionCode;
        return $this;
    }
    /**
     * The prefix for all the codes
     * @param string $promotionCodePrefix
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function promotionCodePrefix($promotionCodePrefix){
        $this->request['promotionCodePrefix'] = $promotionCodePrefix;
        return $this;
    }
    /**
     * The number of promotion codes to generate
     * @param int $amount
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function amount($amount){
        $this->request['amount'] = $amount;
        return $this;
    }
    /**
     * The asset ID
     * @param string $assetId
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function assetId($assetId){
        $this->request['assetId'] = $assetId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPromotion
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['promotionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->request['promotionId'];
        }
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['fixedPromotionCode'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'fixedPromotionCode' ) ] = $this->request['fixedPromotionCode'];
        }
        if (isset($this->request['promotionCodePrefix'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promotionCodePrefix' ) ] = $this->request['promotionCodePrefix'];
        }
        if (isset($this->request['amount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'amount' ) ] = $this->request['amount'];
        }
        if (isset($this->request['assetId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'assetId' ) ] = $this->request['assetId'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/generate', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPromotion');
    }
}
/**
 * Get promotion
 */
class getRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The promotion ID
     * @param string $promotionId
     * @return getRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return getRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPromotion
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->request['promotionId'];
        }
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPromotion');
    }
}
/**
 * List promotions in app
 */
class listRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The application ID
     * @param string $aid
     * @return listRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherPromotionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherPromotionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    /**
     * Whether the promotion is expired
     * @param string $expired
     * @return listRequestTPPublisherPromotionApi
     */
    public function expired($expired){
        $this->request['expired'] = $expired;
        return $this;
    }
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherPromotionApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherPromotionApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherPromotionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPromotion[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['expired'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expired' ) ] = $this->request['expired'];
        }
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->request['orderBy'];
        }
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->request['orderDirection'];
        }
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->request['q'];
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
        $response = $this->apiClient->callAPI('/publisher/promotion/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPromotion', 'array');
    }
}
/**
 * Get total sales of promotion
 */
class totalSaleRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The promotion ID
     * @param string $promotionId
     * @return totalSaleRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return totalSaleRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The currency code under ISO 4217
     * @param string $currencyCode
     * @return totalSaleRequestTPPublisherPromotionApi
     */
    public function currencyCode($currencyCode){
        $this->request['currencyCode'] = $currencyCode;
        return $this;
    }
    /**
     * Execute request
     * @return string
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->request['promotionId'];
        }
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['currencyCode'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currencyCode' ) ] = $this->request['currencyCode'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/total', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'string');
    }
}
/**
 * Update promotion
 */
class updateRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    /**
     * The promotion ID
     * @param string $promotionId
     * @return updateRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    /**
     * The application ID
     * @param string $aid
     * @return updateRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    /**
     * The promotion name
     * @param string $name
     * @return updateRequestTPPublisherPromotionApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    /**
     * The promotion discount type
     * @param string $discountType
     * @return updateRequestTPPublisherPromotionApi
     */
    public function discountType($discountType){
        $this->request['discountType'] = $discountType;
        return $this;
    }
    /**
     * The start date.
     * @param string $startDate
     * @return updateRequestTPPublisherPromotionApi
     */
    public function startDate($startDate){
        $this->request['startDate'] = $startDate;
        return $this;
    }
    /**
     * The end date
     * @param string $endDate
     * @return updateRequestTPPublisherPromotionApi
     */
    public function endDate($endDate){
        $this->request['endDate'] = $endDate;
        return $this;
    }
    /**
     * Whether the promotion allows new customers only
     * @param bool $newCustomersOnly
     * @return updateRequestTPPublisherPromotionApi
     */
    public function newCustomersOnly($newCustomersOnly){
        $this->request['newCustomersOnly'] = $newCustomersOnly;
        return $this;
    }
    /**
     * The promotion discount, percentage
     * @param float $percentageDiscount
     * @return updateRequestTPPublisherPromotionApi
     */
    public function percentageDiscount($percentageDiscount){
        $this->request['percentageDiscount'] = $percentageDiscount;
        return $this;
    }
    /**
     * Whether to allow unlimited uses
     * @param bool $unlimitedUses
     * @return updateRequestTPPublisherPromotionApi
     */
    public function unlimitedUses($unlimitedUses){
        $this->request['unlimitedUses'] = $unlimitedUses;
        return $this;
    }
    /**
     * The number of uses allowed by the promotion
     * @param int $usesAllowed
     * @return updateRequestTPPublisherPromotionApi
     */
    public function usesAllowed($usesAllowed){
        $this->request['usesAllowed'] = $usesAllowed;
        return $this;
    }
    /**
     * Never allow the value of checkout to be zero
     * @param bool $neverAllowZero
     * @return updateRequestTPPublisherPromotionApi
     */
    public function neverAllowZero($neverAllowZero){
        $this->request['neverAllowZero'] = $neverAllowZero;
        return $this;
    }
    /**
     * The fixed value for all the promotion codes
     * @param string $fixedPromotionCode
     * @return updateRequestTPPublisherPromotionApi
     */
    public function fixedPromotionCode($fixedPromotionCode){
        $this->request['fixedPromotionCode'] = $fixedPromotionCode;
        return $this;
    }
    /**
     * The prefix for all the codes
     * @param string $promotionCodePrefix
     * @return updateRequestTPPublisherPromotionApi
     */
    public function promotionCodePrefix($promotionCodePrefix){
        $this->request['promotionCodePrefix'] = $promotionCodePrefix;
        return $this;
    }
    /**
     * The type of dependency to terms
     * @param string $termDependencyType
     * @return updateRequestTPPublisherPromotionApi
     */
    public function termDependencyType($termDependencyType){
        $this->request['termDependencyType'] = $termDependencyType;
        return $this;
    }
    /**
     * Whether to apply the promotion discount to all billing periods (\&quot;TRUE\&quot;)or the first billing period only (\&quot;FALSE\&quot;)
     * @param bool $applyToAllBillingPeriods
     * @return updateRequestTPPublisherPromotionApi
     */
    public function applyToAllBillingPeriods($applyToAllBillingPeriods){
        $this->request['applyToAllBillingPeriods'] = $applyToAllBillingPeriods;
        return $this;
    }
    /**
     * Whether the promotion can be applied on renewal
     * @param bool $canBeAppliedOnRenewal
     * @return updateRequestTPPublisherPromotionApi
     */
    public function canBeAppliedOnRenewal($canBeAppliedOnRenewal){
        $this->request['canBeAppliedOnRenewal'] = $canBeAppliedOnRenewal;
        return $this;
    }
    /**
     * Promotion discount applies to number of billing periods
     * @param int $billingPeriodLimit
     * @return updateRequestTPPublisherPromotionApi
     */
    public function billingPeriodLimit($billingPeriodLimit){
        $this->request['billingPeriodLimit'] = $billingPeriodLimit;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherPromotion
     */
    public function execute(){
        $queryParams = array();
        $formParams = array();
        if (isset($this->request['promotionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->request['promotionId'];
        }
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->request['aid'];
        }
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->request['name'];
        }
        if (isset($this->request['startDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'startDate' ) ] = $this->request['startDate'];
        }
        if (isset($this->request['endDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'endDate' ) ] = $this->request['endDate'];
        }
        if (isset($this->request['newCustomersOnly'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'newCustomersOnly' ) ] = $this->request['newCustomersOnly'];
        }
        if (isset($this->request['discountType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'discountType' ) ] = $this->request['discountType'];
        }
        if (isset($this->request['percentageDiscount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'percentageDiscount' ) ] = $this->request['percentageDiscount'];
        }
        if (isset($this->request['unlimitedUses'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'unlimitedUses' ) ] = $this->request['unlimitedUses'];
        }
        if (isset($this->request['usesAllowed'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'usesAllowed' ) ] = $this->request['usesAllowed'];
        }
        if (isset($this->request['neverAllowZero'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'neverAllowZero' ) ] = $this->request['neverAllowZero'];
        }
        if (isset($this->request['fixedPromotionCode'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'fixedPromotionCode' ) ] = $this->request['fixedPromotionCode'];
        }
        if (isset($this->request['promotionCodePrefix'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promotionCodePrefix' ) ] = $this->request['promotionCodePrefix'];
        }
        if (isset($this->request['termDependencyType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termDependencyType' ) ] = $this->request['termDependencyType'];
        }
        if (isset($this->request['applyToAllBillingPeriods'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'applyToAllBillingPeriods' ) ] = $this->request['applyToAllBillingPeriods'];
        }
        if (isset($this->request['canBeAppliedOnRenewal'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'canBeAppliedOnRenewal' ) ] = $this->request['canBeAppliedOnRenewal'];
        }
        if (isset($this->request['billingPeriodLimit'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPeriodLimit' ) ] = $this->request['billingPeriodLimit'];
        }
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherPromotion');
    }
}
