<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;
class NotesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use WithoutMiddleware;
    public function test_notes_list()
    {
        //Having
        Note::create(['note'=>'My first note']);
        Note::create(['note'=>'Second note']);
        //When
        $this->visit('notes')
            //Then
        ->see('My first note')
        ->see('Second note');
    }
    public function test_create_note()
    {
        //Route::post('notes')
        //when
        $this->post('notes')
            ->see('Created note');

    }
}
