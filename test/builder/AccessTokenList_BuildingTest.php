<?php

require_once dirname(__FILE__).'/../../src/Tinypass.php';
require_once dirname(__FILE__).'/../ClientTestUtil.php';

TinyPass::$PRIVATE_KEY = "thestringliteralisexactlyfortycharacters";
TinyPass::$AID = "AIDAIDAID0";

class AccessTokenList_BuildingTest extends PHPUnit_Framework_TestCase {


	public function testIPsAreParsedAndBuild() {
		$list = new TPAccessTokenList();
		$list->add(new TPAccessToken("RID1"));
		$list->add(new TPAccessToken("RID2"));

		$builder = new TPClientBuilder();
		$parser = new TPClientParser();

		$out = $builder->buildAccessTokens($list);
		$parsedTokenList = $parser->parseAccessTokens($out);

		foreach( $parsedTokenList->getTokens() as $token ) {
			$this->assertEquals($token->getTokenData()->getValues(), $list->getAccessTokenByRID($token->getRID())->getTokenData()->getValues());
		}
	}

	public function testNoIPsExists() {
		$list = new TPAccessTokenList();
		$list->add(new TPAccessToken("RID1"));
		$list->add(new TPAccessToken("RID2"));

		$builder = new TPClientBuilder();
		$parser = new TPClientParser();

		$out = $builder->buildAccessTokens($list);
		$parsedTokenList = $parser->parseAccessTokens($out);

		foreach( $parsedTokenList->getTokens() as $token ) {
			$this->assertEquals($token->getTokenData()->getValues(), $list->getAccessTokenByRID($token->getRID())->getTokenData()->getValues());
		}
	}


	public function testManyTokenBuildAndParsed() {
		$this->runTokens(10);
	}

	public function testOneTokenBuildAndParsed() {
		$this->runTokens(1);
	}

	public function runTokens($numTokens) {
		$tokenList = new TPAccessTokenList();
		$time = TPUtils::now() - 20;

		for ($i = 0; $i < $numTokens; $i++) {
			$RID = "RID" . $i;
			$token = ClientTestUtil::createFakeToken($RID, $time, $time + 10, "UID", 1100);
			$tokenList->add($token);
		}

		$builder = new TPClientBuilder(TPClientBuilder::OPEN_ENC);
		$parser = new TPClientParser();

		$output = $builder->buildAccessTokens($tokenList);

		$parsed = $parser->parseAccessTokens($output);

		foreach ($parsed->getTokens() as $token ) {
			$origToken = $tokenList->getAccessTokenByRID($token->getRID());
			$this->assertEquals($origToken->getRID(), $token->getRID());
			$this->assertEquals($origToken->getUID(), $token->getUID());
			$this->assertEquals($origToken->getTokenData()->getValues(), $token->getTokenData()->getValues());
			$this->assertEquals($origToken->getExpirationInSecs(), $token->getExpirationInSecs());
			$this->assertEquals($origToken->getCreatedTimeInSecs(), $token->getCreatedTimeInSecs());
		}
	}

	public function testBuildingParsingListOfTokenLists() {
		$list1 = array();
		$list2 = array();
		for ($i = 0; $i < 20; $i++) {
			$token1 = ClientTestUtil::createFakeToken("RID1-" . $i, TPUtils::now() + rand(0, 10000), TPUtils::now() + 100);
			array_push($list1, $token1);
			$token2 = ClientTestUtil::createFakeToken("RID2-" . $i, TPUtils::now() + rand(0, 10000), TPUtils::now() + 100);
			array_push($list2, $token2);
		}

	//no tokens has been thrown away (access token list has a limit of 20), but in this case we stupidly parse what's been given
		$str = ClientTestUtil::buildRawTokenList(new TPAccessTokenList($list1)) . ClientTestUtil::buildRawTokenList(new TPAccessTokenList($list2));

		$res = ClientTestUtil::parseAccessTokens($str);

		$this->assertEquals(count($list1) + count($list2), $res->size());
		$i = -1;
		foreach ($res->getTokens() as  $token ) {
			$orig = ++$i < 20 ? $list1[$i] : $list2[$i - 20];
			$this->assertEquals($orig->getRID(), $token->getRID());
			$this->assertEquals($orig->getExpirationInSecs(), $token->getExpirationInSecs());
			$this->assertEquals($orig->getEarlyExpirationInSecs(), $token->getEarlyExpirationInSecs());
		}
	}

	public function testBuildingParsingListOfTokenListsWithTheSameRIDs() {
		$list1 = array();
		$list2 = array();
		for ($i = 0; $i < 10; $i++) {
			$now = TPUtils::now();
			$token1 = ClientTestUtil::createFakeToken("RID" . $i, $now + 200, $now + 100, "UID" . $i);
			array_push($list1, $token1);
			$token2 = ClientTestUtil::createFakeToken("RID" . $i, $now + 200, $now + 100, "UID" . $i);
			array_push($list2, $token2);
		}

		$str = ClientTestUtil::buildRawTokenList(new TPAccessTokenList($list1)) .
						ClientTestUtil::buildRawTokenList(new TPAccessTokenList($list2));

		$res = ClientTestUtil::parseAccessTokens($str);
		$this->assertEquals(10, $res->size());
	}

	public function testBuildingParsingFullyLoaded20EncryptedTokensAsOneList() {
		$list = array();
		$now = TPUtils::now();
		for ($i = 0; $i < 20; $i++) {
			$token = ClientTestUtil::createFakeToken("RID" . $i, $now + 200, $now + 100, "UID" . $i);
			array_push($list, $token);
		}


		$str = ClientTestUtil::buildRawTokenList(new TPAccessTokenList($list));
		print_r("Size of the token: " . strlen($str));
		$res = ClientTestUtil::parseAccessTokens($str);

		$this->assertEquals(count($list), $res->size());
		$i = -1;
		foreach ( $res->getTokens() as $token) {
			$orig = $list[++$i];
			$this->assertEquals($orig->getUID(), $token->getUID());
			$this->assertEquals($orig->getRID(), $token->getRID());
			$this->assertEquals($orig->getExpirationInSecs(), $token->getExpirationInSecs());
		}
	}


}

?>