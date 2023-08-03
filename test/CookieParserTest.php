<?php
require_once dirname(__FILE__).'/../src/Tinypass.php';

class CookieParserTest extends PHPUnit_Framework_TestCase {

	public function testParsingValueOnly() {
		$this->assertEquals("hereismyvalue", TPCookieParser::extractCookieValue("badname", "hereismyvalue"));
		$this->assertEquals(null, TPCookieParser::extractCookieValue("badname", ""));
	}

	public function testCookieParsing() {

		$this->assertEquals(null, TPCookieParser::extractCookieValue("badname", "myname=hereismyvalue"));

		$this->assertEquals("hereismyvalue", TPCookieParser::extractCookieValue("myname", "myname=hereismyvalue"));

		$this->assertEquals("hereismyvalue", TPCookieParser::extractCookieValue("myname",
						"ug1=4f1f538c01acfc0aa514774fbab8a3e6; " .
						"s_vi=[CS]v1|278FA9C6851D0ED0[CE]; " .
						"myname=hereismyvalue; "));

		$this->assertEquals("hereismyvalue", TPCookieParser::extractCookieValue("myname",
						"myname=hereismyvalue; " .
						"s_ppv=21; " .
						"s_vi=[CS]v1|27A588E9051D1C66[CE]; "));

		$this->assertEquals("hereismyvalue", TPCookieParser::extractCookieValue("myname",
						"ug1=4f1f538c01acfc0aa514774fbab8a3e6; " .
						"s_vi=[CS]v1|278FA9C6851D0ED0[CE]; " .
						"myname=hereismyvalue; " .
						"s_ppv=21; " .
						"s_vi=[CS]v1|27A588E9051D1C66[CE]; "));

	}

}
?>
