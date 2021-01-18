<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Note extends Component
{
	public $note_key;
	public $note_text;

	public function mount($note_key, $note_text)
	{
		$this->note_key = $note_key;
		$this->note_text = $note_text;
	}

	public function render()
	{
		return view('livewire.note');
	}

	public function removeNote()
	{
		$this->note_text = 'deleted';
		$this->emitTo('Notes', 'removeNotes');
	}
}
