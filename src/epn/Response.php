<?php

namespace Mountpoint\eProcessingNetwork;

class Response
{
    /**
     * @var string
     */
    private $responseText;

    /**
     * @var bool
     */
    private $isApproved;

    /**
     * @var bool
     */
    private $isDeclined;

    /**
     * Response constructor.
     *
     * @param $responseText
     */
    public function __construct($responseText)
    {
        $this->responseText = $responseText;

        $this->parseResponse($responseText);
    }

    /**
     * @return bool
     */
    public function isApproved()
    {
        return $this->isApproved === true;
    }

    /**
     * @return bool
     */
    public function isDeclined()
    {
        return $this->isDeclined === true;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->responseText;
    }

    /**
     * @param $responseText
     */
    private function parseResponse($responseText)
    {
        $parts = explode(',', $responseText);

        $status = strtoupper(trim($parts[0], '"'));

        if (strpos($status, 'YAPPROVED') !== false) {
            $this->isApproved = true;
        } else {
            $this->isDeclined = true;
        }
    }
}
