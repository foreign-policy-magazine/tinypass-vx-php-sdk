<?php

require_once dirname(__FILE__).'/../src/Tinypass.php';
require_once dirname(__FILE__).'/ClientTestUtil.php';

class BasicCaseTest extends PHPUnit_Framework_TestCase {

	public function testCaseAccessDenied() {
		$store = new TPAccessTokenStore();
		$accessToken = $store->getAccessToken("rid");
		$this->assertEquals(false, $accessToken->isAccessGranted());
		$this->assertEquals(TPAccessState::RID_NOT_FOUND, $accessToken->getAccessState());
	}

	public function testCaseAccessGranted() {
		$token = new TPAccessToken("rid");
		$token->getTokenData()->addField(TPTokenData::EX, TPUtils::now() + 10);

		$store = ClientTestUtil::setupAccessTokenStore($token);

		print_r($store);

		$this->assertEquals(TPAccessState::ACCESS_GRANTED, $store->getAccessToken("rid")->getAccessState());
	}

	public function testSingleAccess() {
		$store = ClientTestUtil::setupAccessTokenStore(
						array( ClientTestUtil::createFakeToken("RID1", (time()*1000) + 30000)
		));

		$this->assertEquals(1, $store->getTokens()->size());
		$this->assertTrue($store->getTokens()->getAccessTokenByRID("RID1")->isAccessGranted());
	}

	public function testEarlyExpiration() {
		$now = time();
		$store = ClientTestUtil::setupAccessTokenStore(
						array( ClientTestUtil::createFakeToken("RID1", $now + 30, $now - 10))
		);

		$this->assertEquals(1, $store->getTokens()->size());
		$this->assertFalse($store->getTokens()->getAccessTokenByRID("RID1")->isAccessGranted());
	}

	public function testAllGranted() {
		$now = time();
		$store = ClientTestUtil::setupAccessTokenStore(
						array(
						ClientTestUtil::createFakeToken("RID1", $now + 30),
						ClientTestUtil::createFakeToken("RID2", $now + 30),
						ClientTestUtil::createFakeToken("RID3", $now + 30)
						)
		);
		$this->assertEquals(3, $store->getTokens()->size());
		$this->assertEquals(true, $store->getTokens()->getAccessTokenByRID("RID1")->isAccessGranted());
		$this->assertEquals(true, $store->getTokens()->getAccessTokenByRID("RID2")->isAccessGranted());
		$this->assertEquals(true, $store->getTokens()->getAccessTokenByRID("RID3")->isAccessGranted());
	}

	public function testAllDenied() {
		$now = time();
		$store = ClientTestUtil::setupAccessTokenStore(
						array(
						ClientTestUtil::createFakeToken("RID1", $now - 30),
						ClientTestUtil::createFakeToken("RID2", $now - 31),
						ClientTestUtil::createFakeToken("RID3", $now - 32)
						)
		);
		$this->assertEquals(3, $store->getTokens()->size());
		$this->assertEquals(false, $store->getTokens()->getAccessTokenByRID("RID1")->isAccessGranted());
		$this->assertEquals(false, $store->getTokens()->getAccessTokenByRID("RID2")->isAccessGranted());
		$this->assertEquals(false, $store->getTokens()->getAccessTokenByRID("RID3")->isAccessGranted());

	}

}
?>
