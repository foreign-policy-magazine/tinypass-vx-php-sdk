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

define('TINYPASS_CLIENT_BASE_DIR', dirname(__FILE__));

/**
 * Autoloads the API and model definition files.
 *
 * @param string $className the class to attempt to load
 */
function tinypass_autoloader($className) {
    $altClassFile = $className;
    if (preg_match("/^TP(.+)$/", $altClassFile, $match)){
        $altClassFile = $match[1];
    }
    if (preg_match('/Api$/', $className) && file_exists(TINYPASS_CLIENT_BASE_DIR . '/api/' . $className . '.php')) {
        require_once TINYPASS_CLIENT_BASE_DIR . '/api/' . $className . '.php';
        return;
    }
    elseif (preg_match('/Request(.+Api)$/', $className, $match) && file_exists(TINYPASS_CLIENT_BASE_DIR . '/api/' . $match[1] . '.php')) {
        require_once TINYPASS_CLIENT_BASE_DIR . '/api/' .  $match[1] . '.php';
        return;
    }
    elseif (file_exists(TINYPASS_CLIENT_BASE_DIR . '/model/' . $className . '.php')) {
        require_once TINYPASS_CLIENT_BASE_DIR . '/model/' . $className . '.php';
        return;
    }

    foreach (array("common", "util", "builder", "token") as $dir) {
        if (file_exists(TINYPASS_CLIENT_BASE_DIR . "/src/{$dir}/" . $className . '.php')){
            require_once TINYPASS_CLIENT_BASE_DIR . "/src/{$dir}/" . $className . '.php';
            return;
        }
        elseif (file_exists(TINYPASS_CLIENT_BASE_DIR . "/src/{$dir}/" . $altClassFile . '.php')){
            require_once TINYPASS_CLIENT_BASE_DIR . "/src/{$dir}/" . $altClassFile . '.php';
            return;
        }
    }
}
spl_autoload_register('tinypass_autoloader');

