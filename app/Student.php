<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['name','adm_no','date_birth','parent_phone','email_address'];

    public function darasa(){
        return $this->belongsTo(Darasa::class);
    }
}
