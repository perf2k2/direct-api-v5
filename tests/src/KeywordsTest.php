<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\keywords\KeywordsSelectionCriteria;
use perf2k2\direct\api\enums\keyword\KeywordFieldEnum;
use perf2k2\direct\http\Connection;

class KeywordsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    const KEYWORD_CAMPAIGN = 157730;
    const DEFAULT_KEYWORD = 3894749;
    
    public static function setUpBeforeClass()
    {
        self::$connection = new Connection(__DIR__ . '/../../', true);
    }

    public function testGet()
    {
        $response = Keywords::get()
            ->setSelectionCriteria((new KeywordsSelectionCriteria())
                ->setCampaignIds([self::KEYWORD_CAMPAIGN])
            )
            ->setFieldNames([KeywordFieldEnum::Id, KeywordFieldEnum::Keyword])
            ->sendRequest(self::$connection);

        $keywords = $response->getResult('Keywords');

        $this->assertEquals(self::DEFAULT_KEYWORD, $keywords[0]->Id);
    }
}
