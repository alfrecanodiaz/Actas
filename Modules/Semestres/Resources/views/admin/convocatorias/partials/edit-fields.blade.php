<div class="box-body">
    <p>

        <div class="form-group">
			<label for="convocatoria" class="form-check-label">Convocatoria:</label>
			<select class="form-control" id="convocatoria" name="convocatoria">

			@if ($convocatorias->temporada == 'Primavera')
				<option value="Primavera" selected>Primavera</option>
				<option value="Otoño">Otoño</option>
				<option value="Verano">Verano</option>
			@elseif ($convocatorias->temporada == 'Verano')
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

        {!! Form::normalInput('year', 'Año', $errors, $convocatorias) !!}

    </p>
</div>
