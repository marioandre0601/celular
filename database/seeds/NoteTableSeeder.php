<?php

use Illuminate\Database\Seeder;
use App\Note;
use App\Category;

class NoteTableSeeder extends Seeder {

    public function run() {
        $categories = Category::all();
        $notes = factory(Note::class)->times(100)->make();
        foreach ($notes as $note) {
           // $category = $categories->random();
            //$category->notes()->save($note);
            //$note->category_id = $category->id
          $categories->random()->notes()->save($note);
        }
        
      
     }

}
