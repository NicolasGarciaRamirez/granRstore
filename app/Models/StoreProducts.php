<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreProducts extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','price','details', 'store_id'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'store_id'];

    public function store()
    {
        return $this->belongsTo(\App\Models\Store::class);
    }
}
