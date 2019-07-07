<?php

namespace App\services;

use Psr\Log\LoggerInterface;

class GiftService {
public $gifts = ['flowers', 'car', 'piano', 'money'];

public function __construct(LoggerInterface $logger)
{
    $logger->info('gifts were randomized');
    shuffle($this->gifts);
}

}
