<?php

Tinypass::$PRIVATE_KEY = "thestringliteralisexactlyfortycharacters";
Tinypass::$AID = "AIDAIDAID0";
Tinypass::$SANDBOX = true;

class ClientTestUtil {

	const PRIVATE_KEY = "thestringliteralisexactlyfortycharacters";
	const AID = "AIDAIDAID0";
	const API_URL = "http://tinydev.com:8080/";

	public static function buildRawTokenList(TPAccessTokenList $list, $key = null, $settings = null) {
		if (!$key)
			$key = ClientTestUtil::PRIVATE_KEY;
		if (!$settings)
			$settings = TPClientBuilder::OPEN_ENC;

		$builder = new TPClientBuilder($key, $settings);

		return $builder->buildAccessTokens($list);
	}

	public static function parseAccessTokens($raw) {
		$list = new TPAccessTokenList();
		$parser = new TPClientParser();
		return $parser->parseAccessTokens($raw);
	}

	public static function createFakeToken($rid, $expireTime, $earlyExpiration = null, $uid = null, $createdTime = null) {
		$access = new TPAccessToken($rid, $expireTime);
		if ($earlyExpiration)
			$access->getTokenData()->addField(TPTokenData::EARLY_EX, TPTokenData::convertToEpochSeconds($earlyExpiration));
		if ($uid)
			$access->getTokenData()->addField(TPTokenData::UID, $uid);
		if ($createdTime)
			$access->getTokenData()->addField(TPTokenData::CREATED_TIME, $createdTime);
		return $access;
	}

	public static function createServerCookie(TPAccessTokenList $list) {
		$builder = new TPClientBuilder();
		return array('name' => self::getServerCookieName(), 'value' => $builder->buildAccessTokens($list));
	}

	public static function createLocalCookie(TPAccessTokenList $list) {
		$builder = new TPClientBuilder();
		return array('name' => self::getLocalCookieName(), 'value' => $builder->buildAccessTokens($list));
	}

	public static function getLocalCookieName() {
		return "__TP_" . self::AID . "_TR";
	}

	public static function getServerCookieName() {
		return "__TP_" . self::AID . "_TOKEN";
	}

	public static function setupAccessTokenStore($tokens = null) {

		$list = new TPAccessTokenList();

		if (!is_array($tokens)) {
			$tokens = array($tokens);
		}

		$list->addAll($tokens);

		$TOKEN = ClientTestUtil::createServerCookie($list);

		$store = new TPAccessTokenStore();
		$store->loadTokensFromCookie($TOKEN['name'] . "=" . $TOKEN['value']);

		return $store;
	}

}
