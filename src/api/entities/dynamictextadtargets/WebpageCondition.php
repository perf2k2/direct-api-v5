<?php

namespace api\entities\dynamictextadtargets;

use perf2k2\direct\api\JsonSerializable;

class WebpageCondition extends JsonSerializable
{
    protected $Operand;
    protected $Operator;
    protected $Arguments;
    
    public function __construct(string $Operand, string $Operator, array $Arguments)
    {
        $this->Operand = $Operand;
        $this->Operator = $Operator;
        $this->Arguments = $Arguments;
    }
}