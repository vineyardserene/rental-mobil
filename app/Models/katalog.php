<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    use HasFactory;
    protected $table = 'katalog';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}