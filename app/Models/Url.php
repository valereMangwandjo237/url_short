<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Url extends Model
{
    use HasFactory;

    protected $fillable = ["url", "shortened", "see_number", "last_see_time"];

    public static function generateCodeUnique()
    {
        $code =  Str::random(5);
        if (Url::where("shortened", $code)->first()) {
            return generateCodeUnique();
        }


        return $code;
    }
}
