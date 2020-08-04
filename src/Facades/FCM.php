<?php

namespace LaravelFCM\Facades;

use Illuminate\Support\Facades\Facade;
use LaravelFCM\Message\AuthConfig;
use LaravelFCM\Message\Options;
use LaravelFCM\Message\PayloadData;
use LaravelFCM\Message\PayloadNotification;

/**
 * Class FCM
 * @package LaravelFCM\Facades
 * @method static sendTo($to, Options $options = null, PayloadNotification $notification = null, PayloadData $data = null, AuthConfig $authConfig = null)
 */
class FCM extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fcm.sender';
    }
}
