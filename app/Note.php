<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    
    protected $fillable=['body'];
    
    public function card(){
        return $this->belongsTo(Card::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
//        return $this->belongsToMany(Tag::class,'table_name','column1','column2');
//        return $this->belongsToMany(Note::class)->withTimestamps();/if U use timestamps in pivot table
    }
}
