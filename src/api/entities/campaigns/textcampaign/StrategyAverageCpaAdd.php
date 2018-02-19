<?php

namespace api\entities\campaigns\textcampaign;

class StrategyAverageCpaAdd
{
    protected $AverageCpa;
    protected $GoalId;
    protected $WeeklySpendLimit;
    protected $BidCeiling;

    public function __construct(int $AverageCpa, int $GoalId)
    {
      $this->AverageCpa = $AverageCpa;
      $this->GoalId = $GoalId;
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
