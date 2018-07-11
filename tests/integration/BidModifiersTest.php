<?php

namespace direct\tests\integration;

use direct\api\entities\bidmodifiers\BidModifierAddItem;
use direct\api\entities\bidmodifiers\BidModifierSetItem;
use direct\api\entities\bidmodifiers\BidModifiersSelectionCriteria;
use direct\api\entities\bidmodifiers\BidModifierToggleItem;
use direct\api\entities\bidmodifiers\DemographicsAdjustmentAdd;
use direct\api\entities\bidmodifiers\MobileAdjustmentAdd;
use direct\api\entities\bidmodifiers\RegionalAdjustmentAdd;
use direct\api\entities\bidmodifiers\RetargetingAdjustmentAdd;
use direct\api\entities\bidmodifiers\VideoAdjustmentAdd;
use direct\api\entities\IdsCriteria;
use direct\api\enums\ad\AdFieldEnum;
use direct\api\enums\bidmodifiers\BidModifierTypeEnum;
use direct\api\enums\bidmodifiers\DemographicsAdjustmentFieldNames;
use direct\api\enums\bidmodifiers\MobileAdjustmentFieldNames;
use direct\api\enums\bidmodifiers\RetargetingAdjustmentFieldNames;
use direct\api\enums\YesNoEnum;
use direct\BidModifiers;
use direct\transport\Response;

class BidModifiersTest extends BaseTestCase {

    public function testAdd()
    {
        $method = BidModifiers::add()
            ->setBidModifiers([
                (new BidModifierAddItem())
                    ->setCampaignId(1)
                    ->setAdGroupId(2)
                    ->setDemographicsAdjustments([new DemographicsAdjustmentAdd(3)])
                    ->setMobileAdjustment(new MobileAdjustmentAdd(4))
                    ->setRegionalAdjustments([new RegionalAdjustmentAdd(5, 1)])
                    ->setRetargetingAdjustments([new RetargetingAdjustmentAdd(1, 1)])
                    ->setVideoAdjustment(new VideoAdjustmentAdd(2))
                    
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDelete()
    {
        $method = BidModifiers::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testGet()
    {
        $criteria = (new BidModifiersSelectionCriteria())
            ->setCampaignIds([1000]);

        $method = BidModifiers::get()
            ->setSelectionCriteria($criteria)
            ->setFieldNames([AdFieldEnum::Id, AdFieldEnum::State])
            ->setDemographicsAdjustmentFieldNames([
                DemographicsAdjustmentFieldNames::Age(),
            ])
            ->setMobileAdjustmentFieldNames([
                MobileAdjustmentFieldNames::BidModifier(),
            ])
            ->setRetargetingAdjustmentFieldNames([
                RetargetingAdjustmentFieldNames::Enabled(),
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testSet()
    {
        $method = BidModifiers::set()
            ->setBidModifiers([
                (new BidModifierSetItem())
                    ->setId(1)
                    ->setBidModifier(1)
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testToggle()
    {
        $method = BidModifiers::toggle()
            ->setBidModifierToggleItems([
                (new BidModifierToggleItem())
                    ->setAdGroupId(1)
                    ->setEnabled(YesNoEnum::YES)
                    ->setCampaignId(1)
                    ->setType(BidModifierTypeEnum::RETARGETING_ADJUSTMENT())
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}