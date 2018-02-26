<?php

namespace api\entities\campaigns\mobileappcampaign;

use perf2k2\direct\api\Entity;

class StrategyAverageCpiAdd extends Entity
{
    protected $AverageCpi;
    protected $WeeklySpendLimit;
    protected $BidCeiling;

    public function __construct(int $AverageCpi)
    {
      $this->AverageCpi = $AverageCpi;
    }

    public function setWeeklySpendLimit(int $WeeklySpendLimit)
    {
      $this->WeeklySpendLimit = $WeeklySpendLimit;
      return $this;
    }

    public function setBidCeiling(int $BidCeiling)
    {
      $this->BidCeiling = $BidCeiling;
      return $this;
    }

}
