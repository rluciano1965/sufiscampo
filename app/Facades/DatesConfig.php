<?php

namespace App\DatesConfig;

use Carbon\Carbon;

class DatesConfig
{
    public function toUS($date)
    {
        return Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }

    public function toBR($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');
    }
}
