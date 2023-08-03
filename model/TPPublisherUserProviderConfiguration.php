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
 * The TPPublisherUserProviderConfiguration model.
 */
class TPPublisherUserProviderConfiguration {

    public static $dataTypes = array(
        "userProviderConfigurationId" => "string",
        "app" => "TPPublisherApp",
        "source" => "string",
        "title" => "string",
        "appId" => "string",
        "appName" => "string",
        "clientSecret" => "string",
        "clientId" => "string",
        "typeName" => "string",
        "resetPasswordClientId" => "string",
        "resetPasswordFlow" => "string",
        "resetPasswordFlowVersion" => "string",
        "resetPasswordLocale" => "string",
        "resetPasswordRedirectUri" => "string",
        "resetPasswordForm" => "string",
        "apiVersion" => "string",
        "endpoint" => "string",
        "apiKey" => "string",
        "apiSecret" => "string",
        "authKey" => "string",
        "siteCode" => "string",
        "resetPasswordTemplateName" => "string",
        "resetPasswordSender" => "string",
        "resetPasswordLogoUrl" => "string",
        "resetPasswordBrandName" => "string",
        "resetPasswordLoginUrl" => "string",
        "resetPasswordSiteBaseUrl" => "string",
        "resetPasswordPrivacyPolicyUrl" => "string",
        "resetPasswordUserAgreementUrl" => "string",
        "isDisabled" => "bool",
        "isEditable" => "bool",
        "secretKey" => "string",
        "userKey" => "string",
        "gigyaDatacenterUrl" => "string",
        "gigyaPasswordlessCaptchaEnabled" => "bool",
        "gigyaPasswordlessLoginOnGiftRedemptionEnabled" => "bool",
        "sharedSecret" => "string",
        "resetPasswordLandingPageUrl" => "string",
        "passwordlessMagicLinkUrl" => "string",
        "oauthClientSecret" => "string",
        "tokenExpirationTime" => "int",
        "passwordResetAndSignInLinkExpirationTimeInHours" => "int",
        "deploymentHost" => "string",
        "passwordMinimalLength" => "int",
        "passwordHasMixedCase" => "bool",
        "passwordHasAlphanumeric" => "bool",
        "passwordHasSpecialCharacters" => "bool",
        "passwordHasNoEmail" => "bool",
        "useCaptcha" => "bool",
        "captchaVersion" => "string",
        "captchaScreen" => "string",
        "captcha3SiteKey" => "string",
        "captcha3SecretKey" => "string",
        "resetPasswordCaptcha" => "bool",
        "authenticationAttemptsToShowCaptcha" => "int",
        "messageLoginFailed" => "string",
        "socialCallbackUrl" => "string",
        "socialSettings" => "string",
        "pianoIdMainSettings" => "string",
        "requireFirstAndLastNames" => "bool",
        "overrideSharedSecretForGlobalMode" => "bool",
        "disableCustomFieldsUserMining" => "bool",
        "disableCustomFieldsCounters" => "bool",
        "clientCustomFieldsValidation" => "bool",
        "extendExpiredAccessEnabled" => "bool",
        "passwordlessLoginEnabled" => "bool",
        "redirectUriWhitelist" => "array[]",
        "redirectUriWhitelistConfirmed" => "bool",
        "externalIdentityProviders" => "string",
        "customFields" => "map[]",
    );
    /**
     * @var string $userProviderConfigurationId  User provider configuration id
     */
    public $userProviderConfigurationId;
    /**
     * @var TPPublisherApp $app  The application ref
     */
    public $app;
    /**
     * @var string $source  User provider configuration source
     */
    public $source;
    /**
     * @var string $title  The title
     */
    public $title;
    /**
     * @var string $appId  Janrain app id
     */
    public $appId;
    /**
     * @var string $appName  Janrain app name as part of url to janrain api. It looks like https://[app-name].rpxnow.com
     */
    public $appName;
    /**
     * @var string $clientSecret  Janrain client secret key
     */
    public $clientSecret;
    /**
     * @var string $clientId  Janrain client id
     */
    public $clientId;
    /**
     * @var string $typeName  Janrain entity type
     */
    public $typeName;
    /**
     * @var string $resetPasswordClientId  Janrain client id for reset password. It should have login_client feature turned on
     */
    public $resetPasswordClientId;
    /**
     * @var string $resetPasswordFlow  Janrain flow for reset password
     */
    public $resetPasswordFlow;
    /**
     * @var string $resetPasswordFlowVersion  Janrain flow version for reset password
     */
    public $resetPasswordFlowVersion;
    /**
     * @var string $resetPasswordLocale  Janrain locale for reset password
     */
    public $resetPasswordLocale;
    /**
     * @var string $resetPasswordRedirectUri  Janrain redirect uri for reset password
     */
    public $resetPasswordRedirectUri;
    /**
     * @var string $resetPasswordForm  Janrain form for reset password
     */
    public $resetPasswordForm;
    /**
     * @var string $apiVersion  Janrain API version
     */
    public $apiVersion;
    /**
     * @var string $endpoint  Conde endpoint
     */
    public $endpoint;
    /**
     * @var string $apiKey  Gigya api key
     */
    public $apiKey;
    /**
     * @var string $apiSecret  Conde app secret
     */
    public $apiSecret;
    /**
     * @var string $authKey  Conde auth api key
     */
    public $authKey;
    /**
     * @var string $siteCode  Conde site code
     */
    public $siteCode;
    /**
     * @var string $resetPasswordTemplateName  Conde reset password template name
     */
    public $resetPasswordTemplateName;
    /**
     * @var string $resetPasswordSender  Conde reset Password Sender
     */
    public $resetPasswordSender;
    /**
     * @var string $resetPasswordLogoUrl  Conde reset Password Logo Url
     */
    public $resetPasswordLogoUrl;
    /**
     * @var string $resetPasswordBrandName  Conde reset Password Brand Name
     */
    public $resetPasswordBrandName;
    /**
     * @var string $resetPasswordLoginUrl  Conde reset password login url
     */
    public $resetPasswordLoginUrl;
    /**
     * @var string $resetPasswordSiteBaseUrl  Conde reset password site base url
     */
    public $resetPasswordSiteBaseUrl;
    /**
     * @var string $resetPasswordPrivacyPolicyUrl  Conde reset password privacy policy url
     */
    public $resetPasswordPrivacyPolicyUrl;
    /**
     * @var string $resetPasswordUserAgreementUrl  Conde reset password user agreement url
     */
    public $resetPasswordUserAgreementUrl;
    /**
     * @var bool $isDisabled  User provider configuration is disabled
     */
    public $isDisabled;
    /**
     * @var bool $isEditable  User provider configuration is editable
     */
    public $isEditable;
    /**
     * @var string $secretKey  Gigya secret key
     */
    public $secretKey;
    /**
     * @var string $userKey  Gigya user key
     */
    public $userKey;
    /**
     * @var string $gigyaDatacenterUrl  Gigya datacenter url
     */
    public $gigyaDatacenterUrl;
    /**
     * @var bool $gigyaPasswordlessCaptchaEnabled  Gigya passwordless form uses a captcha on registration
     */
    public $gigyaPasswordlessCaptchaEnabled;
    /**
     * @var bool $gigyaPasswordlessLoginOnGiftRedemptionEnabled  Show Gigya passwordless form on gift redemption
     */
    public $gigyaPasswordlessLoginOnGiftRedemptionEnabled;
    /**
     * @var string $sharedSecret  Piano ID shared secret
     */
    public $sharedSecret;
    /**
     * @var string $resetPasswordLandingPageUrl  Piano ID reset_password_landing_page_url
     */
    public $resetPasswordLandingPageUrl;
    /**
     * @var string $passwordlessMagicLinkUrl  Piano ID passwordless_magic_link_url
     */
    public $passwordlessMagicLinkUrl;
    /**
     * @var string $oauthClientSecret  Piano ID client secret for OAuth code to token exchange
     */
    public $oauthClientSecret;
    /**
     * @var int $tokenExpirationTime  Piano ID token expiration time in hours
     */
    public $tokenExpirationTime;
    /**
     * @var int $passwordResetAndSignInLinkExpirationTimeInHours  Piano ID reset password and sign in link expiration time in hours
     */
    public $passwordResetAndSignInLinkExpirationTimeInHours;
    /**
     * @var string $deploymentHost  Piano ID deployment host
     */
    public $deploymentHost;
    /**
     * @var int $passwordMinimalLength  PIANO ID password limitation: minimal length
     */
    public $passwordMinimalLength;
    /**
     * @var bool $passwordHasMixedCase  PIANO ID password limitation: has mixed case
     */
    public $passwordHasMixedCase;
    /**
     * @var bool $passwordHasAlphanumeric  PIANO ID password limitation: has alphanumeric
     */
    public $passwordHasAlphanumeric;
    /**
     * @var bool $passwordHasSpecialCharacters  PIANO ID password limitation: has special characters
     */
    public $passwordHasSpecialCharacters;
    /**
     * @var bool $passwordHasNoEmail  PIANO ID password limitation: has no email
     */
    public $passwordHasNoEmail;
    /**
     * @var bool $useCaptcha  Piano ID use captcha
     */
    public $useCaptcha;
    /**
     * @var string $captchaVersion  Piano ID captcha version
     */
    public $captchaVersion;
    /**
     * @var string $captchaScreen  Piano ID captcha screen
     */
    public $captchaScreen;
    /**
     * @var string $captcha3SiteKey  Piano ID publisher's captcha 3 site key
     */
    public $captcha3SiteKey;
    /**
     * @var string $captcha3SecretKey  Piano ID publisher's captcha 3 secret key
     */
    public $captcha3SecretKey;
    /**
     * @var bool $resetPasswordCaptcha  Piano ID enable captcha for reset password
     */
    public $resetPasswordCaptcha;
    /**
     * @var int $authenticationAttemptsToShowCaptcha  Piano ID Maximum Authentication Attempts Allowed
     */
    public $authenticationAttemptsToShowCaptcha;
    /**
     * @var string $messageLoginFailed  Piano ID login failed message
     */
    public $messageLoginFailed;
    /**
     * @var string $socialCallbackUrl  Piano ID social callback url
     */
    public $socialCallbackUrl;
    /**
     * @var string $socialSettings  Piano ID social settings
     */
    public $socialSettings;
    /**
     * @var string $pianoIdMainSettings  Piano ID main settings
     */
    public $pianoIdMainSettings;
    /**
     * @var bool $requireFirstAndLastNames  Piano ID require first and last names
     */
    public $requireFirstAndLastNames;
    /**
     * @var bool $overrideSharedSecretForGlobalMode  Piano ID override shared secret for global mode
     */
    public $overrideSharedSecretForGlobalMode;
    /**
     * @var bool $disableCustomFieldsUserMining  Piano ID disable custom fields user mining
     */
    public $disableCustomFieldsUserMining;
    /**
     * @var bool $disableCustomFieldsCounters  Piano ID disable custom fields counters
     */
    public $disableCustomFieldsCounters;
    /**
     * @var bool $clientCustomFieldsValidation  Piano ID client custom fields validation
     */
    public $clientCustomFieldsValidation;
    /**
     * @var bool $extendExpiredAccessEnabled  Piano ID extend expired access enabled
     */
    public $extendExpiredAccessEnabled;
    /**
     * @var bool $passwordlessLoginEnabled  Piano ID passwordless login form enabled
     */
    public $passwordlessLoginEnabled;
    /**
     * @var array[] $redirectUriWhitelist  
     */
    public $redirectUriWhitelist;
    /**
     * @var bool $redirectUriWhitelistConfirmed  Piano ID redirect uri whitelist is confirmed by publisher
     */
    public $redirectUriWhitelistConfirmed;
    /**
     * @var string $externalIdentityProviders  Piano ID Lite external identity provider settings
     */
    public $externalIdentityProviders;
    /**
     * @var map[] $customFields  
     */
    public $customFields;

}
