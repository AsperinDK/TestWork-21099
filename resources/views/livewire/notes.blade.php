<table class="table notes">
	<thead>
		<tr>
			<th class="fw-normal text-muted" style="width: 50px;">#</th>
			<th class="fw-normal text-muted">Текст заметки</th>
			<th class="fw-normal text-muted" style="width: 50px;">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($notes as $note)
			<tr>
				<th>{{ $note['note_id'] }}</th>
				<td>
					<textarea wire:model="notes.{{ $note['note_id'] }}.note_text" class="form-control"></textarea>
				</td>
				<td>
					<button wire:click="removeNote({{ $note['note_id'] }})" class="btn btn-sm btn-link">Удалить</button>
				</td>
			</tr>
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<th></th>
			<td>
				<textarea wire:model="new_note" class="form-control"></textarea>
			</td>
			<td>
				<button wire:click="addNote" class="btn btn-sm btn-link">Добавить</button>
			</td>
		</tr>
	</tfoot>
</table>