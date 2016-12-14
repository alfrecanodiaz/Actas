<div class="box-body">
    <p>

        <div class="form-group">
			<label for="convocatoria" class="form-check-label">Convocatoria:</label>
			<select class="form-control" id="convocatoria" name="convocatoria">
				<option value="Primavera" selected>Primavera</option>
				<option value="Otoño">Otoño</option>
				<option value="Verano">Verano</option>
			</select>
        </div>

        {!! Form::normalInput('year', 'Año', $errors) !!}

    </p>
</div>
