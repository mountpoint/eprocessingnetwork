<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
$config = require dirname(__DIR__) . '/src/config.php';

$epn = new \Mountpoint\eProcessingNetwork\eProcessingNetwork($config);
$epn->setIsDevelopmentMode($config['debug_mode']);

$newCard = new \Mountpoint\eProcessingNetwork\Card();
$newCard
    ->setCardNumber($config['card']['number'])
    ->setExpMonth($config['card']['exp_month'])
    ->setExpYear($config['card']['exp_year'])
    ->setTotal(0.01)
    ->setAddress('Brighton Beach')
    ->setZip(12345)
    ->setCvv2($config['card']['security_code'])
;

$epn->setCard($newCard);

$request = new \Mountpoint\eProcessingNetwork\Request($epn);

echo $request->send()->getResponse();
