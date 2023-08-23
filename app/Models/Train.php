<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getTime($time)
    {
        $timestamp = strtotime($time);

        $newTime = date("H:i", $timestamp);

        return $newTime;
    }
}
