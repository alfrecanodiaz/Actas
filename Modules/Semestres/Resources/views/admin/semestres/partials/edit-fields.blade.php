<div class="box-body">
    <p>

        <div class="form-group">
			<label for="semestre" class="form-check-label">Semestre:</label>
			<select class="form-control" id="semestre" name="semestre">

			@if ($semestres->temporada == 'Primavera')
				<option value="Primavera" selected>Primavera</option>
				<option value="Otoño">Otoño</option>
				<option value="Verano">Verano</option>
			@elseif ($semestres->temporada == 'Verano')
				<option value="Primavera">Primavera</option>
				<option value="Otoño">Otoño</option>
				<option value="Verano" selected>Verano</option>

			@else
				<option value="Primavera">Primavera</option>
				<option value="Otoño" selected>Otoño</option>
				<option value="Verano">Verano</option>
			@endif
			</select>
        </div>

        {!! Form::normalInput('year', 'Año', $errors, $semestres) !!}

    </p>
</div>
