<?php

require_once dirname(__FILE__).'/../../src/Tinypass.php';
require_once dirname(__FILE__).'/../ClientTestUtil.php';

class SecurityUtilTest extends PHPUnit_Framework_TestCase  {

	public function testHMac() {
		$key = "thestringliteralisexactlyfortycharacters";
		$this->assertEquals(TPSecurityUtils::hashHmacSha1($key, ""), "fZm01oktfDbsmVYoXPWZh7G12n8");
		$this->assertEquals(TPSecurityUtils::hashHmacSha1($key, "a"), "if4zkfMMDhkGQpGlXli7eNkcS_w");
		$this->assertEquals(TPSecurityUtils::hashHmacSha1($key, "tinypass"), "Bsdwyi7wfllB-ZVY2OmoAfLT4MU");
		$this->assertEquals(TPSecurityUtils::hashHmacSha1($key, "!@#$%^&*()_+{}|:<>?"), "qtNffYwvkBlNjO4UUTcBt8KwE1A");
		$this->assertEquals(TPSecurityUtils::hashHmacSha1($key, "кирилл"), "G4buKWjAkmTBKWPaSV7v2Os1X7I");
	}


}
?>