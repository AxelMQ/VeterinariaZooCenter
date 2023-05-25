<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_personal';
    protected $table = 'personal';
    public $timestamps = false;
}
