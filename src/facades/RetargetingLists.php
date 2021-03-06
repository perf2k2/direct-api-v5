<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\services\RetargetingListsService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\RetargetingListsAdd;
use perf2k2\direct\api\methods\RetargetingListsGet;
use perf2k2\direct\api\methods\RetargetingListsUpdate;

class RetargetingLists
{
    public static function add(): RetargetingListsAdd
    {
        return (new RetargetingListsService())->getAddMethod();
    }
    
    public static function update(): RetargetingListsUpdate
    {
        return (new RetargetingListsService())->getUpdateMethod();
    }

    public static function delete(): DeleteMethod
    {
        return (new RetargetingListsService())->getDeleteMethod();
    }

    public static function get(): RetargetingListsGet
    {
        return (new RetargetingListsService())->getGetMethod();
    }
}