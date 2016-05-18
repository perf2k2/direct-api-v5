<?php

namespace perf2k2\direct;

use perf2k2\direct\api\params\BidsGetParams;
use perf2k2\direct\api\params\BidsSetParams;
use perf2k2\direct\http\Request;
use perf2k2\direct\http\Response;
use perf2k2\direct\dictionaries\Methods;
use perf2k2\direct\dictionaries\Services;

class Bids
{
    public static function get(Connector $connection, BidsGetParams $params): Response
    {
        return $connection->send(
            new Request($connection, Services::$Bids, Methods::$get, $params)
        );
    }

    public static function set(Connector $connection, BidsSetParams $params): Response
    {
        return $connection->send(
            new Request($connection, Services::$Bids, Methods::$set, $params)
        );
    }
}