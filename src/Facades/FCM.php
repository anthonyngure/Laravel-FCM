<?php

namespace LaravelFCM\Facades;

use Illuminate\Support\Facades\Facade;
use LaravelFCM\Message\AuthConfig;
use LaravelFCM\Message\Options;
use LaravelFCM\Message\PayloadData;
use LaravelFCM\Message\PayloadNotification;
use phpDocumentor\Reflection\Types\Null_;

/**
 * Class FCM
 * @package LaravelFCM\Facades
 * @method sendTo($to, Options $options = null, PayloadNotification $notification = null, PayloadData $data = null, AuthConfig $authConfig = null)
 */
class FCM extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fcm.sender';
    }
}
