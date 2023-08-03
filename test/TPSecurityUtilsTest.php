<?php

require_once dirname(__FILE__).'/../src/Tinypass.php';

class TPSecurityUtilsTest extends PHPUnit_Framework_TestCase {
	
	public function testBasicDecrypt() {
		$key = "thestringliteralisexactlyfortych";
		$text = "{\"aid\":\"MICMICMICX\",\"uid\":\"kjkxrNWUyD\",\"tokens\":[\"{\"ex\":1299043304,\"rid\":53530}\"],\"built\":1298957391760}";
		$encrypted = TPSecurityUtils::encrypt($key, $text);
		$decrypted = TPSecurityUtils::decrypt($key, $encrypted);
		$this->assertEquals($text, $decrypted);
	}

	public function testJavaValues() {
		$key = "thestringliteralisexactlyfortych";
		$text = "JavaIsSoFun";
		$encrypted = TPSecurityUtils::encrypt($key, $text);
		$this->assertEquals("V3IqZVBH2dQh4uxOMy9BAg~~~mB3lhC3FscKs7p18-N2vtvy6pSDsIyicy77lydm-UGk", $encrypted);
		$decrypted = TPSecurityUtils::decrypt($key, $encrypted);
	}

}
?>
