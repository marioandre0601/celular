<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{             //fillable permite cargar columnas  
    protected $fillable = ['note'];
    
    //
    public function category(){
        //relacion elocuente belognsTo por que una nota pertenece a una categoria
        return $this->belongsTo(Category::class); //pasando como parametro el modelo relacionado
    }
    
}
