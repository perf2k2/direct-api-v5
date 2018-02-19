<?php

namespace api\entities\campaigns\textcampaign;

class TextCampaignSetting
{
    protected $Option;
    protected $Value;

    public function __construct($Option, $Value)
    {
      $this->Option = $Option;
      $this->Value = $Value;
    }

    public function setOption($Option)
    {
      $this->Option = $Option;
      return $this;
    }

    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
