<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public static function incomplete()
    {
        return static::where('completed', 0)->get();
    }

    public static function completed()
    {
        return static::where('completed', 1)->get();
    }
}
