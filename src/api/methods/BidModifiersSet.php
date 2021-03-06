<?php

namespace perf2k2\direct\api\methods;


use perf2k2\direct\api\SetMethod;

class BidModifiersSet extends SetMethod
{
    protected $BidModifiers = [];

    public function setBidModifiers(array $BidModifiers): self
    {
        $this->BidModifiers = $BidModifiers;
        return $this;
    }
}