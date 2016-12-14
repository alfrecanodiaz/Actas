<div class="box-body">
    <p>

        <div class="form-group">
			<label for="semestre" class="form-check-label">Semestre:</label>
			<select class="form-control" id="semestre" name="semestre">
				<option value="Primavera" selected>Primavera</option>
				<option value="Otoño">Otoño</option>
				<option value="Verano">Verano</option>
			</select>
        </div>

        {!! Form::normalInput('year', 'Año', $errors) !!}

    </p>
</div>