/**
 * Class TinypassClient
  * @method TPUserApi User();
  * @method TPUserAccessApi UserAccess();
  * @method TPPublisherAdblockerApi PublisherAdblocker();
  * @method TPPublisherAppApi PublisherApp();
  * @method TPPublisherAppApiTokenApi PublisherAppApiToken();
  * @method TPPublisherAppFeaturesApi PublisherAppFeatures();
  * @method TPPublisherConsentApi PublisherConsent();
  * @method TPPublisherConsentEntryApi PublisherConsentEntry();
  * @method TPPublisherConversionApi PublisherConversion();
  * @method TPPublisherConversionCustomApi PublisherConversionCustom();
  * @method TPPublisherConversionDataApi PublisherConversionData();
  * @method TPPublisherConversionExternalApi PublisherConversionExternal();
  * @method TPPublisherConversionRegistrationApi PublisherConversionRegistration();
  * @method TPPublisherExportApi PublisherExport();
  * @method TPPublisherExportCreateApi PublisherExportCreate();
  * @method TPPublisherExportCreateAamApi PublisherExportCreateAam();
  * @method TPPublisherExportCreateAamMonthlyApi PublisherExportCreateAamMonthly();
  * @method TPPublisherExportCreateAccessReportExportApi PublisherExportCreateAccessReportExport();
  * @method TPPublisherExportCreateSubscriptionDetailsReportApi PublisherExportCreateSubscriptionDetailsReport();
  * @method TPPublisherExportCreateTransactionsReportApi PublisherExportCreateTransactionsReport();
  * @method TPPublisherGdprApi PublisherGdpr();
  * @method TPPublisherInquiryApi PublisherInquiry();
  * @method TPPublisherLicensingContractApi PublisherLicensingContract();
  * @method TPPublisherLicensingContractDomainApi PublisherLicensingContractDomain();
  * @method TPPublisherLicensingContractDomainContractUserApi PublisherLicensingContractDomainContractUser();
  * @method TPPublisherLicensingContractPeriodsApi PublisherLicensingContractPeriods();
  * @method TPPublisherLicensingContractUserApi PublisherLicensingContractUser();
  * @method TPPublisherLicensingLicenseeApi PublisherLicensingLicensee();
  * @method TPPublisherLicensingNotificationApi PublisherLicensingNotification();
  * @method TPPublisherLicensingNotificationRuleApi PublisherLicensingNotificationRule();
  * @method TPPublisherLicensingScheduleApi PublisherLicensingSchedule();
  * @method TPPublisherLicensingScheduleContractPeriodsApi PublisherLicensingScheduleContractPeriods();
  * @method TPPublisherLinkedTermApi PublisherLinkedTerm();
  * @method TPPublisherOfferApi PublisherOffer();
  * @method TPPublisherOfferTemplateApi PublisherOfferTemplate();
  * @method TPPublisherOfferTemplateCreateApi PublisherOfferTemplateCreate();
  * @method TPPublisherOfferTemplateInheritedApi PublisherOfferTemplateInherited();
  * @method TPPublisherOfferTemplateUpdateApi PublisherOfferTemplateUpdate();
  * @method TPPublisherOfferTemplateVariantApi PublisherOfferTemplateVariant();
  * @method TPPublisherOfferTermApi PublisherOfferTerm();
  * @method TPPublisherOfferTermOfferApi PublisherOfferTermOffer();
  * @method TPPublisherPaymentApi PublisherPayment();
  * @method TPPublisherPaymentMethodApi PublisherPaymentMethod();
  * @method TPPublisherPaymentMethodBillingAddressApi PublisherPaymentMethodBillingAddress();
  * @method TPPublisherPaymentMethodGmoApi PublisherPaymentMethodGmo();
  * @method TPPublisherPaymentProviderConfigurationApi PublisherPaymentProviderConfiguration();
  * @method TPPublisherPromotionApi PublisherPromotion();
  * @method TPPublisherPromotionCodeApi PublisherPromotionCode();
  * @method TPPublisherPromotionTermApi PublisherPromotionTerm();
  * @method TPPublisherResourceApi PublisherResource();
  * @method TPPublisherResourceBundleApi PublisherResourceBundle();
  * @method TPPublisherResourceCrossAppApi PublisherResourceCrossApp();
  * @method TPPublisherResourceStatsApi PublisherResourceStats();
  * @method TPPublisherResourceTagApi PublisherResourceTag();
  * @method TPPublisherResourceUserApi PublisherResourceUser();
  * @method TPPublisherScheduleApi PublisherSchedule();
  * @method TPPublisherSchedulePeriodApi PublisherSchedulePeriod();
  * @method TPPublisherSubscriptionApi PublisherSubscription();
  * @method TPPublisherSubscriptionAddressApi PublisherSubscriptionAddress();
  * @method TPPublisherSubscriptionCancelApi PublisherSubscriptionCancel();
  * @method TPPublisherSubscriptionShareApi PublisherSubscriptionShare();
  * @method TPPublisherSubscriptionShareUserApi PublisherSubscriptionShareUser();
  * @method TPPublisherTeamApi PublisherTeam();
  * @method TPPublisherTermApi PublisherTerm();
  * @method TPPublisherTermChangeApi PublisherTermChange();
  * @method TPPublisherTermChangeOptionApi PublisherTermChangeOption();
  * @method TPPublisherTermCustomApi PublisherTermCustom();
  * @method TPPublisherTermDynamicApi PublisherTermDynamic();
  * @method TPPublisherTermExternalApi PublisherTermExternal();
  * @method TPPublisherTermGiftApi PublisherTermGift();
  * @method TPPublisherTermLinkedApi PublisherTermLinked();
  * @method TPPublisherTermPaymentApi PublisherTermPayment();
  * @method TPPublisherTermRegistrationApi PublisherTermRegistration();
  * @method TPPublisherTermStatsApi PublisherTermStats();
  * @method TPPublisherTestApi PublisherTest();
  * @method TPPublisherUserApi PublisherUser();
  * @method TPPublisherUserAccessApi PublisherUserAccess();
  * @method TPPublisherUserAccessActiveApi PublisherUserAccessActive();
  * @method TPPublisherUserAddressApi PublisherUserAddress();
  * @method TPPublisherUserAppApi PublisherUserApp();
  * @method TPPublisherUserBillingAddressApi PublisherUserBillingAddress();
  * @method TPPublisherUserBulkImportApi PublisherUserBulkImport();
  * @method TPPublisherUserEmailApi PublisherUserEmail();
  * @method TPPublisherUserListApi PublisherUserList();
  * @method TPPublisherUserNoteApi PublisherUserNote();
  * @method TPPublisherVoucherApi PublisherVoucher();
  * @method TPPublisherWebhookApi PublisherWebhook();
  * @method TPPublisherWebhookResponseApi PublisherWebhookResponse();
  * @method TPPublisherWebhookSettingsApi PublisherWebhookSettings();
  * @method TPAccessApi Access();
  * @method TPAccessTokenApi AccessToken();
  * @method TPAnonAssetsApi AnonAssets();
  * @method TPAnonCountryListApi AnonCountryList();
  * @method TPAnonErrorApi AnonError();
  * @method TPAnonMobileSdkIdDeploymentApi AnonMobileSdkIdDeployment();
  * @method TPAnonUserApi AnonUser();
  * @method TPConversionApi Conversion();
  * @method TPConversionExternalApi ConversionExternal();
  * @method TPConversionRegistrationApi ConversionRegistration();
  * @method TPEmailConfirmationApi EmailConfirmation();
  * @method TPLinkedTermApi LinkedTerm();
  * @method TPOauthApi Oauth();
  * @method TPSubscriptionApi Subscription();
  * @method TPSwgSyncApi SwgSync();
  * @method TPIdentityOauthApi IdentityOauth();
  * @method TPIdentityOauthMobileApi IdentityOauthMobile();
  * @method TPIdentityTokenApi IdentityToken();
  * @method TPIdentityVxauthApi IdentityVxauth();
  * @method TPMfaApi Mfa();
  * @method TPPublisherApi Publisher();
  * @method TPPublisherAuditApi PublisherAudit();
  * @method TPPublisherIdentityApi PublisherIdentity();
  * @method TPPublisherIdentitySetApi PublisherIdentitySet();
  * @method TPPublisherImportCustomFieldsApi PublisherImportCustomFields();
  * @method TPPublisherLoginApi PublisherLogin();
  * @method TPPublisherLoginSocialApi PublisherLoginSocial();
  * @method TPPublisherResetApi PublisherReset();
  * @method TPPublisherRestoreApi PublisherRestore();
  * @method TPPublisherTokenApi PublisherToken();
  * @method TPPublisherUsersApi PublisherUsers();
 */
