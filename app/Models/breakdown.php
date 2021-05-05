<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class breakdown extends Model

{
    //Table Name
    protected $table = 'breakdown';
    //Primary Key
    public $primaryKey = 'id';
    //Value
    public $string = 'values';
    //Foreign Key
    public $foreignKey = 'random_id';

    public function random(){
        return $this->belongsTo('App\random');
    }
}