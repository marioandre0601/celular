<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function notes(){
            //met elocuente has many por que una categoria tiene muchas notas
        return $this->hasMany(Note::class);
    }
}
