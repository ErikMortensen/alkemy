<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\App;

class Price extends Model
{
    protected $fillable = [
        'app_id', 
        'price',
    ];

    public function app(){
        return $this->belongsTo(App::class);
    }
}
