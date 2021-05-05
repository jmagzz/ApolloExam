<?php

namespace App;

class random extends Model

{
    //Table Name
    protected $table = 'random';
    //Primary Key
    public $primaryKey = 'id';
    //Value
    public $string = 'values';
    //Flag
    


    public function breakdown(){
        return $this->hasMany('App\breakdown');
    }
}