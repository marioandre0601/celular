<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('note');
            $table->timestamps();//created_at,update_at
        });
    }

    
    public function down()
    {
        Schema::drop('notes');
    }
}
