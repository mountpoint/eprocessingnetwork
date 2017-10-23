<?php

namespace Mountpoint\eProcessingNetwork;

use Mountpoint\Curl\Curl;

class Request
{
    /**
     * @var eProcessingNetwork
     */
    private $epn;

    /**
     * Request constructor.
     *
     * @param eProcessingNetwork $epn
     */
    public function __construct(eProcessingNetwork $epn)
    {
        $this->epn = $epn;
    }

    /**
     * Send request to ePN
     *
     * @return mixed
     * @throws \ErrorException
     */
    public function send()
    {
        $epnConfig = $this->epn->getConfig();
        $card = $this->epn->getCard();

        $postFields = [
            'ePNAccount' => $epnConfig['ePNAccount'],
            'RestrictKey' => $epnConfig['RestrictKey'],
            'CardNo' => $card->getCardNumber(),
            'ExpMonth' => $card->getExpMonth(),
            'ExpYear' => $card->getExpYear(),
            'Total' => $card->getTotal(),
            'Address' => $card->getAddress(),
            'Zip' => $card->getZip(),
            'CVV2Type' => $card->getCvv2type(),
            'CVV2' => $card->getCvv2(),
            'email' => $epnConfig['email'],
            'HTML' => 'No',
        ];

        $curl = new Curl($this->epn->getEndpoint());
        $curl
            ->addOption(CURLOPT_MAXREDIRS, 4)
            ->addOption(CURLOPT_FOLLOWLOCATION, true)
            ->addOption(CURLOPT_HEADER, 0)
            ->addOption(CURLOPT_RETURNTRANSFER, true)
            ->addOption(CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2)
            ->postFields($postFields)
            ->exec()
        ;

        return $curl->getOutput();
    }
}
