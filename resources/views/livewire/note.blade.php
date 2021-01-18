<tr>
	<th>{{ $note_key + 1 }}</th>
	<td>
		<textarea wire:model="note_text" class="form-control"></textarea>
	</td>
	<td>
		<button wire:click="removeNote({{ $note_key }})" class="btn btn-sm btn-link">Удалить</button>
	</td>
</tr>