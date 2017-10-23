<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
$config = require dirname(__DIR__) . '/src/config.php';

$epnConfig = [
    'ePNAccount' => $config['ePNAccount'],
    'RestrictKey' => $config['RestrictKey'],
    'email' => $config['email'],
];
$epn = new \Mountpoint\eProcessingNetwork\eProcessingNetwork($epnConfig);
$epn->setIsDevelopmentMode(true);

$newCard = new \Mountpoint\eProcessingNetwork\Card();
$newCard
    ->setCardNumber($config['card']['number'])
    ->setExpMonth($config['card']['exp_month'])
    ->setExpYear($config['card']['exp_year'])
    ->setTotal(0.49)
    ->setAddress('Brighton Beach')
    ->setZip(12345)
    ->setCvv2($config['card']['security_code'])
;

$epn->setCard($newCard);

$request = new \Mountpoint\eProcessingNetwork\Request($epn);

echo $request->send();
