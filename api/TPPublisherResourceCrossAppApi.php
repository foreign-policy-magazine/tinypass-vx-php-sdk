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
 * The TPPublisherResourceCrossAppApi class.
 */
class TPPublisherResourceCrossAppApi  extends TPAPIBase {

    /**
     * @return countRequestTPPublisherResourceCrossAppApi
     */
    public function countRequest(){

        return new countRequestTPPublisherResourceCrossAppApi($this->apiClient);
    }

}

/**
 * Count resources across merchant&#39;s apps
 */
class countRequestTPPublisherResourceCrossAppApi  extends TPAPIBase {
    protected $request = array();
    /**
     * &lt;a href&#x3D;\&quot;https://docs.piano.io/global-mode?paragraphId&#x3D;aa30d5316a94392\&quot;&gt;The merchant ID&lt;/a&gt;
     * @param int $merchId
     * @return countRequestTPPublisherResourceCrossAppApi
     */
    public function merchId($merchId){
        $this->request['merchId'] = $merchId;
        return $this;
    }
    /**
     * Execute request
     * @return TPPublisherAppResourceCount[]
     */
    public function execute(){
        $queryParams = array();
        if (isset($this->request['merchId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'merchId' ) ] = $this->request['merchId'];
        }
        $formParams = array();
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/crossApp/count', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        return $this->apiClient->deserialize($response, 'TPPublisherAppResourceCount', 'array');
    }
}
