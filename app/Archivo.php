<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Archivo extends Model
{
    protected $fillable = [
        'file', 'description','user_id','name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getNameAttribute($name){
        if( !$name||starts_with($name, 'http')){
            return $name;    
        }
        return Storage::disk('public')->url($name);}
}
