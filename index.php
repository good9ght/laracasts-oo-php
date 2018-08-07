<?php

require "vendor/autoload.php";

use App\Users\Person;
use App\Staff;
use App\Business;

$victor = new Person("Victor");

$staff = new Staff([$victor]);

$business = new Business($staff);

$business->hire(new Person('Jane Doe'));

var_dump($staff);