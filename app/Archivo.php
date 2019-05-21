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

    public function getNameAttribute($name){
        if( !$name||starts_with($name, 'http')){
            return $name;    
        }
        return Storage::disk('public')->url($name);}
}
