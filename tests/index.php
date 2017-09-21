<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$config = [
    'ePNAccount' => '080880',
    'RestrictKey' => 'yFqqXJh9Pqnugfr',
    'email' => 'mygmail@gmail.com',
];
$epn = new \Mountpoint\eProcessingNetwork\eProcessingNetwork($config);
$epn->setIsDevelopmentMode(true);

$newCard = new \Mountpoint\eProcessingNetwork\Card();
$newCard
    ->setCardNumber('4111111111111111')
    ->setExpMonth('02')
    ->setExpYear('18')
    ->setTotal(0.49)
    ->setAddress('Brighton Beach')
    ->setZip(12345)
    ->setCvv2(100)
;

$epn->setCard($newCard);

$request = new \Mountpoint\eProcessingNetwork\Request($epn);

echo $request->send();
