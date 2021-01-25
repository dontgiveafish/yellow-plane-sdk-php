<?php

namespace Dontgiveafish\YellowPlane;

use GuzzleHttp\Client as Guzzle;

class Client
{
    const ENDPOINT_MESSAGE_BROADCAST = '/message_broadcast';

    protected Guzzle $guzzle;
    protected string $cabinPath;
    protected string $defaultOrganization;

    public function __construct(Guzzle $guzzle, string $cabinPath, string $defaultOrganization)
    {
        $this->cabinPath = $cabinPath;
        $this->defaultOrganization = $defaultOrganization;
        $this->guzzle = $guzzle;
    }

    public function broadcast(string $message)
    {
        $this->guzzle->post($this->getBroadcastPath(), [
            'json' => [
                'team' => $this->defaultOrganization,
                'message' => $message,
            ],
        ]);
    }

    protected function getBroadcastPath(): string
    {
        return implode('/', [
            rtrim($this->cabinPath, '/'),
            self::ENDPOINT_MESSAGE_BROADCAST,
        ]);
    }
}
