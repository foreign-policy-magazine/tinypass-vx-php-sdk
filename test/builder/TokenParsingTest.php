<?php

require_once dirname(__FILE__).'/../../src/Tinypass.php';
require_once dirname(__FILE__).'/../ClientTestUtil.php';

class AccessTokenParsingTest extends PHPUnit_Framework_TestCase {


	public function testParseTokenBackAndForth() {

		$fields = array();
		$fields[TPTokenData::RID] = "RID123";
		$fields[TPTokenData::EX] =  100;
		$fields[TPTokenData::EARLY_EX] =  200;
		$fields[TPTokenData::CREATED_TIME] =  900;

		$token = new TPAccessToken();
		$token->getTokenData()->addFields($fields);

		$list = new TPAccessTokenList();
		$list->add($token);
		$rawOut = ClientTestUtil::buildRawTokenList($list);

		$newList = ClientTestUtil::parseAccessTokens($rawOut);

		$this->assertEquals(1, count($newList));

		
		$data = $newList->getAccessTokens();
		$newToken = array_pop($data);

		$this->assertEquals(1, $newList->size());

		$this->assertEquals(count($fields), count($newToken->getTokenData()->getValues()));
		foreach($fields as $f => $origValue){
			$this->assertEquals($origValue, $newToken->getTokenData()->getField($f));
		}

	}
}
?>