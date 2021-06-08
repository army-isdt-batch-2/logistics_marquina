<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use HasFactory;

    protected $table = "supplier";

    protected $fillable = [
        'name',
        'contact',
        'address',
        'contact_person',
        'category',
        'created_at',
        'updated_at'
        
    ];
}
