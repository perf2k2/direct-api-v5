<?php

namespace perf2k2\direct\api;

abstract class UpdateMethod extends AbstractMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'update';
    }
}