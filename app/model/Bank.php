<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
     protected $table = "Bank";

    protected $fillable = [
        'code',
        'address',
        'id'
    ];

    public function debitCard()
    {
        return $this->hasOne('App\model\DebitCard');
    }
}
