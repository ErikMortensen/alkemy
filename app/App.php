<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Price;

class App extends Model
{
    protected $fillable = [
        'name', 'category', 'developer_id', 'description', 'size', 'downloads', 'rated'
    ];

    public function prices(){
        return $this->hasMany(Price::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
