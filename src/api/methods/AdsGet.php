<?php

namespace direct\api\methods;

use direct\api\entities\ads\AdsSelectionCriteria;
use direct\api\GetMethod;


class AdsGet extends GetMethod
{
    protected $TextAdFieldNames = [];
    protected $MobileAppAdFieldNames = [];
    protected $DynamicTextAdFieldNames = [];

    public function setSelectionCriteria(AdsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }

    public function setTextAdFieldNames(array $TextAdFieldNames): self
    {
        $this->TextAdFieldNames = $TextAdFieldNames;
        return $this;
    }

    public function setMobileAppAdFieldNames(array $MobileAppAdFieldNames): self
    {
        $this->MobileAppAdFieldNames = $MobileAppAdFieldNames;
        return $this;
    }

    public function setDynamicTextAdFieldNames(array $DynamicTextAdFieldNames): self
    {
        $this->DynamicTextAdFieldNames = $DynamicTextAdFieldNames;
        return $this;
    }
}