class TinypassClient {

    private $config;

    /**
     * @param TPConfig $config Configuration object
     */
    function __construct( TPConfig $config ) {
	    $this->config = $config;
    }

    /**
    * Magic method which calls api objects
    * @param $method
    * @param $arguments
    */
    public function __call($method, $arguments) {
        $apiName = ucfirst($method);
        return $this->getApi($apiName);
    }

    /**
     * Returns an API.
     * @return mixed
     * @throws Exception
     */
    public function getApi($api) {
        $apiClass = $api . 'Api';
        if (!empty($this->$apiClass)) {
            return $this->$apiClass;
        }
        $className = "TP".$apiClass;
        if (!class_exists($className, true)) {
            throw new Exception('API class does not exist: ' . $apiClass);
        }
        $this->$apiClass = new $className($this);
        return $this->$apiClass;
    }

    /**
     * Calls the API.
     *
     * @param string $resourcePath path to method endpoint
     * @param string $method method to call
     * @param array $queryParams parameters to be place in query URL
     * @param array $postData parameters to be placed in POST body
     * @param array $headerParams parameters to be place in request header
     * @return mixed The API response
     * @throws Exception
     */
     public function callAPI($resourcePath, $method, $queryParams, $headerParams, $postData = null) {

 //        $headers = array();

         if (empty($queryParams)) {
             $queryParams = array();
         }
         if (!empty($this->config->API_TOKEN)) {
             $queryParams['api_token'] = $this->config->API_TOKEN;
         }

         if (is_object($postData) || is_array($postData)) {
             $postData = http_build_query($postData);
         }

         $url = $this->config->getEndpoint() . $resourcePath;

         $curl = curl_init();
         curl_setopt($curl, CURLOPT_TIMEOUT, 20);
         // return the result on success, rather than just TRUE
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

         $walk = function( $item, $key, $parent_key = '' ) use ( &$urlQueryParams, &$walk ) {
             is_array( $item )
                 ? array_walk( $item, $walk, $key )
                 : $urlQueryParams[] = http_build_query( array( $parent_key ?: $key => $item ) );
         };

         array_walk($queryParams, $walk );
         if (!empty($urlQueryParams)) {
            $url = $url . '?' . implode('&', $urlQueryParams);
         }

         if ($method == 'POST') {
             curl_setopt($curl, CURLOPT_POST, true);
             curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
         } else if ($method == 'PUT') {
             $json_data = json_encode($postData);
             curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
             curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
         } else if ($method == 'DELETE') {
             curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
             curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
         } else if ($method != 'GET') {
             throw new Exception('Method ' . $method . ' is not recognized.');
         }

         curl_setopt($curl, CURLOPT_HTTPHEADER, $headerParams);

         curl_setopt($curl, CURLOPT_URL, $url);

         // Make the request
         $response = curl_exec($curl);
         $response_info = curl_getinfo($curl);

         // Handle the response
         if ($response_info['http_code'] == 200) {
             $data = json_decode($response);
         } else if ($response_info['http_code'] == 401 || $response_info['http_code'] == 403) {
             throw new Exception('Unauthorized API request to ' . $url . ' (' . $response_info['http_code'] . ')');
         } else if ($response_info['http_code'] == 404) {
             throw new Exception('Endpoint not found: ' . $url . ' (' . $response_info['http_code'] . ')');
         } else if ($response_info['http_code'] == 404) {
             throw new Exception('Internal server error: ' . $url . ' (' . $response_info['http_code'] . ')');
         } else {
             throw new Exception('Cannot connect to the api: ' . $url . ' (' . $response_info['http_code'] . ')');
         }

         if (empty($data)) {
             throw new Exception('Unable to parse output from server: "' . $response . '"');
         }

         return $data;
     }

