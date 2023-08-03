<?php

require_once dirname(__FILE__).'/../../src/Tinypass.php';

class TPAccessTokenListTest extends PHPUnit_Framework_TestCase {

	public function testGetTokens() {
		$list = new TPAccessTokenList();
		$this->assertNotNull($list->getTokens());
		$this->assertEquals(0, count($list->getTokens()));
	}

	public function testContains() {
		$list = new TPAccessTokenList();

		$token = new TPAccessToken("someresource", 10000);
		$list->add($token);

		$token = new TPAccessToken("x", 10000);
		$list->add($token);

		$token = new TPAccessToken("y", 10000);
		$list->add($token);

		$this->assertTrue($list->contains("someresource"));
		$this->assertTrue($list->contains("x"));
		$this->assertTrue($list->contains("y"));
	}

}
?>
