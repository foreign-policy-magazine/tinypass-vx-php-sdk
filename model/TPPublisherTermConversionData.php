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
 * The TPPublisherTermConversionData model.
 */
class TPPublisherTermConversionData {

    public static $dataTypes = array(
        "aid" => "string",
        "offerId" => "string",
        "termId" => "string",
        "offerTemplateId" => "string",
        "templateId" => "string",
        "uid" => "string",
        "userCountry" => "string",
        "userRegion" => "string",
        "userCity" => "string",
        "zip" => "string",
        "latitude" => "string",
        "longitude" => "string",
        "userAgent" => "string",
        "locale" => "string",
        "hour" => "string",
        "url" => "string",
        "browser" => "string",
        "platform" => "string",
        "operatingSystem" => "string",
        "tags" => "string",
        "contentCreated" => "string",
        "contentAuthor" => "string",
        "contentSection" => "string",
        "campaigns" => "array[]",
    );
    /**
     * @var string $aid  The application ID
     */
    public $aid;
    /**
     * @var string $offerId  The offer ID
     */
    public $offerId;
    /**
     * @var string $termId  The term ID
     */
    public $termId;
    /**
     * @var string $offerTemplateId  The template ID
     */
    public $offerTemplateId;
    /**
     * @var string $templateId  The template ID
     */
    public $templateId;
    /**
     * @var string $uid  The user ID
     */
    public $uid;
    /**
     * @var string $userCountry  The country of the user who converted the term
     */
    public $userCountry;
    /**
     * @var string $userRegion  The region of the user who converted the term
     */
    public $userRegion;
    /**
     * @var string $userCity  The city of the user who converted the term
     */
    public $userCity;
    /**
     * @var string $zip  The zip code of the user who converted the term
     */
    public $zip;
    /**
     * @var string $latitude  The latitude of the user's position
     */
    public $latitude;
    /**
     * @var string $longitude  The longitude of the user's position
     */
    public $longitude;
    /**
     * @var string $userAgent  The user agent of the user who converted the term
     */
    public $userAgent;
    /**
     * @var string $locale  The user's locale
     */
    public $locale;
    /**
     * @var string $hour  The hour of the term conversion
     */
    public $hour;
    /**
     * @var string $url  The URL of the page
     */
    public $url;
    /**
     * @var string $browser  The browser with which the conversion was made
     */
    public $browser;
    /**
     * @var string $platform  The platform with which the conversion was made
     */
    public $platform;
    /**
     * @var string $operatingSystem  The operating system with which the conversion was made
     */
    public $operatingSystem;
    /**
     * @var string $tags  The tags of the page
     */
    public $tags;
    /**
     * @var string $contentCreated  When the content was published
     */
    public $contentCreated;
    /**
     * @var string $contentAuthor  The author of the content
     */
    public $contentAuthor;
    /**
     * @var string $contentSection  The section for the content
     */
    public $contentSection;
    /**
     * @var array[] $campaigns  
     */
    public $campaigns;

}
