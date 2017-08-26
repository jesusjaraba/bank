<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $table = "Customer";

    protected $fillable = [
        'name',
        'address',
        'dob',
        'cedula',
        'Bank_id'
    ];

    public function bank()
    {
        return $this->belongsTo('App\model\Bank','Bank_id');
    }

    public function transactions(){

        return $this->hasMany('App\model\Transaction');
    }

  public function debitCard(){

        return $this->hasOne('App\model\DebitCard');
    }

    public function accounts(){
        return $this->hasMany('App\model\Account');
    }
}
