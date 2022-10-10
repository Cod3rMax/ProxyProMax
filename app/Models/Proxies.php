<?php

namespace App\Models;


use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proxies extends Model
{
    use HasFactory;


    public function getCreatedAtAttribute($value){
        return $this->attributes['created_at'] = Carbon::parse($value)->diffForHumans();
    }


}
