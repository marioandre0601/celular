<?php
use App\Note;
use Illuminate\Database\Seeder;
use Iluminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {                       //crear cantidad 
       // Model::unguard();
        $this->call(CategoryTableSeeder::class);
        $this->call(NoteTableSeeder::class);
        //Model::reguard();
        
    }
}
