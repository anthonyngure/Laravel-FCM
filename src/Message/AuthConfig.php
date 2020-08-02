<?php


namespace LaravelFCM\Message;


class AuthConfig
{
    /**
     *
     * @var null|string
     */
    private $serverKey;

    /**
     *
     * @var null|string
     */
    private $senderId;

    /**
     * AuthConfig constructor.
     * @param string|null $serverKey
     * @param string|null $senderId
     */
    public function __construct($serverKey, $senderId)
    {
        $this->serverKey = $serverKey;
        $this->senderId = $senderId;
    }

    public function toArray()
    {
       return [
            'server_key' => $this->serverKey,
            'sender_id' => $this->senderId,
            'server_send_url' => 'https://fcm.googleapis.com/fcm/send',
            'server_group_url' => 'https://android.googleapis.com/gcm/notification',
            'timeout' => 30.0, // in second
        ];
    }


}
