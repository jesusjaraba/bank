<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DebitCard extends Model
{
     protected $table = "DebitCard";

    protected $fillable = [
        'cardno',
        'ownedby',
        'Customer_id',
        'Account_id',
        'Bank_id',
        'balance'
    ];

    public function banks()
    {
        return $this->belongsTo('App\model\Bank','Bank_id');
    }

    public function customers(){
return $this->belongsTo('App\model\Customers','Customer_id');
    }
}
