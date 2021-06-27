<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'address', 'tel', 'user_id'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'user_id'];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function products()
    {
        return $this->hasMany(\App\Models\StoreProducts::class);
    }
}
