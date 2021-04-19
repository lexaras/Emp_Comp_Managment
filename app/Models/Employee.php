<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //use HasFactory;
    public $fillable = ['name', 'email', 'phone', 'company_id'];
    public $timestamps = FALSE;

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

}
