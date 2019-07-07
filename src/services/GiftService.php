<?php

namespace App\services;

class GiftService {
public $gifts = ['flowers', 'car', 'piano', 'money'];

public function __construct()
{
    shuffle($this->gifts);
}

}
