<?php
namespace G42Cloud\SDK\Swr\V2\Region;

use G42Cloud\SDK\Core\Region\Region;
use InvalidArgumentException;

class SwrRegion {

    public static $REGION = array("https://swr-api.ae-ad-1.g42cloud.com"=>"ae-ad-1",);

    public static function valueOf($regionId)
    {
        try {
            if (null == $regionId) {
                throw new InvalidArgumentException("Unexpected empty parameter: regionId.");
            }
            $endpoint = array_search($regionId, self::$REGION);
            if (!$endpoint) {
                throw new InvalidArgumentException("Unexpected regionId: " . $regionId);
            }
            return new Region($regionId, $endpoint);
        } catch (InvalidArgumentException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
        }
    }
}