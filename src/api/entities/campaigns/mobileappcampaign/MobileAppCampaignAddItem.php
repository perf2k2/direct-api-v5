<?php

namespace perf2k2\direct\api\entities\campaigns\mobileappcampaign;

use perf2k2\direct\api\Entity;

class MobileAppCampaignAddItem extends Entity
{
    protected $BiddingStrategy;
    protected $Settings;

    public function __construct(MobileAppCampaignSetting $BiddingStrategy)
    {
      $this->BiddingStrategy = $BiddingStrategy;
    }
}
