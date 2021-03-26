<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darasa extends Model
{
    protected $fillable=['name','code','fee'];

    public function student(){
        return $this->hasMany(Student::class);
    }
}
