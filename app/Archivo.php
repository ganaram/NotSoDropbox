<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function user()
    {
        $this->belongsTo(User::clas);
    }
}
