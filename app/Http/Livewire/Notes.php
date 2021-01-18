<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Notes extends Component
{

	/**
	 * @var string $notes - существующие заметки
	 */
	public $notes = [];

	/**
	 * @var string $new_note - текст по умолчанию для поля с новой заметкой
	 */
	public $new_note = '';

	public function mount()
	{
		$notes = DB::table('notes')->get();
		foreach ($notes as $note) {
			$this->notes[$note->note_id] = array(
				'note_id' => $note->note_id,
				'note_text' => $note->note_text,
			);
		}
	}

	public function updatedNotes()
	{
		// удаление старых данных
		DB::table('notes')->truncate();
		// сохранение новых данных
		DB::table('notes')->insert($this->notes);
	}

	public function render()
	{
		return view('livewire.notes');
	}

	public function addNote()
	{
		$note_id = array_key_last($this->notes) + 1; // id заметки
		$this->notes[$note_id] = array(
			'note_id' => $note_id,
			'note_text' => $this->new_note,
		);
		$this->new_note = '';
		$this->updatedNotes();
	}

	public function removeNote($note_key)
	{
		unset($this->notes[$note_key]);
		$this->updatedNotes();
	}

}
