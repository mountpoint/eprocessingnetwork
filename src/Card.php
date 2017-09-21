<?php

namespace Mountpoint\eProcessingNetwork;

class Card
{
    /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var string
     */
    private $expMonth;

    /**
     * @var string
     */
    private $expYear;

    /**
     * @var float
     */
    private $total;

    /**
     * @var string
     */
    private $address;

    /**
     * @var integer
     */
    private $zip;

    /**
     * @var integer
     */
    private $cvv2type = 1;

    /**
     * @var integer
     */
    private $cvv2;

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     *
     * @return $this
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpMonth()
    {
        return $this->expMonth;
    }

    /**
     * @param string $expMonth
     *
     * @return $this
     */
    public function setExpMonth($expMonth)
    {
        $this->expMonth = $expMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpYear()
    {
        return $this->expYear;
    }

    /**
     * @param string $expYear
     *
     * @return $this
     */
    public function setExpYear($expYear)
    {
        $this->expYear = $expYear;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = (float) $total;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return int
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param int $zip
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->zip = (int) $zip;

        return $this;
    }

    /**
     * @return int
     */
    public function getCvv2type()
    {
        return $this->cvv2type;
    }

    /**
     * @param int $cvv2type
     *
     * @return $this
     */
    public function setCvv2type($cvv2type)
    {
        $this->cvv2type = (int) $cvv2type;

        return $this;
    }

    /**
     * @return int
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }

    /**
     * @param int $cvv2
     *
     * @return $this
     */
    public function setCvv2($cvv2)
    {
        $this->cvv2 = (int) $cvv2;

        return $this;
    }
}
