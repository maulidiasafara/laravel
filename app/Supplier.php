<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'supplier';
    public $timestamps = false;
    //yang kedua atributnya
    protected $fillable = [
    'supplier_id',
    'supplier_name',
    'supplier_address'
    ];
}
