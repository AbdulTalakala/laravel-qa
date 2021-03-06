<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Str;

class Question extends Model
{
    protected $fillable = ['title','body'];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function SetTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

}
