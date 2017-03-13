<?php

namespace perf2k2\direct\tests\src;

use perf2k2\direct\api\entities\bidmodifiers\BidModifierSetItem;
use perf2k2\direct\api\entities\bidmodifiers\BidModifiersSelectionCriteria;
use perf2k2\direct\api\entities\bidmodifiers\BidModifierToggleItem;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\ad\AdFieldEnum;
use perf2k2\direct\api\enums\bidmodifiers\BidModifierTypeEnum;
use perf2k2\direct\api\enums\bidmodifiers\DemographicsAdjustmentFieldNames;
use perf2k2\direct\api\enums\bidmodifiers\MobileAdjustmentFieldNames;
use perf2k2\direct\api\enums\bidmodifiers\RetargetingAdjustmentFieldNames;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\BidModifiers;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class BidModifiersTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testAdd()
    {
        $response = BidModifiers::add()
            ->setBidModifiers([])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testDelete()
    {
        $response = BidModifiers::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testGet()
    {
        $criteria = (new BidModifiersSelectionCriteria())
            ->setCampaignIds([1000]);

        $method = BidModifiers::get()
            ->setSelectionCriteria($criteria)
            ->setFieldNames([AdFieldEnum::Id, AdFieldEnum::State])
            ->setDemographicsAdjustmentFieldNames([
                DemographicsAdjustmentFieldNames::Age,
            ])
            ->setMobileAdjustmentFieldNames([
                MobileAdjustmentFieldNames::BidModifier,
            ])
            ->setRetargetingAdjustmentFieldNames([
                RetargetingAdjustmentFieldNames::Enabled,
            ]);


        $methodData = $method->getMethodData();

        $this->assertEquals([
            'Ids' =>  [],
            'CampaignIds' => [1000],
            'AdGroupIds' => [],
            'Types' => [],
            'Levels' => [],
        ], $criteria->jsonSerialize());

        $this->assertEquals([
            'SelectionCriteria' =>  $criteria,
            'FieldNames' => ['Id', 'State'],
            'DemographicsAdjustmentFieldNames' => ['Age'],
            'MobileAdjustmentFieldNames' => ['BidModifier'],
            'RetargetingAdjustmentFieldNames' => ['Enabled'],
            'Page' => new LimitOffset(),
        ], $methodData);

        $response = $method->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testSet()
    {
        $response = BidModifiers::set()
            ->setBidModifiers([
                (new BidModifierSetItem())
                    ->setId(1)
                    ->setBidModifier(1)
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testToggle()
    {
        $response = BidModifiers::toggle()
            ->setBidModifierToggleItems([
                (new BidModifierToggleItem())
                    ->setAdGroupId(1)
                    ->setEnabled(YesNoEnum::YES)
                    ->setCampaignId(1)
                    ->setType(BidModifierTypeEnum::RETARGETING_ADJUSTMENT)
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}