<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Customers extends Model
{
    public function __construct(array $attributes = [])
    {
//        parent::__construct($attributes);
        DB::connection()->enableQueryLog();
    }

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
