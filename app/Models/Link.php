<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'long_url',
        'short',
        'alias',
        'expiration_date',
        'alive',
        'user_id',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
