<?php

namespace Mountpoint\eProcessingNetwork;

class eProcessingNetwork
{
    /**
     * Production endpoint
     *
     * @var string
     */
    private $productionEndpoint = 'https://www.eprocessingnetwork.com/cgi-bin/tdbe/transact.pl';

    /**
     * Development endpoint
     *
     * @var string
     */
    private $developmentEndpoint = 'https://www.eprocessingnetwork.com/cgi-bin/Reflect/transact.pl';

    /**
     * @var bool
     */
    private $isDevelopmentMode;

    /**
     * @var array
     */
    private $config;

    /**
     * @var Card
     */
    private $card;

    /**
     * eProcessingNetwork constructor.
     *
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * @return bool
     */
    public function getIsDevelopmentMode()
    {
        return $this->isDevelopmentMode;
    }

    /**
     * @param $isDevelopmentMode
     *
     * @return $this
     */
    public function setIsDevelopmentMode($isDevelopmentMode)
    {
        $this->isDevelopmentMode = $isDevelopmentMode;

        return $this;
    }

    public function getEndpoint()
    {
        return $this->getIsDevelopmentMode() ? $this->developmentEndpoint : $this->productionEndpoint;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param array $config
     *
     * @return $this
     */
    public function setConfig(array $config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * @return Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param Card $card
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    public function __destruct()
    {

    }
}
