<?php

require_once dirname(__FILE__).'/../../src/Tinypass.php';
require_once dirname(__FILE__).'/../ClientTestUtil.php';

class TPAccessTokenStoreTest extends PHPUnit_Framework_TestCase {

	public function testGetToken() {
		$store = new TPAccessTokenStore();
		$token = $store->getAccessToken(null);

		$this->assertNotNull($token);
	}

	public function testGetUID() {
		$store = new TPAccessTokenStore();
		$this->assertNull($store->getUID());
		$store = ClientTestUtil::setupAccessTokenStore(array(ClientTestUtil::createFakeToken("RID1", 4000, 4000, "user1")));
		$this->assertEquals("user1", $store->getUID());
	}

}

?>
