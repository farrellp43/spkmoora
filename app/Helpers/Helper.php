<?php

namespace App\Helpers;

use App\Criteria;

class Helper
{
    public static function criteriaMenu()
    {
        $criterias = Criteria::all();
        return $criterias;
    }
}