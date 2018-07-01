<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Transaction extends Model
{
    protected $collection = 'transactions';
    protected $fillable = [
        'memo','trx_id','from','to','amount','type','status','trx_timestamp','created_at','updated_at',
    ];
}
