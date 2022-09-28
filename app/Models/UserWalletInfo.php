<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWalletInfo extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'user_id',
        'wallet_account_id',
        'wallet_name',
        'wallet_amount',
        'transactions',
        'deposits',
        'withdrawals',
        'trades'
    ];

    /**
     * User info relation to user model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    // public static function findOrCreateUser($id)
    // {
    //     $obj = static::where( 'user_id'  ,'=' , $id)->first();
    //     return $obj ?: new static;
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
