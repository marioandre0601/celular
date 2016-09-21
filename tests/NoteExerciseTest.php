<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;
class NoteExerciseTest extends TestCase
{   
    use DatabaseTransactions;
    public function tests_notes_summary_and_notes_details()
    {   $text = 'Begin of the note. Sit quas ipsa error consequatur consequatur. Explicabo nam dolore vel numquam dolor. Et autem possimus et ipsum et odit. Quis molestiae reprehenderit perspiciatis ab dolore. Debitis error laudantium sunt deleniti enim a.';
        $text .='End of the note';
        $note = Note::create(['note'=> $text]);
        $this->visit('notes')
                ->see('Begin of the note')
                ->seeInElement('.label','Others')
                ->dontSee('End of the note')
                ->seeLink('View note')
                ->click('View note')
                ->see($text);
    }
}
