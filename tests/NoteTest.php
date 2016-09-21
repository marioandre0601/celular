<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;
class NoteTest extends TestCase
{
    use DatabaseTransactions;
 public function test_notes_list()
    {   
         //Having  Teniendo(base de pruebas,condiciones)   
        //ORM de laravel 
         Note::create(['note'=> 'My first notes']);
         Note::create(['note'=> 'second note']);
        
         //When cuando (definimos las acciones del usuario)
        $this->visit('notes')
                
                //Then entonces(Agregamos las comprobacion)
                ->see('My first notes')
                ->see('Second note');
        
    }
    public function test_create_note(){
        
          $this->visit('notes')
                ->click('Add a note')
                ->seePageIs('notes/create')
                ->see('Create a note')
                ->type('A new note','note')
                ->press('Create note')
                ->seePageIs('notes')
               // ->see('A new note')
                ->seeInDatabase('notes',[
                    'note'=>'A new note'
                ]);
                
    }
    
}
