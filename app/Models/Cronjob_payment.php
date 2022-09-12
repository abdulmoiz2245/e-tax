<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cronjob_payment extends Model
{
    use HasFactory;

    protected $table = 'cronjob_payment';

    public static function findPaymentOrCreate($id)
    {
        $obj = static::where('user_id' , '=' , $id)->first();
        return $obj ?: new static;
    }
}
