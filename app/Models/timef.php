<?php

namespace App\Models;

use CodeIgniter\CodeIgniter;
use CodeIgniter\Model;

class timef extends Model
{
    function timeago($tie)
    {
        $now = time();
        $your_date = strtotime($tie);
        $datediff = $now - $your_date;
        return round($datediff);
    }
}
