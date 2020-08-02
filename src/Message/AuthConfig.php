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

    /**
     * @return string|null
     */
    public function getServerKey()
    {
        return $this->serverKey;
    }

    /**
     * @return string|null
     */
    public function getSenderId()
    {
        return $this->senderId;
    }




}
