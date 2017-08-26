<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = "Account";

    protected $fillable = [
        'type',
        'owner',
        'Customer_id',
        'DebitCard_cardno',
        
    ];

    public function bank()
    {
        return $this->belongsTo('App\model\Bank','Bank_id');
    }

    public function customer(){
        return $this->belongsTo('App\model\Customer','Customer_id');
    }
}
