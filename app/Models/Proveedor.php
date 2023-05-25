<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    // use HasFactory;

    // protected $table = 'proveedor';


    use HasFactory;
    protected $primaryKey = 'id_proveedor';
    protected $table = 'proveedor';
    public $timestamps = false;


}
