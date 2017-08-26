<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = "transactions";

    protected $fillable = [
        'value',
        'Customer_id',
        'DebitCard_cardno'
    ];

    public function customer()
    {
        return $this->belongsTo('App\model\Customer','Customer_id');
    }

    public function debitCard(){
    	return $this->belongsTo('App\model\DebitCard','DebitCard_cardno');
    }
}