    /**
     * Build a JSON POST object
     */
    public static function sanitizeForSerialization($postData) {
        foreach ($postData as $key => $value) {
            if (is_a($value, "DateTime")) {
                $postData->{$key} = $value->format(DateTime::ISO8601);
            }
        }
        return $postData;
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     * @param string $value a string which will be part of the path
     * @return string the serialized object
     */
    public static function toPathValue($value) {
        return rawurlencode($value);
    }

	/**
	 * Take camel-case param name and turn it into underscored
	 * param name to use with query
	 * @param string $value camel-cased param name
	 * @return string underscored param name
	 */
	public static function toQueryParameter($value) {
		return strtolower(preg_replace('/([a-z0-9])([A-Z])/', '$1_$2', $value));
	}

    /**
     * Just pass through the header value for now. Placeholder in case we
     * find out we need to do something with header values.
     * @param string $value a string which will be part of the header
     * @return string the header string
     */
    public static function toHeaderValue($value) {
        return $value;
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @param object $response_object object or primitive to be deserialized
     * @param string $class class name is passed as a string
     * @return object an instance of $class
     */
    public static function deserialize($response_object, $class, $container = null) {

        if (empty($response_object)) {
            return null;
        }

        if (self::isPrimitive($class)) {
            // extract primitive value
            return $response_object ->data;
        }

        if (!empty($container)) {
            // extract the first data array
            $sub_objects = array();
            foreach ($response_object as $property) {
                if (!is_array($property)) {
                    continue;
                }
                foreach ($property as $sub_object) {
                    $sub_objects[] = self::objectToInstance($sub_object, $class);
                }
                break;
            }
            return $sub_objects;
        }

        // extract the first data object
        $object = new stdClass;
        foreach ($response_object as $property => $value) {
            if (!is_object($value)) {
                continue;
            }
            $object = $value;
            break;
        }

        return self::objectToInstance($object, $class);
    }

    public static function objectToInstance($object, $class) {
        if (self::isPrimitive($class)) {
            return $object;
        }

        // instantiate our class
        $instance = new $class();

        // populate our instance with the values from $object
        foreach ($instance as $var => $v) {
            $param = self::toQueryParameter( $var );
            if (isset($object->{$param})) {
                $dataType = "string";
                if (isset( $instance::$dataTypes ) && ( array_key_exists( $var, $instance::$dataTypes ) ) ){
                    $dataType = $instance::$dataTypes[$var];
                }
                $dataValue = $object->{$param};
                if (self::isArrayOrMap($dataType)) {
                    $dataValueArray = array();
                    foreach ($dataValue as $item) {
                        if (is_object($item) && !property_exists($item, 'dataType')) {
                            $dataValueArray[] = $item;
                        } elseif ($item->dataType === "SINGLE_SELECT_LIST") {
                            $valueList = json_decode($item->value);
                            $dataValueArray[$item->fieldName] = !is_null($valueList) && count($valueList) > 0 ? $valueList[0] : NULL;
                        } elseif ($item->dataType === "MULTI_SELECT_LIST") {
                            $dataValueArray[$item->fieldName] = json_decode($item->value);
                        } else {
                            $dataValueArray[$item->fieldName] = $item->value;
                        }
                    }
                    $dataValue = $dataValueArray;
                } elseif (preg_match( "/^(.+)\[\]$/", $dataType, $match)) {
                    $dataValueArray = array();
                    foreach ($dataValue as $subObject) {
                        $dataValueArray[] = self::objectToInstance($subObject, $match[1]);
                    }
                    $dataValue = $dataValueArray;
                } elseif (!in_array( $dataType, array( "string", "bool", "int", "float", "double"))) {
                    $dataValue = self::objectToInstance( $dataValue, $dataType );
                }
                $instance->{$var} = $dataValue;
            }
        }

        return $instance;
    }

    private static function isArrayOrMap($dataType) {
        return $dataType === "map" || $dataType === "map[]" || $dataType === "array" || $dataType === "array[]";
    }

    private static function isPrimitive($class) {
        return in_array($class, array( "string", "bool", "int", "float", "double" ));
    }
}
